<?php
//error_reporting(0);

include_once('C:\xampp\htdocs\esperanto\navbar_check.php');
$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

if(!$conn){
	echo 'Connection error: '. mysqli_connect_error();
}


   ?>

<!doctype html>
<html lang="en">


  <head>
    <link rel="shortcut icon"  href="images/favicon.ico" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Esperanto</title>
  </head>
  <body style="overflow-x: hidden;">



	<div class="container">

		<p class="h1 text-center" style="padding: 10px">Profile page</p>

		<p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.Ambitioni dedisse scripsisse iudicaretur. </p>

		<div class="container">

  <div class="row">

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Your Profile</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">

																	<form method="post" action="admin_profile.php">
																			<div class="form-group row">
																					<label for="name" class="col-sm-4 col-form-label"><b>ID:</b></label>
																					<div class="col-sm-8">
																						<p><?php echo $_SESSION['id']; ?></p>
																					</div>
																			</div>
																			<div class="form-group row">
																					<label for="name" class="col-sm-4 col-form-label"><b>Firstname:</b></label>
																					<div class="col-sm-8">
																						<p><?php echo $_SESSION['firstname']; ?></p>
																					</div>
																			</div>
																			<div class="form-group row">
																					<label for="name" class="col-sm-4 col-form-label"><b>Surname:</b></label>
																					<div class="col-sm-8">
																						<p><?php echo $_SESSION['surname']; ?></p>
																					</div>
																			</div>
																			<div class="form-group row">
																					<label for="email" class="col-sm-4 col-form-label"><b>date of birth:</b></label>
																					<div class="col-sm-8">
																							<p><?php echo $_SESSION['date_of_birth']; ?></p>
																					</div>
																			</div>
																			<div class="form-group row">
																					<label for="email" class="col-sm-4 col-form-label"><b>Email:</b></label>
																					<div class="col-sm-8">
																							<p><?php echo $_SESSION['email']; ?></p>
																					</div>
																			</div>
																			<div class="form-group row">
																					<label for="email" class="col-sm-4 col-form-label"><b>Phone:</b></label>
																					<div class="col-sm-8">
																							<p><?php echo $_SESSION['phone']; ?></p>
																					</div>
																			</div>
																			<div class="form-group row">
																					<label for="email" class="col-sm-4 col-form-label"><b>Date:</b></label>
																					<div class="col-sm-8">
																							<p><?php echo $_SESSION['date_created']; ?></p>
																					</div>
																			</div>
																			<div class="form-group row">
																					<label for="email" class="col-sm-4 col-form-label"><b>Type:</b></label>
																					<div class="col-sm-8">
																							<p><?php echo $_SESSION['type']; ?></p>
																					</div>
																			</div>													

																		<form action="admin_profile.php">
																				<a href="admin_profile_edit.php" class="btn btn-primary" role="button" aria-pressed="true">Edit profile</a>
																			</form>

																						</div>
																				</form>
                    </div>
                </div>

            </div>
        </div>

    </div>

  </div>

    </div>


  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

  </body>
</html>


