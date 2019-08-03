<?php
include "koneksi.php";
$username = $_GET['username'];

//Membuat Query Hapus Data
$sql = "DELETE FROM users WHERE username='$username'";
$query = mysqli_query($koneksi, $sql);

//Cek Query Hapus Data
if ($query) {
    echo "<script>
    // alert('Proses Hapus berhasil!');
    location.href='../admin/users.php'; </script>";
} else {
    echo "<script>alert('Proses Hapus Gagal. Hapus post anda terlebih dahulu !'); location.href='../admin/users.php'; </script>";
}
// header("location:../admin/users.php");

mysqli_close($koneksi);
?>
