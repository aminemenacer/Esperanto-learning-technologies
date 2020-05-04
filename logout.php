<?php
session_start();
error_reporting(0);
$_SESSION["is_login"] = false;
session_destroy();
unset($_SESSION['username']);
$_SESSION['message']="You are now logged out";
header("location:login.php");
?>
