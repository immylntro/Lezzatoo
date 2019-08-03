<?php
	session_start();
	include "koneksi.php";
	include "function.inc.php";

	$title = $_POST['title'];
	$content = $_POST['content'];
	$status = $_POST['status'];

	$sql = "INSERT INTO news (username, title, content, created, last_update, status)
	VALUES ('".$_SESSION['username']."','$title','$content', now(), now(),'$status')";
	$query = mysqli_query($koneksi,$sql);
	if ($query) {
		echo "<script>alert('Input berita Berhasil'); location.href='../admin/news.php'; </script>";
	} else {
		echo "<script>alert('Input berita Gagal !'); location.href='../admin/news.php'; </script>";
	}
	mysqli_close($koneksi);
?>
