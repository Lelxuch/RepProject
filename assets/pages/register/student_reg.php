<?php require_once "../../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <fieldset>
        <legend>Шаг 1. Личные данные</legend>
        <!-- NAME INPUT -->
        <h2>ФИО</h2>
        <label>Фамилия: <input type="text" name="ln_cyrl" placeholder="Фамилия" required></label><br>
        <label>Имя: <input type="text" name="fn_cyrl" placeholder="Имя" required></label><br>
        <label>Отчество: <input type="text" name="mn_cyrl" placeholder="Отчество" required></label>
        <!-- END OF NAME INPUT -->
        <!-- DATE OF BIRTH PICKER -->
        <h2>Дата рождения</h2>
        <!-- DAY PICKER -->
        <select name="dob_day" required>
            <option>День</option>
            <?php
            $i = 1;
            while ($i <= 31) {
                echo "<option value=$i>$i</option>";
                $i++;
            }
            ?>
        </select>
        <!-- END OF DAY PICKER -->
        <!-- MONTH PICKER -->
        <select name="dob_month" required>
            <option>Месяц</option>
            <option value="January"><?php echo $config['ru']['January']; ?></option>
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
            <option>Год</option>
            <?php
            $cur_year = date('Y');
            while (2000 <= $cur_year) {
                echo "<option value=$cur_year>$cur_year</option>";
                $cur_year--;
            }
            ?>
        </select>
        <!-- END OF YEAR PICKER -->
        <!-- END OF DATE OF BIRTH PICKER -->
    </fieldset>
    <fieldset>
        <legend>Шаг 2. Учеба</legend>
        <h2>Годы обучения в лицее?</h2>
        <!-- YEAR PICKER -->
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
        <!-- END OF YEAR PICKER -->
        <!-- SECTION PICKER -->
        <h2>Ваш класс</h2>
        <label><input type="radio" name="student_parallel" value="A" required>A</label>
        <label><input type="radio" name="student_parallel" value="B" required>B</label>
        <h2>Ваш олимпиадный предмет</h2>
        <select name="olympiad_subject" required>
            <option value="0">Я не олимпиадчик</option>
            <?php
            $sql = "SELECT id, name_ru FROM subject";
            $classes_query = mysqli_query($connection, $sql);
            while ($olympiad = mysqli_fetch_assoc($classes_query)) {
                echo '<option value=' . $olympiad['id'] . '>' . $olympiad['name_ru'] . '</option>';
            } ?>
        </select>
        <h2>Выберите клубы в которых вы участвуете</h2>
        <?php
            $sql = 'SELECT id, name_ru FROM club';
            $clubs = mysqli_query($connection, $sql);
            while ($club = mysqli_fetch_assoc($clubs)) {
                $ID = $club['id'];
                $name = $club['name_ru'];
                echo "<label><input type=checkbox name=$ID>$name</label><br>";
            }
        ?>
    </fieldset>

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
</body>
</html>