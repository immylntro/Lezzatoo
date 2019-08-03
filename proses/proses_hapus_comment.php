<?php
include "koneksi.php";
$id_comment = $_GET['id_comment'];

//Membuat Query Hapus Data
$sql = "DELETE FROM comment WHERE id_comment='$id_comment'";
$query = mysqli_query($koneksi, $sql);

//Cek Query Hapus Data
if ($query) {
    echo "Proses Hapus Berhasil";
} else {
    echo "<script>alert('Proses Hapus Gagal !'); location.href='../admin/comment.php'; </script>";
}
header("location:../admin/comment.php");

mysqli_close($koneksi);
?>
