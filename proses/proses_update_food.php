<?php
	include "koneksi.php";

	$id_food = $_POST['id_food'];
	$name = $_POST['name'];
	$content = $_POST['content'];
	$price = $_POST['price'];


	$sql = "UPDATE food SET name='$name', content='$content', price='$price', last_update=now() WHERE id_food=$id_food";
	$query = mysqli_query($koneksi,$sql);

		if ($query) {
			echo "<script>alert('Update berhasil');location.href='../admin/menu.php';</script>";
		} else {
			echo "<script>alert('gagal update');location.href='../admin/menu.php';</script>";
		}
	mysqli_close($koneksi);
?>
