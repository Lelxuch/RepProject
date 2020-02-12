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
                <form action="" method="post">
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
                                            <input type="text" name="mname" placeholder="<?php echo $lang['reg_mname']; ?>">
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
                                    <label><input type="radio" name="student_parallel" value="0" required>A</label>
                                    <label><input type="radio" name="student_parallel" value="1" required>B</label>
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
                                            echo "<label><input type=\"checkbox\" name=\"clubs[]\" value=\"$ID\">$name</label><br>";
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
                                <div class="email_title"><?php echo $lang['reg_email_title']; ?></div>
                                <div class="email_item">
                                    <label>Email: <input type="email" name="email" placeholder="<?php echo $lang['reg_email_ph']; ?>" required></label>
                                </div>
                            </div>
                            <div class="phone">
                                <div class="phone_title"><?php echo $lang['reg_phone_title'] ?></div>
                                <div class="phone_item">
                                    <label><?php echo $lang['reg_phone']; ?><input type="text" name="phone" pattern="[0-9]{10}" title="<?php echo $lang['reg_phone_hint']; ?>" minlength="10" maxlength="10" placeholder="<?php echo $lang['reg_phone_ph']; ?>" required></label>
                                </div>
                            </div>
                            <div class="login">
                                <div class="login_title"><?php echo $lang['reg_create_login']; ?><span class="login_hint">(<?php echo $lang['reg_login_main_hint']; ?>: A-Z, a-z, 0-9)</span></div>
                                <div class="login_item">
                                    <label><?php echo $lang['reg_login']; ?>:<input type="text" name="username" title="<?php echo $lang['reg_login_hint']; ?>" minlength="6" maxlength="100" placeholder="<?php echo $lang['reg_login_ph']; ?>" required></label>
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
                                            <input type="password" name="pass" id ="pass" title="<?php echo $lang['reg_pass_hint']; ?>" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,32}$" minlength="8" maxlength="32" placeholder="<?php echo $lang['reg_pass_ph']; ?>" required>
                                            <input type="password" name="pass_conf" id="pass_conf" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,32}$" minlength="8" maxlength="32" placeholder="<?php echo $lang['reg_pass_conf_ph']; ?>" required>
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
    <?php
    if (isset($_POST['student_submit'])) {
    
        // getting user input data
        $fname = mysqli_real_escape_string($connection, $_POST['fname']);
        $lname = mysqli_real_escape_string($connection, $_POST['lname']);
        $mname = mysqli_real_escape_string($connection, $_POST['mname']);
        $dob = mysqli_real_escape_string($connection, date('Y-m-d', strtotime($_POST['birthDate'])));
        $graduation_year = $_POST['student_graduation_year'];
        $subject_id = $_POST['olympiad_subject'];
        $section = $_POST['student_parallel'];
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);
        $login = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['pass']);

        // check if user with these login and email exists
        $sql = "SELECT * FROM `security` WHERE `login`='" . $login . "' OR `email`='" . $email . "'";
        $user_exists = mysqli_query($connection, $sql);
        if (mysqli_fetch_assoc($user_exists)) {
            echo "<script>alert(\"User with these login or email is already exists. Please, change your login or email\");</script>";
        }

        // if not exists
        else {
            
            // templates for inserting data into tables
            $sql_security_template = "INSERT INTO `security`(`login`,`password`,`phone`,`email`,`type`)VALUES('%s', '%s', '%s', '%s', '%s')";
            $sql_student_template = "INSERT INTO `student`(`firstName`,`lastName`,`middleName`,`birthDay`,`grad_year`,`section`,`security_id`)VALUES('%s', '%s', '%s', '%s', '%d', '%s', '%d')";
            $sql_subject_template = "INSERT INTO `student_subject`(`student_id`, `subject_id`)VALUES('%d', '%d')";
            $sql_club_template = "INSERT INTO `student_club`(`student_id`,`club_id`)VALUES('%d', '%d')";

            $type = 'student';
            $flag = true;

            // insert into security table
            $sql = sprintf($sql_security_template, $login, $password, $phone, $email, $type);
            if (!mysqli_query($connection, $sql)) {
                $flag = false;
            }
            $securityID = mysqli_insert_id($connection);

            // insert into student table
            $sql = sprintf($sql_student_template, $fname, $lname, $mname, $dob, $graduation_year, $section, $securityID);
            if (!mysqli_query($connection, $sql)) {
                $flag = false;
            }
            $studentID = mysqli_insert_id($connection);

            mysqli_autocommit($connection, false);

            // insert into subject table
            $sql = sprintf($sql_subject_template, $studentID, $subject_id);
            if (!mysqli_query($connection, $sql)) {
                $flag = false;
            }

            // insert into club table
            if (!empty($_POST['clubs'])) {
                foreach ($_POST['clubs'] as $club_id) {
                    $sql = sprintf($sql_club_template, $studentID, $club_id);
                    if (!mysqli_query($connection, $sql)) {
                        $flag = false;
                    }
                }
            }

            if ($flag) {
                echo "<script>alert(\"You have been registered successfully!\");</script>";
                mysqli_commit($connection);
                mysqli_autocommit($connection, true);
            }
            else {
                echo "<script>alert(\"Registration failed\");</script>";
                mysqli_rollback($connection);
                mysqli_autocommit($connection, true);
                $sql = "DELETE FROM `security` WHERE `id`='" . $securityID . "'";
                if (mysqli_query($connection, $sql)) {
                    echo 'security delete: ' . mysqli_error($connection);
                }
                $sql = "DELETE FROM `student` WHERE `id`='" . $studentID . "'";
                if (mysqli_query($connection, $sql)) {
                    echo 'student delete: ' . mysqli_error($connection);
                }
            }
        }
    }
    ?>
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