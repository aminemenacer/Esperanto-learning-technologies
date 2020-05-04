
<?php 
session_start();
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');
error_reporting(0);
$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

		if(!$conn){
			echo 'Connection error: '. mysqli_connect_error();
		};

		$id = mysqli_real_escape_string($conn, $_GET['id']);
		$query = "SELECT * FROM reply_messages WHERE id = $id";
		$result = mysqli_query($conn,$query);

		echo "<table class='table table-striped'>";
		$row = mysqli_fetch_array($result);

		$subject_title = $_SESSION['subject_title'];


?>


<!doctype html>

<html lang="en">
  <head>
    <title>Esperanto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="./about_us.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
</html>
  <body>
      

    <div class="container" style="padding: 20px">
						<h1 class="mb-3 text-center">View message</h1>
				<div class="card mt-3">
					<div class="card-header"><b>Reply message</b>	
					</div>
    <form>

				<div class="row ml-3 mt-3">
							<div class="col-sm-6 col-md-6">
								<label><b>Sender:</b></label>
									<p><?php echo $row['reply_sender']; ?></p>
							</div>

							<div class="col-sm-4 col-md-4 mt-1">
								<label><b>Receiver:</b></label>
								<p><?php echo $_SESSION['email']; ?></p>
							</div>
						
					</div> 

					<div class="row ml-3 mt-5 mt-1">

							<div class="col-sm-6 col-md-6">
								<label><b>Subject:</b></label>
								<p><?php echo $row['subject_title']; ?></p>
							</div>

							<div class="col-sm-4 col-md-4 mt-1">
								<label><b>Date:</b></label>
								<p><?php echo $row['reply_date']; ?></p>
							</div>
							
					</div>

					<div class="row mt-5 ml-3 mt-1">
							<div class="col-md-8 col-sm-8">
								<label><b>Message:</b></label>
								<p class="word-wrap: break-word;"><?php echo $row['reply_message']; ?></p>
							</div>
					</div>

			</form>

		

				</card>
						
					<div class="form-group btn pull-left">
							<form action="messages_view_reply_from_user.php">
									<a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
							</form>	
						</div>
					</div>
				</div>
  </div>

				<?php
     include_once('C:\xampp\htdocs\esperanto\template\footer.php');
   	?>

  </body>
  
  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>






<style type="text/css">
table {
}

th {

  text-align: center;
  background-color: #1D65EC;
  color: white;
}

table, th, td, tr {
  
  margin-top: 30px
}

</style>

