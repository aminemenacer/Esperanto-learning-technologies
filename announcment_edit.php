<?php
//Database Connection
session_start();
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');			

$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

if(isset($_GET['edit_id'])){
 $edit_id = mysqli_real_escape_string($conn, $_GET['edit_id']);
 $sql = "SELECT * FROM news WHERE id =" .$_GET['edit_id'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}

if(isset($_POST['btn-update'])){
 $news_title = $_POST['news_title'];
	$news_desc = $_POST['news_desc'];
 
 $update = "UPDATE news SET news_title='$news_title', news_desc='$news_desc' WHERE id=". $_GET['edit_id'];
 $update = mysqli_query($conn, $update);

	?>								
	<div class="alert alert-success mt-5 ml-5 mr-5" role="alert">
	Updated successfully</div>       
<?php
}

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
  <div class="row">
    
<div class="col-sm-12 col-md-12">
				<div class="card">
								<div class="card-body">
												<div class="row">
																<div class="col-sm-12 col-md-12">
																				<h4>Edit Information</h4>
																				<hr>
																</div>
												</div>
								<div class="row">
												<div class="col-sm-12 col-md-12">
													<form method="post">
														<div class="form-group row">																
																</div>
																<div class="form-group row">
																		<div class="col-sm-8 col-md-8">
																			<label><b>Announcement title:</b></label>
																			<input type="text" name="news_title" aria-label="text" class="form-control" value="<?php echo $row['news_title']; ?>"> 
																		</div>
																</div>                              
																<div class="form-group row">
																		<div class="col-sm-8 col-md-8">
																			<label><b>Announcement description:</b></label>
																			<textarea name="news_desc" rows="8" class="form-control"><?php echo $row['news_desc']; ?></textarea>
																		</div>
																</div>															           
															<form action="announcment_edit.php" method="GET">
																	<button type="submit" name="btn-update" class="btn btn-primary">Update</button>
																	<a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true" name="btn-update">Back</a>
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