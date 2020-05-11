<?php 
session_start();
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');
error_reporting(0);



		if(isset($_POST['register_btn'])){

			$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );
		
			if(!$conn){
					echo 'Connection error: '. mysqli_connect_error();
			}
		
			$subject_title = $_POST['subject_title'];
			$sender_name = $_POST['sender_name'];
			$messages = $_POST['messages'];
			$date_created = $_POST['date_created'];
			$email = $_POST['email'];
		
		
			$id = mysqli_real_escape_string($conn, $_GET['id']);
			$sql ="INSERT INTO messages(subject_title, messages, sender_name, email)VALUES('$subject_title', '$messages', '$sender_name', '$email');";

			$result = mysqli_query($conn, $sql);
		
			$row = mysqli_fetch_array($result);
		
		
			if($result){
				?>								
					<div class="alert alert-success mt-5 ml-5 mr-5" role="alert">
					Message successfully sent.</div>       
			<?php
			}else{
				?>								
					<div class="alert alert-danger mt-5 ml-5 mr-5" role="alert">
					Message unsuccessfully sent.</div>       
			<?php
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

		<p class="h1 text-center mb-3">Reply Message</p>
		<?php echo $row['subject_title']; ?><br>
		<?php echo $row['messages']; ?><br>
		<?php echo $row['date_created']; ?><br>
		<?php echo $row['email']; ?><br>
		<?php echo $row['sender_name']; ?><br>


				<form method="POST" action="message_send_reply_from_admin_to_user.php" padding="30px">
						<div class="card border-primary mt-3">
							<div class="card-header"><b>Message details</b></div>
							<div class="card-body">


							<div class="form-row">
								<label for="inputEmail4" class="mt-1 mr-2 font-weight-bold">Email from:</label>
								<div class="form-group col-md-4 col-sm-4">									
								<input type="text" class="form-control" name="sender_name" placeholder="Enter email here" value="<?php echo $row['sender_name']; ?>">

								</div>
							</div>

							<div class="form-row ">
							<label for="inputEmail4" class="mt-1 font-weight-bold">Email to: </label>
								<div class="form-group col-md-4 col-sm-4">
								<select name="email" class="form-control ml-2" id="exampleFormControlSelect1">
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

						<div class="form-row mt-2">
						<label for="inputEmail4" class="mt-1 mb-1 font-weight-bold">Subject: RE</label>
							<div class="form-group col-sm-4 col-md-4 ml-2">				
							<input type="text" class="form-control" name="subject_title" placeholder="Subject" value="<?php echo $row['subject_title']; ?>">

							</div>
						</div>

					<div class="form-row">
					<label for="inputEmail4" class="font-weight-bold">Message:</label>
							<div class="form-group col-md-6 col-sm-6 ml-1">
									<textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Enter message here" name="messages" rows="8" required></textarea>
							</div>
					</div>
				</div>
	
							
					<div class="card-header"><b>Original message</b></div>

							<div class="form-row ml-3 mt-3">
								<label class="mt-1 font-weight-bold">Email from: </label>
								<div class="form-group col-md-4 col-sm-4">									
									<p class="mt-1"><?php echo $row['sender_name']; ?></p>
								</div>
								<label class="mt-1 font-weight-bold">Date: </label>
								<div class="form-group col-md-4 col-sm-4">									
									<p class="mt-1"><?php echo $row['date_created']; ?></p>
								</div>
							</div>

							<div class="form-row ml-3">
								<label class="mt-1 font-weight-bold">Email to: </label>
								<div class="form-group col-md-4 col-sm-4">									
									<p class="mt-1"><?php echo $row['email']; ?></p>
								</div>
								<label class="mt-1 font-weight-bold">Subject: </label>
								<div class="form-group col-md-4 col-sm-4">									
								<?php echo $row['subject_title']; ?>
								</div>
							</div>
							
							<div class="form-row ml-3 mb-4">
								<label class="mt-1 font-weight-bold">Message: </label>
								<div class="form-group col-md-6 col-sm-6">									
									<p class="mt-1"><?php echo $row['messages']; ?></p>
								</div>
							</div>

							</div>

					<div class="container btn pull-end" style="padding: 20px">
						<div class="form-group btn pull-right">
								<a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
								<button type="submit" name="register_btn" class="btn btn-primary"  class="form-group">Submit</button>
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
