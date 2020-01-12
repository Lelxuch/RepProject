<?php require "../../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style/style_table.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Архив достижений</title>
</head>
<body>
    <div class="table_all_header">
        <div class="container">
            <div class="table_header">
                <a class="table_head_arrow" href="../../index.php#rating_link"></a>
                <div class="table_head_title">
                    Архив достижений
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <table class="all_table" border="1">
                <tr>
                    <th class="th_olympiad">Название</th>
                    <th class="th_year">Год</th>
                    <th class="th_scope">Масштаб</th>
                    <th class="th_name">Имя</th>
                    <th class="th_medal">Медаль</th>
                    <th class="th_subject">Предмет</th>
                    <th class="th_class">Класс</th>
                    <th class="th_location">Место проведения</th>
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
