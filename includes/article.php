<?php
	require "config.php";
	$article_id = 1;
	$article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $article_id);
	$article_title = (mysqli_fetch_assoc($article_data))['title'];
	$article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $article_id);
	$article_description = (mysqli_fetch_assoc($article_data))['description'];
	$article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $article_id);
	$article_pubdate = (mysqli_fetch_assoc($article_data))['pubdate'];
	$article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $article_id);
	$article_likes = (mysqli_fetch_assoc($article_data))['likes'];
	$article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $article_id);
	$article_views = (mysqli_fetch_assoc($article_data))['views'];

	$second_article_id = 2;
	$second_article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $second_article_id);
	$second_article_title = (mysqli_fetch_assoc($second_article_data))['title'];
	$second_article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $second_article_id);
	$second_article_description = (mysqli_fetch_assoc($second_article_data))['description'];
	$second_article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $second_article_id);
	$second_article_pubdate = (mysqli_fetch_assoc($second_article_data))['pubdate'];
	$second_article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $second_article_id);
	$second_article_likes = (mysqli_fetch_assoc($second_article_data))['likes'];
	$second_article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $second_article_id);
	$second_article_views = (mysqli_fetch_assoc($second_article_data))['views'];

	$third_article_id = 2;
	$third_article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $third_article_id);
	$third_article_title = (mysqli_fetch_assoc($third_article_data))['title'];
	$third_article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $third_article_id);
	$third_article_description = (mysqli_fetch_assoc($third_article_data))['description'];
	$third_article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $third_article_id);
	$third_article_pubdate = (mysqli_fetch_assoc($third_article_data))['pubdate'];
	$third_article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $third_article_id);
	$third_article_likes = (mysqli_fetch_assoc($third_article_data))['likes'];
	$third_article_data = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $third_article_id);
	$third_article_views = (mysqli_fetch_assoc($third_article_data))['views'];
?>
