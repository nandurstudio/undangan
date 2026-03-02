<?php
include_once 'connection.php';

$nik_perwakilan = isset($_POST['nik_perwakilan']) ? mysqli_real_escape_string($conn, $_POST['nik_perwakilan']) : '';
$namareservasi = isset($_POST['namareservasi']) ? mysqli_real_escape_string($conn, $_POST['namareservasi']) : '';
$alamat = isset($_POST['alamat']) ? mysqli_real_escape_string($conn, $_POST['alamat']) : '';

if ($nik_perwakilan === '') {
    echo 'not_exists';
    exit;
}

// Check if NIK sudah digunakan oleh orang lain (attending = 2) dan bukan record yang sama
$check_query = "SELECT * FROM tr_ucapan WHERE nik_perwakilan = '$nik_perwakilan' AND attending = 2 AND (namareservasi != '$namareservasi' OR alamat != '$alamat')";
$result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($result) > 0) {
    echo 'exists';
} else {
    echo 'not_exists';
}

mysqli_close($conn);
?>
