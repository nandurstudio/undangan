# Undangan Digital

Aplikasi undangan digital — bagian dari Nandur Studio. Menggantikan aplikasi PHP lama dengan stack modern.

## Stack

| Lapisan | Teknologi |
|---|---|
| Framework | Next.js 16 (App Router) + React 19 |
| Bahasa | TypeScript (strict) |
| Styling | Tailwind CSS 4 |
| Database | PostgreSQL |
| ORM | Prisma 7 (`prisma-client` + driver adapter `pg`) |
| Auth admin | Google (via Hallo SPTP), session cookie server-side |
| Deploy | GitHub Actions → PM2 → Nginx |

## Prasyarat

- Node.js 20.19+ (disarankan 22/24)
- PostgreSQL 17+ (lokal) / 18 (VPS)
- Tidak perlu Laragon, PHP, Apache, atau MySQL/MariaDB

## Setup lokal

```bash
# 1. Install dependency
npm install

# 2. Siapkan environment
copy .env.example .env
# sesuaikan DATABASE_URL

# 3. Generate Prisma Client
npm run db:generate

# 4. Jalankan migrasi
npm run db:migrate

# 5. Seed data contoh (opsional)
npm run db:seed

# 6. Jalankan dev server
npm run dev
```

Dev server berjalan di <http://localhost:3002>.

## Script

| Script | Fungsi |
|---|---|
| `npm run dev` | Dev server port 3002 |
| `npm run build` | Build produksi (`standalone`) |
| `npm run start` | Jalankan hasil build |
| `npm run lint` | ESLint |
| `npm run typecheck` | TypeScript tanpa emit |
| `npm run db:generate` | Generate Prisma Client |
| `npm run db:migrate` | Migrasi development |
| `npm run db:deploy` | Migrasi produksi |
| `npm run db:seed` | Seed data contoh |
| `npm run db:studio` | Prisma Studio |

## Struktur

```
app/                 Route & halaman (App Router)
components/          Komponen UI
lib/                 Helper (prisma, env, utils)
prisma/              Schema, migrasi, seed
docs/                Dokumen acuan
public/              Aset statis
```

## Strategi branch

| Branch | Isi |
|---|---|
| `prod` | Aplikasi PHP lama (production saat ini, dibekukan) |
| `v2` | Rewrite Next.js (kerja utama) |
| `master` | Arsip lama, tidak dipakai |

Setelah go-live, `v2` di-merge ke `prod` dan diberi tag `v2.0.0`.

## Dokumen acuan

Lihat [`docs/ANALISA_UNDANGAN_DAN_VPS.md`](docs/ANALISA_UNDANGAN_DAN_VPS.md) untuk analisa lengkap, keputusan, dan rencana migrasi.
