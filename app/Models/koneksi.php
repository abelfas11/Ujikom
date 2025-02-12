<?php
$host = "localhost";
$user = "root"; // Ganti jika berbeda
$pass = ""; // Sesuaikan dengan password MySQL Anda
$db = "data_perpus"; // Nama database yang sudah Anda buat

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
