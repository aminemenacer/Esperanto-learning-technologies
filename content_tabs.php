<?php
//session_start();
error_reporting(0);
//include_once('C:\xampp\htdocs\esperanto\template\header.php');
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');


?>
<!doctype html>
<html lang="en">
	<head>
			<link rel="shortcut icon"  href="images/favicon.ico" />
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

			<title>Esperanto</title>
	</head>

	<body style="overflow-x: hidden;">

	
	
	<br>
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">

						<a class="nav-item nav-link active" id="nav-as-tab" data-toggle="tab" href="#nav-as" role="tab" aria-controls="nav-as" aria-selected="true">Academic support</a>
						<a class="nav-item nav-link" id="nav-rd-tab" data-toggle="tab" href="#nav-rd" role="tab" aria-controls="nav-rd" aria-selected="false">Research & development</a>
						<a class="nav-item nav-link" id="nav-services-tab" data-toggle="tab" href="#nav-services" role="tab" aria-controls="nav-services" aria-selected="false">Services</a>
						<a class="nav-item nav-link" id="nav-membership-tab" data-toggle="tab" href="#nav-membership" role="tab" aria-controls="nav-membership" aria-selected="false">Membership</a>
						<a class="nav-item nav-link" id="nav-announcement-tab" data-toggle="tab" href="#nav-announcement" role="tab" aria-controls="nav-announcement" aria-selected="false">Announcements</a>
				</div>
		</nav>

		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-as" role="tabpanel" aria-labelledby="nav-as-tab"><?php require('academic_support_table.php'); ?></div>
			<div class="tab-pane fade" id="nav-rd" role="tabpanel" aria-labelledby="nav-rd-tab"><?php require('r&d_table.php'); ?></div>
			<div class="tab-pane fade" id="nav-services" role="tabpanel" aria-labelledby="nav-services-tab"><?php require('services_table.php'); ?></div>
			<div class="tab-pane fade" id="nav-membership" role="tabpanel" aria-labelledby="nav-membership-tab"><?php require('content_update_table.php'); ?></div>
			<div class="tab-pane fade" id="nav-announcement" role="tabpanel" aria-labelledby="nav-announcement-tab"><?php require('announcment_table.php'); ?></div>
		</div>

	<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
			<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>

   
