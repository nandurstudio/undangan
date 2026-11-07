import "dotenv/config";

import { PrismaPg } from "@prisma/adapter-pg";

import { PrismaClient } from "../lib/generated/prisma/client";

const connectionString = process.env.DATABASE_URL;

if (!connectionString) {
  throw new Error("DATABASE_URL belum di-set.");
}

const adapter = new PrismaPg({ connectionString });
const prisma = new PrismaClient({ adapter });

async function main() {
  const event = await prisma.event.upsert({
    where: { slug: "contoh-2026" },
    update: {},
    create: {
      slug: "contoh-2026",
      title: "Contoh Undangan Digital",
      subtitle: "Ganti data ini dari dashboard admin",
      hostNames: "Nandur Studio",
      eventDate: new Date("2026-12-31T10:00:00+07:00"),
      venue: "Jakarta",
      address: "Jakarta, Indonesia",
      quote: "Selamat datang di undangan digital.",
      sessions: {
        create: [
          { name: "Sesi 1", quota: 100 },
          { name: "Sesi 2", quota: 100 },
        ],
      },
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
