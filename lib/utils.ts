import { clsx, type ClassValue } from "clsx";
import { twMerge } from "tailwind-merge";

export function cn(...inputs: ClassValue[]) {
  return twMerge(clsx(inputs));
}

export function formatDateId(value: Date | string, withTime = false) {
  const date = typeof value === "string" ? new Date(value) : value;

  return new Intl.DateTimeFormat("id-ID", {
    dateStyle: "full",
    ...(withTime ? { timeStyle: "short" as const } : {}),
    timeZone: "Asia/Jakarta",
  }).format(date);
}
