<?php
//include_once('C:\xampp\htdocs\esperanto\template\header.php');
session_start();
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
  </body>
  <!--
		<div class="ml-3 mr-3 mt-3" style="padding: 20px">

      <div class="row">
						
       <div class="col-sm-2">
         <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

           <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>

           <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="true">Messages</a>

           <a class="nav-link" id="v-pills-payment-tab" data-toggle="pill" href="#v-pills-payment" role="tab" aria-controls="v-pills-payment" aria-selected="true">Payment</a>

           <a class="nav-link" id="v-pills-academic-tab" data-toggle="pill" href="#v-pills-academic" role="tab" aria-controls="v-pills-academic" aria-selected="true">Academic</a>

           <a class="btn btn-outline-primary mt-3" href="logout.php" role="button">Logout</a>

         </div>
       </div>

       <div class="col-sm-9">
         <div class="tab-content" id="v-pills-tabContent">

           <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"></div>

           <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"></div>

           <div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab"><p3>Under development</p3></div>

           <div class="tab-pane fade" id="v-pills-academic" role="tabpanel" aria-labelledby="v-pills-academic-tab"><p3>Under development</p3></div>

         </div>
       </div>
					</div>
    </div>
    -->

  <div class="grid-x mt-3 mb-3 ml-3 mr-3">
    <div class="cell medium-2">
      <ul class="vertical tabs" data-deep-link="true" data-tabs id="example-tabs">
        <li class="tabs-title is-active"><a href="#panel1v"><b>Profile</b></a></li>
        <li class="tabs-title"><a href="#panel2v"><b>Messages</b></a></li>
								<li class="tabs-title"><a href="#panel3v"><b>Academic</b></a></li> 
								<li class="tabs-title"><a href="#panel4v"><b>Payment</b></a></li>      
      </ul>
						<ul class="vertical tabs" data-tabs id="example-tabs">
							<li class="tabs-title"><a href="logout.php">Logout</a></li>
						</ul>
						
    </div>
    <div class="cell medium-10 ">
      <div class="tabs-content vertical" data-deep-link="true" data-tabs id="example-tabs" data-tabs-content="example-tabs">

        <div class="tabs-panel is-active" id="panel1v">
										<p><?php require('profile.php'); ?></p>
        </div>

								<div class="tabs-panel" id="panel3v">
										Under development
        </div>

								<div class="tabs-panel" id="panel4v">
										Under development
        </div>

								<div class="tabs-panel" id="panel2v">
										<p><?php require('user_message_tabs.php'); ?></p>
        </div>

							

								
      </div>
    </div>
  </div>


		<?php
				include_once('C:\xampp\htdocs\esperanto\template\footer.php');
		?>


    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script>
      $(document).foundation();
      $(document).foundation('tab', 'reflow');
    </script>
    <script type="text/javascript"> $(function(){ $(document).foundation() }); </script>


		<!-- Compressed CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

		<!-- Compressed JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
				
		<!-- foundation-float.min.css: Compressed CSS with legacy Float Grid -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-float.min.css" integrity="sha256-4ldVyEvC86/kae2IBWw+eJrTiwNEbUUTmN0zkP4luL4=" crossorigin="anonymous">

		<!-- foundation-prototype.min.css: Compressed CSS with prototyping classes -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-prototype.min.css" integrity="sha256-BiKflOunI0SIxlTOOUCQ0HgwXrRrRwBkIYppEllPIok=" crossorigin="anonymous">

		<!-- foundation-rtl.min.css: Compressed CSS with right-to-left reading direction -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-rtl.min.css" integrity="sha256-F+9Ns8Z/1ZISonBbojH743hsmF3x3AlQdJEeD8DhQsE=" crossorigin="anonymous">
		<script>
      $('#element').foundation('_handleTabChange', $target, historyHandled);
    </script>
</html>
</div>
