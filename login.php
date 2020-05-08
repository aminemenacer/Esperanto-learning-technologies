<?php
session_start();
ob_start();
//error_reporting(0);
//include_once('C:\xampp\htdocs\esperanto\template\header.php');
include_once('C:\xampp\htdocs\esperanto\template\navbar_general.php');
$_SESSION["is_login"] = false;
$_SESSION['type'] = 'type';
$_SESSION['user'] = 'user';
$_SESSION['teacher'] = 'teacher';
$_SESSION['admin'] = 'admin';

$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

		if(!$conn){
			echo 'Connection error: '. mysqli_connect_error();
		}

	
  if(isset($_POST['login_btn'])){

      $email=mysqli_real_escape_string($conn,$_POST['email']);
						$password1=mysqli_real_escape_string($conn,$_POST['password1']);
      $password1=md5($password1);

      $sql="SELECT * FROM users WHERE email='$email' AND password1='$password1'";
						$result=mysqli_query($conn,$sql);
						
					
      if ($sql = mysqli_fetch_array($result)) {
          // Now you can set the session variables
										$_SESSION['email'] = $sql['email'];
										$_SESSION['password1'] = $sql['password1'];										
										$_SESSION['id'] = $sql['id'];
          $_SESSION['type'] = $sql['type'];
          $_SESSION['surname'] = $sql['surname'];
          $_SESSION['firstname'] = $sql['firstname'];
          $_SESSION['phone'] = $sql['phone'];
          $_SESSION['date_of_birth'] = $sql['date_of_birth'];
										$_SESSION['date_created'] = $sql['date_created'];
										$_SESSION['last_activity'] = $sql['last_activity'];									
										$_SESSION['password2'] = $sql['password2'];
									
										
          if ($sql['type'] == 0){
												header ("location: index.php");
												$sql = "UPDATE users SET last_activity = NOW() WHERE email = '".$_SESSION['email']."'";
												$result = mysqli_query($conn,$sql); 
												
          } else if ($sql['type'] == 1){
												header ("location: index.php");
												$sql = "UPDATE users SET last_activity = NOW() WHERE email = '".$_SESSION['email']."'";
												$result = mysqli_query($conn,$sql); 

          } else if ($sql['type'] == 2){
												header ("location: index.php");
												$sql = "UPDATE users SET last_activity = NOW() WHERE email = '".$_SESSION['email']."'";
												$result = mysqli_query($conn,$sql); 

          } else {
            echo "error";
										}
										
    }
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

    <title>Esperanto</title>
  </head>
  <body style="overflow-x: hidden;">



    <div class="container" style="padding: 20px">

      <p class="h1 text-center">Login</p>

      <div class="container ">

      <form method="POST" action="login.php">

        <div class="card border-primary mt-4 ">
         <div class="card-header"><b>Login details</b></div>
         <div class="card-body">

           <div class="form-group col-md-8">
             <label for="username">Email address:</label>
             <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
             <span class='error' style="color: red"></span>
           </div>

           <div class="form-group col-md-8">
             <label for="exampleInputPassword1">Password:</label>
             <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
             <span class='error' style="color: red"> </span>
           </div>

           <div class="form-group col-md-8">
             <button type="submit" name="login_btn" class="btn btn-primary">Submit</button>
             <span class='error' style="color: red"></span>
          </div>

         </form>

         <div class="text" style="text-align: center;" style="padding-top: 10px">
          Not yet registered ? click <a href="membership.php">here</a> to register.
         </div>

       </div>
     </div>

    </div>

      </div>

    </div>

    <script>
      function myFunction() {
        alert("Registered successfully");
        header ("location: index.php");
      }
    </script>
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
