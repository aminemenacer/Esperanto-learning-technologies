

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-white bg-primary sticky-top">
      <img src="./images/esp_icon.jpg" width="60" height="60" class="d-inline-block align-top" alt="">
      <a class="navbar-brand ml-3" href="index.php" style="color:white" ><b><h6>Esperanto (ELT)</h6></b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" text-right id="navbarText">
        <ul class="navbar-nav ml-auto margin-left:20px mr-2">
          <li class="nav-item active text-white">
             <a class="nav-link text-white" href="index.php">Home</a>
           </li>
           <li class="nav-item active text-white">
             <a class="nav-link text-white" href="academic_support.php">Academic support</a>
           </li>
           <li class="nav-item active text-white">
             <a class="nav-link text-white" href="services.php">Services</a>
           </li>
           <li class="nav-item active text-white">
             <a class="nav-link text-white" href="register.php">Membership</a>
           </li>
           <li class="nav-item active text-white">
												<a class="nav-link text-white" href="news.php">Announcements</a>
           </li>
           <li class="nav-item active text-white">
             <a class="nav-link text-white" href="about.php">About</a>
           </li>
           <li class="nav-item active text-white">
             <a class="nav-link text-white" href="admin_logged_in.php">Admin</a>
           </li>
           <li class="nav-item active text-white">
             <a class="nav-link text-white" href="contact.php">Contact</a>
           </li>
											<!--
           <li class="nav-item active text-white">
             <a class="nav-link text-white font-weight-bold" href="logout.php">Logout</a>
           </li>
											-->
											<form class="form-inline sm-form mr-2 ml-2">
												<input class="form-control " type="text" placeholder="Search" aria-label="Search">
										</form>
										<div class="dropdown show">
											<a href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./images/pro-icon.png" style="width:35px"></a>
											</a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
													<a class="dropdown-item" href="admin_logged_in.php">Profile</a>
													<a class="dropdown-item" href="news.php">Announcements</a>
													<a class="dropdown-item" href="logout.php">Logout</a>
											</div>
									</div>
										<h6 class="text-light mt-2 ml-1"><?php echo $_SESSION['firstname']; ?></h6>
        </ul>

      </div>
    </nav>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
