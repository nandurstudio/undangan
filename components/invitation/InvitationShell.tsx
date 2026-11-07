"use client";

import Image from "next/image";
import { useEffect, useRef, useState } from "react";

export default function InvitationShell({
  children,
}: {
  children: React.ReactNode;
}) {
  const [opened, setOpened] = useState(false);
  const [closing, setClosing] = useState(false);
  const [playing, setPlaying] = useState(false);
  const audioRef = useRef<HTMLAudioElement | null>(null);

  useEffect(() => {
    document.body.style.overflow = opened ? "" : "hidden";

    return () => {
      document.body.style.overflow = "";
    };
  }, [opened]);

  function openInvitation() {
    setClosing(true);

    audioRef.current
      ?.play()
      .then(() => setPlaying(true))
      .catch(() => setPlaying(false));

    window.setTimeout(() => setOpened(true), 420);
  }

  function toggleMusic() {
    const audio = audioRef.current;
    if (!audio) return;

    if (audio.paused) {
      audio
        .play()
        .then(() => setPlaying(true))
        .catch(() => setPlaying(false));
    } else {
      audio.pause();
      setPlaying(false);
    }
  }

  return (
    <div className="relative">
      <audio ref={audioRef} src="/audio/music.mp3" loop preload="auto" />

      <div className={opened ? "" : "h-screen overflow-hidden"}>{children}</div>

      {!opened && (
        <div
          className={`fixed inset-0 z-50 flex items-center justify-center bg-cover bg-center px-6 transition-opacity duration-500 ${
            closing ? "pointer-events-none opacity-0" : "opacity-100"
          }`}
          style={{ backgroundImage: "url(/media/cover.jpg)" }}
        >
          <div className="flex w-full max-w-md flex-col items-center text-center">
            <div className="relative aspect-[4/5] w-full max-w-sm">
              <Image
                src="/media/ticket.png"
                alt="Tiket undangan"
                fill
                priority
                sizes="(max-width: 768px) 90vw, 384px"
                className="object-contain drop-shadow-2xl"
              />
            </div>

            <h1 className="mt-2 animate-pulse font-display text-lg font-semibold uppercase tracking-wide text-white drop-shadow-lg sm:text-xl">
              Wajib isi reservasi kehadiran!
            </h1>

            <button
              type="button"
              onClick={openInvitation}
              className="mt-6 w-full max-w-[250px] rounded-xl border border-cyan-ink bg-[#181818] px-6 py-3 text-sm font-semibold uppercase tracking-wider text-white shadow-lg transition hover:bg-black"
            >
              Buka Undangan
            </button>
          </div>
        </div>
      )}

      {opened && (
        <button
          type="button"
          onClick={toggleMusic}
          aria-label={playing ? "Matikan musik" : "Nyalakan musik"}
          className="fixed bottom-5 right-5 z-40 flex h-12 w-12 items-center justify-center rounded-full bg-[#181818]/85 text-white shadow-lg backdrop-blur transition hover:bg-black"
        >
          {playing ? (
            <svg
              aria-hidden
              viewBox="0 0 24 24"
              className="h-5 w-5"
              fill="currentColor"
            >
              <path d="M6 5h4v14H6zM14 5h4v14h-4z" />
            </svg>
          ) : (
            <svg
              aria-hidden
              viewBox="0 0 24 24"
              className="h-5 w-5"
              fill="currentColor"
            >
              <path d="M8 5v14l11-7z" />
            </svg>
          )}
        </button>
      )}
    </div>
  );
}
