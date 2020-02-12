<?php require "../../../../includes/config.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../../style/style_student_profile.css">
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
                        <div class="profile_name">Накып Санжар Жасуланулы</div>
                        <div class="profile_right_content">
                            <div class="profile_right_class">Класс: B</div>
                            <div class="profile_right_year">Год выпуска: 2015-2020</div>
                            <div class="profile_right_teacher">Классный руководитель: <a class="profile_header_teacher_link" href="teacher_profile.php">Куаныш Нургазин</a></div>
                            <div class="prfile_right_o_teacher">Олимпиадный руководитель: <a class="profile_header_teacher_link" href="teacher_profile.php">Нурсултан Ахметов</a></div>
                            <div class="profile_right_subjects">Предметы: Информатика</div>
                            <div class="profile_right_clubs">Клуб: Баскетбола</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_table">
            <table class="all_table">
                <tr>
                    <th class="th_name">Имя</th>
                    <th class="th_year">Год</th>
                    <th class="th_scope">Масштаб</th>
                    <th class="th_olympiad">Олимпиада</th>
                    <th class="th_medal">Медаль</th>
                    <th class="th_subject">Предмет</th>
                    <th class="th_class">Класс</th>
                    <th class="th_location">Место проведения</th>
                </tr>
                <tr>
                    <td>Накып Санжар Жасуланулы</td>
                    <td>2020</td>
                    <td>Областная</td>
                    <td>Областная олимпиада по информатике</td>
                    <td>Серебро</td>
                    <td>Информатика</td>
                    <td>11</td>
                    <td>Школа Нурмакова</td>
                </tr>
            </table>
        </div>
        <div class="more_table">
            <button class="more_btn" type="submit" name="button">Загрузить больше</button>
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