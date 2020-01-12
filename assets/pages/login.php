<?php require "../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/style_login.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Open+Sans&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Вход</title>
</head>
<body>
    <div class="main">
		<form class="form" action="../../includes/login_check.php" method="post">
			<div class="form_content">
				<div class="form_title">
					Вход
				</div>
				<input class="user_input" type="text" name="username" placeholder="Логин" required>
				<input class="pswd_input" type="password" name="pswd" placeholder="Пароль" required>
				<button class="submit_btn" type="submit" name="submit">Войти</button>
			</div>
		</form>
    </div>
</body>
</html>
