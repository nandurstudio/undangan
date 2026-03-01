<?php
include_once 'connection.php';
$selectquery = "SELECT * FROM tr_tamu ORDER BY date DESC LIMIT 1";
$reservasi = mysqli_query($conn, $selectquery);
$row = $reservasi ? $reservasi->fetch_assoc() : null;

// provide defaults in case query returned no rows
$id_guest = $row['tamuId'] ?? null;
$name_guest = $row['name'] ?? 'Tamu Undangan';
$adr_guest = $row['alamat'] ?? '';
$sesi_guest = $row['sesi'] ?? null;
$total_guest = $row['jumlah_tamu'] ?? null;

// echo name if available, otherwise generic text
if ($name_guest) {
    echo $name_guest;
} else {
    echo 'Tamu Undangan';
}
