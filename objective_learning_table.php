<?php

  $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

   if (isset($_POST['contact_btn'])) {
	  $academic_title = ($_POST['academic_title']);
    $academic_desc = ($_POST['academic_desc']);

   $sql = "INSERT INTO objective_learning(ol_title, ol_desc, image) VALUES('$ol_title','$ol_desc', '$image')";
   $result = mysqli_query($conn ,$sql);
   if($result){
        echo "Submitted successfully";
        }
  }else{
   //  echo 'submitted unsuccessfully';
  }



  function saveimage1($image){
   $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );
  
   if(!$conn){
     echo 'Connection error: '. mysqli_connect_error();
   }
  
   $sql="INSERT * INTO objective_learning(image) VALUES('$image')";
   $query=mysqli_query($conn,$sql);
   if($query){
    echo '';
   }else{
    echo '';
   }
  }
  
  function display1(){
   $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );
  
   if(!$conn){
     echo 'Connection error: '. mysqli_connect_error();
   }
   $sql="SELECT image FROM objective_learning";
   $query=mysqli_query($conn,$sql);
   $num=mysqli_num_rows($query);
   for($i=0; $i < $num; $i++){
    $result=mysqli_fetch_array($query);
    $img=$result['image'];
    echo '<img width=130px ; src="data:image;base64, '.$img.' ">';
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
<hr class="font-weight-bold">
<form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"/>  
  <br />  
  <input type="submit" name="submit" id="insert" value="Submit" class="btn btn-primary"/>  
 </form>

				<div id="scrollmenu" style="padding: 50px">

			<?php

     $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

						if(!$conn){
							echo 'Connection error: '. mysqli_connect_error();
							}

						$sql = "SELECT id, ol_title, ol_desc, image from objective_learning";

						if(isset($_GET['id'])){
								// escape sql chars
								$id = mysqli_real_escape_string($conn, $_GET['id']);
								// make sql
								$sql = "SELECT ol_title, ol_desc, image FROM objective_learning WHERE id = $id";
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
          <button type="button" class="btn btn-primary"><a class='abtn' href="admin_add_announcement.php">Add Academic support text</a></button>
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


         echo "<table class='table table-striped' id='table-size' ";

             echo "<tr>";
              echo "<th class='bg-primary text-light text-center'>Title</th>";
              echo "<th class='bg-primary text-light'>Description</th>";
              echo "<th class='bg-primary text-light'>Image</th>";
														echo "<th class='bg-primary text-light text-center'>Actions</th>";

             echo "</tr>";

         while($row = mysqli_fetch_array($result)){
                 echo "<td style='text-align: center' >" . $row['ol_title'] . "</td>";
                 echo "<td style='white-space: pre-line;' style='text-align: center' >" . $row['ol_desc'] . "</td>";
                 echo "<td style='white-space: pre-line;' style='text-align: center' >" ?> <?php display1(); ?> <?php "</td>";
              echo "<td style='text-align: center'>
                 <button style='background-color:#5AE339' onclick='test()' class='col_v'><a class='abtn' href=\"academic_support_view.php?id=".$row['id']."\">View</a></button>
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
