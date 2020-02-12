<?php require_once "../../../includes/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style_reg_student.css">
    <title>Регистрация ученика</title>
</head>
<body>
    <a href="main.php" class="back"></a>
    <div class="register">
        <div class="container">
            <div class="content">
                <form action="student.php">
                    <div class="block">
                        <div class="header">Регистрация ученика</div>
                        <div class="subtitle">
                            <img class="sub_img" src="../../images/register/step1.png">
                            <div class="sub_text">Личные данные</div>
                        </div>
                        <div class="data">
                            <div class="name">
                                <div class="name_title">ФИО по документам</div>
                                <div class="name_item">
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
                        </div>
                        <div class="subtitle">
                            <img class="sub_img" src="../../images/register/step2.png">
                            <div class="sub_text">Учеба</div>
                        </div>
                        <div class="data">
                            <div class="edu_years">
                                <div class="edu_title">Годы обучения в лицее</div>
                                <div class="sel_edu">
                                    <select name="student_graduation_year" required>
                                        <option>Годы</option>
                                        <?php
                                        (date('m') <= 5) ? $from = date('Y') : $from = date('Y') + 1;
                                        $to = $from + 4;
                                        while ($to >= $from) {
                                            $generation = $from-5 . '-' .$from;
                                            echo "<option value=$from>$generation</option>";
                                            $from++;
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="class">
                                <div class="edu_title">Выберите ваш класс</div>
                                <div class="sel_edu">
                                    <label><input type="radio" name="student_parallel" value="A" required>A</label>
                                    <label><input type="radio" name="student_parallel" value="B" required>B</label>
                                </div>
                            </div>
                            <div class="olympiad">
                                <div class="edu_title">Ваш олимпиадный предмет</div>
                                <div class="sel_edu">
                                    <select name="olympiad_subject" required>
                                        <option value="0">Я не олимпиадчик</option>
                                        <?php
                                        $sql = "SELECT id, name_ru FROM subject";
                                        $classes_query = mysqli_query($connection, $sql);
                                        while ($olympiad = mysqli_fetch_assoc($classes_query)) {
                                            echo '<option value=' . $olympiad['id'] . '>' . $olympiad['name_ru'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="club">
                                <div class="edu_title">Выберите клубы в которых вы участвуете</div>
                                <div class="sel_edu">
                                    <?php
                                        $sql = 'SELECT id, name_ru FROM club';
                                        $clubs = mysqli_query($connection, $sql);
                                        while ($club = mysqli_fetch_assoc($clubs)) {
                                            $ID = $club['id'];
                                            $name = $club['name_ru'];
                                            echo "<label><input type=checkbox name=$ID>$name</label><br>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="subtitle">
                            <img class="sub_img" src="../../images/register/step3.png">
                            <div class="sub_text"><?php echo $lang['reg_security_data']; ?></div>
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