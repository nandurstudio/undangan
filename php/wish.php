<?php
include 'connection.php';
$shout_query = "SELECT * FROM tr_ucapan ORDER BY ucapanId DESC";
$shouts = mysqli_query($conn, $shout_query);
// $Submit = isset($_POST['Submit']) ? $_POST['Submit'] : false;
// $Name = isset($_POST['Name']) ? $_POST['Name'] : '';
// $Ucapan = isset($_POST['Ucapan']) ? $_POST['Ucapan'] : '';
// if($Submit){
//  echo $Name;
//  echo $Ucapan;
// }

$name = isset($_POST['name']) ? $_POST['name'] : '';
$namareservasi = isset($_POST['namareservasi']) ? $_POST['namareservasi'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$wish = isset($_POST['wish']) ? $_POST['wish'] : '';
$attending = isset($_POST['attending']) ? $_POST['attending'] : '';
$jumlahtamu = isset($_POST['jumlahtamu']) ? $_POST['jumlahtamu'] : '';
$sesi = isset($_POST['sesi']) ? $_POST['sesi'] : '';


// //nilai variable diambil dari tag name
// //id auto
// //date auto
// $name = $_POST["name"];
// $ucapan = $_POST["ucapan"];
$select = mysqli_query($conn, "SELECT * FROM tr_ucapan WHERE nama ='$namareservasi' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1");
if(mysqli_num_rows($select)) {
    mysqli_query($conn, "UPDATE `tr_ucapan` SET `nama` = '$name', `namareservasi` = '$namareservasi', `alamat` = '$alamat', `ucapan` = '$wish', `attending` = '$attending', `jumlahtamu` = '$jumlahtamu', `sesi` = '$sesi', `date` = current_timestamp() WHERE namareservasi ='$namareservasi' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1;");
    exit('Data telah di update! Untuk mengubah ucapan dan kehadiran, silakan untuk mengisi kembali dan kirim ulang.');
} else {
mysqli_query($conn, "SELECT * FROM tr_ucapan");
mysqli_query($conn, "INSERT INTO `tr_ucapan` (`ucapanId`, `nama`, `namareservasi`, `alamat`, `ucapan`, `attending`, `jumlahtamu`, `sesi`, `date`) VALUES (NULL, '$name', '$namareservasi', '$alamat', '$wish', '$attending', '$jumlahtamu', '$sesi', current_timestamp());");
exit('Terima kasih :) Untuk mengubah ucapan dan kehadiran, silakan untuk mengisi kembali dan kirim ulang.');
}
//header("Location:/undangan/php/wish.php");
?>