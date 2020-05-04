
<?php
		session_start();
	//	error_reporting(0);
		include_once('C:\xampp\htdocs\esperanto\navbar_check.php');

    $conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

    if(!$conn){
      echo 'Connection error: '. mysqli_connect_error();
    }

    $sql = "SELECT * FROM news";
    $result = $conn-> query($sql);



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


    <div class="container" style="padding: 30px">

      <p class="h1 text-center" style="padding: 10px">Announcements</p>


<?php
	$query = "SELECT * FROM news ORDER BY news_date DESC LIMIT 0, 1000";
	$results=mysqli_query($conn,$query);
	$row_count=mysqli_num_rows($results);

	while ($row = mysqli_fetch_array($results)) {
		?>
		<div class="card mt-4">
			<div class="card-body">
				<h5 class="card-title"><b><?php echo $row['news_title']; ?></b></h5>
				<hr>
				<p class="card-text word-wrap: break-word;"><?php echo $row['news_desc']; ?></p>
				<p class="card-text"><small class="text-muted"><?php echo $row['news_date']; ?></small></p>
			</div>
		</div>
		<?php
	}

	mysqli_query($conn,$query);
	mysqli_close($conn);
?>

</div>



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
