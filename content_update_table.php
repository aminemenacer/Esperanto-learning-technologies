<?php

  $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

   if (isset($_POST['contact_btn'])) {
			$num_of_children = ($_POST['num_of_children']);
   $weekly_attendance = ($_POST['weekly_attendance']);
   $monthly_attendance = ($_POST['monthly_attendance']);
   $online_attendance = ($_POST['online_attendance']);



   $sql = "INSERT INTO content_update(num_of_children, weekly_attendance, monthly_attendance, online_attendance) VALUES('$weekly_attendance','$monthly_attendance', $online_attendance)";
   $result = mysqli_query($conn ,$sql);
   if($result){
        echo "Submitted successfully";
        }
  }else{
   //  echo 'submitted unsuccessfully';
  }

?>

<!doctype html>


<html lang="en">
  <head>
    <title>Dellys website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />


    <link href="./contact_us.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
</html>


				<div id="scrollmenu" style="padding: 20px">

			<?php

     $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

						if(!$conn){
							echo 'Connection error: '. mysqli_connect_error();
							}

						$sql = "SELECT id, num_of_children, weekly_attendance, monthly_attendance, online_attendance from content_update";

						if(isset($_GET['id'])){
								// escape sql chars
								$id = mysqli_real_escape_string($conn, $_GET['id']);
								// make sql
								$sql = "SELECT * FROM content_update WHERE id = $id";
								// get the query result
								$result = mysqli_query($conn, $sql);
								// fetch result in array format
								$pizza = mysqli_fetch_assoc($result);
								mysqli_free_result($result);
								mysqli_close($conn);
							}

						if($result = mysqli_query($conn, $sql)){
										if(mysqli_num_rows($result) > 0){

  	?>

  <?php
						echo "<table class='table responsive-card-table striped table-responsive' id='table-size' ";

							echo "<tr>";
								echo "<th class='bg-primary text-light' style='text-align: center'>Num of children</th>";
								echo "<th class='bg-primary text-light' style='text-align: center'>Weekly attendance</th>";
								echo "<th class='bg-primary text-light' style='text-align: center'>Monthly attendance</th>";
								echo "<th class='bg-primary text-light' style='text-align: center'>Online attendance</th>";
								echo "<th class='bg-primary text-light' style='text-align: center'>Actions</th>";

							echo "</tr>";

			while($row = mysqli_fetch_array($result)){
											echo "<td class='bg-primary text-light font-weight-bold' style='text-align: center' >" . $row['num_of_children'] . "</td>";
											echo "<td style='text-align: center' >" . $row['weekly_attendance'] . "</td>";
											echo "<td style='text-align: center' >" . $row['monthly_attendance'] . "</td>";
											echo "<td style='text-align: center' >" . $row['online_attendance'] . "</td>";
								echo "<td style='text-align: center'>
											<button style='background-color:#5AE339' onclick='test()' class='col_v'><a class='abtn' href=\"content_update_view.php?id=".$row['id']."\">View</a></button>
											<button style='background-color:#618AD6' class='col_e'><a class='abtn' href=\"content_update_edit.php?edit_id=".$row['id']."\">Edit</a></button> </td>";

									?>

  <?php

echo "</tr>";
         }
         echo "</table>";
         mysqli_free_result($result);
     } else{
         echo "No records matching your query were found.";
     }
 } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 }


   ?>

        </div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
