<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rocket Business Test</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="" href="/"><img src="img/logo.png" alt="Logo" width="71" height="53"></a>
			<div class="header-navbar-right">
				<p class="nav-header-phone">8(863)243-15-10</p>
				<p class="nav-header-city">Ростов-на-Дону</p>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="my-close">
					<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.2896 11.0062L21.7201 1.57572C22.0841 1.2242 22.0942 0.644192 21.7427 0.280214C21.3912 -0.0837635 20.8112 -0.0938561 20.4472 0.257667C20.4396 0.265022 20.4321 0.272538 20.4246 0.280214L10.9941 9.71073L1.56353 0.280161C1.19956 -0.0713625 0.619552 -0.0612699 0.268029 0.302708C-0.0749053 0.657774 -0.0749053 1.22065 0.268029 1.57572L9.69856 11.0062L0.268029 20.4368C-0.0896685 20.7945 -0.0896685 21.3745 0.268029 21.7323C0.62578 22.0899 1.20578 22.0899 1.56353 21.7323L10.9941 12.3017L20.4246 21.7323C20.7886 22.0838 21.3686 22.0737 21.7201 21.7097C22.063 21.3546 22.063 20.7918 21.7201 20.4368L12.2896 11.0062Z" fill="#D51522"/>
					</svg>
				</li>
				<li class=" "><a href="#">Услуги</a></li>        
				<li><a href="#">Портфолио</a></li>
				<li><a href="#">Отзывы</a></li>
				<li><a href="#">Вакансии</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
		<ul class="navbar-right">
			<li><p>8(863)243-15-10</p></li>
			<li><p>Ростов-на-Дону</p></li>
			<li><pre>Ростов-на-Дону, 
Ленина, 21</pre></li>
		</ul>
		</div>
	</div>
</nav>

<!-- TOP -->
	<section class="top-screen">
		<div class="overlay">
		<div class="container">
			<div class="top-screen__left-part col-lg-6 col-md-12">
				<h1>Рекламно-информационное агентство</h1>
				<p>Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.</p>
				<form class="row">
					<input type="text" name="phone" id="phone" placeholder="Номер телефона">
					<button id="callback">Обратный звонок</button>
				</form>
			</div>
		</div>
		</div>
	</section>

<!-- NEWS -->
	<section class="container main-screen ">
		<h2>Новости</h2>
		<div class="owl-carousel slider-container ">
			<?php 
				include("getnews.php");

				$newses = getnews($news);
				//var_dump($newses);
				if(count($newses['data'])){
					$html ="";
					foreach ($newses['data'] as $key => $value) {
						$html .= '<div class="slider-item">';
						$html .= '<p class="news-date">'.$value['news_date'].'</p>';
						$html .= '<h3>'.$value['news_title'].'</h3>';
						$html .= '<div class="news-button"><a href="'.$value['news_link'].'">Подробнее</a></div></div>';
						
					}

				echo $html;
				} else {
					echo '<div class="slider-item">
							<p class="news-date">00-00-000</p>
							<h3>Нет свежих новостей</h3>
							<div class="news-button"><a href="/">Подробнее</a></div>
						</div>';
					 
				}
				
			 ?>
		</div>
		 
	</section>

<!-- FOOTER -->
	<footer>
		<div class="container footer__container">
			<div class="logo">
				<img src="img/logo.png" alt="" width="103px" height="77px">
			</div>
			<ul class="footer-menu">
				<li class=" "><a href="#">Услуги</a></li>        
				<li><a href="#">Портфолио</a></li>
				<li><a href="#">Отзывы</a></li>
				<li><a href="#">Вакансии</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
		</div>		
	</footer>

	<script type="text/javascript" src="js/jquery-v3.5.1.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>