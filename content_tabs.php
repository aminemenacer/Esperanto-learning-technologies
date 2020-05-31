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
	
	<div style="text-align: left">
		<ul class="tabs align-right display:flex;" data-tabs id="example-tabs" data-deep-link="true" style="text-align: left">
			<li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Academic support</a></li>
			<li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Research & development</a></li>
			<li class="tabs-title"><a data-tabs-target="panel3" href="#panel3">Services</a></li>
			<li class="tabs-title"><a data-tabs-target="panel4" href="#panel4">Membership</a></li>
			<li class="tabs-title"><a data-tabs-target="panel5" href="#panel5">Announcements</a></li>
		</ul> 
	</div>

<div class="tabs-content" data-tabs-content="example-tabs">
  <div class="tabs-panel is-active" id="panel1">
		<?php require('academic_support_table.php'); ?>
  </div>
  <div class="tabs-panel" id="panel2">
		<?php require('r&d_table.php'); ?>
  </div>
		<div class="tabs-panel" id="panel3">
		<?php require('services_table.php'); ?>
  </div>
		<div class="tabs-panel" id="panel4">
		<?php require('content_update_table.php'); ?>
  </div>
		<div class="tabs-panel" id="panel5">
		<?php require('announcment_table.php'); ?>
  </div>
</div>


		<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

		<!-- Compressed CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

		<!-- Compressed JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
				
		<!-- foundation-float.min.css: Compressed CSS with legacy Float Grid -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-float.min.css" integrity="sha256-4ldVyEvC86/kae2IBWw+eJrTiwNEbUUTmN0zkP4luL4=" crossorigin="anonymous">

		<!-- foundation-prototype.min.css: Compressed CSS with prototyping classes -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-prototype.min.css" integrity="sha256-BiKflOunI0SIxlTOOUCQ0HgwXrRrRwBkIYppEllPIok=" crossorigin="anonymous">

		<!-- foundation-rtl.min.css: Compressed CSS with right-to-left reading direction -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-rtl.min.css" integrity="sha256-F+9Ns8Z/1ZISonBbojH743hsmF3x3AlQdJEeD8DhQsE=" crossorigin="anonymous">
		<script>$('#element').foundation('_handleTabChange', $target, historyHandled);
</script>
			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>

   
