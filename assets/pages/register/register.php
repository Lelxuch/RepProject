<?php require "../../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../style/style_reg_main.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Open+Sans&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Регистрация</title>
</head>
<body>
    <div class="register">
        <div class="container">
            <div class="content">
                <div class="block">
                    <div class="header">Тип пользователя</div>
                    <form class="list" action="register.php">
                        <input id="teacher_radio" class="radio" type="radio" name="radio_btn" value="teacher">
                        <label for="teacher_radio" class="teacher_block">
                            <div class="condition">
                                <div class="teacher_cond"></div>
                            </div>
                            <div class="teacher_img"></div>
                            <div class="text">Учитель</div>
                        </label>
                        <input id="student_radio" class="radio" type="radio" name="radio_btn" value="student">
                        <label for="student_radio" class="student_block">
                            <div class="condition">
                                <div class="student_cond"></div>
                            </div>
                            <div class="student_img"></div>
                            <div class="text">Ученик</div>
                        </label>
                    </form>
                    <form class="continue" action="register.php">
                        <button class="continue_btn" type="submit">Продолжить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
