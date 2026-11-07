import type { Metadata } from "next";
import Image from "next/image";
import { notFound } from "next/navigation";
import { cache } from "react";

import Countdown from "@/components/invitation/Countdown";
import InvitationShell from "@/components/invitation/InvitationShell";
import RsvpForm from "@/components/invitation/RsvpForm";
import Section, {
  Paper,
  SectionTitle,
} from "@/components/invitation/Section";
import {
  attendanceClass,
  attendanceLabel,
  getGuestbook,
  getInvitationByToken,
  getLiveStats,
} from "@/lib/invitation";
import { qrDataUrl } from "@/lib/qr";
import { formatDateId } from "@/lib/utils";

export const dynamic = "force-dynamic";

type PageParams = { params: Promise<{ token: string }> };

const getGuest = cache(getInvitationByToken);

function bigDate(date: Date) {
  const parts = new Intl.DateTimeFormat("en-GB", {
    day: "2-digit",
    month: "short",
    year: "2-digit",
    timeZone: "Asia/Jakarta",
  }).formatToParts(date);

  const get = (type: string) =>
    parts.find((part) => part.type === type)?.value ?? "";

  return `${get("day")}.${get("month").toUpperCase()}.${get("year")}`;
}

function calendarUrl(input: {
  title: string;
  subtitle: string | null;
  quote: string | null;
  address: string | null;
  eventDate: Date;
}) {
  const start = input.eventDate;
  const end = new Date(start.getTime() + 3 * 60 * 60 * 1000);
  const stamp = (date: Date) =>
    date.toISOString().replace(/[-:]/g, "").split(".")[0] + "Z";

  const params = new URLSearchParams({
    action: "TEMPLATE",
    text: [input.title, input.subtitle].filter(Boolean).join(" "),
    dates: `${stamp(start)}/${stamp(end)}`,
    ctz: "Asia/Jakarta",
    details: input.quote ?? "",
    location: input.address ?? "",
  });

  return `https://calendar.google.com/calendar/render?${params.toString()}`;
}

function shortDate(date: Date) {
  return new Intl.DateTimeFormat("id-ID", {
    dateStyle: "medium",
    timeStyle: "short",
    timeZone: "Asia/Jakarta",
  }).format(date);
}

const protocolItems = [
  {
    image: "/media/protocol/tumbler.png",
    text: "Wajib membawa tumbler untuk yang sedang tidak berpuasa",
  },
  {
    image: "/media/protocol/team.png",
    text: "Gunakan dresscode sesuai ketentuan berupa monokrom (hitam-putih)",
  },
  {
    image: "/media/protocol/voucher.png",
    text: "Siapkan tiket virtual ini sebagai akses masuk",
  },
  {
    image: "/media/protocol/qr-scan.png",
    text: "Tunjukkan QR Code saat melakukan registrasi",
  },
];

export async function generateMetadata({
  params,
}: PageParams): Promise<Metadata> {
  const { token } = await params;
  const guest = await getGuest(token);

  if (!guest) {
    return { title: "Undangan tidak ditemukan" };
  }

  return {
    title: `${guest.event.title} — ${guest.name}`,
    description: guest.event.quote ?? undefined,
  };
}

