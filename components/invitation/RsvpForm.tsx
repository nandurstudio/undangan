"use client";

import { useRouter } from "next/navigation";
import { useState } from "react";

type Attendance = "MENUNGGU" | "HADIR" | "TIDAK_HADIR" | "DIWAKILKAN";

type InitialRsvp = {
  attendance: Attendance;
  guestCount: number;
  wish: string | null;
  delegateNik: string | null;
} | null;

export default function RsvpForm({
  token,
  initial,
  invitedCount,
}: {
  token: string;
  initial: InitialRsvp;
  invitedCount: number;
}) {
  const router = useRouter();
  const [attendance, setAttendance] = useState<Attendance>(
    initial?.attendance ?? "MENUNGGU",
  );
  const [guestCount, setGuestCount] = useState(
    initial?.guestCount && initial.guestCount > 0 ? initial.guestCount : 1,
  );
  const [delegateNik, setDelegateNik] = useState(initial?.delegateNik ?? "");
  const [wish, setWish] = useState(initial?.wish ?? "");
  const [status, setStatus] = useState<"idle" | "saving" | "ok" | "error">(
    "idle",
  );
  const [message, setMessage] = useState("");

  async function handleSubmit(event: React.FormEvent<HTMLFormElement>) {
    event.preventDefault();
    setStatus("saving");
    setMessage("");

    try {
      const response = await fetch("/api/rsvp", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          token,
          attendance,
          guestCount,
          wish,
          delegateNik,
        }),
      });

      const data = (await response.json()) as {
        ok: boolean;
        error?: string;
      };

      if (!response.ok || !data.ok) {
        setStatus("error");
        setMessage(data.error ?? "Gagal mengirim konfirmasi.");
        return;
      }

      setStatus("ok");
      setMessage("Konfirmasi terkirim. Terima kasih!");
      router.refresh();
    } catch {
      setStatus("error");
      setMessage("Tidak dapat terhubung ke server. Coba lagi.");
    }
  }

  return (
    <form onSubmit={handleSubmit} className="space-y-4 text-left">
      <div>
        <label
          htmlFor="attendance"
          className="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-muted"
        >
          Konfirmasi Kehadiran
        </label>
        <select
          id="attendance"
          value={attendance}
          onChange={(event) =>
            setAttendance(event.target.value as Attendance)
          }
          className="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-ink outline-none focus:border-cyan-ink"
        >
          <option value="MENUNGGU" disabled>
            Pilih konfirmasi
          </option>
          <option value="HADIR">Akan Hadir</option>
          <option value="TIDAK_HADIR">Tidak Bisa Hadir</option>
          <option value="DIWAKILKAN">Diwakilkan</option>
        </select>
      </div>

      {attendance === "HADIR" && (
        <div>
          <label
            htmlFor="guestCount"
            className="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-muted"
          >
            Jumlah Tamu Termasuk Anda
          </label>
          <input
            id="guestCount"
            type="number"
            min={1}
            max={20}
            value={guestCount}
            onChange={(event) => setGuestCount(Number(event.target.value))}
            className="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-ink outline-none focus:border-cyan-ink"
          />
          <p className="mt-1 text-xs text-muted">
            Anda diundang untuk {invitedCount} orang.
          </p>
        </div>
      )}

      {attendance === "DIWAKILKAN" && (
        <div>
          <label
            htmlFor="delegateNik"
            className="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-muted"
          >
            NIK Perwakilan Pengganti (bukan NIK Anda)
          </label>
          <input
            id="delegateNik"
            type="text"
            inputMode="numeric"
            maxLength={10}
            value={delegateNik}
            onChange={(event) => setDelegateNik(event.target.value)}
            className="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-ink outline-none focus:border-cyan-ink"
            placeholder="Masukkan NIK perwakilan"
          />
        </div>
      )}

      <div>
        <label
          htmlFor="wish"
          className="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-muted"
        >
          {attendance === "TIDAK_HADIR"
            ? "Alasan Tidak Bisa Hadir"
            : attendance === "DIWAKILKAN"
              ? "Alasan Diwakilkan"
              : "Komentar"}
        </label>
        <textarea
          id="wish"
          rows={4}
          value={wish}
          onChange={(event) => setWish(event.target.value)}
          className="w-full resize-y rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-ink outline-none focus:border-cyan-ink"
          placeholder={
            attendance === "TIDAK_HADIR"
              ? "Berikan alasan kenapa tidak bisa hadir"
              : attendance === "DIWAKILKAN"
                ? "Jelaskan alasan mengapa diwakilkan"
                : "Berikan komentar positif untuk acara"
          }
        />
      </div>

      <button
        type="submit"
        disabled={status === "saving"}
        className="w-full rounded-xl bg-[#181818] px-6 py-3 text-sm font-semibold text-white transition hover:bg-black disabled:cursor-not-allowed disabled:opacity-60"
      >
        {status === "saving" ? "Mengirim..." : "Kirim Konfirmasi"}
      </button>

      {message && (
        <p
          role="status"
          className={`rounded-xl px-4 py-3 text-sm ${
            status === "ok"
              ? "bg-leaf/15 text-leaf"
              : "bg-red-ink/10 text-red-ink"
          }`}
        >
          {message}
        </p>
      )}
    </form>
  );
}
