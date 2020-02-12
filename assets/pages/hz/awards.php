<?php require "../../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Достижения</title>
    <link rel="stylesheet" type="text/css" href="/assets/style/style_awards.css">
</head>
<body>
    <header class="header">
        <div class="header_line">
            <div class="container">
                <div class="header_content">
                    <a class="header_logo" href="../../../../index.php"></a>
                    <nav class="nav">
                        <a class="nav_link_visited" href="">Достижения</a>
                        <a class="nav_link" href="students.php">Ученики</a>
                        <a class="nav_link" href="teachers.php">Учителя</a>
                        <a class="nav_link" href="../../../index.php">Домой</a>
                        <a class="nav_link" href="../login.php" target="_blank"><img class="user_img" src="../../images/header/header_user.png"></a>
                        <a class="nav_link" href="../search/search.php" target="_blank"><img class="search_img" src="../../images/header/header_search.png"></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="awards">
        <div class="container">
            <div class="content">
                <div class="content_fs">
                    <div class="fs">
                        <div class="fs_sort">
                            <div class="sort_accept">
                                <form class="" action="awards.php" method="post">
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
                                        <option value="medal">Медаль</option>
                                        <option value="subject">Предмет</option>
                                        <option value="class">Класс</option>
                                        <option value="level">Масштаб</option>
                                        <option value="comtitle">Название</option>
                                        <option value="location">Место проведения</option>
                                    </select>
                                </form>
                                <form class="sort_type" action="awards.php" method="post">
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
                                <form class="filter_items" action="awards.php" method="post">
                                    <div class="filter_item1">
                                        <label>Выберите год:</label>
                                        <select name="selyear">
                                            <option value="all">-</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                        </select>
                                        <label>Выберите предмет:</label>
                                        <select name="selsub">
                                            <option value="all">-</option>
                                            <option value="ICT">ICT</option>
                                            <option value="Math">Math</option>
                                        </select>
                                        <label>Выберите Масштаб</label>
                                        <select name="sellevel">
                                            <option value="all">-</option>
                                            <option value="Municipal">Областная</option>
                                            <option value="Republic">Республиканская</option>
                                        </select>
                                        <label>Выберите Медаль</label>
                                        <select name="selmedal">
                                            <option value="all">-</option>
                                            <option value="Gold">Золото</option>
                                            <option value="Silver">Серебро</option>
                                        </select>
                                    </div>
                                    <div class="filter_item2">
                                        <label>Выберите Название</label>
                                        <select name="selcompetitionname">
                                            <option value="all">-</option>
                                            <option value="Крутая олимпиада">Крутая олимпиада</option>
                                            <option value="Крутая олимпиада2">Крутая олимпиада2</option>
                                        </select>
                                        <label>Выберите Класс</label>
                                        <select name="selmedal">
                                            <option value="all">-</option>
                                            <option value="11">11</option>
                                            <option value="10">10</option>
                                            <option value="9">9</option>
                                            <option value="8">8</option>
                                            <option value="7">7</option>
                                        </select>
                                        <label>Выберите Место проведения</label>
                                        <select name="selmedal">
                                            <option value="all">-</option>
                                            <option value="Nurmakhov">Школа имени Нурмакова</option>
                                            <option value=""></option>
                                        </select>

                                    </div>
                                </form>
                            </div>
                            <div class="filter_accept">
                                <form class="" action="awards.php" method="post">
                                    <button class="filter_btn" type="submit" name="button">Фильтровать</button>
                                </form>
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
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
                            <td>2020</td>
                            <td>Областная</td>
                            <td>Областная олимпиада по информатике</td>
                            <td>Серебро</td>
                            <td>Информатика</td>
                            <td>11</td>
                            <td>Школа Нурмакова</td>
                        </tr>
                        <tr>
                            <td><a class="awards_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a></td>
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
            </div>
        </div>
        <div class="more_table">
            <button class="more_btn" type="submit" name="button">Загрузить больше</button>
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
