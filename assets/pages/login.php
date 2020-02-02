<?php require "../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/style_login.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Open+Sans&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title><?php echo $lang['login_title']; ?></title>
</head>
<body>
	<div class="back">
		<a href="../../index.php"><img class="back_img" src="../images/arrow/arrow_white.png"></a>
	</div>
    <!--<div class="main">
		<form class="form" action="login.php" method="post">
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
				<a class="reg_link" href="register/register_type.php">Зарегистрируйтесь</a>
			</div>
			<button class="submit_btn" type="submit" name="submit">Войти</button>
		</form>
	</div>-->
	<div class="login">
		<div class="container">
			<div class="content">
				<form action="login.php">
					<div class="block">
						<div class="header"><?php echo $lang['login_title']; ?></div>
						<div class="type">
							<!--<label for="select_type">Выберите тип пользователя</label>
							<select name="sel_type" id="select_type">
								<option value="teacher">Я ученик</option>
								<option value="student">Я учитель</option>
							</select>-->
						</div>
						<div class="data">
							<input class="log_input" type="text" placeholder="<?php echo $lang['login_ph_login']; ?>">
							<input class="pass_input" type="password" placeholder="<?php echo $lang['login_ph_pass']; ?>">
						</div>
						<div class="reg_pass">
							<a class="reg_pass_link" href=""><?php echo $lang['login_pass_recovery']; ?></a>
							<a class="reg_pass_link" href="register/main.php"><?php echo $lang['login_signup']; ?></a>
						</div>
						<div class="in">
							<button class="login_btn" type="submit" name="login_btn"><?php echo $lang['login_enter'] ?></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
