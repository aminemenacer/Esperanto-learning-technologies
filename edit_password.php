<?php

session_start();
//error_reporting(0);

include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

if(isset($_POST['update'])){

 $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

 if(!$conn){
  echo 'Connection error: '. mysqli_connect_error();
 }

 $id = $_POST['id'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['passwordconfirm'];

 $password=sha1($password); //hash password before storing for security purposes
 $passwordconfirm=sha1($passwordconfirm); //hash password before storing for security purposes


 $query = "UPDATE users SET password='$password', passwordconfirm='$passwordconfirm' WHERE id='$id'";
 $result = mysqli_query($conn, $query);

 

 if($result){
   if($password == $passwordconfirm){
    ?>
     <div class="alert alert-success mt-5 ml-5 mr-5" role="alert">
        Data successfully updated.
      </div>
      <?php
    } else{
     ?>
      <div class="alert alert-danger mt-5 ml-5 mr-5" role="alert">
        Passwords do not match.
      </div>
     <?php
 }
}


 mysqli_close($conn);

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
							<h4>Edit Password</h4>
								<hr>
								</div>
							</div>
							<div class="row">
									<div class="col-sm-12">
											<form method="POST" action="edit_password.php">
												<div class="form-group row">
													<div class="col-sm-4">
														<input type="hidden" name="id" aria-label="text" class="form-control" placeholder="Firstname" value="<?php echo $_SESSION['id'] ?>">
													</div>
												</div>

												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>New password:</b></label>
													<div class="col-sm-6">
															<input type="password" name="password" aria-label="text" class="form-control" placeholder="New password" >
													</div>
												</div>
												
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Confirm new password:</b></label>
													<div class="col-sm-6">
														<input type="password" name="passwordconfirm" aria-label="text" class="form-control" placeholder="Confirm new password" >
													</div>
												</div>
												
														<button type="submit" name="update" class="btn btn-primary">Update</button>
														<a href="admin_profile_edit.php" class="btn btn-primary" role="button" aria-pressed="true" name="btn-update">Back</a>
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