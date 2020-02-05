<?php
$connection = mysqli_connect(
	$config['db']['hostname'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']
);
if( !$connection ){
	echo 'Ошибка подключения';
	exit();
}
?>
