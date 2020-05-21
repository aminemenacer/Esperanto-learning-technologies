<?php

session_start();
error_reporting(0);

include_once('C:\xampp\htdocs\esperanto\navbar_check.php');
$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

if(!$conn){
	echo 'Connection error: '. mysqli_connect_error();
}

if(isset($_GET['id'])){
		$id=$_GET['id'];
	if(isset($_POST['btn-update'])){
		$firstname=$_POST['firstname'];
		$surname=$_POST['surname'];
		$type=$_POST['type'];
		$email=$_POST['email'];
		$date_of_birth=$_POST['date_of_birth'];
		$phone=$_POST['phone'];

		
		$query3=mysqli_query($conn,"update users set firstname='$firstname', type='$type', surname='$surname', email='$email', date_of_birth='$date_of_birth', phone='$phone' where email='$email'");
		if($query3){

			?>
				<div class="alert alert-success mt-5 ml-5 mr-5" role="alert">
						Data successfully updated.
				</div>
			<?php

		}else{
			?>
				<div class="alert alert-danger mt-5 ml-5 mr-5" role="alert">
						Data not updated.
				</div>
			<?php
		}
	}

	$query1=mysqli_query($conn,"select * from users where id='$id'");
	$query2=mysqli_fetch_array($query1);
}

?>


<!--Create Edit form -->
<!doctype html>
<html>
<head>
	<link rel="shortcut icon"  href="images/favicon.ico" />
<body style="overflow-x: hidden;">
<form method="post">

 <div class="container" style="padding: 20px">
	<div class="row">

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
											<form method="get" action="edit.php">
												<div class="form-group row">
													<div class="col-sm-4">
														<input type="hidden" name="firstname" aria-label="text" class="form-control" placeholder="Firstname" value="<?php echo $query2['id']; ?>">
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
													<input type="text" name="type" aria-label="text" class="form-control" placeholder="Firstname" value="<?php echo $query2['type']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Firstname:</b></label>
													<div class="col-sm-4">
															<input type="text" name="firstname" aria-label="text" class="form-control" placeholder="Firstname" value="<?php echo $query2['firstname']; ?>">
													</div>
												</div>
												
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Surname:</b></label>
													<div class="col-sm-4">
														<input type="text" name="surname" aria-label="text" class="form-control" placeholder="Surname" value="<?php echo $query2['surname']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Date of birth:</b></label>
													<div class="col-sm-4">
														<input type="date" name="date_of_birth" id="date_of_birth" aria-label="text"  placeholder="Date of birth" class="form-control" value="<?php echo $query2['date_of_birth']?>">
													</div>
												</div>

												<div class="form-group row">
													<label for="email" class="col-4 col-form-label"><b>Email:</b></label>
													<div class="col-sm-4">
														<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $query2['email']?>"/>
													</div>
												</div>

												<div class="form-group row">
													<label for="name" class="col-4 col-form-label"><b>Phone:</b></label>
													<div class="col-sm-4">
														<input type="text" name="phone" aria-label="Phone" class="form-control" placeholder="Phone" value="<?php echo $query2['phone']?>">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-4 mb-2">
														<a class="font-weight-bold " href="edit_password.php" type="text">Edit password</a>
													</div>
												</div>
												
											
														<button type="submit" name="btn-update" class="btn btn-primary">Update</button>
														<a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true" name="btn-update">Back</a>
												</form>
							</div>

					</div>
			</div>
	</div>
	</div>


	</div>
</head>
</html>

		</div>

<?php

include_once('C:\xampp\htdocs\esperanto\template\footer.php');
?>