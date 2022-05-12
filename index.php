<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>www - сайт для разработчиков</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main_page.css" charset="utf-8">
	<meta name="description" content="Информационно-развлекательный портал для программимтов! Обучающие курсы, новости в сфере IT и многое другое">
	<meta name="keywords" content="www, it, курсы, новости, уроки">
	<link rel="shortcut icon" type="image/x-icon" href="img/favico.ico">
	<script src="https://kit.fontawesome.com/1feb837ae7.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div id="logo">
			<a href="https://www/" title="На главную">
				<img src="img/logo.png" title="www" alt="www">
				<span>www</span>
			</a>
		</div>
		<div id="about">
			<a href="" title="Узнать больше об рекламе">Реклама</a>
			<a href="" title="Написать нам письмо">Обратная связь</a>
		</div>
		<div id="reg_auth">
			<a href="" title="Войти в кабинет пользователя">
				<div class="btn">
					Войти
				</div>
			</a>
			<a href="" title="Зарегистрироваться на сайте">
				<div class="btn">
					Регистрация
				</div>
			</a>
		</div>
	</header>
	<nav>
		<div id="menuShow"><i class="fa-solid fa-bars"></i></div>
		<div id="hideMenu">
			<a href="">IT новости</a>
			<a href="">Видео курсы</a>
			<a href="">Сайты на заказ</a>
			<a href="">Форум</a>
			<a href="">IT задачи</a>
		</div>
		<div id="search">
			<span>Поиск</span>
			<i class="fa-solid fa-magnifying-glass"></i>
		</div>
		<div id="mobileMenu">
			<a href="">IT новости</a><br>
			<a href="">Видео курсы</a><br>
			<a href="">Сайты на заказ</a><br>
			<a href="">Форум</a><br>
			<a href="">IT задачи</a>
			<hr>
			<a href="">Регистрация</a>
			<a href="">Войти</a>
		</div>
	</nav>

	<div id="main">
		<div id="news">
			<h2 class="heading">IT новости</h2>
			<div style="clear: both;"><br></div>
			<!-- Статья -->
			<div class="article">
				<img src="https://cdn-media-1.freecodecamp.org/ghost/2019/03/vueart.png" alt="test" title="test">
				<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet aliquam turpis.</span>
			</div>

			<a href="" title="Посмотреть больше статей">
				<div class="btn">
					Посмотреть больше
				</div>
			</a>
		
		</div>
	</div>
	<aside>
		<div id="courses">
			<h2 class="heading">Видеокурсы</h2>			
		</div>
	</aside>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$('#menuShow').click (function () {
			if ($('#mobileMenu').is(':visible'))
				$('#mobileMenu').hide ();
			else
				$('#mobileMenu').show ();
		});

		$(document).scroll (function () {
			if ($(document).width () > 785) {
				if ($(document).scrollTop () >= $('header').height () + 20 )
					$('nav').addClass ('fixed');
				else
					$('nav').removeClass ('fixed');
			}
		});

		window.onresize = function (event) {
			$('#mobileMenu').hide ();
		}; 
	</script>
</body>
</html>