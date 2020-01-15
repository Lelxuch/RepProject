<div class="lang">
        <div class="lang_content">
                <form action="index.php" method="post">
                    <input type="submit" name="en" value="EN">
                    <input type="submit" name="ru" value="RU">
                </form>
        </div>
</div>
<header class="header">
    <div class="header_line">
        <div class="container">
            <div class="header_content">
                <div class="header_logo"></div>
                <nav class="nav">
                    <a class="nav_link" href="#" onclick="slowScroll('#about_link')"><?php echo $config[$lang]['header_about']; ?></a>
                    <a class="nav_link" href="#" onclick="slowScroll('#advantage_link')"><?php echo $config[$lang]['header_advantage']; ?></a>
                    <a class="nav_link" href="#" onclick="slowScroll('#admission_link')"><?php echo $config[$lang]['header_admission']; ?></a>
                    <a class="nav_link" href="#" onclick="slowScroll('#rating_link')"><?php echo $config[$lang]['header_rating']; ?></a>
                    <a class="nav_link" href="#" onclick="slowScroll('#event_link')"><?php echo $config[$lang]['header_event']; ?></a>
                    <a class="nav_link" href="#" onclick="slowScroll('#blog_link')"><?php echo $config[$lang]['header_blog']; ?></a>
                    <a class="nav_link" href="assets/pages/login.php" target="_blank"><img class="admin_img" src="../assets/images/header/header_user.png"></a>
                </nav>
            </div>
        </div>
    </div>
</header>
