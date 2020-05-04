<?php 

	$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );

	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>