<?php
	include "koneksi.php";

	$id_comment = $_POST['id_comment'];
	$status = $_POST['status'];

	$sql = "UPDATE comment SET status='$status' WHERE id_comment=$id_comment";
	$query = mysqli_query($koneksi,$sql);


		if ($query) {
			echo "<script>alert('Update berhasil');location.href='../admin/comment.php';</script>";
		} else {
			echo "<script>alert('gagal update');location.href='../admin/comment.php';</script>";
		}
	mysqli_close($koneksi);
?>
