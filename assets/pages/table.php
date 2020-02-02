<?php require "../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style/style_table.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title><?php echo $lang['table_title']; ?></title>
</head>
<body>
    <div class="table_all_header">
        <div class="container">
            <div class="table_header">
                <a class="table_head_arrow" href="../../index.php#rating_link"></a>
                <div class="table_head_title">
                    <?php echo $lang['table_title']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <table class="all_table" border="1">
                <tr>
                    <th class="th_olympiad"><?php echo $lang['table_column1']; ?></th>
                    <th class="th_year"><?php echo $lang['table_column2']; ?></th>
                    <th class="th_scope"><?php echo $lang['table_column3']; ?></th>
                    <th class="th_name"><?php echo $lang['table_column4']; ?></th>
                    <th class="th_medal"><?php echo $lang['table_column5']; ?></th>
                    <th class="th_subject"><?php echo $lang['table_column6']; ?></th>
                    <th class="th_class"><?php echo $lang['table_column7']; ?></th>
                    <th class="th_location"><?php echo $lang['table_column8']; ?></th>
                </tr>
                <?php
                  $result = mysqli_query($connection, 'SELECT * FROM achievement ORDER BY title');
                  while ( ($record = mysqli_fetch_assoc($result)) ){
                      echo '<tr><td>'.
                      $record['title']
                      .'</td>'.'<td>'.
                      $record['year']
                      .'</td>'.'<td>'.
                      $record['scope']
                      .'</td>'.'<td>'.
                      $record['name']
                      .'</td>'.'<td>'.
                      $record['medal']
                      .'</td>'.'<td>'.
                      $record['subject']
                      .'</td>'.'<td>'.
                      $record['grade']
                      .'</td>'.'<td>'.
                      $record['location']
                      .'</td></tr>';
                  }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
