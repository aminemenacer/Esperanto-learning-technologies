<?php
ob_start();
session_start();
error_reporting(0);
//include_once('C:\xampp\htdocs\esperanto\template\header.php');
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

if(isset($_POST['register_btn'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $password2=mysqli_real_escape_string($conn,$_POST['password2']);
    $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
    $surname=mysqli_real_escape_string($conn,$_POST['surname']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $type=mysqli_real_escape_string($conn,$_POST['type']);
    $date_of_birth=mysqli_real_escape_string($conn,$_POST['date_of_birth']);

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result=mysqli_query($conn,$query);
    if($result){

    if( mysqli_num_rows($result) > 0){
      echo '<script language="javascript">';
      echo 'alert("Username already exists")';
      echo '</script>';
    }else{
      if($password==$password2){           //Create User
        $password=md5($password); //hash password before storing for security purposes
        $password2=md5($password2); //hash password before storing for security purposes
        $sql="INSERT INTO users(email, password, password2, firstname, surname, phone, date_of_birth, type)VALUES('$email','$password','$password2','$firstname','$surname','$phone','$date_of_birth','$type')";

        mysqli_query($conn,$sql);
        $_SESSION['email']=$email;
        header("location:admin_logged_in.php");  //redirect home page
        
      }else{
        $_SESSION['message']="The two password do not match";
        }
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Esperanto</title>
  </head>
  <body style="overflow-x: hidden;">



    <div class="container" style="padding: 30px">

     <p class="h1 text-center">Add user</p>

         <form method="POST" action="admin_add_user.php" padding="30px">
             <div class="card border-primary mt-4">
              <div class="card-header"><b>Personal details</b></div>
              <div class="card-body">

               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="inputEmail4">First name:</label>
                   <input type="text" class="form-control" id="inputEmail4" placeholder="first name" name="firstname">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="inputEmail4">Email:</label>
                   <input type="text" class="form-control" id="inputEmail4" placeholder="email" name="email">
                 </div>
               </div>

               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="inputPassword4">Password:</label>
                   <input type="password" class="form-control" id="inputPassword4" placeholder="password" name="password">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="inputPassword4">Retype Password:</label>
                   <input type="password" class="form-control" id="inputPassword4" placeholder="Retype password" name="password2">
                 </div>
               </div>

               <div class="form-row">

                 <div class="form-group col-md-6">
                   <label for="inputPassword4">Surname:</label>
                   <input type="text" class="form-control" id="inputPassword4" placeholder="surname" name="surname">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="inputAddress2">Phone number:</label>
                   <input type="text" class="form-control" id="inputAddress2" placeholder="phone number" name="phone">
                 </div>
               </div>
               <div class="form-row">
                <div class="form-group col-md-6">
                   <label>Date of birth:</label>
                   <input type="date" name="date_of_birth" min="1000-01-01" max="3000-12-31" class="form-control">
                </div>
               </div>
<!--
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label>Type:</label>
                   <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2"  value="Disabled" name="student_circ" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Student</label>
                   </div>
                   <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInline1" value="Enabled" name="teacher_circ" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInline1">Teacher</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInline2"  value="Disabled" name="admin_circ" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInline2">Admin</label>
                    </div>
                 </div>
               </div>
-->
             </div>
         </div>



              <div class="container btn pull-end" style="padding: 20px">
                <div class="form-group btn pull-right">
                  <form action="admin_add_user.php">
                    <a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
                   </form>
                 </div>
                <div class="form-group btn pull-right">
                  <button type="submit" name="register_btn" class="btn btn-primary"  class="form-group">Register</button>
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
