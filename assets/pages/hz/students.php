<?php require "../../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Достижения</title>
    <link rel="stylesheet" type="text/css" href="/assets/style/style_students.css">
</head>
<body>
    <header class="header">
        <div class="header_line">
            <div class="container">
                <div class="header_content">
                    <a class="header_logo" href="../../../../index.php"></a>
                    <nav class="nav">
                        <a class="nav_link" href="awards.php">Достижения</a>
                        <a class="nav_link_visited" href="">Ученики</a>
                        <a class="nav_link" href="teachers.php">Учителя</a>
                        <a class="nav_link" href="../../../index.php">Домой</a>
                        <a class="nav_link" href="../login.php" target="_blank"><img class="user_img" src="../../images/header/header_user.png"></a>
                        <a class="nav_link" href="../search/search.php" target="_blank"><img class="search_img" src="../../images/header/header_search.png"></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="students">
        <div class="container">
            <div class="content">
                <div class="content_fs">
                    <div class="fs">
                        <div class="fs_sort">
                            <div class="sort_accept">
                                <form class="" action="students.php" method="post">
                                    <button class="sort_btn" type="submit" name="button">Сортировать</button>
                                </form>
                            </div>
                            <div class="sort_form">
                                <form class="sort_items" action="awards.php" method="post">
                                    <label>Выберите тип сортировки:</label>
                                    <select name="selsorttype">
                                        <option value="all">-</option>
                                        <option value="name">Имя</option>
                                        <option value="year">Год</option>
                                        <option value="class">Класс</option>
                                    </select>
                                </form>
                                <form class="sort_type" action="students.php" method="post">
                                    <label>Выберите порядок сортировки:</label>
                                    <select name="selsortorder">
                                        <option value="up">По убыванию</option>
                                        <option value="down">По возрастанию</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="fs_filter">
                            <div class="filter_form">
                                <form class="filter_items" action="students.php" method="post">
                                    <div class="filter_item">
                                        <label>Выберите год:</label>
                                        <select name="selyear">
                                            <option value="all">-</option>
                                            <option value="2020">2014-2019</option>
                                            <option value="2019">2015-2020</option>
                                        </select>
                                        <label>Выберите олимпиаду или клуб:</label>
                                        <select name="selsub">
                                            <option value="all">-</option>
                                            <option value="ICT">ICT</option>
                                            <option value="Math">Math</option>
                                        </select>
                                        <label>Выберите Класс</label>
                                        <select name="selclass">
                                            <option value="all">-</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="filter_accept">
                                <form class="" action="students.php" method="post">
                                    <button class="filter_btn" type="submit" name="button">Фильтровать</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="students_list">
                    <div class="students_block">
                        <div class="students_item_p1">
                            <a href="profiles/student_profile.php"><img class="students_item_img" src="../../images/user/user.jpg"></a>
                        </div>
                        <div class="students_item_p2">
                            <div class="students_name">
                                <a class="students_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a>
                            </div>
                            <div class="students_main_content">
                                <div class="students_main_item">
                                    <div class="main_item_p1">Олимпиада: Информатика</div>
                                    <div class="main_item_p1">Клуб: Баскетбол</div>
                                    <div class="main_item_p1">Классный руководитель: <a class="teachers_name_link" href="profiles/teacher_profile.php">Куаныш Нургазин</a></div>
                                </div>
                                <div class="students_main_item">
                                    <div class="main_item_p2">Год выпуска: 2015-2020</div>
                                    <div class="main_item_p2">Класс: В</div>
                                    <div class="main_item_p2"></div>
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
                    <img class="footer_logo" src="../../images/footer/logo.png">
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
                            <img class="footer_phone_img" src="../../images/footer/phone.png">
                            <?php echo $contact['phone']; ?>
                        </div>
                        <div class="footer_contact_item">
                            <img class="footer_mail_img" src="../../images/footer/mail.png">
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
                            <img class="footer_map_img" src="../../images/footer/map.png">
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
                            <a href="<?php echo $contact['youtube']; ?>" target="_blank"><img class="footer_soc_img" src="../../images/footer/youtube.png"></a>
                            <a href="<?php echo $contact['telegram']; ?>" target="_blank"><img class="footer_soc_img" src="../../images/footer/telegram.png"></a>
                        </div>
                        <div class="footer_soc_item">
                            <a href="<?php echo $contact['twitter']; ?>" target="_blank"><img class="footer_soc_img" src="../../images/footer/twitter.png"></a>
                            <a href="<?php echo $contact['instagram']; ?>" target="_blank"><img class="footer_soc_img" src="../../images/footer/instagram.png"></a>
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
