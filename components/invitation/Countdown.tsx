"use client";

import { useEffect, useState } from "react";

type Remaining = {
  days: number;
  hours: number;
  minutes: number;
  seconds: number;
  done: boolean;
};

function getRemaining(target: number): Remaining {
  const delta = target - Date.now();

  if (delta <= 0) {
    return { days: 0, hours: 0, minutes: 0, seconds: 0, done: true };
  }

  return {
    days: Math.floor(delta / 86_400_000),
    hours: Math.floor((delta / 3_600_000) % 24),
    minutes: Math.floor((delta / 60_000) % 60),
    seconds: Math.floor((delta / 1000) % 60),
    done: false,
  };
}

const units: Array<{ key: keyof Remaining; label: string }> = [
  { key: "days", label: "Hari" },
  { key: "hours", label: "Jam" },
  { key: "minutes", label: "Menit" },
  { key: "seconds", label: "Detik" },
];

export default function Countdown({ targetIso }: { targetIso: string }) {
  const target = new Date(targetIso).getTime();
  const [remaining, setRemaining] = useState<Remaining | null>(null);

  useEffect(() => {
    setRemaining(getRemaining(target));
    const timer = window.setInterval(() => {
      setRemaining(getRemaining(target));
    }, 1000);

    return () => window.clearInterval(timer);
  }, [target]);

  return (
    <div className="grid grid-cols-4 gap-2 sm:gap-3">
      {units.map((unit) => (
        <div
          key={unit.key}
          className="rounded-xl border border-white/40 bg-white/70 px-1 py-3 text-center shadow-sm backdrop-blur-sm"
        >
          <div className="font-display text-2xl text-ink sm:text-3xl">
            {remaining ? String(remaining[unit.key] as number).padStart(2, "0") : "--"}
          </div>
          <div className="mt-1 text-[10px] font-semibold uppercase tracking-widest text-muted sm:text-xs">
            {unit.label}
          </div>
        </div>
      ))}
    </div>
  );
}
