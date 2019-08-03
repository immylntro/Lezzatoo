<?php
session_start();
include "koneksi.php";
$id_food = $_GET['id_food'];

if ($_SESSION['type'] != "Administrator") {
	echo "<script>alert('Maaf, Anda bukan administrator !');location.href='javascript:history.back()';</script>";
} else {

//Membuat Query Hapus Data
$sql = "DELETE FROM food WHERE id_food='$id_food'";
$query = mysqli_query($koneksi, $sql);

//Cek Query Hapus Data
if ($query) {
    echo "Proses Hapus Berhasil";
} else {
    echo "<script>alert('Proses Hapus Gagal !'); location.href='../admin/menu.php'; </script>";
}
header("location:../admin/menu.php");
}
mysqli_close($koneksi);
?>
