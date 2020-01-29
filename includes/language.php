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
    $lang = 'en';
}
if ( isset($_POST['ru']) ){
    $lang = 'ru';
}
?>
