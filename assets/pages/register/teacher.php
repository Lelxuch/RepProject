<?php require_once "../../../includes/config.php"; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../style/style_reg_teacher.css">
    <title>Регистрация</title>
</head>
<body>
    <a href="main.php" class="back"></a>
    <div class="register">
        <div class="container">
            <div class="content">
                <form action="teacher.php">
                    <div class="block"> 
                        <div class="header">Регистрация учителя</div>
                        <div class="list" action="register.php">
                            <div class="subtitle">
                                <img class="sub_img" src="../../images/register/step1.png">
                                <div class="sub_text">Личные данные</div>
                            </div>
                            <div class="data">
                                <div class="name">
                                    <div class="name_title">ФИО по документам</div>
                                    <div class="name_item">
                                        <div class="name_subtitle"></div>
                                        <div class="name_input">
                                            <div class="name_inputs_label">
                                                <label>Фамилия:</label>
                                                <label>Имя:</label>
                                                <label>Отчество:</label>
                                            </div>
                                            <div class="name_input_inputs">
                                                <input type="text" name="ln_cyrl" placeholder="Фамилия" required>
                                                <input type="text" name="fn_cyrl" placeholder="Имя" required>
                                                <input type="text" name="mn_cyrl" placeholder="Отчество" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="name_item">
                                        <div class="name_subtitle">2.На латинице</div>
                                        <div class="name_input">
                                            <div class="name_inputs_label">
                                                <label>Фамилия:</label>
                                                <label>Имя:</label>
                                                <label>Отчество:</label>
                                            </div>
                                            <div class="name_input_inputs">
                                                <input type="text" name="ln_latn" placeholder="Фамилия" required>
                                                <input type="text" name="fn_latn" placeholder="Имя" required>
                                                <input type="text" name="mn_latn" placeholder="Отчество" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="name_item">
                                        <div class="name_subtitle">3.На английском</div>
                                        <div class="name_input">
                                            <div class="name_inputs_label">
                                                <label>Фамилия:</label>
                                                <label>Имя:</label>
                                                <label>Отчество:</label>
                                            </div>
                                            <div class="name_input_inputs">
                                                <input type="text" name="ln_en" placeholder="Фамилия" required>
                                                <input type="text" name="fn_en" placeholder="Имя" required>
                                                <input type="text" name="mn_en" placeholder="Отчество" required>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                                <div class="date_b">
                                    <div class="date_title">Дата рождения</div>
                                    <div class="date_item">
                                        <!-- DAY PICKER -->
                                        <select name="dob_day" required>
                                            <option value="1" selected>1</option>
                                            <?php
                                            $i = 2;
                                            while ($i <= 31) {
                                                echo "<option value=$i>$i</option>";
                                                $i++;
                                            }
                                            ?>
                                        </select>
                                        <!-- END OF DAY PICKER -->

                                        <!-- MONTH PICKER -->
                                        <select name="dob_month">
                                            <option value="January" selected><?php echo $config['ru']['January']; ?></option>
                                            <option value="February"><?php echo $config['ru']['February']; ?></option>
                                            <option value="March"><?php echo $config['ru']['March']; ?></option>
                                            <option value="April"><?php echo $config['ru']['April']; ?></option>
                                            <option value="May"><?php echo $config['ru']['May']; ?></option>
                                            <option value="June"><?php echo $config['ru']['June']; ?></option>
                                            <option value="July"><?php echo $config['ru']['July']; ?></option>
                                            <option value="August"><?php echo $config['ru']['August']; ?></option>
                                            <option value="September"><?php echo $config['ru']['September']; ?></option>
                                            <option value="October"><?php echo $config['ru']['October']; ?></option>
                                            <option value="November"><?php echo $config['ru']['November']; ?></option>
                                            <option value="December"><?php echo $config['ru']['December']; ?></option>
                                        </select>
                                        <!-- END OF MONTH PICKER -->

                                        <!-- YEAR PICKER -->
                                        <select name="dob_year">
                                            <?php
                                            $i = 1990;
                                            $cur_year = date('Y');
                                            while ($i <= $cur_year-1) {
                                                echo "<option value=$i>$i</option>";
                                                $i++;
                                            }
                                            echo "<option value=$cur_year selected>$cur_year</option>";
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="gender">
                                    <div class="gender_title">Пол</div>
                                    <div class="gender_item">
                                        <label><input type="radio" name="gender" value="1" required> Мужской</label>
                                        <label><input type="radio" name="gender" value="0" required> Женский</label>
                                    </div>
                                </div>
                            </div>
                            <div class="subtitle">
                                <img class="sub_img" src="../../images/register/step2.png">
                                <div class="sub_text">
                                    Профессиональные данные
                                </div>
                            </div>
                            <div class="data">
                                <div class="career">
                                    <div class="career_title">Когда вы начали свою карьеру учителя?</div>
                                    <div class="career_item">
                                        <!-- MONTH PICKER -->
                                        <select name="career_start_month">
                                            <option value="January" selected><?php echo $config['ru']['January']; ?></option>
                                            <option value="February"><?php echo $config['ru']['February']; ?></option>
                                            <option value="March"><?php echo $config['ru']['March']; ?></option>
                                            <option value="April"><?php echo $config['ru']['April']; ?></option>
                                            <option value="May"><?php echo $config['ru']['May']; ?></option>
                                            <option value="June"><?php echo $config['ru']['June']; ?></option>
                                            <option value="July"><?php echo $config['ru']['July']; ?></option>
                                            <option value="August"><?php echo $config['ru']['August']; ?></option>
                                            <option value="September"><?php echo $config['ru']['September']; ?></option>
                                            <option value="October"><?php echo $config['ru']['October']; ?></option>
                                            <option value="November"><?php echo $config['ru']['November']; ?></option>
                                            <option value="December"><?php echo $config['ru']['December']; ?></option>
                                        </select>
                                        <!-- END OF MONTH PICKER -->

                                        <!-- YEAR PICKER -->
                                        <select name="career_start_year">
                                            <?php
                                            $i = 1980;
                                            $cur_year = date('Y');
                                            while ($i <= $cur_year-1) {
                                                echo "<option value=$i>$i</option>";
                                                $i++;
                                            }
                                            echo "<option value=$cur_year selected>$cur_year</option>";
                                            ?>
                                        </select>
                                        <!-- END OF YEAR PICKER -->
                                        <!-- END OF CAREER START PICKER -->
                                    </div>
                                </div>
                                <div class="bil_career">
                                    <div class="bil_career_title">Начало работы в нашей школе</div>
                                    <div class="bil_career_item">
                                        <!-- MONTH PICKER -->
                                        <select name="karbil_start_month">
                                            <option value="January" selected><?php echo $config['ru']['January']; ?></option>
                                            <option value="February"><?php echo $config['ru']['February']; ?></option>
                                            <option value="March"><?php echo $config['ru']['March']; ?></option>
                                            <option value="April"><?php echo $config['ru']['April']; ?></option>
                                            <option value="May"><?php echo $config['ru']['May']; ?></option>
                                            <option value="June"><?php echo $config['ru']['June']; ?></option>
                                            <option value="July"><?php echo $config['ru']['July']; ?></option>
                                            <option value="August"><?php echo $config['ru']['August']; ?></option>
                                            <option value="September"><?php echo $config['ru']['September']; ?></option>
                                            <option value="October"><?php echo $config['ru']['October']; ?></option>
                                            <option value="November"><?php echo $config['ru']['November']; ?></option>
                                            <option value="December"><?php echo $config['ru']['December']; ?></option>
                                        </select>
                                        <!-- END OF MONTH PICKER -->

                                        <!-- YEAR PICKER -->
                                        <select name="karbil_start_year">
                                            <?php
                                            $i = 1992;
                                            $cur_year = date('Y');
                                            while ($i <= $cur_year-1) {
                                                echo "<option value=$i>$i</option>";
                                                $i++;
                                            }
                                            echo "<option value=$cur_year selected>$cur_year</option>";
                                            ?>
                                        </select>
                                        <!-- END OF YEAR PICKER -->
                                        <!-- END OF WORKING AT CARBIL SINCE -->
                                    </div>
                                </div>
                                <div class="subject">
                                    <div class="subject_title">Какой предмет вы преподаете?</div>
                                    <div class="subject_item">
                                        <select name="subject">
                                            <?php
                                            $lang = 'name_ru';
                                            $sql = "SELECT id, $lang FROM subject ORDER BY $lang ASC";
                                            $subjects_list = mysqli_query($connection, $sql);
                                            while ($subject = mysqli_fetch_assoc($subjects_list)) {
                                                $subjectID = $subject['id'];
                                                $subject_name = $subject[$lang];
                                                echo "<option value=$subjectID>$subject_name</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="category">
                                    <div class="category_title">Выберите вашу категорию</div>
                                    <div class="category_item">
                                        <select name="category">
                                            <option value="6"><?php echo $config['ru']['without_category']; ?></option>
                                            <option value="5"><?php echo $config['ru']['highest']; ?></option>
                                            <option value="4"><?php echo $config['ru']['teacher-researcher']; ?></option>
                                            <option value="3"><?php echo $config['ru']['teacher-expert']; ?></option>
                                            <option value="2"><?php echo $config['ru']['teacher-moderator']; ?></option>
                                            <option value="1"><?php echo $config['ru']['teacher-master']; ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="position">
                                    <div class="position_title">Дополнительная должность в лицее</div>
                                    <div class="position_item">
                                        <select name="position">
                                            <option value="0" selected>Нет</option>
                                            <option value="1"><?php echo $config['ru']['director']; ?></option>
                                            <option value="2"><?php echo $config['ru']['deputy_director']; ?></option>
                                            <option value="3"><?php echo $config['ru']['dormitory_manager']; ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="class">
                                    <div class="class_title">Классный руководитель</div>
                                    <div class="class_item">
                                        <select name="class_teacher">
                                            <option value="0">Нет</option>
                                            <option value="7_A">7 A</option>
                                            <option value="7_B">7 B</option>
                                            <option value="8_A">8 A</option>
                                            <option value="8_B">8 B</option>
                                            <option value="9_A">9 A</option>
                                            <option value="9_B">9 B</option>
                                            <option value="10_A">10 A</option>
                                            <option value="10_B">10 B</option>
                                            <option value="11_A">11 A</option>
                                            <option value="11_B">11 B</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="subtitle">
                                <img class="sub_img" src="../../images/register/step3.png">
                                <div class="sub_text">
                                    <?php echo $lang['reg_security_data']; ?>
                                </div>
                            </div>
                            <div class="data">
                                <div class="email">
                                    <div class="email_title">Введите почту</div>
                                    <div class="email_item">
                                        <label>Email: <input type="email" name="email" placeholder="<?php echo $lang['reg_email_ph']; ?>" required></label>
                                    </div>
                                </div>
                                <div class="phone">
                                    <div class="phone_title">Введите телефон</div>
                                    <div class="phone_item">
                                        <label><?php echo $lang['reg_phone']; ?><input type="text" name="phone" pattern="[0-9]{10}" title="<?php echo $lang['reg_phone_hint']; ?>" minlength="10" maxlength="10" placeholder="<?php echo $lang['reg_phone_ph']; ?>" required></label>
                                    </div>
                                </div>
                                <div class="login">
                                    <div class="login_title">Придумайте логин<span class="login_hint">(Логин должен состоять из: A-Z, a-z, 0-9)</span></div>
                                    <div class="login_item">
                                        <label><?php echo $lang['reg_login']; ?>:<input type="text" name="username" title="<?php echo $lang['reg_login_hint']; ?>" minlength="6" maxlength="100" placeholder="<?php echo $lang['reg_login_ph']; ?>" required></label>
                                    </div>
                                </div>
                                <div class="password">
                                    <div class="password_title">Придумайте пароль<span class="password_hint">(Пароль должен состоять из: A-Z, a-z, 0-9)</span></div>
                                    <div class="password_item">
                                        <div class="password_input">
                                            <div class="password_input_label">
                                                <label class="pass">Пароль:</label>
                                                <label class="repass">Повтор пароля:</label>
                                            </div>
                                            <div class="password_input_inputs">
                                                <input type="password" name="pass" id ="pass" title="<?php echo $lang['reg_pass_hint']; ?>" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,32}$" minlength="8" maxlength="32" placeholder="<?php echo $lang['reg_pass_ph']; ?>" required>
                                                <input type="password" name="pass_conf" id="pass_conf" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,32}$" minlength="8" maxlength="32" placeholder="<?php echo $lang['reg_pass_conf_ph']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reg">
                            <button class="reg_btn" type="submit">Зарегистрироваться</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var password = document.getElementById("pass"), confirm_password = document.getElementById("pass_conf");
        function validatePassword() {
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            }
            else {
                confirm_password.setCustomValidity('');
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>
</html>