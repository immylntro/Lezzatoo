<?php
	include "koneksi.php";

	$username = $_POST['username'];
	$name = $_POST['name'];
	$status = $_POST['status'];
	$type = $_POST['access'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	if ($password1 == $password2) {
		if (!empty($password1) && !empty($password2)) {
				$password = md5($password2);
				$sql = "UPDATE users SET name='$name', status_user='$status', type='$type', password='$password' WHERE username='$username'";
				$query = mysqli_query($koneksi,$sql);
				echo "<script>alert('Update berhasil');location.href='../admin/users.php';</script>";
		} else {
			$sql = "UPDATE users SET name='$name', status_user='$status', type='$type' WHERE username='$username'";
			$query = mysqli_query($koneksi,$sql);
			echo "<script>alert('Update berhasil tanpa merubah password');location.href='../admin/users.php';</script>";
		}
	} else {
		echo "<script>alert('Update gagal! Password tidak sama');location.href='../admin/users.php';</script>";
	}

	mysqli_close($koneksi);
?>
