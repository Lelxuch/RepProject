<?php require_once "../../../includes/config.php"; ?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../style/style_reg_step2.css">
    <title><?php echo $lang['treg_header']; ?></title>
</head>
<body>
    <a href="main.php" class="back"></a>
    <div class="register">
        <div class="container">
            <div class="content">
                <form action="" method="post">
                    <div class="block">
                        <div class="header"><?php echo $lang['treg_header']; ?></div>
                        <div class="list" action="register.php">
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
                                                <label><?php echo $lang['reg_lname']; ?>: </label>
                                                <label><?php echo $lang['reg_fname']; ?>: </label>
                                                <label><?php echo $lang['reg_mname']; ?>: </label>
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
                                        <input type="date" name="birthDate" min="1900-01-01">
                                    </div>
                                </div>
                                <div class="gender">
                                    <div class="gender_title"><?php echo $lang['treg_gender']; ?></div>
                                    <div class="gender_item">
                                        <label><input type="radio" name="gender" value="1" required> <?php echo $lang['treg_male']; ?></label>
                                        <label><input type="radio" name="gender" value="0" required> <?php echo $lang['treg_female']; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="subtitle">
                                <img class="sub_img" src="../../images/register/step2.png">
                                <div class="sub_text">
                                    <?php echo $lang['treg_prof_data']; ?>
                                </div>
                            </div>
                            <div class="data">
                                <div class="career">
                                    <div class="career_title"><?php echo $lang['treg_career_start_title']; ?></div>
                                    <div class="career_item">
                                        <!-- MONTH PICKER -->
                                        <select name="career_start_month">
                                            <option value="01" selected><?php echo $lang['January']; ?></option>
                                            <option value="02"><?php echo $lang['February']; ?></option>
                                            <option value="03"><?php echo $lang['March']; ?></option>
                                            <option value="04"><?php echo $lang['April']; ?></option>
                                            <option value="05"><?php echo $lang['May']; ?></option>
                                            <option value="06"><?php echo $lang['June']; ?></option>
                                            <option value="07"><?php echo $lang['July']; ?></option>
                                            <option value="08"><?php echo $lang['August']; ?></option>
                                            <option value="09"><?php echo $lang['September']; ?></option>
                                            <option value="10"><?php echo $lang['October']; ?></option>
                                            <option value="11"><?php echo $lang['November']; ?></option>
                                            <option value="12"><?php echo $lang['December']; ?></option>
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
                                    <div class="bil_career_title"><?php echo $lang['treg_karbil_start']; ?></div>
                                    <div class="bil_career_item">
                                        <!-- MONTH PICKER -->
                                        <select name="karbil_start_month">
                                            <option value="01" selected><?php echo $lang['January']; ?></option>
                                            <option value="02"><?php echo $lang['February']; ?></option>
                                            <option value="03"><?php echo $lang['March']; ?></option>
                                            <option value="04"><?php echo $lang['April']; ?></option>
                                            <option value="05"><?php echo $lang['May']; ?></option>
                                            <option value="06"><?php echo $lang['June']; ?></option>
                                            <option value="07"><?php echo $lang['July']; ?></option>
                                            <option value="08"><?php echo $lang['August']; ?></option>
                                            <option value="09"><?php echo $lang['September']; ?></option>
                                            <option value="10"><?php echo $lang['October']; ?></option>
                                            <option value="11"><?php echo $lang['November']; ?></option>
                                            <option value="12"><?php echo $lang['December']; ?></option>
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
                                    <div class="subject_title"><?php echo $lang['treg_subject']; ?></div>
                                    <div class="subject_item">
                                        <select name="subject">
                                            <?php
                                            $language = 'name_' . $_SESSION['lang'];
                                            $sql = "SELECT id, $language FROM subject ORDER BY $language ASC";
                                            $subjects_list = mysqli_query($connection, $sql);
                                            while ($subject = mysqli_fetch_assoc($subjects_list)) {
                                                $subjectID = $subject['id'];
                                                $subject_name = $subject[$language];
                                                echo "<option value=$subjectID>$subject_name</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="category">
                                    <div class="category_title"><?php echo $lang['treg_category']; ?></div>
                                    <div class="category_item">
                                        <select name="category">
                                            <option value="6"><?php echo $lang['without_category']; ?></option>
                                            <option value="5"><?php echo $lang['highest']; ?></option>
                                            <option value="4"><?php echo $lang['teacher-researcher']; ?></option>
                                            <option value="3"><?php echo $lang['teacher-expert']; ?></option>
                                            <option value="2"><?php echo $lang['teacher-moderator']; ?></option>
                                            <option value="1"><?php echo $lang['teacher-master']; ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="position">
                                    <div class="position_title"><?php echo $lang['treg_position']; ?></div>
                                    <div class="position_item">
                                        <select name="position">
                                            <option value="0" selected><?php echo $lang['treg_position_none']; ?></option>
                                            <option value="1"><?php echo $lang['director']; ?></option>
                                            <option value="2"><?php echo $lang['deputy_director']; ?></option>
                                            <option value="3"><?php echo $lang['dormitory_manager']; ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="class">
                                    <div class="class_title"><?php echo $lang['treg_class_teacher']; ?></div>
                                    <div class="class_item">
                                        <select name="class_teacher">
                                            <option value="0"><?php echo $lang['treg_none']; ?></option>
                                            <option value="7A">7 A</option>
                                            <option value="7B">7 B</option>
                                            <option value="8A">8 A</option>
                                            <option value="8B">8 B</option>
                                            <option value="9A">9 A</option>
                                            <option value="9B">9 B</option>
                                            <option value="10A">10 A</option>
                                            <option value="10B">10 B</option>
                                            <option value="11A">11 A</option>
                                            <option value="11B">11 B</option>
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
                        </div>
                        <div class="reg">
                            <button class="reg_btn" type="submit" name="teacher_submit"><?php echo $lang['register']; ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['teacher_submit'])) {
    
        // getting user input data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mname = $_POST['mname'];
        $dob = date('Y-m-d', strtotime($_POST['birthDate']));
        $gender = $_POST['gender'];
        $career_start = date('Y-m-d', strtotime($_POST['career_start_year'].'-'.$_POST['career_start_month'].'-01'));
        $karbil_start = date('Y-m-d', strtotime($_POST['karbil_start_year'].'-'.$_POST['karbil_start_month'].'-01'));
        $subject = $_POST['subject'];
        $category = $_POST['category'];
        $position = $_POST['position'];
        $class_section = ($_POST['class_teacher'][2] == 'A') ? 0 : 1;
        $class_num = ($_POST['class_teacher'][0] < 6) ? $_POST['class_teacher'][0].$_POST['class_teacher'][1] : $_POST['class_teacher'][0] ;
        $class_grad = (date('n') > 6) ? date('Y') + 12 - $class_num : date('Y') + 11 - $class_num;
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $login = $_POST['username'];
        $password = $_POST['pass'];

        // check if user with these login and email exists
        $sql = "SELECT * FROM `security` WHERE `login`='" . mysqli_real_escape_string($connection, $login) . "' OR `email`='" . mysqli_real_escape_string($connection, $email) . "'";
        $user_exists = mysqli_query($connection, $sql);
        if (mysqli_fetch_assoc($user_exists)){
            echo nl2br("Пользователь с таким логином или почтой уже существует\n");
        }

        // if not exists
        else {
            $type = 'teacher';
            $sql = "INSERT INTO `security`(
                        `login`,
                        `password`,
                        `phone`,
                        `email`,
                        `type`
                    )
                    VALUES(
                        '".mysqli_real_escape_string($connection, $login)."',
                        '".mysqli_real_escape_string($connection, $password)."',
                        '".mysqli_real_escape_string($connection, $phone)."',
                        '".mysqli_real_escape_string($connection, $email)."',
                        '".mysqli_real_escape_string($connection, $type)."'
                    )";
            if (mysqli_query($connection, $sql)) {
                $securityID = mysqli_insert_id($connection);
                $sql = "INSERT INTO `teacher`(
                            `firstName`,
                            `lastName`,
                            `middleName`,
                            `birthDay`,
                            `gender`,
                            `careerStart`,
                            `karBilStart`,
                            `subject_id`,
                            `classGradYear`,
                            `classSection`,
                            `security_id`
                        )
                        VALUES(
                            '".mysqli_real_escape_string($connection, $fname)."',
                            '".mysqli_real_escape_string($connection, $lname)."',
                            '".mysqli_real_escape_string($connection, $mname)."',
                            '".mysqli_real_escape_string($connection, $dob)."',
                            '".mysqli_real_escape_string($connection, $gender)."',
                            CAST('". $career_start."' AS DATE),
                            CAST('".$karbil_start."' AS DATE),
                            '".mysqli_real_escape_string($connection, $subject)."',
                            '".mysqli_real_escape_string($connection, $class_grad)."',
                            '".mysqli_real_escape_string($connection, $class_section)."',
                            '".mysqli_real_escape_string($connection, $securityID)."'
                        )";
                if (mysqli_query($connection, $sql)) {
                    echo nl2br("Registration successfully");
                }

                // if registration fails then delete from security table
                else {
                    $sql = "DELETE FROM `security` WHERE id=".$securityID;
                    mysqli_query($connection, $sql);
                    die("Error: " . mysqli_error($connection));
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