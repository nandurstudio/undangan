import { prisma } from "@/lib/prisma";

export async function getInvitationByToken(token: string) {
  return prisma.guest.findUnique({
    where: { token },
    include: {
      event: {
        include: {
          venues: { orderBy: { sortOrder: "asc" } },
        },
      },
      session: true,
      rsvp: true,
      checkIns: { orderBy: { checkedInAt: "desc" }, take: 1 },
    },
  });
}

export async function getGuestbook(eventId: string) {
  return prisma.rsvp.findMany({
    where: {
      guest: { eventId },
      wish: { not: null },
    },
    orderBy: { updatedAt: "desc" },
    take: 50,
    include: {
      guest: {
        select: { name: true, department: true },
      },
    },
  });
}

export async function getLiveStats(eventId: string) {
  const [attending, guestSum, checkInSum, totalInvited] = await Promise.all([
    prisma.rsvp.count({
      where: { guest: { eventId }, attendance: "HADIR" },
    }),
    prisma.rsvp.aggregate({
      where: { guest: { eventId }, attendance: "HADIR" },
      _sum: { guestCount: true },
    }),
    prisma.checkIn.aggregate({
      where: { guest: { eventId } },
      _sum: { guestCount: true },
    }),
    prisma.guest.count({ where: { eventId } }),
  ]);

  return {
    totalInvited,
    attendingResponses: attending,
    estimatedGuests: guestSum._sum.guestCount ?? 0,
    checkedInGuests: checkInSum._sum.guestCount ?? 0,
  };
}

export const attendanceLabel: Record<string, string> = {
  HADIR: "Akan Hadir",
  TIDAK_HADIR: "Tidak Bisa Hadir",
  DIWAKILKAN: "Diwakilkan",
  MENUNGGU: "Belum Konfirmasi",
};

export const attendanceClass: Record<string, string> = {
  HADIR: "bg-leaf/15 text-leaf",
  TIDAK_HADIR: "bg-red-ink/10 text-red-ink",
  DIWAKILKAN: "bg-gold/15 text-gold-ink",
  MENUNGGU: "bg-black/5 text-muted",
};
