

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

a:hover {
}

#cut{
		max-lines: 3;
  position: relative;
  max-height: calc(var(--lh) * var(--max-lines));
  overflow: hidden;
		width: 20px;
  padding-right: 1rem; /* space for ellipsis */
		overflow-y: hidden;
		overflow-x: hidden;
}


</style>
		
<?php

include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

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

    <?php
    error_reporting(0);
				$sql = "SELECT * FROM messages ORDER BY date_created DESC LIMIT 0, 1000";
				
    if(isset($_GET['id'])){

     // escape sql chars
     $id = mysqli_real_escape_string($conn, $_GET['id']);
     // make sql
     $sql = "SELECT * FROM messages ORDER BY date_created DESC LIMIT 0, 1000";
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
      <div class="row">

						<div class="col-sm-6">
								<button type="button" class="btn btn-primary"><a class='abtn' href="message_send_from_user_to_admin.php">Send new message</a></button>
						</div>

        <div class="col-sm-6">
          <form  method="post" class="form-inline md-form mr-auto">
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
	
          </form>
        </div>

				
      </div>

     
      <?php

         echo "<table class='table responsive-card-table striped table-responsive table-hover text-nowrap col-lg-12 col-xl-12'>";
             echo "<tr>";
                 echo "<th>Sender</th>";
                 echo "<th>Reciever</th>";
                 echo "<th>Subject</th>";
																 echo "<th >Message</th>";
																	echo "<th>Date</th>";
																	echo "<th>Seen</th>";
                 echo "<th>Actions</th>";


         while($row = mysqli_fetch_array($result)){
             echo "<tr>";
																	echo "<td style='width:200px'>" . $row['sender_name'] . "</td>";
																	echo "<td style='width:200px'>" . $row['email'] . "</td>";
                 echo "<td>" . $row['subject_title'] . "</td>";
                 echo "<td id='cut' style='width:200px'>" . $row['messages'] . "</td>";
																	echo "<td>" . $row['date_created'] . "</td>";
																	echo "<td>" . $row['open'] . "</td>";
	            echo "<td>
                 <button style='background-color:#5AE339'  class='col_v'><a class='abtn' href=\"messages_view_between_users.php?id=".$row['id']."\">View</a></button>                                 
                 ";

               ?>
  <?php

echo "</tr>";
         }
									echo "</table>";
									
         mysqli_free_result($result);
     } else{
								?>

						<div class="row">
						<!------->
							<div class="col-sm-6 col-md-6 col-xl-6 col-lg-6 ml-3 mt-2" style="padding:5px">							
									<button type="button" class="btn btn-primary"><a class='abtn' href="message_send_from_admin_to_user.php">Send new message</a></button>
							</div>

							<!------->
							<div class="col col-xl-3 col-lg-3 col-md-3 col-sm-3 mt-3">

							<?php 
								$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

								if(!$conn){
									echo 'Connection error: '. mysqli_connect_error();
									}

									if(isset($_POST['searchqq'])){
										$searchKey = $_POST['searchqq'];
										$sql = "SELECT * FROM messages WHERE sender_name LIKE '%$searchKey%' OR email LIKE '%$searchKey%'";
									}else
										$sql = "SELECT * FROM messages";
										$result = mysqli_query($conn,$sql);							
								?>

									<form method="POST">
										<input class="form-control" name="searchqq" type="text" placeholder="Search" aria-label="Search">
									</form>		

							</div>
      </div>


								<?php
						
         echo "Messages between users is empty.";
     }
 } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 }

?>

</div>








<style type="text/css">


.btn_reg{
  color: white;
}


</style>


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


   </div>
