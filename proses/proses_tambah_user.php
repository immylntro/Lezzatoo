<?php
include 'koneksi.php';
$username = $_POST['username'];
$name = $_POST['name'];
$type = $_POST['access'];
$status = $_POST['status'];
if ($_POST['password1'] == $_POST['password2']){
	$password = md5($_POST['password2']);

	$query = mysqli_query($koneksi,"INSERT INTO users (username, name, password, type, status_user) VALUES('$username', '$name', '$password', '$type', '$status')");
	if($query) {
		echo "<script>alert('Input User berhasil'); location.href='../admin/users.php'; </script>";
	} else {
		echo "<script>alert('Input User Gagal !'); location.href='../admin/users.php'; </script>";
	}

} else {
		echo "<script>alert('Password tidak sama'); location.href='../admin/users.php'; </script>";
}
?>
