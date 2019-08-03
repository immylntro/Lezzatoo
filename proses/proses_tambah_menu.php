<?php
	session_start();
	include "koneksi.php";

	$name = $_POST['title'];
	$content = $_POST['content'];
	$price = $_POST['price'];

	$sql = "INSERT INTO food (name, content, price, last_update)
	VALUES ('$name','$content', $price, now())";
	$query = mysqli_query($koneksi,$sql);
	if ($query) {
		echo "<script>alert('Input makanan Berhasil'); location.href='../admin/menu.php'; </script>";
	} else {
		echo "<script>alert('Input makanan Gagal !'); location.href='../admin/menu.php'; </script>";
	}
	mysqli_close($koneksi);
?>
