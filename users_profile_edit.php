<?php
session_start();
error_reporting(0);

include_once('C:\xampp\htdocs\esperanto\navbar_check.php');
$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
	

if(isset($_POST['update'])) {
	
	$firstname = $_POST['firstname'];
	$email = $_POST['email'];

	$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

	$query = "UPDATE users SET email='$email', firstname='$firstname' WHERE id= '$id'"; 
	$result = mysqli_query($conn,$query); 

	if ($result) {
	header("location:user_logged_in.php");
	// echo 'successfully updated';
	}else{
		echo "error";
	}
	mysqli_close($conn);
}

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

		<div class="container">

<div class="row mt-3">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<h4>Edit Profile</h4>
								<hr>
								</div>
							</div>
							<div class="row">
									<div class="col-sm-12">
											<form method="POST" action="users_profile_edit.php">
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>ID:</b></label>
													<div class="col-sm-4">
																<p><?php echo $_SESSION['id']; ?></p>
													</div>
												</div>
												<div class="form-group row">
													<label for="email" class="col-sm-4 col-form-label"><b>Date:</b></label>
													<div class="col-sm-4">
														<p><?php echo $_SESSION['date_created']; ?></p>
													</div>
												</div>
												<div class="form-group row">
													<label for="email" class="col-sm-4 col-form-label"><b>Type:</b></label>
													<div class="col-sm-4">
														<p><?php echo $_SESSION['type']; ?></p>
													</div>
												</div>
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Firstname:</b></label>
													<div class="col-sm-4">
															<input type="text" name="firstname" aria-label="text" class="form-control" placeholder="Firstname" />
													</div>
												</div>
												
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Surname:</b></label>
													<div class="col-sm-4">
														<input type="text" name="surname" aria-label="text" class="form-control" placeholder="Surname" value="<?php echo $query2['surname'] ?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Date of birth:</b></label>
													<div class="col-sm-4">
														<input type="date" name="date_of_birth" id="date_of_birth" aria-label="text"  placeholder="Date of birth" class="form-control" value="<?php echo $query2['date_of_birth']; ?>">
													</div>
												</div>
											
												<div class="form-group row">
													<label for="email" class="col-sm-4 col-form-label"><b>Email:</b></label>
													<div class="col-sm-4">
 														<input type="text" class="form-control" id="email" name="email" placeholder="Email" />
													</div>
												</div>
											
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Phone:</b></label>
													<div class="col-sm-4">
														<input type="text" name="phone" aria-label="Phone" class="form-control" placeholder="Phone" value="<?php echo $query2['phone']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="email" class="col-sm-4 col-form-label"><b>New password:</b></label>
													<div class="col-sm-4">
														<input type="password" name="password" aria-label="password" class="form-control" placeholder="Password" value="<?php echo $query2['password']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="email" class="col-sm-4 col-form-label"><b>Confirm new password:</b></label>
													<div class="col-sm-4">
														<input type="password" name="password2" aria-label="password2" class="form-control" placeholder="Confirm password" value="<?php echo $query2['password2']; ?>">
													</div>
												</div>
												
												<form method="POST" action="users_profile_edit.php">
														<button type="submit" name="update" class="btn btn-primary">Update</button>
														<a href="user_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true" name="btn-update">Cancel</a>
												</form>
							</div>

					</div>
			</div>
	</div>
	</div>
	</div>
	</div>



</body>
</head>
</html>

    </div>
				</div>

<?php
include_once('C:\xampp\htdocs\esperanto\template\footer.php');
?>
