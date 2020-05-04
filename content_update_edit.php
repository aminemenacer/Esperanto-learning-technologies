<?php
//Database Connection
$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );
session_start();
  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

if(isset($_GET['edit_id'])){
 $edit_id = mysqli_real_escape_string($conn, $_GET['edit_id']);
 $sql = "SELECT * FROM content_update WHERE id =" .$_GET['edit_id'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}

if(isset($_POST['btn-update'])){
 $num_of_children = $_POST['num_of_children'];
 $weekly_attendance = $_POST['weekly_attendance'];
 $monthly_attendance = $_POST['monthly_attendance'];
 $online_attendance = $_POST['online_attendance'];
 
 $update = "UPDATE content_update SET num_of_children='$num_of_children', weekly_attendance='$weekly_attendance', monthly_attendance='$monthly_attendance', online_attendance='$online_attendance' WHERE id=". $_GET['edit_id'];
 $update = mysqli_query($conn, $update);

 header("location: admin_logged_in.php");

}
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
      
			<?php
				include_once('C:\xampp\htdocs\esperanto\navbar_check.php');			
			?>

            <!-- about us-->



	<div class="container" style="padding: 20px">
  <div class="row">
    
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h4>Edit Information</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <form method="post">
                         <div class="form-group row">
                               
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-sm-4 col-md-4 col-form-label"><b>Number of children:</b></label> 
                                <div class="col-4">
                                 <input type="text" name="num_of_children" aria-label="text" class="form-control" value="<?php echo $row['num_of_children']; ?>"> 
                                </div>
                              </div>                              
                              <div class="form-group row">
                                <label for="email" class="col-sm-4 col-md-4 col-form-label"><b>Weekly attendance:</b></label> 
                                <div class="col-sm-4 col-md-4">
                                  <input type="text" name="weekly_attendance" aria-label="First name" class="form-control" value="<?php echo $row['weekly_attendance']; ?>">
                                </div>
                              </div>
																														<div class="form-group row">
                                 <label for="email" class="col-sm-4 col-md-4 col-form-label"><b>Monthly attendance:</b></label> 
                                <div class="col-sm-4 col-md-4">
                                  <input type="text" name="monthly_attendance" aria-label="First name" class="form-control" value="<?php echo $row['monthly_attendance']; ?>">
                                </div>
                              </div>
																														<div class="form-group row">
                                <label for="email" class="col-sm-4 col-md-4 col-form-label"><b>Online attendance:</b></label> 
                                <div class="col-sm-4 col-md-4">
                                  <input type="text" name="online_attendance" aria-label="First name" class="form-control" value="<?php echo $row['online_attendance']; ?>">
                                </div>
                              </div>                              
                              
                             <form action="content_update_edit.php" method="GET">
                               <button type="submit" name="btn-update" class="btn btn-primary">Update</button>

                               <a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true" name="btn-update">Cancel</a>
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