export default async function InvitationPage({ params }: PageParams) {
  const { token } = await params;
  const guest = await getGuest(token);

  if (!guest) {
    notFound();
  }

  const { event } = guest;
  const [guestbook, stats, qr] = await Promise.all([
    getGuestbook(event.id),
    getLiveStats(event.id),
    qrDataUrl(
      `${process.env.NEXT_PUBLIC_APP_URL ?? ""}/scan?t=${guest.token}`,
    ),
  ]);

  const statCards = [
    { label: "Tamu Diundang", value: stats.totalInvited },
    { label: "Konfirmasi Hadir", value: stats.attendingResponses },
    { label: "Estimasi Hadir", value: stats.estimatedGuests },
    { label: "Sudah Check-in", value: stats.checkedInGuests },
  ];

  return (
    <InvitationShell>
      <main className="min-h-screen">
        {/* Hero */}
        <Section className="flex min-h-[85vh] items-center">
          <div className="text-center">
            <div className="relative mx-auto aspect-square w-40 sm:w-52">
              <Image
                src="/media/logo.png"
                alt={event.title}
                fill
                priority
                sizes="208px"
                className="object-contain"
              />
            </div>

            <h1 className="mt-6 font-display text-3xl italic text-white drop-shadow-lg sm:text-4xl">
              {event.title}
            </h1>
            {event.subtitle && (
              <p className="mt-2 text-sm uppercase tracking-[0.25em] text-white/90">
                {event.subtitle}
              </p>
            )}

            <div className="mt-8 flex flex-col items-center gap-2 text-white/90">
              <svg
                aria-hidden
                viewBox="0 0 40 70"
                className="h-10 w-6 animate-bounce"
                fill="currentColor"
              >
                <path d="M20 0l14 14h-9v42h-10V14H6z" />
              </svg>
              <span className="text-[11px] font-semibold uppercase tracking-[0.3em]">
                Geser ke atas
              </span>
            </div>
          </div>
        </Section>

        {/* Kartu tamu + QR */}
        <Section>
          <Paper>
            <p className="text-sm text-muted">Kepada Bapak/Ibu/Saudara/i,</p>
            <p className="mt-2 font-display text-3xl italic text-red-ink sm:text-4xl">
              {guest.name}
            </p>
            {guest.department && (
              <p className="mt-1 text-sm text-muted">{guest.department}</p>
            )}

            <p className="mx-auto mt-6 max-w-md text-sm leading-relaxed text-ink">
              Dengan senang hati, kami mengundang Anda untuk hadir di acara{" "}
              <strong>{event.title}</strong>
              {event.subtitle ? ` ${event.subtitle}` : ""}.
            </p>

            <p className="mt-5 text-sm text-ink">
              Silakan tunjukkan QR Code di bawah ini untuk memasuki tempat
              acara:
            </p>

            <div className="mx-auto mt-4 w-fit rounded-2xl border border-black/10 bg-white p-3 shadow-sm">
              {/* eslint-disable-next-line @next/next/no-img-element */}
              <img
                src={qr}
                alt={`QR Code ${guest.name}`}
                width={220}
                height={220}
                className="h-auto w-[220px]"
              />
            </div>

            <p className="mt-3 text-xs text-muted">
              Sesi: {guest.session?.name ?? "Belum ditentukan"}
            </p>

            {guest.checkIns.length > 0 && (
              <p className="mt-2 inline-block rounded-full bg-leaf/15 px-4 py-1.5 text-xs font-semibold text-leaf">
                Sudah check-in pada {shortDate(guest.checkIns[0].checkedInAt)}
              </p>
            )}
          </Paper>
        </Section>

        {/* Reservasi + guestbook */}
        <Section>
          <div className="text-center">
            <SectionTitle>Reservasi Kehadiran</SectionTitle>
          </div>

          <div className="mt-8 grid gap-6 lg:grid-cols-2">
            <div className="rounded-2xl bg-white/85 p-5 shadow-sm backdrop-blur-sm sm:p-6">
              <RsvpForm
                token={guest.token}
                invitedCount={guest.invitedCount}
                initial={
                  guest.rsvp
                    ? {
                        attendance: guest.rsvp.attendance,
                        guestCount: guest.rsvp.guestCount,
                        wish: guest.rsvp.wish,
                        delegateNik: guest.rsvp.delegateNik,
                      }
                    : null
                }
              />
            </div>

            <div className="rounded-2xl bg-white/85 p-5 shadow-sm backdrop-blur-sm sm:p-6">
              <div className="flex items-center justify-between gap-3">
                <h3 className="text-sm font-semibold uppercase tracking-wider text-muted">
                  Buku Tamu
                </h3>
                <span className="rounded-full bg-cream px-3 py-1 text-xs font-semibold text-ink">
                  {guestbook.length} ucapan
                </span>
              </div>

              <div className="mt-4 max-h-[420px] space-y-4 overflow-y-auto pr-1">
                {guestbook.length === 0 && (
                  <p className="text-sm text-muted">
                    Belum ada ucapan. Jadilah yang pertama!
                  </p>
                )}

                {guestbook.map((item) => (
                  <div
                    key={item.id}
                    className="rounded-xl border border-black/5 bg-white p-3.5"
                  >
                    <div className="flex flex-wrap items-center gap-2">
                      <strong className="text-sm text-ink">
                        {item.guest.name}
                      </strong>
                      <span
                        className={`rounded-full px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wide ${
                          attendanceClass[item.attendance]
                        }`}
                      >
                        {attendanceLabel[item.attendance]}
                      </span>
                    </div>
                    <p className="mt-1.5 whitespace-pre-line text-sm leading-relaxed text-ink/90">
                      {item.wish}
                    </p>
                    <p className="mt-1.5 text-[11px] text-muted">
                      {shortDate(item.updatedAt)}
                    </p>
                  </div>
                ))}
              </div>
            </div>
          </div>

          <div className="mt-6 grid grid-cols-2 gap-3 sm:grid-cols-4">
            {statCards.map((stat) => (
              <div
                key={stat.label}
                className="rounded-xl bg-white/85 px-3 py-4 text-center shadow-sm backdrop-blur-sm"
              >
                <div className="font-display text-2xl text-ink">
                  {stat.value}
                </div>
                <div className="mt-1 text-[10px] font-semibold uppercase tracking-wider text-muted">
                  {stat.label}
                </div>
              </div>
            ))}
          </div>
        </Section>

        {/* Host */}
        <Section>
          <div className="text-center">
            <SectionTitle>Master of Ceremony</SectionTitle>

            <div className="mx-auto mt-6 max-w-xl overflow-hidden rounded-2xl shadow-lg">
              <Image
                src="/media/hosts.png"
                alt="Host acara"
                width={900}
                height={600}
                sizes="(max-width: 768px) 100vw, 576px"
                className="h-auto w-full"
              />
            </div>

            <p className="mt-6 font-display text-3xl italic text-red-ink sm:text-4xl">
              {event.hostNames}
            </p>
            {event.quote && (
              <p className="mx-auto mt-3 max-w-md text-sm leading-relaxed text-ink/80">
                {event.quote}
              </p>
            )}
          </div>
        </Section>

        {/* Tanggal + countdown */}
        <Section>
          <div className="text-center">
            <div
              className="bg-[url(/media/separator.png)] bg-contain bg-top bg-no-repeat pb-14 font-display text-4xl text-white drop-shadow-[3px_3px_3px_#917c52] sm:text-5xl"
            >
              {bigDate(event.eventDate)}
            </div>

            <p className="mt-2 text-sm text-ink">
              {formatDateId(event.eventDate, true)} WIB
            </p>

            <div className="mx-auto mt-6 max-w-md">
              <Countdown targetIso={event.eventDate.toISOString()} />
            </div>

            <a
              href={calendarUrl(event)}
              target="_blank"
              rel="noreferrer"
              className="mt-6 inline-block rounded-xl bg-[#181818] px-5 py-2.5 text-xs font-semibold text-white transition hover:bg-black"
            >
              Tambah ke Google Kalender
            </a>

            <div className="mx-auto mt-8 max-w-xl overflow-hidden rounded-2xl shadow-lg">
              <Image
                src="/media/schedule.png"
                alt="Susunan acara"
                width={1200}
                height={1600}
                sizes="(max-width: 768px) 100vw, 576px"
                className="h-auto w-full"
              />
            </div>
          </div>
        </Section>

        {/* Lokasi */}
        {event.venues.map((venue, index) => (
          <Section key={venue.id}>
            <div className="text-center">
              <SectionTitle>Lokasi {index + 1}</SectionTitle>

              <p className="mt-4 text-sm leading-relaxed text-ink">
                <strong>{venue.name}</strong>
                <br />
                {venue.address}
              </p>

              {venue.mapsUrl && (
                <a
                  href={venue.mapsUrl}
                  target="_blank"
                  rel="noreferrer"
                  className="mt-3 inline-block rounded-xl bg-[#181818] px-5 py-2.5 text-xs font-semibold text-white transition hover:bg-black"
                >
                  Lihat Peta
                </a>
              )}

              <div className="mt-5 overflow-hidden rounded-2xl border border-black/10 shadow-sm">
                {venue.embedUrl ? (
                  <iframe
                    src={venue.embedUrl}
                    title={`Peta ${venue.name}`}
                    loading="lazy"
                    referrerPolicy="no-referrer-when-downgrade"
                    className="h-[300px] w-full border-0"
                  />
                ) : (
                  <div className="flex h-[200px] items-center justify-center bg-white/70 text-sm text-muted">
                    Peta belum tersedia
                  </div>
                )}
              </div>
            </div>
          </Section>
        ))}

        {/* Protokol */}
        <Section>
          <div className="text-center">
            <SectionTitle>Protokol</SectionTitle>
            <p className="mx-auto mt-3 max-w-lg text-sm leading-relaxed text-ink/80">
              Demi kelancaran acara, mohon mengikuti ketentuan yang sudah
              ditetapkan panitia berikut ini.
            </p>

            <div className="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
              {protocolItems.map((item) => (
                <div
                  key={item.text}
                  className="rounded-2xl bg-white/85 p-5 shadow-sm backdrop-blur-sm"
                >
                  <Image
                    src={item.image}
                    alt=""
                    width={72}
                    height={72}
                    className="mx-auto h-16 w-16 object-contain"
                  />
                  <p className="mt-3 text-sm leading-relaxed text-ink">
                    {item.text}
                  </p>
                </div>
              ))}
            </div>
          </div>
        </Section>

        {/* Footer */}
        <footer className="bg-[url(/media/bg-section.png)] bg-cover bg-top bg-no-repeat px-4 py-10 text-center">
          <p className="text-xs text-ink/70">
            &copy; {new Date().getFullYear()} Nandur Studio. All rights
            reserved.
          </p>
          <p className="mt-1 text-xs text-muted">
            Web Invitation by{" "}
            <a
              href="https://www.nandurstudio.com"
              target="_blank"
              rel="noreferrer"
              className="font-semibold text-ink underline-offset-2 hover:underline"
            >
              Nandur Studio Event
            </a>
          </p>
        </footer>
      </main>
    </InvitationShell>
  );
}
