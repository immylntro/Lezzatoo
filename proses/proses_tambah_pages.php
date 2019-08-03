<?php
	include "koneksi.php";

	$title = $_POST['title'];
	$content = $_POST['content'];
	$link = $_POST['link'];


	$sql = "INSERT INTO pages (title,content,last_update,link)
					VALUES ('$title','$content',now(),'$link')";
	$query = mysqli_query($koneksi,$sql);
	if ($query) {
		echo "<script>alert('Input Front Pages Berhasil'); location.href='../admin/pages.php'; </script>";
	} else {
		echo "<script>alert('Input Front Pages Gagal !'); location.href='../admin/pages.php'; </script>";
	}
	mysqli_close($koneksi);
?>
