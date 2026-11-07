import "dotenv/config";

import { PrismaPg } from "@prisma/adapter-pg";

import { PrismaClient } from "../lib/generated/prisma/client";

const connectionString = process.env.DATABASE_URL;

if (!connectionString) {
  throw new Error("DATABASE_URL belum di-set.");
}

const adapter = new PrismaPg({ connectionString });
const prisma = new PrismaClient({ adapter });

const eventData = {
  title: "Rapat Anggota Tahunan",
  subtitle: "Periode Tahun Buku 2025",
  hostNames: "Nandur Studio",
  eventDate: new Date("2026-03-10T13:10:00+07:00"),
  venue: "MNF Cikampek",
  address:
    "PT. Sanghiang Perkasa - Kalbe Nutritionals, Kawasan Industri Indotaisei, Kalihurip, Kec. Cikampek, Karawang, Jawa Barat 41373",
  mapsUrl: "https://maps.app.goo.gl/3wuVHxG1jPgWjUjt9",
  quote:
    "Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri acara kami.",
};

const venues = [
  {
    name: "MNF Cikampek - KNLC LT. 3",
    address:
      "PT. Sanghiang Perkasa - Kalbe Nutritionals, Kawasan Industri Indotaisei, Kalihurip, Kec. Cikampek, Karawang, Jawa Barat 41373",
    mapsUrl: "https://maps.app.goo.gl/3wuVHxG1jPgWjUjt9",
    embedUrl:
      "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15859.357860273401!2d107.4120537!3d-6.4146679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e697313a5df4371%3A0x7b098758ed16c78f!2sPT.%20Sanghiang%20Perkasa%20-%20Kalbe%20Nutritionals!5e0!3m2!1sen!2sid!4v1696298434771!5m2!1sen!2sid",
    sortOrder: 1,
  },
  {
    name: "IDC Cakung - Proximity Room",
    address:
      "Innovation and Development Center PT. Sanghiang Perkasa, Jl. Raya Bekasi Km 25, Cakung Tim., Kec. Cakung, Kota Jakarta Timur, DKI Jakarta 13910",
    mapsUrl: "https://maps.app.goo.gl/UAwWRzrS4Wr2CMhi7",
    embedUrl:
      "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4880.761365044575!2d106.9509280758678!3d-6.185984660611432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b1067e1b7ab%3A0xcdda5d4c766c0af0!2sInnovation%20and%20Development%20Center%20PT.%20Sanghiang%20Perkasa!5e1!3m2!1sen!2sid!4v1741063595674!5m2!1sen!2sid",
    sortOrder: 2,
  },
];

async function main() {
  const event = await prisma.event.upsert({
    where: { slug: "contoh-2026" },
    update: eventData,
    create: { slug: "contoh-2026", ...eventData },
  });

  for (const name of ["Sesi 1", "Sesi 2"]) {
    await prisma.session.upsert({
      where: { eventId_name: { eventId: event.id, name } },
      update: {},
      create: { eventId: event.id, name, quota: 100 },
    });
  }

  await prisma.venue.deleteMany({ where: { eventId: event.id } });
  await prisma.venue.createMany({
    data: venues.map((venue) => ({ ...venue, eventId: event.id })),
  });

  const session = await prisma.session.findFirst({
    where: { eventId: event.id },
    orderBy: { name: "asc" },
  });

  await prisma.guest.upsert({
    where: { token: "demo" },
    update: {
      eventId: event.id,
      sessionId: session?.id,
      name: "Bapak/Ibu Tamu Undangan",
      department: "Contoh Departemen",
      invitedCount: 2,
    },
    create: {
      eventId: event.id,
      sessionId: session?.id,
      token: "demo",
      name: "Bapak/Ibu Tamu Undangan",
      department: "Contoh Departemen",
      invitedCount: 2,
    },
  });

  console.log(`Seed selesai: event "${event.title}" (${event.slug})`);
}

main()
  .catch((error) => {
    console.error(error);
    process.exitCode = 1;
  })
  .finally(async () => {
    await prisma.$disconnect();
  });
