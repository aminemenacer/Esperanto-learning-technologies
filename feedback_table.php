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

.col_d{
padding: 9px 12px;
padding-top: 7px;
margin-bottom: 0;
font-size: 14px;
line-height: 20px;
color: #5e5e5e;
text-align: center;
vertical-align: middle;
cursor: pointer;
background-color: #d1dade;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
background-image: none !important;
border: none;
text-shadow: none;
box-shadow: none;
transition: all 0.12s linear 0s !important;
font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.col_v{
 background-color: green;
 display: inline-block;
padding: 9px 12px;
padding-top: 7px;
margin-bottom: 0;
font-size: 14px;
line-height: 20px;
color: #5e5e5e;
text-align: center;
vertical-align: middle;
cursor: pointer;
background-color: #d1dade;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
background-image: none !important;
border: none;
text-shadow: none;
box-shadow: none;
transition: all 0.12s linear 0s !important;
font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.col_e{
 background-color: blue;
 display: inline-block;
padding: 9px 12px;
padding-top: 7px;
margin-bottom: 0;
font-size: 14px;
line-height: 20px;
color: #5e5e5e;
text-align: center;
vertical-align: middle;
cursor: pointer;
background-color: #d1dade;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
background-image: none !important;
border: none;
text-shadow: none;
box-shadow: none;
transition: all 0.12s linear 0s !important;
font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.abtn{
 color: white;
}

body{
	overflow: hidden;
	overflow-x: hidden;
}


.item {
    display:inline-block;
    width:150px;
    height:150px;
    text-align:center;
    line-height:150px;
}

.scroll{
	data-smooth-scroll;
}

#cut{ 
 width: 280px;
	white-space: nowrap;
	overflow: hidden;
	display: inline-block;
	text-overflow: ellipsis;
	margin: 0;
}

</style>




<?php
	//	session_start();
  $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

   if (isset($_POST['contact_btn'])) {
			$firstname = ($_POST['firstname']);
   $email = ($_POST['email']);
			$feedback = ($_POST['feedback']);
			$date_created = ($_POST['date_created']);

   $sql = "INSERT INTO feedback(firstname, email, feedback, date_created) VALUES('$firstname','$email', '$feedback', '$date_created')";
   $result = mysqli_query($conn ,$sql);
   if($result){
				echo "Submitted successfully";
				}else{
     echo 'submitted unsuccessfully';
  }
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

	<body class="scroll">
				<div id="columns data-smooth-scroll" >

									<?php

											$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

												if(!$conn){
													echo 'Connection error: '. mysqli_connect_error();
													}

												$sql = "SELECT * from feedback";

												if(isset($_GET['id'])){
														// escape sql chars
														$id = mysqli_real_escape_string($conn, $_GET['id']);
														// make sql
														$sql = "SELECT * FROM feedback WHERE id = $id";
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
									echo "<table class='table responsive-card-table striped table-responsive table-hover text-nowrap display:block col-lg-12 col-xl-12'>";
             echo "<tr>";
													// echo "<th>id</th>";
														echo "<th>Firstame</th>";
														echo "<th>Email</th>";
														echo "<th>Feedback</th>";
														echo "<th>Date</th>";
														echo "<th>Actions</th>";
										
         while($row = mysqli_fetch_array($result)){									
             echo "<tr>";
																// echo "<td>" . $row['id'] . "</td>";                 
																	echo "<td>" . $row['firstname'] . "</td>";
																	echo "<td>" . $row['email'] . "</td>";
																	echo "<td>" . $row['feedback'] . "</td>";
																	echo "<td>" . $row['date_created'] . "</td>";

              echo "<td>
                 <button style='background-color:#5AE339' onclick='test()' class='col_v'><a class='abtn' href=\"feedback_view.php?id=".$row['id']."\">View</a></button>
																	<button style='background-color:#2D62F5'  class='col_d'><a class='abtn' href=\"mailto:?edit_id=".$row['id']."\">Edit</a></button>																
                ";

               ?>
									<?php

							echo "</tr>";
									}
									echo "</table>";
         mysqli_free_result($result);
     } else{
						?>
							<button type="button" class="btn btn-primary"><a class='abtn' href="admin_add_user.php">Add new user</a></button><br><br>
						<?php
         echo "No users available.";
									}
					} else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
					}

							?>

					</div>
			</body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


