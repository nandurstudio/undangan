<?php
include "./connection.php";

$nama_tamu = isset($_POST['nama-tamu']) ? $_POST['nama-tamu'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$sesi = isset($_POST['sesi']) ? $_POST['sesi'] : '';
$jumlahtamu = isset($_POST['jumlahtamu']) ? $_POST['jumlahtamu'] : '';

// Lakukan pencarian tamu berdasarkan nama
$result = mysqli_query($conn, "SELECT * FROM tr_tamu WHERE name = '$nama_tamu'");
if(mysqli_num_rows($result) > 0) {
    // Jika tamu dengan nama yang sama sudah ada, lakukan UPDATE
    mysqli_query($conn, "UPDATE tr_tamu SET alamat = '$alamat', sesi = '$sesi', jumlah_tamu = '$jumlahtamu', date = current_timestamp() WHERE name = '$nama_tamu'");
} else {
    // Jika tidak, lakukan INSERT
    mysqli_query($conn, "INSERT INTO tr_tamu (name, alamat, sesi, jumlah_tamu, date) VALUES ('$nama_tamu', '$alamat', '$sesi', '$jumlahtamu', current_timestamp())");
}

// Redirect ke halaman yang sesuai
header("Location: /undangan/scantamu.php");
//server header("Location:/scantamu.php");
?>