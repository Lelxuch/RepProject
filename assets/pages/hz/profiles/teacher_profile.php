<?php require "../../../../includes/config.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../../style/style_teacher_profile.css">
    <title>Профиль ученика</title>
</head>
<body>
    <header class="header">
        <div class="header_line">
            <div class="container">
                <div class="header_content">
                    <a class="header_logo" href="../../../../index.php"></a>
                    <nav class="nav">
                        <a class="nav_link" href="../awards.php">Достижения</a>
                        <a class="nav_link" href="../students.php">Ученики</a>
                        <a class="nav_link" href="../teachers.php">Учителя</a>
                        <a class="nav_link" href="../../login.php" target="_blank"><img class="user_img" src="../../../images/header/header_user.png"></a>
                        <a class="nav_link" href="../../search/search.php" target="_blank"><img class="search_img" src="../../../images/header/header_search.png"></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="profile">
        <div class="container">
            <div class="profile_content">
                <div class="profile_header">
                    <div class="profile_left">
                        <img cLass="profile_photo" src="../../../images/user/user.jpg" alt="Фото ученика">
                    </div>
                    <div class="profile_right">
                        <div class="profile_name">Куаныш Нургазин</div>
                        <div class="profile_right_content">
                            <div class="profile_right_class">Начало карьеры: 2016</div>
                            <div class="profile_right_year">Карьера в нашем лицее: 3 года, 6 месяцев</div>
                            <div class="profile_right_teacher">Класс: 2015-2020(В)</div>
                            <div class="profile_right_subjects">Роль: учитель</div>
                            <div class="profile_right_clubs">Предмет: Математика</div>
                            <div class="profile_right_category">Категория: Педагог-Модератор</div>
                        </div>
                    </div>
                </div>
                <div class="students_show_btn">
                    <form action="teacher_profile.php">
                        <button class="show_btn" name="show_class_btn" value="show_class">Показать учеников</button>
                        <button class="show_btn" name="show_olympiad_btn" value="show_olympiad">Показать олимпиадчиков</button>
                    </form>
                </div>
                <div class="students_list">
                    <div class="students_block">
                        <div class="students_item_p1">
                            <a href="student_profile.php"><img class="students_item_img" src="../../../images/user/user.jpg"></a>
                        </div>
                        <div class="students_item_p2">
                            <div class="students_name">
                                <a class="students_name_link" href="student_profile.php">Накып Санжар Жасуланулы</a>
                            </div>
                            <div class="students_awards">
                                Награды: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                            <div class="students_footer">
                                <div class="students_footer_item_p">
                                    <div class="students_footer_item">Год выпуска: 2015-2020</div>
                                    <div class="students_footer_item">Класс: В</div>
                                </div>
                                <div class="students_footer_item_p">
                                    <div class="students_footer_item">Классный руководитель: <a class="teachers_name_link" href="profiles/teacher_profile.php">Куаныш агай</a></div>
                                    <div class="students_footer_item">Олимпиада или клуб: Информатика</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="students_last_block">
                        <div class="students_more">
                            <button class="more_btn" type="submit" name="button">Загрузить больше</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_content">
            <div class="footer_header">
                <div class="footer_logo_component">
                    <img class="footer_logo" src="../../../images/footer/logo.png">
                    <div class="footer_logo_name">
                        <?php echo $lang['footer_logo_name']; ?>
                    </div>
                </div>
            </div>
            <div class="footer_item">
                <div class="footer_item_header">
                    <?php echo $lang['footer_item_header_1']; ?>
                </div>
                <div class="footer_item_content">
                    <div class="footer_contact">
                        <div class="footer_contact_item">
                            <img class="footer_phone_img" src="../../../images/footer/phone.png">
                            <?php echo $contact['phone']; ?>
                        </div>
                        <div class="footer_contact_item">
                            <img class="footer_mail_img" src="../../../images/footer/mail.png">
                            <?php echo $contact['email']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_item">
                <div class="footer_item_header">
                    <?php echo $lang['footer_item_header_2']; ?>
                </div>
                <div class="footer_item_content">
                    <div class="footer_map">
                        <div class="footer_map_header">
                            <img class="footer_map_img" src="../../../images/footer/map.png">
                        </div>
                        <div class="footer_map_content">
                            <?php echo $lang['footer_map_content']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_item">
                <div class="footer_item_header">
                    <?php echo $lang['footer_item_header']; ?>
                </div>
                <div class="footer_item_content">
                    <div class="footer_soc">
                        <div class="footer_soc_item">
                            <a href="<?php echo $contact['youtube']; ?>" target="_blank"><img class="footer_soc_img" src="../../../images/footer/youtube.png"></a>
                            <a href="<?php echo $contact['telegram']; ?>" target="_blank"><img class="footer_soc_img" src="../../../images/footer/telegram.png"></a>
                        </div>
                        <div class="footer_soc_item">
                            <a href="<?php echo $contact['twitter']; ?>" target="_blank"><img class="footer_soc_img" src="../../../images/footer/twitter.png"></a>
                            <a href="<?php echo $contact['instagram']; ?>" target="_blank"><img class="footer_soc_img" src="../../../images/footer/instagram.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_footer">
            <?php echo $lang['footer_footer']; ?>
        </div>
    </div>
</body>
</html>