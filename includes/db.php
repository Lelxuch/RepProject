<?php
	$connection = mysqli_connect('127.0.0.1', 'root', '', 'blog_db');

	if(!$connection){
		echo 'Unsuccessful connection';
		exit();
	}
?>