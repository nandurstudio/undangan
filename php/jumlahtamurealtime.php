<?php
include_once __DIR__.'/connection.php';

// make sure callers don’t cache the result
header('Content-Type: text/plain; charset=UTF-8');
header('Cache-Control: no-cache, must-revalidate, max-age=0');

$guest_query = "SELECT COALESCE(SUM(jumlah_tamu),0) AS jumlah_tamu FROM tr_tamu";
if ($result = mysqli_query($conn, $guest_query)) {
    $row = mysqli_fetch_assoc($result);
    $sum = (int)$row['jumlah_tamu'];
    echo $sum;
} else {
    // log the error for diagnosis; still return something sane
    error_log('jumlahtamurealtime query failed: '.mysqli_error($conn));
    echo '0';
}