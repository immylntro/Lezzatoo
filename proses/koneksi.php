<?php
$hostname = "localhost";
$username = "root";
$password = "password";
$database = "db_restaurant";

// Membuat Koneksi
$koneksi = mysqli_connect($hostname, $username, $password, $database);

// Cek Koneksi
if (!$koneksi) {
    die("Koneksi Gagal !!: " . mysqli_connect_error());
}
// echo "Koneksi Database Berhasil";
?> 
