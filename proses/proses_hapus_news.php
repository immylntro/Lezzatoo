<?php
include "koneksi.php";
$id_news = $_GET['id_news'];

//Membuat Query Hapus Data
$sql = "DELETE FROM news WHERE id_news=$id_news";
$query = mysqli_query($koneksi, $sql);

//Cek Query Hapus Data
if ($query) {
    echo "Proses Hapus Berhasil";
} else {
    echo "<script>alert('Proses Hapus Gagal !'); location.href='../admin/news.php'; </script>";
}
header("location:../admin/news.php");

mysqli_close($koneksi);
?>
