<?php require_once("../../../includes/config.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<form action="#" method="post">

    <!-- FIRST STEP -->
    <fieldset>
        <legend>Шаг 1. Личные данные</legend><br>
        
        <!-- NAME INPUT 1 -->
        <h3>ФИО по документам</h3>
        <label>Фамилия: <input type="text" name="ln_cyrl" placeholder="Фамилия" required></label><br>
        <label>Имя: <input type="text" name="fn_cyrl" placeholder="Имя" required></label><br>
        <label>Отчество: <input type="text" name="mn_cyrl" placeholder="Отчество" required></label><hr>
        <!-- END OF NAME INPUT 1 -->
        
        <!-- NAME INPUT 2 -->
        <h3>ФИО на латинице</h3>
        <label>Фамилия: <input type="text" name="ln_latn" placeholder="Фамилия" required></label><br>
        <label>Имя: <input type="text" name="fn_latn" placeholder="Имя" required></label><br>
        <label>Отчество: <input type="text" name="mn_latn" placeholder="Отчество" required></label><hr>
        <!-- END OF NAME INPUT 2 -->

        <!-- NAME INPUT 3 -->
        <h3>ФИО на английском</h3>
        <label>Фамилия: <input type="text" name="ln_en" placeholder="Фамилия" required></label><br>
        <label>Имя: <input type="text" name="fn_en" placeholder="Имя" required></label><br>
        <label>Отчество: <input type="text" name="mn_en" placeholder="Отчество" required></label><hr>
        <!-- END OF NAME INPUT 3 -->

        <!-- GENDER PICKER -->
        <h3>Пол</h3>
        <label><input type="radio" name="gender" value="1" required> Мужской</label><br>
        <label><input type="radio" name="gender" value="0" required> Женский</label><hr>
        <!-- END OF GENDER PICKER -->

        <!-- DATE OF BIRTH PICKER -->
        <h3>Дата рождения</h3>

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
        <!-- END OF YEAR PICKER -->
        <!-- END OF DATE OF BIRTH PICKER -->
    </fieldset>
    <!-- END OF THE FIRST STEP -->

    <!-- SECOND STEP -->
    <fieldset>
        <legend>Шаг 2. Профессиональные данные</legend>
        
        <!-- CAREER START PICKER -->
        <h4>Когда вы начали карьеру учителя?</h4>

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
        </select><hr>
        <!-- END OF YEAR PICKER -->
        <!-- END OF CAREER START PICKER -->

        <!-- WORKING AT KARBIL SINCE -->
        <h4>Начало работы в КарБИЛ</h4>

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
        </select><hr>
        <!-- END OF YEAR PICKER -->
        <!-- END OF WORKING AT CARBIL SINCE -->

        <!-- SUBJECT PICKER -->
        <h4>Какой предмет вы преподаете?</h4>
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
        </select><hr>
        <!-- END OF SUBJECT PICKER -->

        <!-- CATEGORY PICKER -->
        <h4>Выберите вашу категорию</h4>
        <select name="category">
            <option value="6"><?php echo $config['ru']['without_category']; ?></option>
            <option value="5"><?php echo $config['ru']['highest']; ?></option>
            <option value="4"><?php echo $config['ru']['teacher-researcher']; ?></option>
            <option value="3"><?php echo $config['ru']['teacher-expert']; ?></option>
            <option value="2"><?php echo $config['ru']['teacher-moderator']; ?></option>
            <option value="1"><?php echo $config['ru']['teacher-master']; ?></option>
        </select><hr>
        <!-- END OF CATEGORY PICKER -->

        <!-- ADDITIONAL SHIT -->
        <h4>Дополнительная должность в лицее</h4>
        <select name="position">
            <option value="0" selected>Нет</option>
            <option value="1"><?php echo $config['ru']['director']; ?></option>
            <option value="2"><?php echo $config['ru']['deputy_director']; ?></option>
            <option value="3"><?php echo $config['ru']['dormitory_manager']; ?></option>
        </select><hr>
        <!-- END OF ADDITIONAL SHIT -->

        <!-- CLASS TEACHER -->
        <h4>Классный руководитель</h4>
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
        <!-- END OF CLASS TEACHER -->
    </fieldset>
    <!-- END OF THE SECOND STEP -->

    <!-- THIRD STEP -->
    <fieldset>
        <legend>Шаг 3. Данные для безопасности</legend>

        <h4>Введите вашу электронную почту</h4>
        <label>Email: <input type="email" name="email"></label>

        <h4>Введите ваш номер телефона</h4>
        <label>Номер: +7<input type="text" name="phone"></label>

        <h4>Придумайте логин</h4>
        <label>Логин: <input type="text" name="username"><br>Логин должен состоять из: A-Z, a-z, 0-9</label>

        <h4>Придумайте пароль</h4>
        <label>Пароль: <input type="password" name="pass"><br>Пароль должен состоять из: A-Z, a-z, 0-9</label>

        <h4>Повторите пароль</h4>
        <label>Повтор пароля: <input type="password" name="pass_conf"></label>
    </fieldset>
    <!-- END OF THIRD STEP -->
</form>
</body>
</html>