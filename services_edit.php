<?php
//Database Connection
session_start();
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');	
$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

if(isset($_GET['edit_id'])){
 $edit_id = mysqli_real_escape_string($conn, $_GET['edit_id']);
 $sql = "SELECT * FROM services WHERE id =" .$_GET['edit_id'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}

if(isset($_POST['btn-update'])){
 $services_title = $_POST['services_title'];
 $services_desc = $_POST['services_desc'];

 $update = "UPDATE services SET services_title='$services_title', services_desc='$services_desc' WHERE id=". $_GET['edit_id'];
 $update = mysqli_query($conn, $update);

 ?>								
			<div class="alert alert-success mt-5 ml-5 mr-5" role="alert">
			Updated successfully</div>       
	<?php

}
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Dellys website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="./about_us.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
</html>
  <body>


	<div class="container" style="padding: 20px">
  <div class="row">
    
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h4>Edit Information</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <form method="post">
                         <div class="form-group row">
                               
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-sm-4 col-md-4 col-form-label"><b>Services title:</b></label> 
                                <div class="col-sm-8 col-md-8">
                                 <input type="text" name="services_title" aria-label="text" class="form-control" value="<?php echo $row['services_title']; ?>"> 
                                </div>
                              </div>                              
                              <div class="form-group row">
                                <label for="email" class="col-sm-4 col-md-4 col-form-label"><b>Services description:</b></label> 
                                <div class="col-sm-8 col-md-8">
																																		<textarea name="services_desc" rows="15" class="form-control"><?php echo $row['services_desc']; ?></textarea>
                                </div>
                              </div>
																														                           
                              
                             <form action="services_edit.php" method="GET">
                               <button type="submit" name="btn-update" class="btn btn-primary">Update</button>

                               <a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true" name="btn-update">Back</a>
                              </form>

                              </div>
         
                           </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  </div>

				<?php
     include_once('C:\xampp\htdocs\esperanto\template\footer.php');
   	?>
    
  </body>
  
  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>

<script>
	function get() {
  var arrayOfRows = document.getElementById("ta").value.split("\n");
  var docfrag = document.createDocumentFragment();
  
  var p = document.getElementById("result");
  while (p.firstChild) {
    p.removeChild(p.firstChild);
  }
  
  arrayOfRows.forEach(function(row, index, array) {
    var span = document.createElement("span");
    span.textContent = row;
    docfrag.appendChild(span);
    if(index < array.length - 1) {
      docfrag.appendChild(document.createElement("br"));
    }
		});
	}

  p.appendChild(docfrag);

</script>




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

</style>

