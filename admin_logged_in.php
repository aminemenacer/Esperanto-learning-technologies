<?php
session_start();

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

		<title>Esperanto</title>
</head>
<body style="overflow-x: hidden;">



		<div class="ml-3 mr-3 mt-3" style="padding: 20px">

				<div class="row">

						<!-- Search form -->

					<div class="col-sm-2">

							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

									<a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>

									<a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Users</a>

									<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="true">Messages</a>

									<a class="nav-link" id="v-pills-feedback-tab" data-toggle="pill" href="#v-pills-feedback" role="tab" aria-controls="v-pills-feedback" aria-selected="true">Feedback</a>

									<a class="nav-link" id="v-pills-content-tab" data-toggle="pill" href="#v-pills-content" role="tab" aria-controls="v-pills-content" aria-selected="true">Content</a>

									<a class="nav-link" id="v-pills-academic-tab" data-toggle="pill" href="#v-pills-academic" role="tab" aria-controls="v-pills-academic" aria-selected="true">Academic</a>

									<a class="nav-link" id="v-pills-payment-tab" data-toggle="pill" href="#v-pills-payment" role="tab" aria-controls="v-pills-payment" aria-selected="true">Payment</a>						

									<a class="btn btn-outline-primary" href="logout.php" role="button">Logout</a>

							</div>
					</div>

					<div class="col-sm-10">

							<div class="tab-content" id="v-pills-tabContent">

									<div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><?php require('admin_profile.php'); ?></div>

									<div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><?php require('admin_table.php'); ?></div>

									<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><?php require('message_tabs.php'); ?></div>

									<div class="tab-pane fade" id="v-pills-feedback" role="tabpanel" aria-labelledby="v-pills-feedback-tab"><?php require('feedback_table.php'); ?></div>	
									
									<div class="tab-pane fade" id="v-pills-content" role="tabpanel" aria-labelledby="v-pills-content-tab"><?php require('content_tabs.php'); ?></div>
									
									<div class="tab-pane fade" id="v-pills-academic" role="tabpanel" aria-labelledby="v-pills-academic-tab"><?php echo 'under development' ?></div>	

									<div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab"><?php echo 'under development' ?></div>

									<div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab"></div>


								</div>
							
							</div>
					</div>
					<?php
	  		include_once('C:\xampp\htdocs\esperanto\template\footer.php');
  		?>
					</div>

    <script>
						$(function() { 
    // for bootstrap 3 use 'shown.bs.tab', for bootstrap 2 use 'shown' in the next line
								$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
												// save the latest tab; use cookies if you like 'em better:
												localStorage.setItem('lastTab', $(this).attr('href'));
								});

								// go to the latest tab, if it exists:
								var lastTab = localStorage.getItem('lastTab');
								if (lastTab) {
												$('[href="' + lastTab + '"]').tab('show');
								}
				});
    </script>
			
	
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
