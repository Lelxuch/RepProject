<?php
	require "config.php";
	$article_id = 1;
	$article = mysqli_query($connection, 'SELECT * FROM blog_article WHERE id = ' . $article_id);
	while( $article_data = mysqli_fetch_assoc($article) ){
?>
