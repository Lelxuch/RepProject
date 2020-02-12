<?php require "../../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../style/style_search_student.css">
    <title>Поиск</title>
</head>
<body>
    <div class="back">
		<a href="../../../index.php"><img class="back_img" src="../../images/arrow/arrow_white.png"></a>
	</div> 
    <div class="search">
        <div class="container">
            <div class="search_content">
                <form class="search_line" action="search.php">
                    <input class="search_area" placeholder="Поиск..." type="text">
                    <button class="search_btn" type="submit"><div class="search_btn_img"></div></button>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="search_results">
                <div class="results_header">
                    <a class="results_header_item" href="blog.php">Блог(1223)</a>
                    <a class="results_header_item_big" href="event.php">Ближайшие события(1234)</a>
                    <a class="results_header_item" href="teacher.php">Учителя(8962)</a>
                    <a class="results_header_item_visited" href="">Ученики(1516)</a>
                    <a class="results_header_item" href="competition.php">Соревнования(2564)</a>
                </div>
                <div class="results_content">
                    <div class="students_block">
                        <div class="students_item_p1">
                            <a href="profiles/student_profile.php"><img class="students_item_img" src="../../images/filler/filler1.png"></a>
                        </div>
                        <div class="students_item_p2">
                            <div class="students_name">
                                <a class="students_name_link" href="profiles/student_profile.php">Накып Санжар Жасуланулы</a>
                            </div>
                           <div class="students_main_content">
                                <div class="students_main_item">
                                    <div class="main_item_p1">Олимпиада: Информатика</div>
                                    <div class="main_item_p1">Клуб: Баскетбол</div>
                                    <div class="main_item_p1">Классный руководитель: <a class="teachers_name_link" href="../hz/profiles/teacher_profile.php">Куаныш Нургазин</a></div>
                                </div>
                                <div class="students_main_item">
                                    <div class="main_item_p2">Год выпуска: 2015-2020</div>
                                    <div class="main_item_p2">Класс: В</div>
                                    <div class="main_item_p2">Награды: 1000</div>
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
