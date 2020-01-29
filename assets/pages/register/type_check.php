<?php require_once("../../../includes/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Происходит переадресация. Пожалуйста подождите";
    if (isset($_POST['submit_reg_type'])) {
        switch ($_POST['reg_type']) {
            case 'teacher':
                GoToNow("step2.php");
                break;
            
            case 'student':
                GoToNow("");
                break;
        }
    }
    ?>
</body>
</html>