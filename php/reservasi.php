<?php
include 'connection.php';
$reservasi_query = "SELECT * FROM tr_reservasi ORDER BY reservasiId DESC";
$reservasi = mysqli_query($conn, $reservasi_query);
// $Submit = isset($_POST['Submit']) ? $_POST['Submit'] : false;
// $Name = isset($_POST['Name']) ? $_POST['Name'] : '';
// $Ucapan = isset($_POST['Ucapan']) ? $_POST['Ucapan'] : '';
// if($Submit){
//  echo $Name;
//  echo $Ucapan;
// }

$name_reservasi = isset($_POST['name-reservasi']) ? $_POST['name-reservasi'] : '';
$attending = isset($_POST['attending']) ? $_POST['attending'] : '';
$guest_count = isset($_POST['guest-count']) ? $_POST['guest-count'] : '';
$sesi_reservasi = isset($_POST['sesi-reservasi']) ? $_POST['sesi-reservasi'] : '';
$alamat_reservasi = isset($_POST['alamat-reservasi']) ? $_POST['alamat-reservasi'] : '';


// //nilai variable diambil dari tag name
// //id auto
// //date auto
// $name = $_POST["name"];
// $ucapan = $_POST["ucapan"];

mysqli_query($conn, "SELECT * FROM tr_reservasi");
mysqli_query($conn, "INSERT INTO `tr_reservasi` (`reservasiId`, `name`, `alamat`, `attending`, `jumlah_tamu`, `sesi`, `date`) VALUES (NULL, '$name_reservasi', '$alamat_reservasi', '$attending', '$guest_count', '$sesi_reservasi', current_timestamp());");
//header("Location:/undangan/php/wish.php");
?>