<?php
//Konfigurasi dasar untuk koneksi database
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "db_undangan_rat";

//Fungsi untuk melakukan koneksi berdasarkan konigurasi diatas
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    $db = mysqli_select_db($conn, $dbname);
    $db1 = new mysqli($servername, $username, $password, $dbname);
}
