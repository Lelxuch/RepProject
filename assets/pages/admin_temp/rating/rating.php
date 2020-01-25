<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Админ</title>
    <link rel="stylesheet" type="text/css" href="../../../style/style_admin.css">
</head>
<body>
    <div class="main">
        <div class="menu">
            <div class="menu_logo">
                <a class="nav_link_img" href="home.php"><img class="menu_logo_img" src="../../../images/admin/logo.png"></a>
            </div>
            <div class="nav">
                <a class="nav_link" href="../blog/blog.php">Блог</a>
                <a class="nav_link" href="../event/event.php">Ближайшие события</a>
                <a class="nav_link_visited" href="../rating/rating.php">Рейтинг учеников</a>
                <a class="nav_link" href="../social/social.php">Соц.сети</a>
            </div>
        </div>

        <div class="content">
            <div class="content_rating">
                <div class="responds">
                    <div class="respond">
                        <div class="respond_item_p1">
                            <a href="#"><img class="respond_item_img" src="../../../images/filler/filler1.png"></a>
                        </div>
                        <div class="respond_item_p2">
                            <div class="respond_name">
                                <a class="respond_name_link" href="#">Name Surname</a>
                            </div>

                            <div class="respond_text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                            <div class="respond_footer">
                                <div class="respond_footer_item">
                                    <div class="respond_stat">
                                        <div class="respond_date">
                                            Дата: 05.12.2003
                                        </div>
                                        <div class="respond_time">
                                            Время: 09:29
                                        </div>
                                    </div>
                                </div>
                                <div class="respond_footer_item">
                                    <div class="respond_del_edit">
                                        <div class="respond_delete">
                                            <form action="temirizmeni.php" method="post">
                                                <input class="respond_edit_img" type="image" src="../../../images/admin/rating/edit.png">
                                            </form>
                                        </div>
                                        <div class="respond_edit">
                                            <form action="temirizmeni.php" method="post">
                                                <input class="respond_delete_img" type="image" src="../../../images/admin/rating/delete.png">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add_respond">
                    <a href="#"><img class="add_respond_img" src="../../../images/admin/rating/add.png"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
