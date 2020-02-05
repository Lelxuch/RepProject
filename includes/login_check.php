<?php
require "config.php";

// happens on pressing of a submit button
if ( isset($_POST['submit']) ){
    $query = mysqli_query($connection, 'SELECT * FROM user WHERE login = "' . $_POST['username'] . '" LIMIT 1');
    $data = mysqli_fetch_assoc($query);

    // if database doesn't include this user
    if ( !$data ){
        echo "Такого пользователя не существует";
    }

    // if this user was found in the database
    else {
        if ( $data['password'] == $_POST['pswd'] ){
            header ('Location: ../assets/pages/admin/home.php');
            exit();
        }
        else {
            echo "Введен неверный пароль";
        }
    }
}
?>
