<?php require "includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Jomolhari|Roboto|Kaushan+Script|Montserrat|Open+Sans&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>БИЛ</title>
</head>
<body>
	<header class="header">
		<div class="header_line">
			<div class="container">
				<div class="header_content">
					<div class="header_logo"></div>
					<nav class="nav">
						<a class="nav_link" href="#" onclick="slowScroll('#about_link')">О нас</a>
						<a class="nav_link" href="#" onclick="slowScroll('#advantage_link')">Преимущества</a>
						<a class="nav_link" href="#" onclick="slowScroll('#admission_link')">Поступающим</a>
						<a class="nav_link" href="#" onclick="slowScroll('#rating_link')">Наши ученики</a>
						<a class="nav_link" href="#" onclick="slowScroll('#event_link')">Ближайшие события</a>
						<a class="nav_link" href="#" onclick="slowScroll('#blog_link')">Блог</a>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div class="intro" id="intro_link">
		<div class="container">
			<div class="intro_content">
				<div class="intro_title">
					"Білім-инновация" лицей
				</div>
				<a href="#" class="intro_btn" onclick="slowScroll('#about_link')">Узнать больше</a>
			</div>
		</div>
	</div>

	<div class="about" id="about_link">
		<div class="about_all_header">
			<div class="container">
				<div class="about_header">
					<a class="about_head_arrow" href="#" onclick="slowScroll('#intro_link')"></a>
					<div class="about_head_title">
						О нас
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
							Лицей-интернат "Білім-инновация" №1
						</div>
						<div class="about_text">
							Впервые в Казахстане "Казахско-турецкие" лицеи открылись в 1992 году,
							решением президентов двух стран, Казахстана и Турции, в городах
							Туркистан и Кокшетау. А в нашем городе он был	 открыт в 1993 году.
							В 2017 году название лицея поменялось на Лицей-интернат "Білім-инновация" №1.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
								Чем мы отличаемся
							</div>
							<div class="advantage_head_title">
								Преимущества
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="advantage_content">
				<div class="advantage_item">
					<div class="advantage_block">
						<img class="advantage_post_icon" src="assets/images/advantage/teachers.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								Учителя
							</div>
							<div class="advantage_post_text">
								Наши ученики получают знание только от высококвалифицированных учителей.
							</div>
						</div>
					</div>
					<div class="advantage_block">
						<img class="advantage_post_icon" src="assets/images/advantage/graduate.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								Выпускники
							</div>
							<div class="advantage_post_text">
								Выпускники нашего лицея учатся в топовых университетах не только в нашей
								стране, но и за границей.
							</div>
						</div>
					</div>
					<div class="advantage_block">
						<img class="advantage_post_icon" src="assets/images/advantage/behavior.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								Воспитание
							</div>
							<div class="advantage_post_text">
								Обучение и  воспитание стоят на одном уровне.В этом заслуга наших учителей и воспитателей.
							</div>
						</div>
					</div>
				</div>
				<div class="advantage_item">
					<div class="advantage_block">
						<img class="advantage_post_icon" src="assets/images/advantage/language.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								Обучение на разных языках
							</div>
							<div class="advantage_post_text">
								В лицее - обучение   предметов естественно-математического направления на
								английском языке.
							</div>
						</div>
					</div>
					<div class="advantage_block">
						<img class="advantage_post_icon" src="assets/images/advantage/medal.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								Награды
							</div>
							<div class="advantage_post_text">
								Многие ученики нашего лицея призеры олимпиад разного уровня.
							</div>
						</div>
					</div>
					<div class="advantage_block">
						<img class="advantage_post_icon" src="assets/images/advantage/dormitory.png">
						<div class="advantage_all_post">
							<div class="advantage_post_title">
								Общежитие
							</div>
							<div class="advantage_post_text">
								Также у нас все учащиеся проживают в общежитии. Проживание в нем
								является обязательным.
							</div>					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
								Хотите здесь учиться?
							</div>
							<div class="admission_head_title">
								Поступление
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
							1.Документы
						</div>
						<img class="admission_item_element_icon" src="assets/images/admission/icons/documents_icon.png" alt="Documents">
					</div>
				</div>
				<div class="admission_item_linking">
					<img class="admission_item_linkingline" src="assets/images/admission/load.png" alt="LinkingLine">
				</div>
				<div class="admission_item">
					<div class="admission_item_element">
						<div class="admission_item_element_text">
							2.Конкурс
						</div>
						<img class="admission_item_element_icon" src="assets/images/admission/icons/competition_icon.png" alt="Competition">
					</div>
				</div>
				<div class="admission_item_linking">
					<img class="admission_item_linkingline" src="assets/images/admission/load.png" alt="LinkingLine">
				</div>
				<div class="admission_item">
					<div class="admission_item_element">
						<div class="admission_item_element_text">
							3.Учеба
						</div>
						<img class="admission_item_element_icon" src="assets/images/admission/icons/success_icon.png" alt="Success">
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
							01.Документы
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="documents_content">
				<div class="documents_item">
					<div class="documents_item_title">
						I этап
					</div>
					<div class="documents_item_inner">
						<ul>
							<li>Заявление на участие в конкурсе</li>
							<li>Свидетельство о рождении, ИИН</li>
							<li>Фото 3х4 (2шт.)</li>
						</ul>
					</div>
				</div>
				<div class="documents_item">
					<div class="documents_item_title">
						II этап
					</div>
					<div class="documents_item_inner">
						<ul>
							<li>Справка с места учебы</li>
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
							02.Конкурс
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="competition_content">
				<div class="competition_item">
					<div class="competition_item_title">
						I этап
					</div>
					<div class="competition_item_inner">
						<div class="competition_inner_title">
							Задания первого тура состоят из 75 вопросов.
						</div>
						<ul>
							<li>Математика и логика – 40 вопросов</li>
							<li>Казахский язык – 10 вопросов</li>
							<li>История Казахстана – 10 вопросов</li>
						</ul>
					</div>
				</div>
				<div class="competition_item">
					<div class="competition_item_title">
						II этап
					</div>
					<div class="competition_item_inner">
						<div class="competition_inner_title">
							Задания второго тура состоят из 75 вопросов.
						</div>
						<ul>
							<li>Математика и логика – 55 вопросов</li>
							<li>Казахский язык – 10 вопросов</li>
							<li>История Казахстана – 10 вопросов</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="map">
		<div class="container">
			<div class="map_content">
				<div class="map_item">
					<img src="assets/images/map/map_flag.png" class="map_flag">
					<div class="map_title">
						<a class="map_link" target="_blank" href="https://www.google.kz/maps/place/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%BE-%D0%A2%D1%83%D1%80%D0%B5%D1%86%D0%BA%D0%B8%D0%B9+%D0%BB%D0%B8%D1%86%D0%B5%D0%B9+%D0%B4%D0%BB%D1%8F+%D0%BC%D0%B0%D0%BB%D1%8C%D1%87%D0%B8%D0%BA%D0%BE%D0%B2/@49.8462011,73.200645,483m/data=!3m1!1e3!4m5!3m4!1s0x424348eaf0d3a153:0x553f8563fa7754dd!8m2!3d49.8465131!4d73.2013511">Открыть карту</a>
					</div>
				</div>
			</div>
		</div>
	</div>

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
						   	   Лучшие из лучших
						   </div>
						   <div class="rating_head_title">
							   Наши ученики
						   </div>
					   </div>
				   </div>
				   <div class="rating_header_item">
				   		<a class="rating_header_archive_btn" target="_blank" href="table.php">Архив достижений</a>
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
							<img class="rating_face" src="assets/images/rating/rank1.jpg">
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
							<img class="rating_face" src="assets/images/rating/rank2.jpg">
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
							<img class="rating_face" src="assets/images/rating/rank3.jpg">
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
	</div>

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
							   Что намечается
						   </div>
						   <div class="event_head_title">
							   Ближайшие события
						   </div>
					   </div>
				   </div>
			   </div>
		   </div>
	   </div>
	   <div class="container">
	       <div class="event_content">
			   <div class="event_item">
				   <div class="event_item_header">
					   <div class="event_title">Соревнования по баскетболу</div>
					   <a href="event.html">
						   <img class="event_photo" src="assets/images/event/basketball.jpg">
					   </a>
					   <div class="event_date">
						   <div class="event_date_day">4</div>Декабря
					   </div>
				   </div>
				   <div class="event_item_content">
					   <div class="event_text">
					   		В нашей школе пройдут соревнования по баскетболу. С каждого класса будет по одной команде. Итого 10 команд.
					   </div>
				   </div>
				   <div class="event_footer">
					   <div class="event_button">
						   <a class="event_button_link" href="event.html">Узнать больше</a>
					   </div>
				  </div>
			   </div>
			   <div class="event_item">
				   <div class="event_item_header">
					   <div class="event_title">Соревнования по шахматам</div>
					   <a href="#">
						   <img class="event_photo" src="assets/images/event/chess.jpg">
					   </a>
					   <div class="event_date">
						   <div class="event_date_day">7</div>Декабря
					   </div>
				   </div>
				   <div class="event_item_content">
					   <div class="event_text">
					   		Седьмого декабря пройдут соревнования по шахматам внутри нашей школы. Могут участвовать все желающие.
					   </div>
				   </div>
				   <div class="event_footer">
				   		<div class="event_button">
				   			<a class="event_button_link" href="#">Узнать больше</a>
				   		</div>
				   </div>
			   </div>
			   <div class="event_item">
				   <div class="event_item_header">
					   <div class="event_title">Концерт на день независимости</div>
					   <a href="#">
						   <img class="event_photo" src="assets/images/event/independent.jpg">
					   </a>
					   <div class="event_date">
						   <div class="event_date_day">14</div>Декарбря
					   </div>
				   </div>
				   <div class="event_item_content">
					   <div class="event_text">
						   После уроков будет проведен концерт на "День независимости Казахстана".
					   </div>
				   </div>
				   <div class="event_footer">
					   <div class="event_button">
						   <a class="event_button_link" href="#">Узнать больше</a>
					   </div>
				  </div>
			   </div>
	   	   </div>
	   </div>
	</div>

	<?php require "includes/article.php"; ?>
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
							   Наши истории
						   </div>
						   <div class="blog_head_title">
							   Последние статьи
						   </div>
					   </div>
				   </div>
			   </div>
		   </div>
	   </div>
	   	<div class="container">
			<div class="blog_posts">
				<div class="blog_item">
					<div class="blog_item_header">
						<a href="blog.php">
							<img class="blog_photo" src="assets/images/blog/post1.jpg">
						</a>
					</div>
					<div class="blog_item_content">
						<a href="blog.php" class="blog_title"><div><?php echo $article_title; ?></div></a>
						<div class="blog_text">
							<?php echo $article_description; ?>
						</div>
					</div>
					<div class="blog_footer">
						<div class="blog_stat">
							<div class="blog_stat_item">
								<img src="assets/images/blog/view.png" class="blog_stat_photo">
								<?php echo $article_views; ?>
							</div>
							<div class="blog_stat_item">
								<img src="assets/images/blog/like.png" class="blog_stat_photo">
								<?php echo $article_likes; ?>
							</div>
						</div>
						<div class="blog_date">
							<?php echo $article_pubdate; ?>
						</div>
					</div>
				</div>
				<div class="blog_item">
					<div class="blog_item_header">
						<a href="#">
							<img class="blog_photo" src="assets/images/blog/post2.jpg">
						</a>
					</div>
					<div class="blog_item_content">
						<a href="#" class="blog_title"><div>Саматов Абылай учитель по химии</div></a>
						<div class="blog_text">
							Учитель по химии, Саматов Абылай, получил специальную награду "EL MAQTANYSHY"
							за то, что подготовил учеников, которые добились больших успехов
							на международной олимпиаде по химии ICho-2019.
						</div>
					</div>
					<div class="blog_footer">
						<div class="blog_stat">
							<div class="blog_stat_item">
								<img src="assets/images/blog/view.png" class="blog_stat_photo">
								87
							</div>
							<div class="blog_stat_item">
								<img src="assets/images/blog/like.png" class="blog_stat_photo">
								40
							</div>
						</div>
						<div class="blog_date">
							Ноябрь 29
						</div>
					</div>
				</div>
				<div class="blog_item">
					<div class="blog_item_header">
						<a href="#">
							<img class="blog_photo" src="assets/images/blog/post3.jpg">
						</a>
					</div>
					<div class="blog_item_content">
						<a href="#" class="blog_title"><div>Спартакиада "ДОСТЫҚ"</div></a>
						<div class="blog_text">
							Неделю назад была проведена спартакиада "ДОСТЫҚ". В этом соревновании
							участвовали родители.
						</div>
					</div>
					<div class="blog_footer">
						<div class="blog_stat">
							<div class="blog_stat_item">
								<img src="assets/images/blog/view.png" class="blog_stat_photo">
								89
							</div>
							<div class="blog_stat_item">
								<img src="assets/images/blog/like.png" class="blog_stat_photo">
								32
							</div>
						</div>
						<div class="blog_date">
							Ноябрь 19
						</div>
					</div>
				</div>
		   	</div>
	   	</div>
	</div>

	<div class="footer">
		<div class="footer_content">
			<div class="footer_header">
				<div class="footer_logo_component">
					<img class="footer_logo" src="assets/images/footer/logo.png">
					<div class="footer_logo_name">
						БИЛ
					</div>
				</div>
			</div>
			<div class="footer_item">
				<div class="footer_item_header">
					Контакты
				</div>
				<div class="footer_item_content">
					<div class="footer_contact">
						<div class="footer_contact_item">
							<img class="footer_phone_img" src="assets/images/footer/phone.png">
							(7212)37-11-02
						</div>
						<div class="footer_contact_item">
							<img class="footer_mail_img" src="assets/images/footer/mail.png">
							kktl@mail.ru
						</div>
					</div>
				</div>
			</div>
			<div class="footer_item">
				<div class="footer_item_header">
					Местоположение
				</div>
				<div class="footer_item_content">
					<div class="footer_map">
						<div class="footer_map_header">
							<img class="footer_map_img" src="assets/images/footer/map.png">
						</div>
						<div class="footer_map_content">
							г.Караганда, Актюбинская 1А.
						</div>
					</div>
				</div>
			</div>
			<div class="footer_item">
				<div class="footer_item_header">
					Мы в соц.сетях
				</div>
				<div class="footer_item_content">
					<div class="footer_soc">
						<div class="footer_soc_item">
							<a href="https://www.youtube.com/channel/UCsO1yAKQjPL74NAR-8BoAUg" target="_blank"><img class="footer_soc_img" src="assets/images/footer/youtube.png"></a>
							<a href="https://t.me/karbil1" target="_blank"><img class="footer_soc_img" src="assets/images/footer/telegram.png"></a>
						</div>
						<div class="footer_soc_item">
							<a href="https://twitter.com/karbilimschool" target="_blank"><img class="footer_soc_img" src="assets/images/footer/twitter.png"></a>
							<a href="https://instagram.com/bil.karagandy?igshid=16wwqltcneo7v" target="_blank"><img class="footer_soc_img" src="assets/images/footer/instagram.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_footer">
			"Білім-инновация" лицей-интернат
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script>
    	function slowScroll(id) {
      		$('html, body').animate({
        	scrollTop: $(id).offset().top
      		}, 500);
    	}
  	</script>
</body>
</html>
