<?php
				session_start();
				error_reporting(0);
      //  include_once('C:\xampp\htdocs\esperanto\template\header.php');
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
  if($_SESSION['username']== true){
			?>
       <h4>Welcome <?php echo $_SESSION['username']; ?></h4>
			<?php
 }
 ?>



    <div class="container" style="padding: 30px">

      <p class="h1 text-center" style="padding: 10px">FAQ's</p>

			<hr>

      <div class="container py-3">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="accordion" id="faqExample">
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Q. What is Esperanto Learning technologies?
                            </button>
                          </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> Esperanto is a non-for-profit social enterprise that provides community based education for primary and secondary school.
										          We are a group of IT academies and developers, with several years of experience at a higher education level with a track
										          record in research and development in learning technologies.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Q: Who are the founders of Esperanto Learning Technologies?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
													<h6 class=" text text-dark">- Dr Mohamed Menacer</h6>
													<p class=" text text-dark">Chairman and SLS project Coordinator</p>

													<h6 class=" text text-dark">- Mr Rashid Kaddour</h6>
													<p class=" text text-dark">Treasurer and Esperanto Coordinator</p>

													<h6 class=" text text-dark">- Mr Mohamed Amine Menacer</h6>
													<p class=" text text-dark">Chief technical and social officer</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Q. What services does Esperanto offer?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                             Esperanto learning technologies offers a smart education support program in numeracy and literacy based on IXL e-learning system for Maths and English.
														 There will be an online classroom account with a teacher’s account and between 30-50 student’s accounts. Esperanto will be providing weekly face-to-face with children and a continuous follow-up and online support all year round.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Q. What is the cost for a membership fee?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                        <div class="card-body">
                            All costs regarding memberships registration and monthly fees are located by click of the membership link at the top of the screen.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/row-->
</div>
<!--container-->

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
