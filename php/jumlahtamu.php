<?php
include __DIR__ . "/connection.php";
$text = $_POST['text'];
$selectquery = "SELECT * FROM tr_tamu ORDER BY tamuId DESC LIMIT 1";
$reservasi = mysqli_query($conn, $selectquery);
$row = $reservasi->fetch_assoc();
$id_guest = $row['tamuId'];
$update_query = "UPDATE `tr_tamu` SET `jumlah_tamu` = '$text' WHERE `tr_tamu`.`tamuId` = '$id_guest';";
mysqli_query($conn, $update_query);
