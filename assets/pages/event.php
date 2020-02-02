<?php require "../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style/style_event.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title><?php echo $lang['event_title']; ?></title>
</head>
<body>
    <?php
    $event_query = mysqli_query($connection, 'SELECT * FROM event WHERE id = "' . $_GET['id'] . '" LIMIT 1');
    $event_info = mysqli_fetch_assoc($event_query);
    ?>
    <div class="blog_all_header">
        <div class="container">
            <div class="blog_header">
                <a class="blog_head_arrow" href="../../index.php#event_link"></a>
                <div class="blog_head_title">
                    <?php $event_info['title']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <img class="basketball_img" src="../images/event/<?php echo $event_info['image']; ?>" alt="<?php echo $event_info['image']; ?>">
            <p><?php echo $event_info['text']; ?></p>
        </div>
    </div>
</body>
</html>
