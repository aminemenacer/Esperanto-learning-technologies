<?php
ob_start();
session_start();
error_reporting(0);
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

if(!$conn){
  echo 'Connection error: '. mysqli_connect_error();
}

if(isset($_POST['submit'])){
 if(getimagesize($_FILES['image']['tmp_name'])==FALSE){
  echo 'failed';
 } else{
  $image=base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
  saveimage($image);
 }
}

function saveimage($image){
 $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

 if(!$conn){
   echo 'Connection error: '. mysqli_connect_error();
 }

 $sql="INSERT INTO slideshow(image) VALUES('$image')";
 $query=mysqli_query($conn,$sql);
 if($query){
  echo '';
 }else{
  echo '';
 }
}

function display(){
 $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

 if(!$conn){
   echo 'Connection error: '. mysqli_connect_error();
 }
 $sql="SELECT * FROM slideshow";
 $query=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($query);
 for($i=0; $i < $num; $i++){
  $result=mysqli_fetch_array($query);
  $img=$result['image'];
  echo '<img width=130px ; src="data:image;base64, '.$img.' ">';
 }
}



?>
 <br>
 <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"/>  
  <br />  
  <input type="submit" name="submit" id="insert" value="Submit" class="btn btn-primary"/>  
 </form>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Images</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php display(); ?></td>
      <?php echo "<td style='text-align: center'>
       <button style='background-color:#5AE339' onclick='test()' class='col_v'><a class='abtn' href=\"services_view.php?id=".$row['id']."\">View</a></button>
       <button style='background-color:#618AD6' class='col_e'><a class='abtn' href=\"services_edit.php?edit_id=".$row['id']."\">Edit</a></button> "; ?>
      
    </tr>


  </tbody>
</table>
<br>


<?php require('objective_learning_table.php'); ?>


<!doctype html>
<html lang="en">
  <head>
    <link rel="shortcut icon"  href="images/favicon.ico" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Esperanto</title>
  </head>
  <body style="overflow-x: hidden;">


	<div class="container" style="padding: 30px">


</div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  </body>
</html>

   
