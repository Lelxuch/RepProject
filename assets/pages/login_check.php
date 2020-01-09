<?php
require "../../includes/config.php";

$input_username = $_POST['username'];
$input_password = $_POST['pswd'];

if ( isset($_POST['submit']) ){
  $query = mysqli_query($connection, 'SELECT * FROM users WHERE login = ' . $input_username);
  $data = mysqli_fetch_assoc($query);
  if ( $data['password'] == $input_password){
	  header ('Refresh: 1; url=admin.html'); exit();
  }
}
?>
