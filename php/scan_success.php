<?php
include_once __DIR__ . '/connection.php';

$nama_tamu = isset($_POST['nama-tamu']) ? $_POST['nama-tamu'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$sesi = isset($_POST['sesi']) ? $_POST['sesi'] : '';
$jumlahtamu = isset($_POST['jumlahtamu']) ? $_POST['jumlahtamu'] : '';

// Escape inputs (prevent simple injection) and determine whether we INSERT or UPDATE
$nama_tamu = mysqli_real_escape_string($conn, $nama_tamu);
$alamat = mysqli_real_escape_string($conn, $alamat);
$sesi = mysqli_real_escape_string($conn, $sesi);
$jumlahtamu = mysqli_real_escape_string($conn, $jumlahtamu);

$last_id = 0;
$result = mysqli_query($conn, "SELECT * FROM tr_tamu WHERE name = '$nama_tamu' ORDER BY date DESC LIMIT 1");
if (mysqli_num_rows($result) > 0) {
    // Update the most recent row for this name
    mysqli_query($conn, "UPDATE tr_tamu SET alamat = '$alamat', sesi = '$sesi', jumlah_tamu = '$jumlahtamu', date = current_timestamp() WHERE name = '$nama_tamu'");
    $id_row = mysqli_query($conn, "SELECT tamuId FROM tr_tamu WHERE name = '$nama_tamu' ORDER BY date DESC LIMIT 1");
    if ($id_row && $r = mysqli_fetch_assoc($id_row)) {
        $last_id = (int) $r['tamuId'];
    }
} else {
    // Insert new row
    mysqli_query($conn, "INSERT INTO tr_tamu (name, alamat, sesi, jumlah_tamu, date) VALUES ('$nama_tamu', '$alamat', '$sesi', '$jumlahtamu', current_timestamp())");
    $last_id = (int) mysqli_insert_id($conn);
}

// Redirect ke halaman yang sesuai — compute site base so this works both on root and subpath deployments
$base = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/');
$redirect = ($base === '') ? '/scantamu.php' : $base . '/scantamu.php';

// append last_id so the scanner that submitted sees its own guest
if ($last_id > 0) {
    $redirect .= '?last_id=' . $last_id;
}

// sanitize redirect for Windows/host environments — convert backslashes and ensure single leading slash
$redirect = str_replace('\\', '/', $redirect);
$redirect = '/' . ltrim($redirect, '/');

header('Location: ' . $redirect);
exit; // stop execution after redirect
?>