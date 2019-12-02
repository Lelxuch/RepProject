<?php require "includes/config.php"; ?>
<!DOCTYPE html>
<html>]
<head>
    <link rel="stylesheet" type="text/css" href="assets/style/style_blog.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Блог</title>
</head>
<body>
		<?php
			$article_id = 1;
			$article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $article_id);
			$article_title = (mysqli_fetch_assoc($article_data))['title'];
		?>
    <div class="blog_all_header">
        <div class="container">
            <div class="blog_header">
                <a class="blog_head_arrow" href="index.php"></a>
                <div class="blog_head_title">
                    <?php echo $article_title; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <img class="book_img" src="assets/images/blog/post1.jpg" alt="books">
						<?php
							$article_content = mysqli_query($connection, 'SELECT * FROM blog_content WHERE article_id = ' . $article_id);
						?>
            <ol>
							<?php
								while( $article_text = mysqli_fetch_assoc($article_content) ){
									echo '<li>' . $article_text['text'] . '</li>';
								}
							?>
            </ol>
        </div>
    </div>
</body>
</html>
