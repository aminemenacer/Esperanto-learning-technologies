

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

</style>


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


    <?php
	include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

    $sql = "SELECT id, email, firstname, surname, phone, date_of_birth, date_created, type from users";

    if(isset($_GET['id'])){
     // escape sql chars
     $id = mysqli_real_escape_string($conn, $_GET['id']);
     // make sql
     $sql = "SELECT * FROM users WHERE id = $id";
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


				<br>
				<div class="row ml-3">

							<!-- new button -->
						<div class="col-sm-4 col-md-4">
								<button type="button" class="btn btn-primary ml-3"><a class='abtn' href="admin_add_user.php">Add new user</a></button>
						</div>

							<!-- total users -->
						<div class=" ml-3 col-sm-3 col-md-3">
									<?php 

										$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

										if(!$conn){
											echo 'Connection error: '. mysqli_connect_error();
										}

										$result=mysqli_query($conn, "SELECT count(*) as total from users");
										$data=mysqli_fetch_assoc($result);

										?>
								<h6 class="font-weight-bold text-primary mt-2">Total num of users:  <?php echo $data['total']; ?> </h6>
						</div>	

						<!-- search -->
						<br>	
						<div class="ml-3 col-md-4 col-sm-4">

							<?php 
								$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

								if(!$conn){
									echo 'Connection error: '. mysqli_connect_error();
									}

									if(isset($_POST['search'])){
										$searchKey = $_POST['search'];
										$sql = "SELECT * FROM users WHERE firstname LIKE '%$searchKey%'";
									}else
										$sql = "SELECT * FROM users";
										$result = mysqli_query($conn,$sql);							
								?>

									<form method="POST" >
										<input class="form-control" name="search" type="text" placeholder="Search" aria-label="Search">
									</form>						
						</div>

  </div>				



							
      <?php								
									echo "<table class='table table-striped table-responsive ml-5 table-hover overflow-hidden'>";
             echo "<tr>";
													// echo "<th>id</th>";
														echo "<th>Firstame</th>";
														echo "<th>Surame</th>";
														echo "<th>Email</th>";
														echo "<th>Date of birth</th>";
														echo "<th>Type</th>";
														echo "<th>Last Login time</th>";
														echo "<th>Actions</th>";
										
         while($row = mysqli_fetch_array($result)){									
             echo "<tr>";
																// echo "<td>" . $row['id'] . "</td>";                 
																	echo "<td>" . $row['firstname'] . "</td>";
																	echo "<td>" . $row['surname'] . "</td>";
																	echo "<td>" . $row['email'] . "</td>";
																	echo "<td>" . $row['date_of_birth'] . "</td>";
																	echo "<td>" . $row['type'] . "</td>";		
																	echo "<td style='color:blue' >" . $row['last_activity'] . "</td>";	
              echo "<td>
                 <button style='background-color:#5AE339' onclick='test()' class='col_v'><a class='abtn' href=\"view.php?id=".$row['id']."\">View</a></button>
																	<button style='background-color:#2D62F5'  class='col_d'><a class='abtn' href=\"edit.php?id=".$row['id']."\">Edit</a></button>																
                 <button style='background-color:#F94040' myFunction(); class='col_d'><a class='abtn' href=\"delete.php?id=".$row['id']."\">Delete</a></button>";

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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>


</html>
