<?php
$conn = mysqli_connect('localhost', 'amine', 'test1234', 'esperanto' );
  if(!$conn){
   echo 'Connection error: '. mysqli_connect_error();
 }else if(isset($_SESSION['email']) && ($_SESSION['type'] == 0)){
  include_once('C:\xampp\htdocs\esperanto\template\navbar_user.php');
}else if(isset($_SESSION['email']) && ($_SESSION['type'] == 1)){
  include_once('C:\xampp\htdocs\esperanto\template\navbar_admin.php');
}else if(isset($_SESSION['email']) && ($_SESSION['type'] == 2)){
  include_once('C:\xampp\htdocs\esperanto\template\navbar_teacher.php');
}else{
  include_once('C:\xampp\htdocs\esperanto\template\navbar_general.php');
 }
?>
