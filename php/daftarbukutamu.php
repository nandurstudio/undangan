<?php
include 'connection.php';

// Persiapkan statement
$query = "SELECT * FROM `tr_tamu` ORDER BY `tamuId` DESC";
$dewan1 = $db1->prepare($query);
$dewan1->execute();

// Ikatan kolom ke variabel
$dewan1->bind_result($tamuId, $name, $alamat, $sesi, $jumlah_tamu, $date);

// Inisialisasi array untuk menyimpan data
$data = array();

// Loop untuk mengambil hasil
while ($dewan1->fetch()) {
    $data[] = array(
        'tamuId' => $tamuId,
        'name' => $name,
        'alamat' => $alamat,
        'sesi' => $sesi,
        'jumlah_tamu' => $jumlah_tamu,
        'date' => $date
    );
}

// Konversi array ke dalam format JSON dan kirimkan sebagai respons
echo json_encode($data);

// Tutup statement
$dewan1->close();

// Tutup koneksi
$db1->close();
