<?php
include "./connection.php";

$nama_tamu = isset($_POST['nama-tamu']) ? $_POST['nama-tamu'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$sesi = isset($_POST['sesi']) ? $_POST['sesi'] : '';

mysqli_query($conn, "SELECT * FROM tr_tamu");
mysqli_query($conn, "INSERT INTO `tr_tamu` (`tamuId`, `name`, `alamat`, `sesi`, `date`) VALUES (NULL, '$nama_tamu', '$alamat', '$sesi', current_timestamp());");

header("Location:/scantamu.php");
