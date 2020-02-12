<?php require "../../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Достижения</title>
    <link rel="stylesheet" type="text/css" href="/assets/style/style_teachers.css">
</head>
<body>
    <header class="header">
        <div class="header_line">
            <div class="container">
                <div class="header_content">
                    <a class="header_logo" href="../../../../index.php"></a>
                    <nav class="nav">
                        <a class="nav_link" href="awards.php">Достижения</a>
                        <a class="nav_link" href="students.php">Ученики</a>
                        <a class="nav_link_visited" href="">Учителя</a>
                        <a class="nav_link" href="../../../index.php">Домой</a>
                        <a class="nav_link" href="../login.php" target="_blank"><img class="user_img" src="../../images/header/header_user.png"></a>
                        <a class="nav_link" href="../search/search.php" target="_blank"><img class="search_img" src="../../images/header/header_search.png"></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="teachers">
        <div class="container">
            <div class="content">
                <div class="content_fs">
                    <div class="fs">
                        <div class="fs_sort">
                            <div class="sort_accept">
                                <form class="" action="teachers.php" method="post">
                                    <button class="sort_btn" type="submit" name="button">Сортировать</button>
                                </form>
                            </div>
                            <div class="sort_form">
                                <form class="sort_items" action="teachers.php" method="post">
                                    <label>Выберите тип сортировки:</label>
                                    <select name="selsorttype">
                                        <option value="all">-</option>
                                        <option value="name">Имя</option>
                                        <option value="role">Роль</option>
                                        <option value="subject">Предмет</option>
                                        <option value="category">Категория</option>
                                    </select>
                                </form>
                                <form class="sort_type" action="teachers.php" method="post">
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
                                <form class="filter_items" action="teachers.php" method="post">
                                    <div class="filter_item">
                                        <div class="filter_item_p">
                                            <label class="filter_item_p_text">Выберите предмет: </label>
                                            <select name="subject">
                                                <option value="math">Математика</option>
                                                <option value="ICT">Информатика</option>
                                            </select>
                                        </div>
                                        <div class="filter_item_p">
                                        <label class="filter_item_p_text">Выберите роль: </label>
                                            <select name="role">
                                                <option value="director">Директор</option>
                                                <option value="teacher">Учитель</option>
                                            </select>
                                        </div>
                                        <div class="filter_item_p">
                                        <label class="filter_item_p_text">Выберите категорию: </label>
                                            <select name="category">
                                                <option value="pedagog">Педагог</option>
                                                <option value="pedagog-moderator">Педагог-модератор</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="filter_accept">
                                <form class="" action="teachers.php" method="post">
                                    <button class="filter_btn" type="submit" name="button">Фильтровать</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teachers_list">
                    <div class="teachers_block">
                        <div class="teachers_item_p1">
                            <a href="profiles/student_profile.php"><img class="teachers_item_img" src="../../images/filler/filler1.png"></a>
                        </div>
                        <div class="teachers_item_p2">
                            <div class="teachers_name">
                                <a class="teachers_name_link" href="profiles/teacher_profile.php">Куаныш Нургазин</a>
                            </div>
                            <div class="teachers_main_content">
                                <div class="teachers_main_item">
                                    <div class="main_item_p1">Роль: Учитель</div>
                                    <div class="main_item_p1">Предмет: Математика</div>
                                    <div class="main_item_p1">Категория: Педагог-модератор</div>
                                </div>
                                <div class="teachers_main_item">
                                    <div class="main_item_p2">Начало карьеры учителя: 2016</div>
                                    <div class="main_item_p2">Карьера учителя в нашем лицее: 3 года</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="teachers_last_block">
                        <div class="teachers_more">
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
