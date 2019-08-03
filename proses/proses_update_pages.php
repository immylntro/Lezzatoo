<?php
	include "koneksi.php";

	$id_page = $_POST['id_page'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$link = $_POST['link'];


	$sql = "UPDATE pages SET title='$title', content='$content', last_update=now(), link='$link' WHERE id_page=$id_page";
	$query = mysqli_query($koneksi,$sql);

		if ($query) {
			echo "<script>alert('Update berhasil');location.href='../admin/pages.php';</script>";
		} else {
			echo "<script>alert('gagal update');location.href='../admin/pages.php';</script>";
		}
	mysqli_close($koneksi);
?>
