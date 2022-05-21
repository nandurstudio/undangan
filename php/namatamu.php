<?php
include 'connection.php';
$selectquery = "SELECT * FROM tr_tamu ORDER BY tamuId DESC LIMIT 1";
$reservasi = mysqli_query($conn, $selectquery);
$row = $reservasi->fetch_assoc();
$id_guest = $row['tamuId'];
$name_guest = $row['name'];
$adr_guest = $row['alamat'];
$sesi_guest = $row['sesi'];
$total_guest = $row['jumlah_tamu'];
if ($adr_guest == "") {
    echo $name_guest;
} else {
    echo $name_guest;
}
