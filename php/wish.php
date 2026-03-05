<?php
include_once 'connection.php';
$shout_query = "SELECT * FROM tr_ucapan ORDER BY ucapanId DESC";
$shouts = mysqli_query($conn, $shout_query);

$name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
$namareservasi = isset($_POST['namareservasi']) ? mysqli_real_escape_string($conn, $_POST['namareservasi']) : '';
$alamat = isset($_POST['alamat']) ? mysqli_real_escape_string($conn, $_POST['alamat']) : '';
$wish = isset($_POST['wish']) ? mysqli_real_escape_string($conn, $_POST['wish']) : '';
$attending = isset($_POST['attending']) ? mysqli_real_escape_string($conn, $_POST['attending']) : '';
$jumlahtamu = isset($_POST['jumlahtamu']) ? mysqli_real_escape_string($conn, $_POST['jumlahtamu']) : '';
$sesi = isset($_POST['sesi']) ? mysqli_real_escape_string($conn, $_POST['sesi']) : '';
$nik_perwakilan = isset($_POST['nik_perwakilan']) ? mysqli_real_escape_string($conn, $_POST['nik_perwakilan']) : '';

// Convert empty nik_perwakilan to NULL for database
$nik_perwakilan_db = ($nik_perwakilan === '') ? 'NULL' : "'$nik_perwakilan'";

$select = mysqli_query($conn, "SELECT * FROM tr_ucapan WHERE namareservasi ='$namareservasi' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1");
if (mysqli_num_rows($select)) {
    mysqli_query($conn, "UPDATE `tr_ucapan` SET `nama` = '$name', `namareservasi` = '$namareservasi', `alamat` = '$alamat', `ucapan` = '$wish', `attending` = '$attending', `jumlahtamu` = '$jumlahtamu', `sesi` = '$sesi', `nik_perwakilan` = $nik_perwakilan_db, `date` = current_timestamp() WHERE namareservasi ='$namareservasi' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1;");
    // Trigger n8n webhook for Google Sheets sync
    require_once 'webhook_sync_sheets.php';
    trigger_webhook_sync('tr_ucapan');
    exit('Data telah di update! Untuk mengubah ucapan dan kehadiran, silakan untuk mengisi kembali dan kirim ulang.');
} else {
    mysqli_query($conn, "SELECT * FROM tr_ucapan");
    mysqli_query($conn, "INSERT INTO `tr_ucapan` (`ucapanId`, `nama`, `namareservasi`, `alamat`, `ucapan`, `attending`, `jumlahtamu`, `sesi`, `nik_perwakilan`, `date`) VALUES (NULL, '$name', '$namareservasi', '$alamat', '$wish', '$attending', '$jumlahtamu', '$sesi', $nik_perwakilan_db, current_timestamp());");
    // Trigger n8n webhook for Google Sheets sync
    require_once 'webhook_sync_sheets.php';
    trigger_webhook_sync('tr_ucapan');
    exit('Terima kasih :) Untuk mengubah ucapan dan kehadiran, silakan untuk mengisi kembali dan kirim ulang.');
}
