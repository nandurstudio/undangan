import { NextResponse } from "next/server";
import { z } from "zod";

import { prisma } from "@/lib/prisma";

const rsvpSchema = z.object({
  token: z.string().min(1).max(64),
  attendance: z.enum(["MENUNGGU", "HADIR", "TIDAK_HADIR", "DIWAKILKAN"]),
  guestCount: z.coerce.number().int().min(0).max(20).default(1),
  wish: z.string().trim().min(1, "Komentar wajib diisi.").max(1000),
  delegateNik: z.string().trim().max(10).optional().default(""),
});

export async function POST(request: Request) {
  try {
    const parsed = rsvpSchema.safeParse(await request.json());

    if (!parsed.success) {
      return NextResponse.json(
        {
          ok: false,
          error: parsed.error.issues[0]?.message ?? "Data tidak valid.",
        },
        { status: 400 },
      );
    }

    const { token, attendance, guestCount, wish, delegateNik } = parsed.data;

    const guest = await prisma.guest.findUnique({
      where: { token },
      select: { id: true },
    });

    if (!guest) {
      return NextResponse.json(
        { ok: false, error: "Undangan tidak ditemukan." },
        { status: 404 },
      );
    }

    if (attendance === "HADIR" && guestCount < 1) {
      return NextResponse.json(
        { ok: false, error: "Jumlah tamu minimal 1 orang." },
        { status: 400 },
      );
    }

    if (attendance === "DIWAKILKAN") {
      if (!delegateNik) {
        return NextResponse.json(
          { ok: false, error: "NIK perwakilan wajib diisi." },
          { status: 400 },
        );
      }

      const used = await prisma.rsvp.findFirst({
        where: {
          delegateNik,
          attendance: "DIWAKILKAN",
          guestId: { not: guest.id },
        },
        select: { id: true },
      });

      if (used) {
        return NextResponse.json(
          {
            ok: false,
            error: `NIK ${delegateNik} sudah dipakai perwakilan lain.`,
          },
          { status: 409 },
        );
      }
    }

    const data = {
      attendance,
      guestCount: attendance === "HADIR" ? guestCount : 0,
      wish,
      delegateNik: attendance === "DIWAKILKAN" ? delegateNik : null,
    };

    await prisma.rsvp.upsert({
      where: { guestId: guest.id },
      update: data,
      create: { guestId: guest.id, ...data },
    });

    return NextResponse.json({ ok: true });
  } catch (error) {
    console.error("[api/rsvp]", error);
    return NextResponse.json(
      { ok: false, error: "Terjadi kesalahan pada server." },
      { status: 500 },
    );
  }
}
