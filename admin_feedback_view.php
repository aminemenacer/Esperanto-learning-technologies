<?php
session_start();
include_once('C:\xampp\htdocs\esperanto\navbar_check.php');


		$id = mysqli_real_escape_string($conn, $_GET['id']);
		$query = "SELECT * FROM feedback WHERE id = $id";
		$result = mysqli_query($conn,$query) or die(mysqli_error());

		echo "<table class='table table-striped'>";
		$row = mysqli_fetch_array($result);

?>



<!DOCTYPE html>
<html>
	<head>
		<div class="container" style="padding: 20px">
  <div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>View Profile</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label"><b>First Name:</b></label>
                                <div class="col-3">
                                 <p><?php echo $row['name']; ?></p>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label"><b>Email:</b></label>
                                <div class="col-3">
                                  <p><?php echo $row['email']; ?></p>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label"><b>Feedback:</b></label>
                                <div class="col-3">
                                  <p><?php echo $row['feedback']; ?></p>
                                </div>
                              </div>
                             <form action="admin_table.php">
																<a href="admin_logged_in.php" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
															</form>

                              </div>
                            </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
  </div>

    </div>

		<?php
        include_once('C:\xampp\htdocs\esperanto\template\footer.php');
      ?>
		</head>
</html>




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
