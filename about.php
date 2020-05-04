<?php
	session_start();
	error_reporting(0);
  //include_once('C:\xampp\htdocs\esperanto\template\header.php');
	include_once('C:\xampp\htdocs\esperanto\navbar_check.php');
	$_SESSION["is_login"] = true;
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

      <?php
        if($_SESSION['username']== true){
      			?>
             <h4>Welcome <?php echo $_SESSION['username']; ?></h4>
      			<?php
       }
       ?>

      <p class="h1 text-center font-weight-bold" style="padding: 10px">About Us</p>
			<hr>
      <p class="h2 text text-primary font-weight-bold" style="padding: 10px">Dr Mohamed Menacer</p>
			<p class="h6 text text-dark font-weight-bold" style="padding-left: 10px">Chairman and SLS project Coordinator</p>

			<div class="row" style="padding:10px">
				<div class="col-sm">
					<p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
				</div>
				<div class="col-sm">
					<img src="images/download.png"  style="width:100%" style="height:100%">
				</div>
			</div>


      <hr>

      <p class="h2 text text-primary font-weight-bold" style="padding: 10px">Mr Rashid Kaddour</p>
			<p class="h6 text text-dark font-weight-bold" style="padding-left: 10px">Treasurer and Esperanto Coordinator</p>

			<div class="row" style="padding:10px">
				<div class="col-sm">
					<p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
				</div>
				<div class="col-sm">
					<img src="images/download.png"  style="width:100%" style="height:100%">
				</div>
			</div>

      <hr>

      <p class="h2 text text-primary font-weight-bold" style="padding: 10px">Mr Mohamed Amine Menacer</p>
			<p class="h6 text text-dark font-weight-bold" style="padding-left: 10px">Chief technical and social officer</p>

			<div class="row" style="padding:10px">
				<div class="col-sm">
					<p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
				</div>
				<div class="col-sm">
					<img src="images/download.png"  style="width:100%" style="height:80px">
				</div>
			</div>


		<hr>

		<p class="h2 text text-primary font-weight-bold" style="padding: 10px">Dr Mohamed Boudina</p>
		<p class="h6 text text-dark font-weight-bold" style="padding-left: 10px">Secretary and admin</p>

		<div class="row" style="padding:10px">
			<div class="col-sm">
				<p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
			</div>
			<div class="col-sm">
				<img src="images/download.png"  style="width:100%" style="height:80px">
			</div>
		</div>

		<hr>

	<p class="h2 text text-primary font-weight-bold" style="padding: 10px">Mr Bachir Mahboub</p>
	<p class="h6 text text-dark font-weight-bold" style="padding-left: 10px">SES program coodinator</p>

	<div class="row" style="padding:10px">
		<div class="col-sm">
			<p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
		</div>
		<div class="col-sm">
			<img src="images/download.png"  style="width:100%" style="height:80px">
		</div>
	</div>
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
