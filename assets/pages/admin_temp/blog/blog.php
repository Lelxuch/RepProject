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
                <a class="nav_link_visited" href="../blog/blog.php">Блог</a>
                <a class="nav_link" href="../event/event.php">Ближайшие события</a>
                <a class="nav_link" href="../rating/rating.php">Рейтинг учеников</a>
                <a class="nav_link" href="../social/social.php">Соц.сети</a>
            </div>
        </div>

        <div class="content">
            <div class="content_blog">
                <div class="blog">
                    <div class="blog_article">
                        <div class="blog_item_p1">
                            <a href="#"><img class="blog_item_img" src="../../../images/filler/filler1.png"></a>
                        </div>
                        <div class="blog_item_p2">
                            <div class="blog_title">
                                <a class="blog_title_link" href="#">Blog title</a>
                            </div>
                            <div class="blog_text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                            <div class="blog_footer">
                                <div class="blog_footer_item">
                                    <div class="blog_stat">
                                        <div class="blog_stat_item">
                                            <img src="../../../images/blog/view.png" class="blog_stat_photo">
                                            118
                                        </div>
                                        <div class="blog_stat_item">
                                            <img src="../../../images/blog/like.png" class="blog_stat_photo">
                                            45
                                        </div>
                                    </div>
                                    <div class="blog_stat">
                                        <div class="blog_date">
                                            Дата: 05.12.2003
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_footer_item">
                                    <div class="blog_del_edit">
                                        <div class="blog_edit">
                                            <form action="temirizmeni.php" method="post">
                                                <input class="blog_edit_img" type="image" src="../../../images/admin/blog/edit.png">
                                            </form>
                                        </div>
                                        <div class="blog_delete">
                                            <form action="temirizmeni.php" method="post">
                                                <input class="blog_delete_img" type="image" src="../../../images/admin/blog/delete.png">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add_blog">
                    <a href="#"><img class="add_blog_img" src="../../../images/admin/blog/add.png"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
