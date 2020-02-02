<?php require "../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style/style_blog.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title><?php echo $lang['event_title']; ?></title>
</head>
<body>
		<?php
		$article_data = mysqli_query($connection, 'SELECT * FROM blog WHERE id = '. $_GET['id'] .' LIMIT 1');
		$article = mysqli_fetch_assoc($article_data);
		?>
    <div class="blog_all_header">
        <div class="container">
            <div class="blog_header">
                <a class="blog_head_arrow" href="../../index.php#blog_link"></a>
                <div class="blog_head_title">
                    <?php echo $article['title']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <img class="book_img" src="../images/blog/<?php echo $article['image']; ?>" alt="books">
            <?php echo $article['text']; ?>
        </div>
    </div>
</body>
</html>
