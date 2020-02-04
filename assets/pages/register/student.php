<?php require_once "../../../includes/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style_reg_student.css">
    <title><?php echo $lang['sreg_header']; ?></title>
</head>
<body>
    <div class="register">
        <div class="container">
            <div class="content">
                <form action="register.php" method="post">
                    <div class="block">
                        <div class="header"><?php echo $lang['sreg_header']; ?></div>
                        <div class="subtitle">
                            <img class="sub_img" src="../../images/register/step1.png">
                            <div class="sub_text"><?php echo $lang['reg_personal_data']; ?></div>
                        </div>
                        <div class="data">
                            <div class="name">
                                <div class="name_title"><?php echo $lang['reg_fio']; ?></div>
                                <div class="name_item">
                                    <div class="name_subtitle"></div>
                                    <div class="name_input">
                                        <div class="name_inputs_label">
                                            <label><?php echo $lang['reg_lname']; ?>:</label>
                                            <label><?php echo $lang['reg_fname']; ?>:</label>
                                            <label><?php echo $lang['reg_mname']; ?>:</label>
                                        </div>
                                        <div class="name_input_inputs">
                                            <input type="text" name="lname" placeholder="<?php echo $lang['reg_lname']; ?>" required>
                                            <input type="text" name="fname" placeholder="<?php echo $lang['reg_fname']; ?>" required>
                                            <input type="text" name="mname" placeholder="<?php echo $lang['reg_mname']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="date_b">
                                <div class="date_title"><?php echo $lang['reg_bday']; ?></div>
                                <div class="date_item">
                                    <!-- DAY PICKER -->
                                    <input type="date" name="birthDate" min="1900-01-01">
                                </div>
                            </div>
                        </div>
                        <div class="subtitle">
                            <img class="sub_img" src="../../images/register/step2.png">
                            <div class="sub_text"><?php echo $lang['sreg_study_title']; ?></div>
                        </div>
                        <div class="data">
                            <div class="edu_years">
                                <div class="edu_title"><?php echo $lang['sreg_grad_years']; ?></div>
                                <div class="sel_edu">
                                    <select name="student_graduation_year" required>
                                        <option><?php echo $lang['sreg_years']; ?></option>
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
                                <div class="edu_title"><?php echo $lang['sreg_choose_class']; ?></div>
                                <div class="sel_edu">
                                    <label><input type="radio" name="student_parallel" value="A" required>A</label>
                                    <label><input type="radio" name="student_parallel" value="B" required>B</label>
                                </div>
                            </div>
                            <div class="olympiad">
                                <div class="edu_title"><?php echo $lang['sreg_olympiad']; ?></div>
                                <div class="sel_edu">
                                    <select name="olympiad_subject" required>
                                        <option value="0"><?php echo $lang['sreg_olympiad_none']; ?></option>
                                        <?php
                                        $sql = "SELECT `id`, `name_ru` FROM `subject`";
                                        $classes_query = mysqli_query($connection, $sql);
                                        while ($olympiad = mysqli_fetch_assoc($classes_query)) {
                                            echo '<option value=' . $olympiad['id'] . '>' . $olympiad['name_ru'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="club">
                                <div class="edu_title"><?php echo $lang['sreg_club']; ?></div>
                                <div class="sel_edu">
                                    <?php
                                        $sql = "SELECT `id`, `name_ru` FROM `club`";
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
                            <div class="sub_text"><?php echo $lang['treg_security_data']; ?></div>
                        </div>
                        <div class="data">
                            <div class="email">
                                <div class="email_title"><?php echo $lang['reg_email_title']; ?></div>
                                <div class="email_item">
                                    <label>Email: <input type="email" name="email"></label>
                                </div>
                            </div>
                            <div class="phone">
                                <div class="phone_title"><?php echo $lang['reg_phone_title'] ?></div>
                                <div class="phone_item">
                                    <label><?php echo $lang['reg_phone']; ?><input type="text" name="phone"></label>
                                </div>
                            </div>
                            <div class="login">
                                <div class="login_title"><?php echo $lang['reg_create_login']; ?><span class="login_hint">(<?php echo $lang['reg_login_main_hint']; ?>: A-Z, a-z, 0-9)</span></div>
                                <div class="login_item">
                                    <label><?php echo $lang['reg_login']; ?>:<input type="text" name="username"></label>
                                </div>
                            </div>
                            <div class="password">
                                <div class="password_title"><?php echo $lang['reg_pass_title']; ?><span class="password_hint">(<?php echo $lang['reg_pass_main_hint']; ?>: A-Z, a-z, 0-9)</span></div>
                                <div class="password_item">
                                    <div class="password_input">
                                        <div class="password_input_label">
                                            <label class="pass"><?php echo $lang['reg_password']; ?>:</label>
                                            <label class="repass"><?php echo $lang['reg_repeat_password']; ?>:</label>
                                        </div>
                                        <div class="password_input_inputs">
                                            <input type="password" name="pass">
                                            <input type="password" name="pass_conf">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reg">
                            <button class="reg_btn" type="submit" name="student_submit"><?php echo $lang['register']; ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>