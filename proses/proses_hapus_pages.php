<?php
include "koneksi.php";
$id_page = $_GET['id_page'];

//Membuat Query Hapus Data
$sql = "DELETE FROM pages WHERE id_page='$id_page'";
$query = mysqli_query($koneksi, $sql);

//Cek Query Hapus Data
if ($query) {
    echo "Proses Hapus Berhasil";
} else {
    echo "<script>alert('Proses Hapus Gagal !'); location.href='../admin/pages.php'; </script>";
}
header("location:../admin/pages.php");

mysqli_close($koneksi);
?>
