<?php
	include "koneksi.php";

	$id_news = $_POST['id_news'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$status = $_POST['status'];

	$sql = "UPDATE news SET title='$title', content='$content', last_update=now(), status='$status' WHERE id_news=$id_news";
	$query = mysqli_query($koneksi,$sql);


		if ($query) {
			echo "<script>alert('Update berhasil');location.href='../admin/news.php';</script>";
		} else {
			echo "<script>alert('gagal update');location.href='../admin/news.php';</script>";
		}
	mysqli_close($koneksi);
?>
