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
        <form action="type_check.php" method="post">
            <div class="reg_type">
                <label class="reg_teacher" for="radio_teacher">
                    <div class="checkbox">
                        <input class="radio" id="radio_teacher" type="radio" name="reg_type" value="teacher">
                    </div>
                    <div class="reg_teacher_content">
                        <div for="radio_teacher">
                            <img class="reg_img" src="../../images/filler/filler1.png">
                        </div>
                        <div class="reg_text" for="radio_teacher">Я учитель</div>
                    </div>
                </label>
                <label class="reg_student">
                    <div class="checkbox">
                        <input class="radio" id="radio_student" type="radio" name="reg_type" value="student">
                    </div>
                    <div class="reg_student_content">
                        <div for="radio_student">
                            <img class="reg_img" src="../../images/filler/filler1.png">
                        </div>
                        <div class="reg_text" for="radio_student">Я ученик</div>
                    </div>
                </label>
            </div>
            <div class="continue">
                <button type="submit" name="submit_reg_type" class="continue_btn"></button>
            </div>
        </form>
    </div>
</body>
</html>
