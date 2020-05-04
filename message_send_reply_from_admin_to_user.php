<?php
ob_start();
session_start();
error_reporting(0);
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

if(isset($_POST['register_btn'])){

	$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

	if(!$conn){
			echo 'Connection error: '. mysqli_connect_error();
	}

	$subject_title = $_POST['subject_title'];
	$reply_sender = $_POST['reply_sender'];
	$reply_message = $_POST['reply_message'];
	$reply_date = $_POST['reply_date'];
	$email = $_POST['email'];

	$sql ="INSERT INTO reply_messages(subject_title, reply_message, reply_sender, email)VALUES('$subject_title', '$reply_message', '$reply_sender', '$email');";
	$result = mysqli_query($conn, $sql);


	
	if($result){
		header("Location: admin_logged_in.php");
	}else{
		echo "Unsuccessfull";
	}

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo"";
 } else {
   echo"";
 }
	//mysqli_free_result($result);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Esperanto</title>
  </head>
  <body style="overflow-x: hidden;">



	<div class="container" style="padding: 30px">

		<p class="h1 text-center mb-3">Send Message</p>

				<form method="POST" action="message_send_reply_from_admin_to_user.php" padding="30px">
						<div class="card border-primary mt-31">
							<div class="card-header"><b>Message details</b></div>
							<div class="card-body">

							<div class="form-row">
								<div class="form-group col-md-4">
								<label for="inputEmail4">Email to:</label>
									<select name="email" class="form-control" id="exampleFormControlSelect1">
										<option>Select:</option>
										<?php 
													$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

													if(!$conn){
														echo 'Connection error: '. mysqli_connect_error();
													};

													$query = "SELECT * FROM users ORDER BY email";
													$result = mysqli_query($conn, $query);
													while($row = mysqli_fetch_array($result)){

														echo '<option>'.$row['email'].'</option>';
													}						
											?>
									</select>
								</div>
							</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputEmail4">Subject:</label>
								<input type="textbox" class="form-control" id="inputEmail4" placeholder="Enter subject here" name="subject_title" required>
							</div>
						</div>

								<div class="form-row">
										<div class="form-group col-md-8">
												<label for="inputPassword4">Message:</label>
												<textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Enter message here" name="reply_message" rows="8" required></textarea>
										</div>
								</div>
							</div>
					</div>

					<div class="container btn pull-end" style="padding: 20px">
						<div class="form-group btn pull-right">
							<form action="message_send_reply_from_admin_to_user.php">
								<a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
								<div class="form-group btn pull-right">
									<button type="submit" name="register_btn" class="btn btn-primary"  class="form-group">Submit</button>
								</div>
							</form>
						</div>
						
					</div>
				</div>
		</div>

			</form>

	</div>


</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

   <?php
     include_once('C:\xampp\htdocs\esperanto\template\footer.php');
   ?>
