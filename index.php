<?php require "includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/assets/style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Open+Sans&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>БИЛ</title>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/intro.php";
		include "includes/about.php";
		include "includes/advantage.php";
		include "includes/admission.php";
		include "includes/map.php";
		include "includes/rating.php";
		include "includes/event.php";
		include "includes/blog.php";
		include "includes/footer.php";
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script>
    	function slowScroll(id) {
      		$('html, body').animate({
        	scrollTop: $(id).offset().top
			}, 750);
    	}
  	</script>
</body>
</html>
