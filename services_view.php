
<?php 
session_start();
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

		if(!$conn){
			echo 'Connection error: '. mysqli_connect_error();
		};

		$id = mysqli_real_escape_string($conn, $_GET['id']);
		$query = "SELECT * FROM services WHERE id = $id";
		$result = mysqli_query($conn,$query) or die(mysqli_error());

		echo "<table class='table table-striped'>";
		$row = mysqli_fetch_array($result);
?>


<!doctype html>

<html lang="en">
  <head>
    <title>Dellys website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="./about_us.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
</html>
  <body>
      

    <!-- header-->
 


		<div class="container" style="padding: 20px">
		<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h4>View Information</h4>
						<hr>
					</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
							<form method="post">
								<div class="form-group row">                                                          
									</div>
									<div class="form-group row">
												<label for="name" class="col-sm-4 col-md-4 col-form-label"><b>Services title:</b></label> 
												<div class="col-sm-8 col-md-8">
													<p><?php echo $row['services_title']; ?></p>
												</div>
										</div>
										<div class="form-group row">
												<label for="name" class="col-sm-4 col-md-4 col-form-label"><b>Services Description:</b></label> 
												<div class="col-sm-8 col-md-8">
													<p><?php echo $row['services_desc']; ?></p>
												</div>
										</div>                              
										
									<form action="academic_support_view.php">
											<a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
										</form>
											</div>
								</form>
									</div>
						</div>
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

