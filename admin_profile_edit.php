
<?php
session_start();
error_reporting(0);

include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

 if(isset($_POST['update'])){

		$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

		if(!$conn){
			echo 'Connection error: '. mysqli_connect_error();
		}

		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$date_of_birth = $_POST['date_of_birth'];
		$type = $_POST['type'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$passwordconfirm = $_POST['passwordconfirm'];

		$query = "UPDATE users SET firstname='$firstname', surname='$surname', email='$email', date_of_birth='$date_of_birth', type='$type', gender='$gender' phone='$phone', password='$password', passwordconfirm='$passwordconfirm' WHERE id='$id'";
		$result = mysqli_query($conn, $query);

		if($result){
						?>
							<div class="alert alert-success mt-5 ml-5 mr-5" role="alert">
									Data successfully updated.
							</div>
						<?php
		} else{
						?>
							<div class="alert alert-success mt-5 ml-5 mr-5" role="alert">
									Data not updated.
							</div>
						<?php
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

<div class="row mb-3">
		<div class="col-md-12 col-sm-12 mt-3">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<h4>Edit Profile</h4>
								<hr>
								</div>
							</div>
							<div class="row">
									<div class="col-md-12 col-sm-12">
											<form method="POST" action="admin_profile_edit.php">
												<div class="form-group row">
													<div class="col-sm-4 col-md-4">
														<input type="hidden" name="id" aria-label="text" class="form-control" placeholder="ID" value="<?php echo $_SESSION['id'] ?>"/>
													</div>
												</div>
												
												<div class="form-group row">
													<label for="email" class="col-sm-4 col-md-4 col-form-label"><b>Date:</b></label>
													<div class="col-sm-6 col-md-6">
														<p><?php echo $_SESSION['date_created']; ?></p>
													</div>
												</div>
												
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-md-4 col-form-label"><b>Firstname:</b></label>
													<div class="col-sm-6 col-md-6">
															<input type="text" name="firstname" aria-label="text" class="form-control" placeholder="Firstname" value="<?php echo $_SESSION['firstname'] ?>"/>
													</div>
												</div>
												
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-md-4 col-form-label"><b>Surname:</b></label>
													<div class="col-sm-6 col-md-6">
														<input type="text" name="surname" aria-label="text" class="form-control" placeholder="Surname" value="<?php echo $_SESSION['surname'] ?>">
													</div>
												</div>
												
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-md-4 col-form-label"><b>Date of birth:</b></label>
													<div class="col-sm-6 col-md-6">
														<input type="date" name="date_of_birth" id="date_of_birth" aria-label="text"  placeholder="Date of birth" class="form-control" value="<?php echo $_SESSION['date_of_birth']; ?>">
													</div>
												</div>
											
												<div class="form-group row">
													<label for="email" class="col-sm-4 col-md-4 col-form-label"><b>Email:</b></label>
													<div class="col-sm-6 col-md-6">
 														<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>"/>
													</div>
												</div>
											
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-md-4 col-form-label"><b>Phone:</b></label>
													<div class="col-sm-6 col-md-6">
														<input type="text" name="phone" aria-label="Phone" class="form-control" placeholder="Phone" value="<?php echo $_SESSION['phone']; ?>">
													</div>
												</div>

												<div class="form-group row">
													<label for="name" class="col-sm-4 col-md-4 col-form-label"><b>Type:</b></label>
													<div class="col-sm-2 col-md-2">
														<input type="text" name="type" aria-label="Phone" class="form-control" placeholder="Phone" value="<?php echo $_SESSION['type']; ?>">
													</div>
												</div>

												<div class="form-group row">
												<label for="name" class="col-4 col-form-label"><b>Gender:</b></label>
													<div class="col-sm-4">
														<select class="form-control" name="gender">
																<option>Select</option>
																<option value="male">Male</option>
																<option value="female">Female</option>
														</select>
													</div>
												</div>


												<div class="form-group row outline-primary">
													<div class="col-sm-4 mb-2">
														<a class="hollow button" href="edit_password.php">Edit password</a>
													</div>
												</div>
												
													<button type="submit" name="update" class="btn btn-primary" value="Update Data" class="form-group">Submit</button>
													<a href="admin_logged_in.php" class="btn btn-primary" data-tabs-content="deeplinked-tabs" id="panel2v" role="button" aria-pressed="true" name="btn-update">Back</a>
													
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
