<?php
/* if user changed language */
if ( isset($_GET['language']) ){
    $lang = $_GET['language'];
}

/* default language is set to russian*/
else {
    $lang = 'en';
}
?>
