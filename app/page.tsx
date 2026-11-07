import { cn } from "@/lib/utils";

const foundations = [
  "Next.js 16 App Router + React 19",
  "TypeScript strict + Tailwind CSS 4",
  "Prisma 7 + PostgreSQL",
  "Struktur siap untuk RSVP, guestbook, live count, dan QR check-in",
];

export default function Home() {
  return (
    <main className="relative flex flex-1 items-center justify-center overflow-hidden px-6 py-16">
      <div
        aria-hidden
        className="pointer-events-none absolute -top-32 -right-24 h-80 w-80 rounded-full bg-brand-soft blur-3xl"
      />
      <div
        aria-hidden
        className="pointer-events-none absolute -bottom-40 -left-24 h-96 w-96 rounded-full bg-gold-soft blur-3xl"
      />

      <section className="relative w-full max-w-2xl animate-fade-up rounded-card border border-black/5 bg-paper/90 p-8 shadow-xl shadow-brand/5 backdrop-blur sm:p-12">
        <p className="text-xs font-semibold uppercase tracking-[0.3em] text-brand">
          Nandur Studio
        </p>

        <h1 className="mt-4 font-display text-4xl leading-tight text-ink sm:text-5xl">
          Undangan Digital
        </h1>

        <p className="mt-4 max-w-xl text-sm leading-relaxed text-muted sm:text-base">
          Fondasi aplikasi baru sudah berdiri. Halaman undangan, RSVP, buku
          tamu, live guest count, dan check-in QR akan dibangun di atas basis
          ini.
        </p>

        <ul className="mt-8 space-y-3">
          {foundations.map((item) => (
            <li key={item} className="flex items-start gap-3 text-sm text-ink">
              <span
                aria-hidden
                className="mt-1 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-leaf/15 text-[11px] font-bold text-leaf"
              >
                ✓
              </span>
              <span className={cn("leading-relaxed")}>{item}</span>
            </li>
          ))}
        </ul>

        <div className="mt-10 flex flex-wrap items-center gap-3 border-t border-black/5 pt-6 text-xs text-muted">
          <span className="rounded-full bg-cream px-3 py-1 font-medium">
            branch: v2
          </span>
          <span className="rounded-full bg-cream px-3 py-1 font-medium">
            port lokal: 3002
          </span>
        </div>
      </section>
    </main>
  );
}
