<?php require "includes/config.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="/assets/style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Bebas+Neue|Open+Sans&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title><?php echo $lang['index_title']; ?></title>
</head>

<body>
	<!-- LANGUAGE SWITCHER -->
	<!--
	<div class="lang">
		<div class="lang_content">
			<a class="lang_link" href="index.php?lang=ru"><?php echo $lang['rus']; ?></a>
			<a class="lang_link" href="index.php?lang=en"><?php echo $lang['eng']; ?></a>
			<a class="lang_link" href="index.php?lang=kz"><?php echo $lang['kaz']; ?></a>
			<a class="lang_link" href="index.php?lang=latn"><?php echo $lang['latn']; ?></a>
		</div>
	</div>
	-->
	<div class="lang">
		<div class="lang_content">
			<select class="minimenu" name="sel_lang" id="">
				<option value="">язык</option>
				<option value="index.php?lang=ru">ru</option>
				<option value="index.php?lang=kz">kz</option>
				<option value="index.php?lang=en">en</option>
				<option value="index.php?lang=latn">latn</option>
			</select>
		</div>
	</div>
	<!-- NAVBAR -->
	<header class="header">
		<div class="header_line">
			<div class="container">
				<div class="header_content">
					<div class="header_logo"></div>
					<nav class="nav">
						<div class="nav_content">
							<a class="nav_link" href="#" onclick="slowScroll('#about_link')"><?php echo $lang['header_about']; ?></a>
							<a class="nav_link" href="#" onclick="slowScroll('#advantage_link')"><?php echo $lang['header_advantage']; ?></a>
							<a class="nav_link" href="#" onclick="slowScroll('#admission_link')"><?php echo $lang['header_admission']; ?></a>
							<a class="nav_link" href="assets/pages/hz/awards.php"><?php echo $lang['header_rating']; ?></a>
							<a class="nav_link" href="#" onclick="slowScroll('#event_link')"><?php echo $lang['header_event']; ?></a>
							<a class="nav_link" href="#" onclick="slowScroll('#blog_link')"><?php echo $lang['header_blog']; ?></a>
							<a class="nav_link" href="assets/pages/login.php"><img class="user_img" src="../assets/images/header/header_user.png"></a>
							<a class="nav_link" href="assets/pages/search/search.php"><img class="search_img" src="../assets/images/header/header_search.png"></a>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- INTRO -->
	<div class="intro" id="intro_link">
		<div class="container">
			<div class="intro_content">
				<div class="intro_title">
					<?php echo $lang['intro_title']; ?>
				</div>
				<a href="#" class="intro_btn" onclick="slowScroll('#about_link')"><?php echo $lang['intro_btn']; ?></a>
			</div>
		</div>
	</div>
	<!-- ABOUT US -->
	<div class="about" id="about_link">
		<div class="about_all_header">
			<div class="container">
				<div class="about_header">
					<a class="about_head_arrow" href="#" onclick="slowScroll('#intro_link')"></a>
					<div class="about_head_title">
						<?php echo $lang['about_head_title']; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="about_content">
				<div class="about_item">
					<div class="about_image"></div>
				</div>
				<div class="about_item">
					<div class="about_inner">
						<div class="about_title">
							<?php echo $lang['about_title']; ?>
						</div>
						<div class="about_text">
							<?php echo $lang['about_text']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ADVANTAGES -->
	<div class="advantage" id="advantage_link">
		<div class="advantage_all_header">
			<div class="container">
				<div class="advantage_header">
					<div class="advantage_head_item">
						<a class="advantage_head_arrow" href="#" onclick="slowScroll('#intro_link')"></a>
					</div>
					<div class="advantage_head_item">
						<div class="advantage_head_inner">
							<div class="advantage_head_subtitle">
								<?php echo $lang['advantage_head_subtitle']; ?>
							</div>
							<div class="advantage_head_title">
								<?php echo $lang['advantage_head_title']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="advantage_content">
				<div class="advantage_item">
					<!-- 1 advantage -->
					<div class="advantage_block">
						<img class="advantage_post_icon" src="assets/images/advantage/teachers.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								<?php echo $lang['advantage_post_title_1']; ?>
							</div>
							<div class="advantage_post_text">
								<?php echo $lang['advantage_post_text_1']; ?>
							</div>
						</div>
					</div>
					<!-- 2 advantage -->
					<div class="advantage_block">
						<img class="advantage_post_icon" src="../assets/images/advantage/graduate.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								<?php echo $lang['advantage_post_title_2']; ?>
							</div>
							<div class="advantage_post_text">
								<?php echo $lang['advantage_post_text_2']; ?>
							</div>
						</div>
					</div>
					<!-- 3 advantage -->
					<div class="advantage_block">
						<img class="advantage_post_icon" src="../assets/images/advantage/behavior.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								<?php echo $lang['advantage_post_title_3']; ?>
							</div>
							<div class="advantage_post_text">
								<?php echo $lang['advantage_post_text_3']; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="advantage_item">
					<!-- 4 advantage -->
					<div class="advantage_block">
						<img class="advantage_post_icon" src="../assets/images/advantage/language.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								<?php echo $lang['advantage_post_title_4']; ?>
							</div>
							<div class="advantage_post_text">
								<?php echo $lang['advantage_post_text_4']; ?>
							</div>
						</div>
					</div>
					<!-- 5 advantage -->
					<div class="advantage_block">
						<img class="advantage_post_icon" src="../assets/images/advantage/medal.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								<?php echo $lang['advantage_post_title_5']; ?>
							</div>
							<div class="advantage_post_text">
								<?php echo $lang['advantage_post_text_5']; ?>
							</div>
						</div>
					</div>
					<!-- 6 advantage -->
					<div class="advantage_block">
						<img class="advantage_post_icon" src="../assets/images/advantage/dormitory.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								<?php echo $lang['advantage_post_title_6']; ?>
							</div>
							<div class="advantage_post_text">
								<?php echo $lang['advantage_post_text_6']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ADMISSIONS -->
	<div class="admission" id="admission_link">
		<div class="admission_all_header">
			<div class="container">
				<div class="admission_header">
					<div class="admission_head_item">
						<a class="admission_head_arrow" href="#" onclick="slowScroll('#intro_link')"></a>
					</div>
					<div class="admission_head_item">
						<div class="admission_head_inner">
							<div class="admission_head_subtitle">
								<?php echo $lang['admission_head_subtitle']; ?>
							</div>
							<div class="admission_head_title">
								<?php echo $lang['admission_head_title']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="admission_content">
				<div class="admission_item">
					<div class="admission_item_element">
						<div class="admission_item_element_text">
							<?php echo $lang['admission_item_element_text_1']; ?>
						</div>
						<img class="admission_item_element_icon" src="../assets/images/admission/icons/documents_icon.png" alt="Documents">
					</div>
				</div>
				<div class="admission_item_linking">
					<img class="admission_item_linkingline" src="../assets/images/admission/load.png" alt="LinkingLine">
				</div>
				<div class="admission_item">
					<div class="admission_item_element">
						<div class="admission_item_element_text">
							<?php echo $lang['admission_item_element_text_2']; ?>
						</div>
						<img class="admission_item_element_icon" src="../assets/images/admission/icons/competition_icon.png" alt="Competition">
					</div>
				</div>
				<div class="admission_item_linking">
					<img class="admission_item_linkingline" src="../assets/images/admission/load.png" alt="LinkingLine">
				</div>
				<div class="admission_item">
					<div class="admission_item_element">
						<div class="admission_item_element_text">
							<?php echo $lang['admission_item_element_text_3']; ?>
						</div>
						<img class="admission_item_element_icon" src="../assets/images/admission/icons/success_icon.png" alt="Success">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="documents">
		<div class="documents_all_header">
			<div class="container">
				<div class="documents_header">
					<div class="documents_head_item">
						<a class="documents_head_arrow" href="#" onclick="slowScroll('#intro_link')"></a>
					</div>
					<div class="documents_head_item">
						<div class="documents_head_title">
							<?php echo $lang['documents_head_title']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="documents_content">
				<div class="documents_item">
					<div class="documents_item_title">
						<?php echo $lang['documents_item_title_1']; ?>
					</div>
					<div class="documents_item_inner">
						<ul>
							<li><?php echo $lang['documents_item_inner_1']; ?></li>
							<li><?php echo $lang['documents_item_inner_2']; ?></li>
							<li><?php echo $lang['documents_item_inner_3']; ?></li>
						</ul>
					</div>
				</div>
				<div class="documents_item">
					<div class="documents_item_title">
						<?php echo $lang['documents_item_title_2']; ?>
					</div>
					<div class="documents_item_inner">
						<ul>
							<li><?php echo $lang['documents_item_inner_11']; ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="competition">
		<div class="competition_all_header">
			<div class="container">
				<div class="competition_header">
					<div class="competition_head_item">
						<a class="competition_head_arrow" href="#" onclick="slowScroll('#intro_link')"></a>
					</div>
					<div class="competition_head_item">
						<div class="competition_head_title">
							<?php echo $lang['competition_head_title']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="competition_content">
				<div class="competition_item">
					<div class="competition_item_title">
						<?php echo $lang['competition_item_title']; ?>
					</div>
					<div class="competition_item_inner">
						<div class="competition_inner_title">
							<?php echo $lang['competiotion_inner_title']; ?>
						</div>
						<ul>
							<li><?php echo $lang['competition_inner_title_1']; ?></li>
							<li><?php echo $lang['competition_inner_title_2']; ?></li>
							<li><?php echo $lang['competition_inner_title_3']; ?></li>
						</ul>
					</div>
				</div>
				<div class="competition_item">
					<div class="competition_item_title">
						<?php echo $lang['competition_item_title_2']; ?>
					</div>
					<div class="competition_item_inner">
						<div class="competition_inner_title">
							<?php echo $lang['competition_inner_title_22']; ?>
						</div>
						<ul>
							<li><?php echo $lang['competition_inner_title_31']; ?></li>
							<li><?php echo $lang['competition_inner_title_32']; ?></li>
							<li><?php echo $lang['competition_inner_title_33']; ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- MAP -->
	<div class="map">
		<div class="container">
			<div class="map_content">
				<div class="map_item">
					<img src="../assets/images/map/map_flag.png" class="map_flag">
					<div class="map_title">
						<a class="map_link" target="_blank" href="<?php echo $contact['google_maps']; ?>"><?php echo $lang['map_link']; ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--
	<div class="rating" id="rating_link">
		<div class="rating_all_header">
			<div class="container">
				<div class="rating_header">
					<div class="rating_head_item">
						<a class="rating_head_arrow" href="#" onclick="slowScroll('#intro_link')"></a>
					</div>
					<div class="rating_head_item">
						<div class="rating_head_inner">
							<div class="rating_head_subtitle">
								<?php echo $lang['rating_head_subtitle']; ?>
							</div>
							<div class="rating_head_title">
								<?php echo $lang['rating_head_title']; ?>
							</div>
						</div>
					</div>
					<div class="rating_header_item">
						<a class="rating_header_archive_btn" target="_blank" href="../assets/pages/table.php"><?php echo $lang['rating_header_archive_btn']; ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="rating_content">
				<div class="rating_student">
					<div class="rating_item1">
						<div class="rating_place">
							#1
						</div>
						<div>
							<img class="rating_face" src="../assets/images/rating/rank1.jpg">
						</div>
					</div>
					<div class="rating_item2">
						<div class="rating_name">
							Нурпеисов Олжас
						</div>
						<div class="rating_awards">
							ICHO(2018, 2019) - бронза; Республиканская(2017, 2018, 2019) - золото;
							Областная(2016, 2017, 2018, 2019) - золото; Бектуров(2017, 2018, 2019) -
							бронза, золото, золото; Менделеевская(2018, 2019) - бронза; Туймада(2017)-
							серебро.
						</div>
					</div>
				</div>
				<div class="rating_student">
					<div class="rating_item1">
						<div class="rating_place">
							#2
						</div>
						<div>
							<img class="rating_face" src="../assets/images/rating/rank2.jpg">
						</div>
					</div>
					<div class="rating_item2">
						<div class="rating_name">
							Темирлан Амангельдинов
						</div>
						<div class="rating_awards">
							IPHO(2017) - серебро; Республиканская(2015, 2016, 2017) - золото;
							Областная (2015, 2016, 2017) - золото; Жаутыковская (2017) - серебро;
						</div>
					</div>
				</div>
				<div class="rating_student_last">
					<div class="rating_item1">
						<div class="rating_place">
							#3
						</div>
						<div>
							<img class="rating_face" src="../assets/images/rating/rank3.jpg">
						</div>
					</div>
					<div class="rating_item2">
						<div class="rating_name">
							Саматов Абылай
						</div>
						<div class="rating_awards">
							ICHO(2005) - бронза; Республиканская(2005) - золото; Областная
							(2005, 2004) - золото; Туймада(2004) - Золото.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- EVENT -->
	<div class="event" id="event_link">
		<div class="event_all_header">
			<div class="container">
				<div class="event_header">
					<div class="event_head_item">
						<a class="event_head_arrow" href="#" onclick="slowScroll('#intro_link')"></a>
					</div>
					<div class="event_head_item">
						<div class="event_head_inner">
							<div class="event_head_subtitle">
								<?php echo $lang['event_head_subtitle']; ?>
							</div>
							<div class="event_head_title">
								<?php echo $lang['event_head_title']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="event_content">
				<?php
				$events = mysqli_query($connection, 'SELECT * FROM event ORDER BY event_date ASC LIMIT 3');
				while ($event = mysqli_fetch_assoc($events)) {
				?>
					<div class="event_item">
						<div class="event_item_header">
							<div class="event_title"><?php echo $event['title']; ?></div>
							<a href="../assets/pages/event.php?id=<?php echo $event['id']; ?>">
								<img class="event_photo" src="../assets/images/event/<?php echo $event['image']; ?>">
							</a>
							<div class="event_date">
								<div class="event_date_day"><?php echo date('j', strtotime($event['event_date'])); ?></div><?php echo $lang[date('F', strtotime($event['event_date']))]; ?>
							</div>
						</div>
						<div class="event_item_content">
							<div class="event_text">
								<?php echo mb_substr(strip_tags($event['text']), 0, 50, 'utf-8') . " ..."; ?>
							</div>
						</div>
						<div class="event_footer">
							<div class="event_button">
								<a class="event_button_link" href="../assets/pages/event.php?id=<?php echo $event['id']; ?>"><?php echo $lang['event_button']; ?></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- BLOG -->
	<div class="blog" id="blog_link">
		<div class="blog_all_header">
			<div class="container">
				<div class="blog_header">
					<div class="blog_head_item">
						<a class="blog_head_arrow" href="#" onclick="slowScroll('#intro_link')"></a>
					</div>
					<div class="blog_head_item">
						<div class="blog_head_inner">
							<div class="blog_head_subtitle">
								<?php echo $lang['blog_head_subtitle']; ?>
							</div>
							<div class="blog_head_title">
								<?php echo $lang['blog_head_title']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="blog_posts">
				<?php
				$latest_articles = mysqli_query($connection, 'SELECT * FROM blog ORDER BY pubdate DESC LIMIT 3');
				while ($article = mysqli_fetch_assoc($latest_articles)) {
				?>
					<div class="blog_item">
						<div class="blog_item_header">
							<a href="../assets/pages/blog.php?id=<?php echo $article['id']; ?>">
								<img class="blog_photo" src="../assets/images/blog/<?php echo $article['image']; ?>">
							</a>
						</div>
						<div class="blog_item_content">
							<a href="../assets/pages/blog.php?id=<?php echo $article['id']; ?>" class="blog_title">
								<div><?php echo $article['title']; ?></div>
							</a>
							<div class="blog_text">
								<?php echo mb_substr(strip_tags($article['text']), 0, 100, 'utf-8') . " ..."; ?>
							</div>
						</div>
						<div class="blog_footer">
							<div class="blog_stat">
								<div class="blog_stat_item">
									<img src="../assets/images/blog/view.png" class="blog_stat_photo">
									<?php echo $article['views']; ?>
								</div>
								<div class="blog_stat_item">
									<img src="../assets/images/blog/like.png" class="blog_stat_photo">
									<?php echo $article['likes']; ?>
								</div>
							</div>
							<div class="blog_date">
								<?php echo date("j", strtotime($article['pubdate'])) . " " . $lang[date("F", strtotime($article['pubdate']))]; ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- FOOTER -->
	<div class="footer">
		<div class="footer_content">
			<div class="footer_header">
				<div class="footer_logo_component">
					<img class="footer_logo" src="../assets/images/footer/logo.png">
					<div class="footer_logo_name">
						<?php echo $lang['footer_logo_name']; ?>
					</div>
				</div>
			</div>
			<div class="footer_item">
				<div class="footer_item_header">
					<?php echo $lang['footer_item_header_1']; ?>
				</div>
				<div class="footer_item_content">
					<div class="footer_contact">
						<div class="footer_contact_item">
							<img class="footer_phone_img" src="../assets/images/footer/phone.png">
							<?php echo $contact['phone']; ?>
						</div>
						<div class="footer_contact_item">
							<img class="footer_mail_img" src="../assets/images/footer/mail.png">
							<?php echo $contact['email']; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_item">
				<div class="footer_item_header">
					<?php echo $lang['footer_item_header_2']; ?>
				</div>
				<div class="footer_item_content">
					<div class="footer_map">
						<div class="footer_map_header">
							<img class="footer_map_img" src="../assets/images/footer/map.png">
						</div>
						<div class="footer_map_content">
							<?php echo $lang['footer_map_content']; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_item">
				<div class="footer_item_header">
					<?php echo $lang['footer_item_header']; ?>
				</div>
				<div class="footer_item_content">
					<div class="footer_soc">
						<div class="footer_soc_item">
							<a href="<?php echo $contact['youtube']; ?>" target="_blank"><img class="footer_soc_img" src="../assets/images/footer/youtube.png"></a>
							<a href="<?php echo $contact['telegram']; ?>" target="_blank"><img class="footer_soc_img" src="../assets/images/footer/telegram.png"></a>
						</div>
						<div class="footer_soc_item">
							<a href="<?php echo $contact['twitter']; ?>" target="_blank"><img class="footer_soc_img" src="../assets/images/footer/twitter.png"></a>
							<a href="<?php echo $contact['instagram']; ?>" target="_blank"><img class="footer_soc_img" src="../assets/images/footer/instagram.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_footer">
			<?php echo $lang['footer_footer']; ?>
		</div>
	</div>
	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		function slowScroll(id) {
			$('html, body').animate({
				scrollTop: $(id).offset().top
			}, 750);
		}
		document.querySelector(".minimenu").onchange = function(){
  			location.assign(this.value);
		}
	</script>
</body>

</html>