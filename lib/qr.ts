import QRCode from "qrcode";

export async function qrDataUrl(text: string) {
  return QRCode.toDataURL(text, {
    width: 360,
    margin: 1,
    color: {
      dark: "#2d3431",
      light: "#ffffff",
    },
  });
}
