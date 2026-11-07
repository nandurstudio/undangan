import Link from "next/link";

export default function NotFound() {
  return (
    <main className="flex flex-1 flex-col items-center justify-center px-6 py-16">
      <div className="text-center">
        <h1 className="font-display text-3xl text-ink sm:text-5xl">
          Undangan tidak ditemukan
        </h1>
        <p className="mt-4 text-sm text-muted">
          Token undangan tidak valid atau sudah tidak berlaku.
        </p>
        <p className="mt-6">
          <Link
            href="/u/demo"
            className="inline-block rounded-xl bg-[#181818] px-6 py-3 text-sm font-semibold text-white transition hover:bg-black"
          >
            Coba undangan contoh
          </Link>
        </p>
      </div>
    </main>
  );
}
