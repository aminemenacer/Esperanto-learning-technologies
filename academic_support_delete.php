<?php
	session_start();
	include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

	$id = $_GET['id']; // $id is now defined

	mysqli_query($conn,"DELETE FROM academic_support WHERE id='".$id."'");
	mysqli_close($conn);
	header("Location: admin_logged_in.php");
?>
