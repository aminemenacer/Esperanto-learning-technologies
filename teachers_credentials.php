<?php
//include_once('C:\xampp\htdocs\esperanto\template\header.php');
session_start();
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');
error_reporting(0);

$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

if(!$conn){
  echo 'Connection error: '. mysqli_connect_error();
}

//Get ID from Database
if(isset($_GET['edit_id'])){
 $edit_id = mysqli_real_escape_string($conn, $_GET['edit_id']);
 $sql = "SELECT * FROM users WHERE id =" .$_GET['edit_id'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}

//Update Information
if(isset($_POST['btn-update'])){
 $qual_type = $_POST['qual_type'];
 $institute = $_POST['institute'];
 $achievments = $_POST['achievments'];

 $update = "UPDATE users SET qual_type='$qual_type', institute='$institute', achievments='$achievments' WHERE id=". $_GET['edit_id'];
 $update = mysqli_query($conn, $update);
// if(!isset($sql)){
// die ("Error $sql" .mysqli_connect_error());
// }
// else
// {
 header("location: teachers_logged_in.php");
// }
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



    <div class="container" style="padding: 30px">

      <p class="h1 text-center" style="padding: 10px">Credentials page</p>

      <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.Ambitioni dedisse scripsisse iudicaretur. </p>

      <div class="container">
  <div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Your Credentials</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label"><b>Qualifications:</b></label>
                                <div class="col-8">
                                 <p><?php echo $_SESSION['qual_type'];?></p>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label"><b>Institution:</b></label>
                                <div class="col-8">
                                 <p><?php echo $_SESSION['institute'];?></p>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label"><b>Achievments:</b></label>
                                <div class="col-8">
                                  <p><?php echo $_SESSION['achievments'];?></p>
                                </div>
                              </div>
                              <form action="teachers_credentials.php">
                               <a href="#" class="btn btn-primary" role="button" aria-pressed="true">Edit course</a>
                              </form>

                              </div>
                            </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
  </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
 //       include_once('C:\xampp\htdocs\esperanto\template\footer.php');
      ?>
