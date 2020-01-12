<?php
$config = array(
	'db' => array(
		'hostname' => 'localhost',
		'username' => 'root',
		'password' => '',
		'name' => 'karbil_db'
	),
	'russian' => array(
		'January' => 'Январь',
		'February' => 'Февраль',
		'March' => 'Март',
		'April' => 'Апрель',
		'May' => 'Май',
		'June' => 'Июнь',
		'July' => 'Июль',
		'August' => 'Август',
		'September' => 'Сентябрь',
		'October' => 'Октябрь',
		'November' => 'Ноябрь',
		'December' => 'Декабрь'
	)
);

// connecting to database
require "db.php";
?>
