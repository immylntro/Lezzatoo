<?php

session_start();

include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE (username = '$username' AND status_user = 'Aktif') AND password = '$password'";
$result = mysqli_query($koneksi,$query);
if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {

        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['type'] = $row['type'];

        if ($row['type'] == "Administrator") {
            header("location:../admin/home.php");
        } elseif ($row['type'] == "Operator") {
            header("location:../admin/home.php");
        } else {
            echo '<script>href.location</script>';
            session_destroy();
        }
    }
} else {
    echo "<script>alert('Login Gagal !');location.href='login.php?error=salah';</script>";
}
?>
