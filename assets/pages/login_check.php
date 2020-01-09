<?php
require "../../includes/config.php";

if ( isset($_POST['submit']) ){
  $query = mysqli_query($connection, 'SELECT * FROM users WHERE login = "' . $_POST['username'] . '" LIMIT 1');
  $data = mysqli_fetch_assoc($query);
  if ( !$data ){
      echo "Такого пользователя не существует";
  }
  else {
      if ( $data['password'] == $_POST['pswd']){
    	  header ('Location: admin.html'); exit();
      }
      else {
          echo "Введен неверный пароль";
      }
  }
}
?>
