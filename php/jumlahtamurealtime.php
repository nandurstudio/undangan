<?php
include_once 'connection.php';
$guest_query = "SELECT sum(jumlah_tamu) as jumlah_tamu FROM `tr_tamu`";
$guest_count = mysqli_query($conn, $guest_query);
$row = mysqli_fetch_assoc($guest_count);
$sum = $row['jumlah_tamu'];
echo $sum;