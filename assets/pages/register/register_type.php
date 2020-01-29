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
                <form action="register_type.php">
                    <div class="block">
                        <div class="header">Тип пользователя</div>
                        <div class="list">
                            <input id="teacher_radio" class="radio" type="radio" name="reg_type" value="teacher" required>
                            <label for="teacher_radio" class="teacher_block">
                                <div class="condition">
                                    <div class="teacher_cond"></div>
                                </div>
                                <div class="teacher_img"></div>
                                <div class="text">Учитель</div>
                            </label>
                            <input id="student_radio" class="radio" type="radio" name="reg_type" value="student" required>
                            <label for="student_radio" class="student_block">
                                <div class="condition">
                                    <div class="student_cond"></div>
                                </div>
                                <div class="student_img"></div>
                                <div class="text">Ученик</div>
                            </label>
                        </div>
                        <div class="continue">
                            <button class="continue_btn" type="submit" name="submit_reg_type">Продолжить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
