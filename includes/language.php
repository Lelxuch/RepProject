<?php
$lang = 'ru';

/*if ( isset($_GET['language']) ){
    switch ($_GET['language']) {
        case 'ru':
            $lang = 'ru';
            break;
        case 'kz':
            $lang = 'kz';
            break;
        default:
            $lang = 'ru';
            break;
    }
    header('Refresh: 0; url=../index.php');
}*/

if ( isset($_POST['en']) ){
    $_POST = array();
    $lang = 'en';
}
if ( isset($_POST['ru']) ){
    $_POST = array();
    $lang = 'ru';
}
?>
