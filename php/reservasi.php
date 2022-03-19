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
$contact_number = isset($_POST['contact-number']) ? $_POST['contact-number'] : '';
$guest_count = isset($_POST['guest-count']) ? $_POST['guest-count'] : '';
$sesi_reservasi = isset($_POST['sesi-reservasi']) ? $_POST['sesi-reservasi'] : '';


// //nilai variable diambil dari tag name
// //id auto
// //date auto
// $name = $_POST["name"];
// $ucapan = $_POST["ucapan"];

mysqli_query($conn, "SELECT * FROM tr_reservasi");
mysqli_query($conn, "INSERT INTO `tr_reservasi` (`reservasiId`, `name`, `contact`, `jumlah_tamu`, `sesi`, `date`) VALUES (NULL, '$name_reservasi', '$contact_number', '$guest_count', '$sesi_reservasi', current_timestamp());");
//header("Location:/undangan/php/wish.php");
?>