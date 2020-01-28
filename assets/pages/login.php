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
	<div class="back">
		<a href="../../index.php"><img class="back_img" src="../images/arrow/arrow_grey.png"></a>
	</div>
    <div class="main">
		<form class="form" action="../../includes/login_check.php" method="post">
			<div class="form_title">
				Вход
			</div>
			<div class="type">
				<label class="type_title">Выберите тип пользователя</label>
				<div class="sel">
					<select name="sel_type">
						<option value="all">-</option>
						<option value="student">Я ученик</option>
						<option value="teacher">Я учителя</option>
						<option value="editor">Я редактор</option>
					</select>
				</div>
			</div>
			<input class="user_input" type="text" name="username" placeholder="Логин" required>
			<input class="pswd_input" type="password" name="pswd" placeholder="Пароль" required>
			<div class="footer">
				<a class="reg_link" href="register/register.php">Зарегистрируйтесь</a>
			</div>
			<button class="submit_btn" type="submit" name="submit">Войти</button>
		</form>
	</div>
</body>

</html>