<?php
session_start();
error_reporting(0);
//include_once('C:\xampp\htdocs\esperanto\template\header.php');
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');


  if(isset($_POST['contact_btn'])) {
   $firstname = ($_POST['firstname']);
   $email = ($_POST['email']);
   $feedback = ($_POST['feedback']);

   $sql = "INSERT INTO feedback(firstname, email, feedback) VALUES('$firstname', '$email', '$feedback')";
   $result = mysqli_query($conn ,$sql);
   if($result){
       echo 'submitted successfully';
     //  header("Location: home.php");
        }
  }else{
    // echo 'submitted unsuccessfully';
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <link rel="shortcut icon"  href="images/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Esperanto</title>
  </head>
  <body style="overflow-x: hidden;">

  		<div class="container">
     <p class="h1 text-center" style="padding: 30px">Contact us</p>


      <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10">
          <form method="POST" action="contact.php">
               <div class="form-group">
                 <div class="form-group">
                 <label for="text"><b>Full name:</b></label>
                 <input name="firstname" type="text" class="form-control" id="text" placeholder="name">
                 </div>

                 <label for="exampleInputEmail1"><b>Email address:</b></label>
                 <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
               </div>

             <div class="form-group">
               <label for="exampleFormControlTextarea1"><b>Enter message here:</b></label>
               <textarea name="feedback" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
             </div>

             <button type="submit" name="contact_btn" class="btn btn-primary" style="margin-bottom: 10px">Submit</button>
             </form>
        </div>
        <div class="col-1">

        </div>
      </div>

    </div>




				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</head>
</html>

<?php
     include_once('C:\xampp\htdocs\esperanto\template\footer.php');
    ?>
