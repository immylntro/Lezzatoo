<?php
session_start();

$_SESSION['username'] = NULL;
unset($_SESSION['username']);

session_unset();
session_destroy();

header("location:login.php");
?>
