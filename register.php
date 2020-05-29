<?php
session_start();
//include_once('C:\xampp\htdocs\esperanto\template\header.php');
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

//error_reporting(0);

if(isset($_POST['register_btn'])){
    $name=mysqli_real_escape_string($db_connect,$_POST['name']);
    $email=mysqli_real_escape_string($db_connect,$_POST['email']);
    $surname=mysqli_real_escape_string($db_connect,$_POST['surname']);
    $password=mysqli_real_escape_string($db_connect,$_POST['password']);
    $name_of_kin=mysqli_real_escape_string($db_connect,$_POST['name_of_kin']);
    $phone=mysqli_real_escape_string($db_connect,$_POST['phone']);
    $date_created=mysqli_real_escape_string($db_connect,$_POST['date_created']);


    $sql="INSERT INTO student_course_registration(name, email, surname, name_of_kin, phone, password, date_created) VALUES('$name','$email','$password', '$surname', '$name_of_kin', '$phone', '$date_created')";
    mysqli_query($db,$sql);
    $_SESSION['username']=$username;

    //  header("location:login.php");  //redirect home page
      echo 'you are a member';
    }else{
    //  echo 'error in registration';
    }

?>

<?php
		$query = mysqli_query($conn,"SELECT num_of_children FROM content_update");
		$final_results = array();
		while($results = mysqli_fetch_assoc($query)){
		$final_results[] = $results['num_of_children'];
		}

			$query1 = mysqli_query($conn,"SELECT weekly_attendance FROM content_update");
			$final_results_1 = array();
			while($results1 = mysqli_fetch_assoc($query1)){
			$final_results_1[] = $results1['weekly_attendance'];
			}

			$query2 = mysqli_query($conn,"SELECT monthly_attendance FROM content_update");
			$final_results_2 = array();
			while($results2 = mysqli_fetch_assoc($query2)){
			$final_results_2[] = $results2['monthly_attendance'];
			}

			$query3 = mysqli_query($conn,"SELECT online_attendance FROM content_update");
			$final_results_3 = array();
			while($results3 = mysqli_fetch_assoc($query3)){
			$final_results_3[] = $results3['online_attendance'];
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



    <div class="container" >

    <p class="h1 text-center" style="padding:20px" >Membership fees</p>
    <div class="table-responsive">
      <table class="table table-bordered table-responsive" style="padding:20px">
        <thead style="text-align:center">
          <tr style="text-align:center">
            <th scope="col" style="text-align:center"><b>Number of children</b></th>
            <th scope="col" style="text-align:center"><b>Weekly attendance</b><p style="text-align:center">(Contributions per week)</p></th>
            <th scope="col" style="text-align:center"><b>Monthly attendance</b><p style="text-align:center">(Contributions per month)</p></th>
            <th scope="col" style="text-align:center"><b>Online attendance</b><p style="text-align:center">(Contributions per month)</p></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><b>Registration</b></th>
            <td>£50 per child</td>
            <td>£40 per child</td>
            <td>£30 per child</td>
          </tr>
          <tr>
            <th scope="row"><b><?php echo $final_results[0] ?></b></th>
            <td><?php echo $final_results_1[0] ?></td>
            <td><?php echo $final_results_2[0] ?></td>
            <td><?php echo $final_results_3[0] ?></td>
          </tr>
          <tr>
            <th scope="row"><b><?php echo $final_results[1] ?></b></th>
            <td><?php echo $final_results_1[1] ?></td>
            <td><?php echo $final_results_2[1] ?></td>
            <td><?php echo $final_results_3[1] ?></td>
          </tr>
          <tr>
            <th scope="row"><b><?php echo $final_results[2] ?></b></th>
            <td><?php echo $final_results_1[2] ?></td>
            <td><?php echo $final_results_2[2] ?></td>
            <td><?php echo $final_results_3[2] ?></td>
          </tr>
          <tr>
            <th scope="row"><b><?php echo $final_results[3] ?></b></th>
            <td><?php echo $final_results_1[3] ?></td>
            <td><?php echo $final_results_2[3] ?></td>
            <td><?php echo $final_results_3[3] ?></td>
          </tr>
        </tbody>
      </table>
      </div>
     </div>
   </div>



    </div>








    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

		<!-- Compressed CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

		<!-- Compressed JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
				
		<!-- foundation-float.min.css: Compressed CSS with legacy Float Grid -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-float.min.css" integrity="sha256-4ldVyEvC86/kae2IBWw+eJrTiwNEbUUTmN0zkP4luL4=" crossorigin="anonymous">

		<!-- foundation-prototype.min.css: Compressed CSS with prototyping classes -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-prototype.min.css" integrity="sha256-BiKflOunI0SIxlTOOUCQ0HgwXrRrRwBkIYppEllPIok=" crossorigin="anonymous">

		<!-- foundation-rtl.min.css: Compressed CSS with right-to-left reading direction -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-rtl.min.css" integrity="sha256-F+9Ns8Z/1ZISonBbojH743hsmF3x3AlQdJEeD8DhQsE=" crossorigin="anonymous">
		<script>$('#element').foundation('_handleTabChange', $target, historyHandled);
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
