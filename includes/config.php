<?php
session_start();

if (!isset($_SESSION['lang'])) {
	$_SESSION['lang'] = 'ru';
}
elseif (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
	if ($_GET['lang'] == 'kz') {
		$_SESSION['lang'] = 'kz';
	}
	elseif ($_GET['lang'] == 'en') {
		$_SESSION['lang'] = 'en';
	}
	elseif ($_GET['lang'] == 'ru') {
		$_SESSION['lang'] = 'ru';
	}
	elseif ($_GET['lang'] == 'latn') {
		$_SESSION['lang'] = 'latn';
	}
}
require_once 'language/' . $_SESSION['lang'] . '.php';

$contact = array(
	'phone' => '(7212)37-11-02',
	'email' => 'kktl@mail.ru',
	'youtube' => 'https://www.youtube.com/channel/UCsO1yAKQjPL74NAR-8BoAUg',
	'telegram' => 'https://t.me/karbil1',
	'twitter' => 'https://twitter.com/karbilimschool',
	'instagram' => 'https://instagram.com/bil.karagandy?igshid=16wwqltcneo7v',
	'google_maps' => 'https://www.google.kz/maps/place/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%BE-%D0%A2%D1%83%D1%80%D0%B5%D1%86%D0%BA%D0%B8%D0%B9+%D0%BB%D0%B8%D1%86%D0%B5%D0%B9+%D0%B4%D0%BB%D1%8F+%D0%BC%D0%B0%D0%BB%D1%8C%D1%87%D0%B8%D0%BA%D0%BE%D0%B2/@49.8462011,73.200645,483m/data=!3m1!1e3!4m5!3m4!1s0x424348eaf0d3a153:0x553f8563fa7754dd!8m2!3d49.8465131!4d73.2013511'
);

include "database.php";

/* use instead of header('Location: /'); */
function GoToNow ($url){
    echo '<script language="javascript">window.location.href ="'.$url.'"</script>';
}
