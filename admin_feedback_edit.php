<?php
session_start();
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

//Get ID from Database
if(isset($_GET['edit_id'])){
 $sql = "SELECT * FROM feedback WHERE id =" .$_GET['edit_id'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}

//Update Information
if(isset($_POST['btn-update'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $feedback = $_POST['feedback'];

 $update = "UPDATE feedback SET name='$name', email='$email', feedback='$feedback' WHERE id=". $_GET['edit_id'];
 $update = mysqli_query($conn, $update);
  if ($update) {
     header("location: admin_logged_in.php");

  }else{
    echo "string";
  }
}
?>
<!--Create Edit form -->
<!doctype html>
<html>
<head>
  <link rel="shortcut icon"  href="images/favicon.ico" />
<body style="overflow-x: hidden;">
<form method="post">

 <div class="container" style="padding: 20px">
  <div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Edit feedback</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form >
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label"><b>Name:</b></label>
                                <div class="col-4">
                                	 <input type="text" name="name" aria-label="First name" class="form-control" value="<?php echo $row['name']; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label"><b>Email:</b></label>
                                <div class="col-4">
                                  <input type="text" name="email" aria-label="Email" class="form-control" value="<?php echo $row['email']; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label"><b>Feedback:</b></label>
                                <div class="col-4">
                                  <input type="text" name="feedback" aria-label="text" class="form-control" value="<?php echo $row['feedback']; ?>">
                                </div>
                              </div>

                              <div class="btns">

																									     <form action="admin_feedback_edit.php" method="GET">
																									      <button type="submit" name="btn-update" onClick="update()" class="btn btn-primary">Update</button>
																														</form>

                               <a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true" name="btn-update">Cancel</a>

																									    </div>

                            </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
  </div>

  <script>
    function update(){
     var x;
     if(confirm("Updated data Sucessfully") == true){
     x= "update";
     }
    }
    </script>
  </div>

    </div>
  </head>
  </html>

<?php

include_once('C:\xampp\htdocs\esperanto\template\footer.php');
?>
