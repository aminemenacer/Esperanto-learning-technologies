

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

						$sql = "SELECT id, services_title, services_desc from services";

						if(isset($_GET['id'])){
								// escape sql chars
								$id = mysqli_real_escape_string($conn, $_GET['id']);
								// make sql
								$sql = "SELECT * FROM services WHERE id = $id";
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
<!--
									<div class="row">
        <div class="col-5">
          <button type="button" class="btn btn-primary"><a class='abtn' href="admin_add_announcement.php">Add Service text</a></button>
        </div>

        <div class="col-7">
          <form action="admin_table.php" method="post" class="form-inline md-form mr-auto">
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" name="query" type="submit">Search</button>
          </form>
        </div>
      </div>
-->

  <?php


         echo "<table class='table table-striped table-responsive' id='table-size' ";

             echo "<tr>";
              echo "<th class='bg-primary text-light text-center' width='10px'>Title</th>";
														echo "<th class='bg-primary text-light' width='300px'>Description</th>";
														echo "<th class='bg-primary text-light text-center' width='100px'>Actions</th>";

             echo "</tr>";

         while($row = mysqli_fetch_array($result)){
                 echo "<td style='text-align: center' width='10px'>" . $row['services_title'] . "</td>";
                 echo "<td style='white-space: pre-line;'  style='text-align: center' width='300px' >" . $row['services_desc'] . "</td>";
              echo "<td style='text-align: center' width='100px'>
                 <button style='background-color:#5AE339' style='display:inline-block' onclick='test()' class='col_v'><a class='abtn' href=\"services_view.php?id=".$row['id']."\">View</a></button>
																	<button style='background-color:#618AD6' style='display:inline-block' class='col_e'><a class='abtn' href=\"services_edit.php?edit_id=".$row['id']."\">Edit</a></button> ";

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
