<?php
ob_start();
session_start();
error_reporting(0);
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

if(isset($_POST[register_btn])){

	$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

	if(!$conn){
			echo 'Connection error: '. mysqli_connect_error();
	}

	$news_title = $_POST['news_title'];
	$news_desc = $_POST['news_desc'];
	$news_time = $_POST['news_time'];

	$sql ="INSERT INTO news(news_title, news_desc, news_time)VALUES('$news_title', '$news_desc', '$news_time');";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		header("Location: admin_logged_in.php");
	}else{
		echo "Unsuccessfull";
	}

	mysqli_free_result($result);
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

		<p class="h1 text-center">Add announcement</p>

				<form method="POST" action="admin_add_announcement.php" padding="30px">
						<div class="card border-primary mt-4">
							<div class="card-header"><b>Personal details</b></div>
							<div class="card-body">

								<div class="form-row">
										<div class="form-group col-md-6">
												<label for="inputEmail4">Announcement title:</label>
												<input type="textbox" class="form-control" id="inputEmail4" placeholder="Enter title here" name="news_title">
										</div>
								</div>

								<div class="form-row">
										<div class="form-group col-md-6">
												<label for="inputPassword4">Announcement description:</label>
												<textarea class="form-control word-wrap: break-word;" id="exampleFormControlTextarea1" placeholder="Enter description here" name="news_desc" rows="8"></textarea>
										</div>
								</div>
							</div>
					</div>

					<div class="container btn pull-end" style="padding: 20px">
							<div class="form-group btn pull-right">
									<form action="admin_add_announcement.php">
											<a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
										</form>
								</div>
							<div class="form-group btn pull-right">
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
