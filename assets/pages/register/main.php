<?php require "../../../includes/config.php" ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../style/style_reg_main.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Open+Sans&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title><?php echo $lang['main_title']; ?></title>
</head>
<body>
    <a href="../login.php" class="back">
        
    </a>
    <div class="register">
        <div class="container">
            <div class="content">
                <div class="block">
                    <div class="header"><?php echo $lang['main_type']; ?></div>
                    <div class="list">
                        <input id="teacher_radio" class="radio" type="radio" name="reg_type" value="teacher" required>
                        <label for="teacher_radio" class="teacher_block">
                            <div class="condition">
                                <div class="teacher_cond"></div>
                            </div>
                            <div class="teacher_img"></div>
                            <div class="text"><?php echo $lang['main_teacher']; ?></div>
                        </label>
                        <input id="student_radio" class="radio" type="radio" name="reg_type" value="student" required>
                        <label for="student_radio" class="student_block">
                            <div class="condition">
                                <div class="student_cond"></div>
                            </div>
                            <div class="student_img"></div>
                            <div class="text"><?php echo $lang['main_student']; ?></div>
                        </label>
                    </div>
                    <div class="continue">
                        <button onclick="start_registration()" class="continue_btn"  name="submit_reg_type"><?php echo $lang['main_continue']; ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function start_registration() {
            if(document.getElementById('teacher_radio').checked) {
                window.location.replace("teacher.php");
            }
            else if(document.getElementById('student_radio').checked) {
                window.location.replace("student.php");
            }
        }
    </script>
</body>
</html>
