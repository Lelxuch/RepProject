<?php require_once("../../../includes/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Please wait ...";
    if (isset($_GET['submit_reg_type'])) {
        switch ($_GET['reg_type']) {
            case 'teacher':
                GoToNow("teacher.php");
                break;
            
            case 'student':
                GoToNow("student.php");
                break;
        }
    }
    ?>
</body>
</html>