<?php
ob_start();
session_start();
//error_reporting(0);
//include_once('C:\xampp\htdocs\esperanto\template\header.php');
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

if(isset($_POST['register_btn'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $password2=mysqli_real_escape_string($conn,$_POST['password2']);
    $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
    $surname=mysqli_real_escape_string($conn,$_POST['surname']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $date_of_birth=mysqli_real_escape_string($conn,$_POST['date_of_birth']);

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result=mysqli_query($conn,$query);
    if($result){
					
					if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
						echo("$email is a valid email address");
					} else {
									echo("$email is not a valid email address");
					}

    if( mysqli_num_rows($result) > 0){
      echo '<script language="javascript">';
      echo 'alert("Email already exists")';
      echo '</script>';
    }else{
      if($password==$password2){           //Create User
        $password=md5($password); //hash password before storing for security purposes
        $password2=md5($password2); //hash password before storing for security purposes
        $sql="INSERT INTO users(email, password, password2, firstname, surname, phone, date_of_birth)VALUES('$email','$password','$password2','$firstname','$surname','$phone','$date_of_birth')";

        mysqli_query($conn,$sql);
        $_SESSION['email']=$email;
        header("location:login.php");  //redirect home page
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

     <p class="h1 text-center">Membership</p>

         <form method="POST" action="membership.php" padding="30px">
             <div class="card border-primary mt-4">
              <div class="card-header"><b>Personal details</b></div>
              <div class="card-body">

               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="inputEmail4">First name:</label>
                   <input type="text" class="form-control" id="inputEmail4" placeholder="first name" name="firstname" required>
                 </div>
                 <div class="form-group col-md-6">
                   <label for="inputEmail4">Email:</label>
                   <input type="text" class="form-control" id="inputEmail4" placeholder="email" name="email" required>
                 </div>
               </div>

               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="inputPassword4">Password:</label>
                   <input type="password" class="form-control" id="inputPassword4" placeholder="password" name="password" required>
                 </div>
                 <div class="form-group col-md-6">
                   <label for="inputPassword4">Retype Password:</label>
                   <input type="password" class="form-control" id="inputPassword4" placeholder="Retype password" name="password2" required>
                 </div>
               </div>

               <div class="form-row">

                 <div class="form-group col-md-6">
                   <label for="inputPassword4">Surname:</label>
                   <input type="text" class="form-control" id="inputPassword4" placeholder="surname" name="surname" required>
                 </div>
                 <div class="form-group col-md-6">
                   <label for="inputAddress2">Phone number:</label>
                   <input type="text" class="form-control" id="inputAddress2" placeholder="phone number" name="phone" required>
                 </div>
               </div>
               <div class="form-row">
                <div class="form-group col-md-6">
                   <label>Date of birth:</label>
                   <input type="date" name="date_of_birth" min="1000-01-01" max="3000-12-31" class="form-control" required>
                </div>
               </div>
               <!--
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label>Type:</label>
                   <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInline1" value="Enabled" name="customRadioInline1" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInline1">Teacher</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInline2"  value="Disabled" name="customRadioInline1" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInline2">Student</label>
                    </div>
                 </div>
               </div>
             -->
             </div>
         </div>

         <!--
         <script>


           $('input:radio[name="customRadioInline1"]').change(function() {
                   $('select[name="qual_type"]').attr('disabled',this.value!="Enabled")
                   $('select[name="institute"]').attr('disabled',this.value!="Enabled")
                   $('select[name="upload"]').attr('disabled',this.value!="Enabled")

                   $("exampleFormControlTextarea1").prop('disabled', false);
                  //$("textarea").prop('disabled', false);


               });

               $(document).ready(function(){
                   $("#customRadioInline1").click(function(){
                       $("#exampleFormControlTextarea1").prop("disabled", false);
                   });
               });




               $('input:radio[name="customRadioInline1"]').change(function() {
                       $('select[name="course_date"]').attr('disabled',this.value!="Disabled")
                       $('select[name="course_time"]').attr('disabled',this.value!="Disabled")
                       $('select[name="course_level"]').attr('disabled',this.value!="Disabled")
                       $('select[name="course_subject"]').attr('disabled',this.value!="Disabled")
                       $('select[name="name_of_kin"]').attr('disabled',this.value!="Disabled")
                       $('select[name="school_year"]').attr('disabled',this.value!="Disabled")

                   });


         </script>

         <div class="card border-primary mt-4" >
          <div class="card-header"><b>Educational details</b></div>
          <div class="card-body">

            <div class="form-row">

             <div class="form-group col-md-6">
              <label>School year:</label>
               <select class="form-control" name="school_year" id="school_year" disabled>
                <option value="empty">Select an option</option>
                <option value="year_four">Year 4</option>
                <option value="year_five">Year 5</option>
                <option value="year_six">Year 6</option>
                <option value="year_seven">Year 7</option>
                <option value="year_eight">Year 8</option>
                <option value="year_nine">Year 9</option>
                <option value="year_ten">Year 10</option>
                <option value="year_eleven">Year 11</option>
                <option value="year_twelve">Year 12</option>
                <option value="year_thirteen">Year 13</option>
              </select>
             </div>

             <div class="form-group col-md-6" method="POST" action="register.php">
              <label>Course subject:</label>
               <select class="form-control" name="course_subject" id="course_subject" disabled>
                <option value="empty">Select an option</option>
                <option value="maths">Maths</option>
                <option value="english">English</option>
                <option value="arabic">Arabic</option>
              </select>
             </div>



           </div>

            <div class="form-row">

             <div class="form-group col-md-6">
              <label>Course level:</label>
               <select class="form-control" name="course_level" id="course_level" disabled>
                <option value="empty">Select an option</option>
                <option>KS1</option>
                <option>KS2</option>
                <option>KS3</option>
                <option>GCSE</option>
                <option>A levels</option>
              </select>
             </div>

             <div class="form-group col-md-6">
              <label>Course date:</label>
               <select class="form-control" name="course_date" id="course_date" disabled>
                <option value="empty">Select an option</option>
                <option>Tuesday</option>
                <option>Thurday</option>
                <option>Sunday</option>
              </select>
             </div>
           </div>

             <div class="form-row">

               <div class="form-group col-md-6">
                <label>Course time:</label>
                 <select class="form-control" name="course_time" id="course_time" disabled>
                  <option value="empty">Select an option</option>
                  <option>3pm - 5pm</option>
                  <option>4pm - 6pm</option>
                  <option>5pm - 7pm</option>
                </select>
               </div>
            </div>
          </div>
           </div>


           <div class="card border-primary mt-4" >
            <div class="card-header"><b>Teachers details</b></div>
            <div class="card-body">

              <div class="form-row">

               <div class="form-group col-md-6" method="POST" action="membership.php">

                <label>Qualification type:</label>
                 <select class="form-control" name="qual_type" id="qual_type" disabled>
                  <option value="empty">Select an option</option>
                  <option value="certificate">Higher Certificate</option>
                  <option value="diploma">National Diploma</option>
                  <option value="bachelor">Bachelor's Degree</option>
                  <option value="honors">Honours Degree</option>
                  <option value="masters">Master's Degree</option>
                  <option value="doctor">Doctoral Degree</option>
                </select>

               </div>

             </div>

              <div class="form-row">
               <div class="form-group col-md-6" method="POST" action="membership.php">
                <label>Institute:</label>
                 <select class="form-control" name="institute" id="institute" disabled>
                  <option value="empty">Select an option</option>
                  <option value="nottingham">Nottingham</option>
                  <option value="derby">Derby</option>
                  <option value="birmingham">Birmingham</option>
                </select>
               </div>

             </div>

               <div class="form-row">
                 <div class="form-group col-md-6">
                  <label>Achievments:</label>
                     <textarea class="form-control" name="achievments" id="exampleFormControlTextarea1" rows="5" disabled></textarea>
                 </div>
              </div>

            </div>

             </div>


         <div class="card border-primary mt-4" >
          <div class="card-header"><b>Payment details</b></div>
          <div class="card-body">

            <div class="form-row justify-content-center">

             <div class="form-group">


         <div class="col-12">
                   <span class="anchor" id="formPayment"></span>

                           <form >
                               <div class="form-group">
                                   <label for="cc_name">Card Holder's Name</label>
                                   <input type="text" class="form-control" id="cc_name" pattern="\w+ \w+.*" title="First and last name" required="required">
                               </div>
                               <div class="form-group">
                                   <label>Card Number</label>
                                   <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="">
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-12">Card Exp. Date</label>
                                   <div class="col-md-4">
                                       <select class="form-control" name="cc_exp_mo" size="0">
                                           <option value="01">01</option>
                                           <option value="02">02</option>
                                           <option value="03">03</option>
                                           <option value="04">04</option>
                                           <option value="05">05</option>
                                           <option value="06">06</option>
                                           <option value="07">07</option>
                                           <option value="08">08</option>
                                           <option value="09">09</option>
                                           <option value="10">10</option>
                                           <option value="11">11</option>
                                           <option value="12">12</option>
                                       </select>
                                   </div>
                                   <div class="col-md-4">
                                       <select class="form-control" name="cc_exp_yr" size="0">
                                           <option>2018</option>
                                           <option>2019</option>
                                           <option>2020</option>
                                           <option>2021</option>
                                           <option>2022</option>
                                       </select>
                                   </div>
                                   <div class="col-md-4">
                                       <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="" placeholder="CVC">
                                   </div>
                               </div>
                               <div class="row">
                                   <label class="col-md-12">Amount</label>
                               </div>
                               <div class="form-inline">
                                   <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                       <input type="text" class="form-control text-right" id="exampleInputAmount" placeholder="00">
                                       <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                   </div>
                               </div>
                               <hr>
                               <div class="form-group row">
                                   <div class="col-md-6">
                                       <button type="reset" class="btn btn-default btn-lg btn-block">Cancel</button>
                                   </div>
                                   <div class="col-md-6">
                                       <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                                   </div>
                               </div>


                           </form>

                 </div>
                </div>
              </div>
            -->

              <div class="container btn pull-end" style="padding: 20px">
                <div class="form-group btn pull-right">
                  <button type="submit" name="register_btn" class="btn btn-primary"  class="form-group">Register</button>
                </div>

                <div class="text" style="text-align: center;" style="padding-bottom: 30px" style="padding-top: 10px">
                 Already registered ? click <a href="login.php">here</a> to login.
                </div>

              </div>
       </div>
     </div>

      </form>

    </div>


   </div>

</div>

    <script>
      function myFunction() {
        setTimeout(function(){ alert("Registered successfully"); });
      }
    </script>

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
