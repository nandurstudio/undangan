import { cn } from "@/lib/utils";

export default function Section({
  id,
  children,
  className,
}: {
  id?: string;
  children: React.ReactNode;
  className?: string;
}) {
  return (
    <section
      id={id}
      className={cn(
        "bg-[url(/media/bg-section.png)] bg-cover bg-top bg-no-repeat px-4 py-14 sm:px-6 sm:py-16",
        className,
      )}
    >
      <div className="mx-auto w-full max-w-3xl">{children}</div>
    </section>
  );
}

export function Paper({
  children,
  className,
}: {
  children: React.ReactNode;
  className?: string;
}) {
  return (
    <div
      className={cn(
        "bg-[url(/media/paper.png)] bg-contain bg-top bg-no-repeat px-5 py-16 text-center sm:px-10",
        className,
      )}
    >
      {children}
    </div>
  );
}

export function SectionTitle({ children }: { children: React.ReactNode }) {
  return (
    <h2 className="font-display text-2xl italic text-cyan-ink sm:text-3xl">
      {children}
    </h2>
  );
}
