

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
	overflow: auto;
	overflow-x: auto;
}

#cut{
		max-lines: 3;
  position: relative;
  max-height: calc(var(--lh) * var(--max-lines));
  overflow: hidden;
		width: 50rem;
  padding-right: 1rem; /* space for ellipsis */
}

</style>


<?php

  $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

   if (isset($_POST['contact_btn'])) {
	  $academic_title = ($_POST['academic_title']);
    $academic_desc = ($_POST['academic_desc']);

   $sql = "INSERT INTO academic_support(academic_title, academic_desc) VALUES('$academic_title','$academic_desc')";
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

						$sql = "SELECT id, academic_title, academic_desc from academic_support";

						if(isset($_GET['id'])){
								// escape sql chars
								$id = mysqli_real_escape_string($conn, $_GET['id']);
								// make sql
								$sql = "SELECT academic_title, academic_desc FROM academic_support WHERE id = $id";
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

         echo "<table class='table responsive-card-table striped table-responsive table-hover text-nowrap col-lg-12 col-xl-12' ";

             echo "<tr>";
              echo "<th class='bg-primary text-light text-center'>Title</th>";
           	  echo "<th class='bg-primary text-light'>Description</th>";
														echo "<th class='bg-primary text-light text-center'>Actions</th>";

             echo "</tr>";

         while($row = mysqli_fetch_array($result)){
                 echo "<td style='text-align: center'>" . $row['academic_title'] . "</td>";
                 echo "<td id='cut' style='text-align: center' >" . $row['academic_desc'] . "</td>";
														echo"
														<td style='text-align: center'>
                 <button style='background-color:#5AE339' class='col_v'><a class='abtn' href=\"academic_support_view.php?id=".$row['id']."\">View</a></button>
																	<button style='background-color:#618AD6' class='col_e'><a class='abtn' href=\"academic_support_edit.php?edit_id=".$row['id']."\">Edit</a></button> ";
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
