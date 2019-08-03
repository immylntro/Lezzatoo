<?php
	include "koneksi.php";
	$id_news = $_POST['id_news'];
	$content = $_POST['content'];
	$email = $_POST['email'];

	$sql = "INSERT INTO comment (id_news, author, content, date)
	VALUES ($id_news, '$email', '$content', now())";
	$query = mysqli_query($koneksi,$sql);
	if ($query) {
		echo "<script>alert('Komentar diproses'); location.href='../detail_news.php?id_news=$id_news'; </script>";
	} else {
		echo "<script>alert('Proses komentar gagal !'); location.href='../news.php'; </script>";
	}
	mysqli_close($koneksi);
?>
