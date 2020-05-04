<?php
session_start();
error_reporting(0);
$firstname = $_SESSION['firstname'];
$surname = $_SESSION['surname'];
$email = $_SESSION['email'];
$username = $_SESSION['username'];
$phone = $_SESSION['phone'];
$name_of_kin = $_SESSION['name_of_kin'];
$date_of_birth = $_SESSION['date_of_birth'];
$course_date = $_SESSION['course_date'];
$course_time = $_SESSION['course_time'];
$course_level = $_SESSION['course_level'];
$course_subject = $_SESSION['course_subject'];

//include_once('C:\xampp\htdocs\esperanto\template\header.php');
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

if(!$conn){
  echo 'Connection error: '. mysqli_connect_error();
}


		$id = mysqli_real_escape_string($conn, $_GET['id']);
		$query = "SELECT * FROM users WHERE id = $id";
		$result = mysqli_query($conn,$query) or die(mysqli_error());

		echo "<table class='table table-striped'>";
		$row = mysqli_fetch_array($result);
	//	$result = mysqli_query($conn,"SELECT * FROM users");

?>



<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon"  href="images/favicon.ico" />

		<div class="container" style="padding: 20px">

		  <div class="row">
		    <div class="col-md-12">
		        <div class="card">
		            <div class="card-body">
		                <div class="row">
		                    <div class="col-md-12">
		                        <h4>Personal Profile</h4>
		                        <hr>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-12">
		                        <form>
                                <div class="form-group row">
                                  <label for="email" class="col-4 col-form-label"><b>ID:</b></label>
                                  <div class="col-8">
                                    <p><?php echo $row['id']; ?></p>
                                  </div>
                                </div>
		                              <div class="form-group row">
		                                <label for="email" class="col-4 col-form-label"><b>Firstname:</b></label>
		                                <div class="col-8">
		                                  <p><?php echo $row['firstname']; ?></p>
		                                </div>
		                              </div>
																																	<div class="form-group row">
		                                <label for="name" class="col-4 col-form-label"><b>Surname:</b></label>
		                                <div class="col-8">
		                                 <p><?php echo $row['surname']; ?></p>
		                                </div>
		                              </div>
		                              <div class="form-group row">
		                                <label for="email" class="col-4 col-form-label"><b>Email:</b></label>
		                                <div class="col-8">
		                                  <p><?php echo $row['email']; ?></p>
		                                </div>
		                              </div>
		                              <div class="form-group row">
		                                <label for="email" class="col-4 col-form-label"><b>Phone:</b></label>
		                                <div class="col-8">
		                                  <p><?php echo $row['phone']; ?></p>
		                                </div>
		                              </div>
                                  <div class="form-group row">
		                                <label for="email" class="col-4 col-form-label"><b>Date of birth:</b></label>
		                                <div class="col-8">
		                                  <p><?php echo $row['date_of_birth']; ?></p>
		                                </div>
		                              </div>
                                 
                                 <div class="form-group row">
		                                <label for="email" class="col-4 col-form-label"><b>Date created:</b></label>
		                                <div class="col-8">
		                                  <p><?php echo $row['date_created']; ?></p>
		                                </div>
		                              </div>

																																<div class="form-group row">
		                                <label for="email" class="col-4 col-form-label"><b>Last login time:</b></label>
		                                <div class="col-8">
		                                  <p><?php echo $row['last_activity']; ?></p>
		                                </div>
		                              </div>
                               
                                  <form action="view.php">
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
</head>
</html>

    </div>

		<?php
        include_once('C:\xampp\htdocs\esperanto\template\footer.php');
      ?>

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
