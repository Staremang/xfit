<?php 
	$path = "./clickfrogru_udp_tcp.php";
	include_once($path);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Фитнес-клуб X-Fit "Галактика"</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<!--
	<meta name="theme-color" content="#000000">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
-->
	
    <link rel="stylesheet" href="css/main.min.css">
	
	<meta property="og:image:height" content="314">
	<meta property="og:image:width" content="600">
	<meta property="og:title" content="Фитнес-клуб X-Fit &quot;Галактика&quot;">
<!--	<meta property="og:description" content="Everything you need to know about the topic you are looking for">-->
	<meta property="og:url" content="http://www.xfit86.ru">
	<meta property="og:image" content="http://www.xfit86.ru/img/og-image.jpg">
	
	
	<link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="img/icon/safari-pinned-tab.svg" color="#79c247">
	<link rel="shortcut icon" href="img/icon/favicon.ico">
	<meta name="msapplication-TileColor" content="#ff6319">
	<meta name="theme-color" content="#ff6319">
<!--
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107323584-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-107323584-1');
	</script>
-->
</head> 
<body>
	<header class="header">
		
		<div class="header__container container container-l container-xl">
			
			<button class="button-menu" data-menu-btn>
				<span class="button-menu__icon">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>
			
			<div class="header-logo-2"></div>
			
			<div class="header__right-block">
				<button class="call-me-btn" data-fancybox data-src="#call-me-form"></button>
				<a class="header__number" href="tel:+79505310808" title="Позвонить">+7 (950) <span class="green">531-08-08</span></a>
				<button class="btn btn_green phone-icon" data-fancybox data-src="#call-me-form" title="Заказать звонок">
					<span>заказать звонок</span>
				</button>
				
			</div>
		</div>
		
	</header>









	<div class="section-hero" id="hero">
		<video src="video/hero-bg.mp4" muted loop autoplay class="section-hero__video"></video>
		<div class="section-hero__video-overlay"></div>
		
		<nav class="menu" data-menu> 
			<div class="container container-l container-xl">
				<div class="menu__container">
					<a data-anchor href="#create-card" class="menu__link">Клубная карта</a>
					<a data-anchor href="#gallery" class="menu__link">фотогалерея клуба</a>
					<a data-anchor href="#scheme" class="menu__link">схема клуба</a>
					<a data-anchor href="#programs" class="menu__link">групповые программы</a>
					<a data-anchor href="#team" class="menu__link">тренерский состав</a>
					<a data-anchor href="#guest-visit" class="menu__link">гостевой визит</a>
					<a href="/anketa/" class="menu__link">Анкета тренера</a>
					<a data-anchor href="#contacts" class="menu__link">Контакты</a>
					
<!--					<a href="tel:+73422330202" class="menu__tel">+7 (342) <span class="orange">233-02-02</span></a>-->
				</div>
			</div>
		</nav>
		<div class="container container-l container-xl">
			<nav class="section-hero__social-block hero-social-block">
				<a data-anchor href="#contacts" class="hero-social-block__link">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"/></svg>
				</a>
				<a data-anchor href="#contacts" class="hero-social-block__link">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512"><path fill="currentColor" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"/></svg>
				</a>
				<a data-anchor href="#contacts" class="hero-social-block__link">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
				</a>
				<a data-anchor href="#contacts" class="hero-social-block__link">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
				</a>
			</nav>
			<nav class="page-nav">
				<a data-anchor href="#hero" class="page-nav__item active"><span class="page-nav__name">Главная</span></a>
				<a data-anchor href="#create-card" class="page-nav__item"><span class="page-nav__name">Клубная карта</span></a>
				<a data-anchor href="#gallery" class="page-nav__item"><span class="page-nav__name">фотогалерея клуба</span></a>
				<a data-anchor href="#scheme" class="page-nav__item"><span class="page-nav__name">схема клуба</span></a>
				<a data-anchor href="#programs" class="page-nav__item"><span class="page-nav__name">групповые программы</span></a>
				<a data-anchor href="#team" class="page-nav__item"><span class="page-nav__name">тренерский состав</span></a>
				<a data-anchor href="#guest-visit" class="page-nav__item"><span class="page-nav__name">гостевой визит</span></a>
				<a href="/anketa/" class="page-nav__item"><span class="page-nav__name">Анкета тренера</span></a>
				<a data-anchor href="#contacts" class="page-nav__item"><span class="page-nav__name">Контакты</span></a>
			</nav>
			<div class="section-hero__block section-hero__block_small">
				<h1 class="section-hero__description">СОЗДАЙТЕ ВАШУ ПЕРСОНАЛЬНУЮ ФИТНЕС-КАРТУ И ПОЛУЧИТЕ НА НЕЕ <span class="orange nowrap">СКИДКУ 5 000 РУБЛЕЙ</span></h1>
				<a href="#create-card" data-anchor class="btn btn_orange section-hero__btn"><span>Создать карту</span></a>
				<p>ВОЗМОЖНА РАССРОЧКА НА КАРТЫ 6 МЕСЯЦЕВ</p>
			</div>
		</div>
	</div>
	<div class="section-create-card">
		<a href="#create-card" data-anchor class="btn-arrow btn-next"></a>
		<div class="section-create-card__container container container-l">
			<div class="section-create-card__header"  id="create-card">
				<h1 class="section-create-card__title section-title section-title_black">Создайте свою клубную карту</h1>
				<div class="section-create-card__subtitle">Включайте только те направления, которые <span class="orange">необходимы именно Вам!</span></div>
			</div>
			<div class="step-scale">
				<div class="step-scale__text">Вопрос #</div>
				<div class="step-scale__container">
					<div class="step-scale__step" data-interview-to="1" data-step-scale="1">01</div>
					<div class="step-scale__step" data-interview-to="2" data-step-scale="2">02</div>
					<div class="step-scale__step" data-interview-to="3" data-step-scale="3">03</div>
					<div class="step-scale__step" data-interview-to="4" data-step-scale="4">04</div>
					<div class="step-scale__step" data-interview-to="5" data-step-scale="5">05</div>
				</div>
			</div>
			<div class="step">
				<form class="step__container" id="interview-form">
					<div class="step__item" data-step="1" id="interview-step-1">
						<div class="step__title">Вы уже были у нас в клубе?</div>
						<div class="step__form">
							<div class="step__input-group">
								<input  id="1-step-new" type="radio" class="checkbox" name="old-or-new" value="Я новый гость" required>
								<label for="1-step-new" class="step__label">Я новый гость</label>
							</div>
							<div class="step__input-group">
								<input  id="1-step-old" type="radio" class="checkbox" name="old-or-new" value="Продление карты" required>
								<label for="1-step-old" class="step__label">Занимался ранее</label>
							</div>
						</div>
						<div class="step__bottom">
							<button type="button" class="btn step__btn-prev" disabled></button>
							<button type="button" class="btn btn_orange" data-interview-to="2">Продолжить</button>
						</div>
					</div>
					<div class="step__item" data-step="2" id="interview-step-2">
						<div class="step__title">с кем вы будете посещать наш фитнес-клуб?</div>
						<div class="step__form">
							<div class="step__input-group">
								<input  id="2-step-alone" type="radio" class="checkbox" name="how-many-guests" value="Один / одна" required>
								<label for="2-step-alone" class="step__label">Один / одна</label>
							</div>
							<div class="step__input-group">
								<input  id="2-step-w-friends" type="radio" class="checkbox" name="how-many-guests" value="С другом / подругой" required>
								<label for="2-step-w-friends" class="step__label">С другом / подругой</label>
							</div>
							<div class="step__input-group">
								<input  id="2-step-w-family" type="radio" class="checkbox" name="how-many-guests" value="С семьей" required>
								<label for="2-step-w-family" class="step__label">С семьей</label>
							</div>
						</div>
						<div class="step__bottom">
							<button type="button" class="btn step__btn-prev" data-interview-to="1"></button>
							<button type="button" class="btn btn_orange" data-interview-to="3">Продолжить</button>
						</div>
					</div>
					<div class="step__item" data-step="3" id="interview-step-3">
						<div class="step__title">НА КАКОЙ СРОК ИНТЕРЕСУЕТ <br>ФИТНЕС-КАРТА?</div>
						<div class="step__form">
							<div class="step__input-group">
								<input  id="3-step-24m" type="radio" class="checkbox" name="period" value="24" required>
								<label for="3-step-24m" class="step__label">24 месяца</label>
							</div>
<!--
							<div class="step__input-group">
								<input  id="3-step-12m" type="radio" class="checkbox" name="period" value="18" required>
								<label for="3-step-12m" class="step__label">18 месяцев</label>
							</div>
-->
							<div class="step__input-group">
								<input  id="3-step-6m" type="radio" class="checkbox" name="period" value="12" required>
								<label for="3-step-6m" class="step__label">12 месяцев</label>
							</div>
						</div>
						<div class="step__bottom">
							<button type="button" class="btn step__btn-prev" data-interview-to="2"></button>
							<button type="button" class="btn btn_orange" data-interview-to="4">Продолжить</button>
						</div>
					</div>
					<div class="step__item" data-step="4" id="interview-step-4">
						<div class="step__title">Интересуют ли Вас занятия с персональным тренером?</div>
						<div class="step__form">
							<div class="step__input-group">
								<input  id="4-step-1" type="radio" class="checkbox" name="time" value="Да" required>
								<label for="4-step-1" class="step__label">Да</label>
							</div>
							<div class="step__input-group">
								<input  id="4-step-2" type="radio" class="checkbox" name="time" value="Нет" required>
								<label for="4-step-2" class="step__label">Нет</label>
							</div>
							<div class="step__input-group">
								<input  id="4-step-3" type="radio" class="checkbox" name="time" value="Хочу узнать подробнее" required>
								<label for="4-step-3" class="step__label">Хочу узнать подробнее</label>
							</div>
						</div>
						<div class="step__bottom">
							<button type="button" class="btn step__btn-prev" data-interview-to="3"></button>
							<button type="button" class="btn btn_orange" data-interview-to="5">Продолжить</button>
						</div>
					</div>
					<div class="step__item" data-step="5" id="interview-step-5">
						<div class="step__title">ВЫБЕРИТЕ ИНТЕРЕСУЮЩИЕ <br>ВАС ФИТНЕС-НАПРАВЛЕНИЯ:</div>
						<div class="step__form">
							<div class="step__left-block">
								<div class="step__input-group">
									<input  id="5-step-1" type="checkbox" class="checkbox checkbox_small" name="directions[]" value="Тренажерный зал">
									<label for="5-step-1" class="step__label">Тренажерный зал</label>
								</div>
								<div class="step__input-group">
									<input  id="5-step-2" type="checkbox" class="checkbox checkbox_small" name="directions[]" value="Единоборства">
									<label for="5-step-2" class="step__label">Единоборства</label>
								</div>
								<div class="step__input-group">
									<input  id="5-step-3" type="checkbox" class="checkbox checkbox_small" name="directions[]" value="Йога и пилатес">
									<label for="5-step-3" class="step__label">Йога и пилатес</label>
								</div>
								<div class="step__input-group">
									<input  id="5-step-4" type="checkbox" class="checkbox checkbox_small" name="directions[]" value="Бассейн">
									<label for="5-step-4" class="step__label">Бассейн</label>
								</div>
								<div class="step__input-group">
									<input  id="5-step-5" type="checkbox" class="checkbox checkbox_small" name="directions[]" value="Финская сауна">
									<label for="5-step-5" class="step__label">Финская сауна</label>
								</div>
								<div class="step__input-group">
									<input  id="5-step-12" type="checkbox" class="checkbox checkbox_small" name="directions[]" value="Детский центр">
									<label for="5-step-12" class="step__label">Детский центр</label>
								</div>
							</div>
							<div class="step__right-block">
								<div class="step__input-group">
									<input  id="5-step-7" type="checkbox" class="checkbox checkbox_small" name="directions[]" value="Групповые программы">
									<label for="5-step-7" class="step__label">Групповые программы</label>
								</div>
								<div class="step__input-group">
									<input  id="5-step-8" type="checkbox" class="checkbox checkbox_small" name="directions[]" value="Танцевальные программы">
									<label for="5-step-8" class="step__label">Танцевальные программы</label>
								</div>
								<div class="step__input-group">
									<input  id="5-step-9" type="checkbox" class="checkbox checkbox_small" name="directions[]" value="Функциональный тренинг">
									<label for="5-step-9" class="step__label">Функциональный тренинг</label>
								</div>
								<div class="step__input-group">
									<input  id="5-step-10" type="checkbox" class="checkbox checkbox_small" name="directions[]" value="Персональный тренинг">
									<label for="5-step-10" class="step__label">Персональный тренинг</label>
								</div>
								<div class="step__input-group">
									<input  id="5-step-11" type="checkbox" class="checkbox checkbox_small" name="directions[]" value="Фитнес-тестирование">
									<label for="5-step-11" class="step__label">Фитнес-тестирование</label>
								</div>
							</div>
						</div>
						<div class="step__bottom">
							<button type="button" class="btn step__btn-prev" data-interview-to="4"></button>
							<button type="button" class="btn btn_orange" data-interview-to="6">Продолжить</button>
						</div>
					</div>
					<div class="step__item" data-step="6" id="interview-step-6">
						<div class="step__title"><span class="orange">ВВЕДИТЕ ВАШи данные</span> ДЛЯ РЕЗЕРВИРОВАНИЯ СКИДКИ</div>
						<div class="step__form">
						
							<label class="step__input item-group item-group_icon item-group_icon-user">
								<input id="6-step-name" required autocomplete="name" name="name" type="text" class=" item-group__input" placeholder="Введите Ваше имя">
							</label>
							<label class="step__input item-group item-group_icon item-group_icon-tel">
								<input id="6-step-tel" required autocomplete="tel" name="tel" type="tel" class=" item-group__input" placeholder="Введите Ваш телефон">
							</label>
<!--
							<label class="step__input item-group item-group_icon item-group_icon-email">
								<input id="6-step-email" autocomplete="email" name="email" type="email" class=" item-group__input" placeholder="Введите Ваш E-Mail">
							</label>
-->
						</div>
						<div class="step__bottom"> 
							<button type="button" class="btn step__btn-prev" data-interview-to="5"></button>
							<button type="submit" class="step__btn-submit btn btn_orange">Получить скидку</button>
							<input type="hidden" name="form-type" value="interview">
						</div>
<!--						<div class="step__note">На указанный адрес эл. почты будет выслано предложение с дополнительными скидками и бонусами</div>-->
					</div>
				</form>
				<div class="bonuses"> 
					<div class="bonuses__title">Ваша скидка:</div>
					<div class="bonuses__info">
						<span class="bonuses__count">1 000</span>
						<span class="bonuses__currency">руб. +</span>
						<span class="bonuses__msg"><span>Бонусы, которые  уже ваши!</span></span>
						<span class="bonuses__msg-mobile"><span>Бонусы</span></span>
					</div>
					<div class="bonuses__row">
						<div class="bonuses__first-col">
							<div class="bonuses__item" id="bonus-1">Персональное занятие в тренажерном зале</div>
							<div class="bonuses__item" id="bonus-2">Гостевой визит для друга</div>
							<div class="bonuses__item" id="bonus-3">Фитнес-тестирование</div>
						</div>
						<div class="bonuses__second-col">
							<div class="bonuses__item" id="bonus-4">Персональное занятие по групповым направлениям</div>
							<div class="bonuses__item" id="bonus-5">Персональная тренировка в бассейне</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-gallery">
		<div class="container container-l">
			<h1 class="section-title" id="gallery">Фотогалерея клуба</h1>
			<div class="gallery">
				<div class="gallery-slider">
					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-1.jpg"><img alt="Тренажерный зал" src="img/gallery-1.jpg" class="gallery-slider__img"></a>
					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-2.jpg"><img alt="Кардиозона" src="img/gallery-2.jpg" class="gallery-slider__img"></a>
					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-3.jpg"><img alt="Зона силовых тренажеров" src="img/gallery-3.jpg" class="gallery-slider__img"></a>
					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-4.jpg"><img alt="Зона свободных весов" src="img/gallery-4.jpg" class="gallery-slider__img"></a>
					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-5.jpg"><img alt="Зона функциональных тренажеров" src="img/gallery-5.jpg" class="gallery-slider__img"></a>
					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-6.jpg"><img alt="Зал групповых программ" src="img/gallery-6.jpg" class="gallery-slider__img"></a>
<!--					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-7.jpg"><img alt="Зона единоборств" src="img/gallery-7.jpg" class="gallery-slider__img"></a>-->
					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-8.jpg"><img alt="Бассейн" src="img/gallery-8.jpg" class="gallery-slider__img"></a>
					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-9.jpg"><img alt="Ресепшен" src="img/gallery-9.jpg" class="gallery-slider__img"></a>
					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-10.jpg"><img alt="Фитнес-бар" src="img/gallery-10.jpg" class="gallery-slider__img"></a>
					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-11.jpg"><img alt="Зона отдыха" src="img/gallery-11.jpg" class="gallery-slider__img"></a>
					<a data-fancybox="gallery" class="gallery-slider__item" href="img/gallery-12-full.jpg"><img alt="Скалодром" src="img/gallery-12.jpg" class="gallery-slider__img"></a>
				</div>
				<div class="gallery__description">
					<div class="gallery__item">
						<span class="gallery__index"></span> / <span class="gallery__count"></span>
					</div>
					<div class="gallery__title"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-scheme">
		<div class="section-scheme__container container container-l">
			<h1 class="section-title section-title_black" id="scheme">схема клуба</h1>
			<h2 class="section-subtitle">Здесь вы <span class="orange">можете ознакомиться со схемой</span> нашего клуба</h2>
			<div class="scheme-map">
				<div class="scheme-map__pin" data-pin="1" style="left: 16.5%;top: 21.6%;"></div>
				<div class="scheme-map__pin" data-pin="2" style="left: 30%;top: 9%;"></div>
				<div class="scheme-map__pin" data-pin="3" style="left: 37.7%;top: 19.8%;"></div>
				<div class="scheme-map__pin" data-pin="4" style="left: 8.7%;top: 42.5%;"></div>
				<div class="scheme-map__pin" data-pin="5" style="left: 13.7%;top: 37.1%;"></div>
				<div class="scheme-map__pin" data-pin="6" style="left: 26.8%;top: 37.4%;"></div>
				<div class="scheme-map__pin" data-pin="7" style="left: 9.2%;top: 64.3%;"></div>
				<div class="scheme-map__pin" data-pin="8" style="left: 28.3%;top: 50.5%;"></div>
				<div class="scheme-map__pin" data-pin="9" style="left: 23.4%;top: 57.7%;"></div>
				<div class="scheme-map__pin" data-pin="10" style="left: 38.5%;top: 52.9%;"></div>
				<div class="scheme-map__pin" data-pin="11" style="left: 35%;top: 62%;"></div>
				<div class="scheme-map__pin" data-pin="12" style="left: 59.3%;top: 63.5%;"></div>
			</div>
			<div class="scheme-list">
				<div class="scheme-list__btn scheme-list__btn-up">
					<button class="btn-arrow"></button>
				</div>
				<ul class="scheme-list__container">
					<li class="scheme-list__item" data-pin="12">Бассейн</li>
					<li class="scheme-list__item" data-pin="11">Женская душевая </li>
					<li class="scheme-list__item" data-pin="10">Мужская душевая </li>
					<li class="scheme-list__item" data-pin="8">Мужская раздевалка </li>
					<li class="scheme-list__item" data-pin="9">Женская раздевалка </li>
					<li class="scheme-list__item" data-pin="6">Фитнес-бар </li>
					<li class="scheme-list__item" data-pin="5">Кабинет фитнес-тестирования </li>
					<li class="scheme-list__item" data-pin="4">Отдел продаж </li>
					<li class="scheme-list__item" data-pin="3">Большой зал групповых программ </li>
					<li class="scheme-list__item" data-pin="2">Малый зал групповых программ </li>
					<li class="scheme-list__item" data-pin="1">Тренажерный зал </li>
					<li class="scheme-list__item" data-pin="7">SPA-центр</li>
				</ul>
				<div class="scheme-list__btn scheme-list__btn-down">
					<button class="btn-arrow"></button>
				</div>
			</div>
		</div>
	</div>
	<div class="section-programs">
		<div class="container container-l">
			<h1 class="section-programs__title section-title" id="programs">направления групповых программ</h1>
			<div class="programs">
				<div class="row">
					<div class="col-md-3">
						<div class="programs__item programs__item_x2">
							<div class="programs__bg" style="background-image: url(img/programs-1.jpg)"></div>
							<div class="programs__title">Mind & body</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-4">
								<div class="programs__item">
									<div class="programs__bg" style="background-image: url(img/programs-2.jpg)"></div>
									<div class="programs__title">единоборства</div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="programs__item">
									<div class="programs__bg" style="background-image: url(img/programs-3.jpg)"></div>
									<div class="programs__title">Силовые тренировки</div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="programs__item">
									<div class="programs__bg" style="background-image: url(img/programs-4.jpg)"></div>
									<div class="programs__title">Функциональные тренировки</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="programs__item">
							<div class="programs__bg" style="background-image: url(img/programs-5.jpg)"></div>
							<div class="programs__title">Водные программы</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="programs__item">
							<div class="programs__bg" style="background-image: url(img/programs-6.jpg)"></div>
							<div class="programs__title">Кардиотренировки</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="programs__item programs__item_ovarlay programs__item_x2">
							<div class="programs__bg" style="background-image: url(img/programs-7.jpg)"></div>
							<div class="programs__title">детские программы</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-trainer">
		<div class="container">
			
			<h1 class="section-title section-title_black" id="team">тренерский состав</h1>
			<div class="trainer-slider">
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-1.jpg)" data-trainer-name="Алексеева Гульназ" data-trainer-description="Персональный тренер - универсал"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-2.jpg)" data-trainer-name="Андреева Ольга" data-trainer-description="Персональный тренер - универсал"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-3.jpg)" data-trainer-name="Бабич Александр " data-trainer-description="Инструктор тренажерного зала"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-4.jpg)" data-trainer-name="Богданова Ольга " data-trainer-description="Персональный тренер групповых программ"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-5.jpg)" data-trainer-name="Боговаров Павел" data-trainer-description="Фитнес-менеджер"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-6.jpg)" data-trainer-name="Буянова Екатерина" data-trainer-description="Инструктор групповых программ"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-7.jpg)" data-trainer-name="Герасименко Татьяна " data-trainer-description="Персональный тренер тренажерного зала и водных программ"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-8.jpg)" data-trainer-name="Горина Ангелина" data-trainer-description="Инструктор групповых программ и детского фитнеса"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-9.jpg)" data-trainer-name="Едзоева Залина" data-trainer-description="Инструктор групповых программ и детского фитнеса"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-10.jpg)" data-trainer-name="Жернова Светлана" data-trainer-description="Инструктор групповых программ и детского фитнеса"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-11.jpg)" data-trainer-name="Задорова Ирина" data-trainer-description="Инструктор детского фитнеса"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-12.jpg)" data-trainer-name="Иванова Алена" data-trainer-description="Инструктор тренажерного зала"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-14.jpg)" data-trainer-name="Максименко Анастасия " data-trainer-description="Персональный тренер - универсал"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-15.jpg)" data-trainer-name="Мельниченко Сергей " data-trainer-description="Мастер - тренер тренажерного зала"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-16.jpg)" data-trainer-name="Переладов Владислав " data-trainer-description="Мастер- тренер тренажерного зала"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-17.jpg)" data-trainer-name="Петренко Александр" data-trainer-description="Персональный тренер - универсал"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-18.jpg)" data-trainer-name="Петренко Пётр" data-trainer-description="Персональный тренер тренажерного зала"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-19.jpg)" data-trainer-name="Пожидаева Анастасия" data-trainer-description="Инструктор групповых программ и тренажерного зала"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-20.jpg)" data-trainer-name="Сайфуллин Шухрат " data-trainer-description="Инструктор групповых программ"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-21.jpg)" data-trainer-name="Степаненко Владимир" data-trainer-description="Инструктор тренажерного зала"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-22.jpg)" data-trainer-name="Сысоев Виктор" data-trainer-description="Инструктор водных программ и детского фитнеса"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-23.jpg)" data-trainer-name="Хамитов Айрат" data-trainer-description="Инструктор тренажерного зала"></div>
				</div>
				<div class="trainer-slider__item">
					<div class="trainer-slider__photo" style="background-image: url(img/trainer-24.jpg)" data-trainer-name="Яцко Марина" data-trainer-description="Персональный тренер групповых программ и детского фитнеса"></div>
				</div>
			</div>
			<div class="section-trainer__name"></div>
			<div class="section-trainer__description"></div>
		</div>
	</div>
	<div class="section-guest-visit">
		<div class="section-guest-visit__container container">
			<h1 class="section-title" id="guest-visit">запишитесь на бесплатный гостевой визит</h1>
			<div class="section-guest-visit__row">
				<div class="list-inclusions__list-block">
					<div class="list-inclusions__subtitle section-subtitle">что входит:</div>
					<ul class="list-inclusions__list">
						<li class="list-inclusions__list-item">Посещение тренажерного зала</li>
						<li class="list-inclusions__list-item">Групповые тренировки</li>
						<li class="list-inclusions__list-item">Посещение бассейна</li>
						<li class="list-inclusions__list-item">Посещение финской сауны</li>
						<li class="list-inclusions__list-item">Выдача полотенца на тренировку</li>
						<li class="list-inclusions__list-item">Гостевой визит для друга/подруги</li>
					</ul>
				</div>
<!--				<button data-fancybox data-src="#guest-visit-form-m" class="section-guest-visit__btn-mobile btn btn_orange">записаться</button>-->


				<form class="guest-visit-form" id="guest-visit-form">
					<input type="hidden" name="form-type" value="guest-visit-form">
					<label class="guest-visit-form__item-group item-group item-group_icon item-group_icon-user">
						<input id="guest-visit-form__name" required autocomplete="name" name="name" type="text" class=" item-group__input" placeholder="Введите Ваше имя">
					</label>
					<label class="guest-visit-form__item-group item-group item-group_icon item-group_icon-tel">
						<input id="guest-visit-form__tel" required autocomplete="tel" name="tel" type="tel" class=" item-group__input" placeholder="Введите Ваш телефон">
					</label>
					<label class="guest-visit-form__item-group item-group item-group_icon item-group_icon-clock">
						<span class="item-group__label">Время:</span>
						<input required name="date" type="text" class=" item-group__input">
					</label>
					<button type="submit" class="guest-visit-form__btn btn btn_green"><span>Записаться</span></button>
					<div class="guest-visit-form__note">Нажимая кнопку Вы даете согласие на обработку персональных данных</div>
				</form>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container container-l">
			<div class="row">
				<div class="col-lg-6 footer__left-container">
					<div class="footer__left-block">
						<h1 class="footer__title section-title section-title_black" id="contacts">Контакты</h1>
						<div class="footer__contacts">
							<div class="row">
								<div class="col-6">
									<div class="footer__subtitle">адрес:</div>
									<div class="footer__info">г. Когалым,</div>
									<div class="footer__info">ул. Дружбы Народов,</div>
									<div class="footer__info">д. 60 , СКК «Галактика»</div>
								</div>
								<div class="col-6">
									<div class="footer__subtitle">время работы:</div>
									<div class="footer__info">Ежедневно</div>
									<div class="footer__info">пн-пт: с 7:00 до 24:00</div>
									<div class="footer__info">сб-вс: с 8:00 до 23:00</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="footer__subtitle">телефон  /  e-mail:</div>
									<div class="footer__info">
										<a class="mgo-number-12131 footer__info" href="tel:+79505310808">+7 (950) 531-08-08</a>
										<a class="footer__info" href="mailto:manager@mos-fit.ru">manager@mos-fit.ru</a>
									</div>
								</div>
								<div class="col-6">
									<div class="footer__subtitle">мы в социальных сетях:</div>
									<a target="_blank" href="https://vk.com/xfit86" class="footer__social-btn">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"/></svg>
									</a>
									<a target="_blank" href="https://www.facebook.com/xfit86/" class="footer__social-btn">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512"><path fill="currentColor" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"/></svg>
									</a>
									<a target="_blank" href="https://www.instagram.com/xfit_galaktika/" class="footer__social-btn">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
									</a>
									<a target="_blank" href="https://www.youtube.com/channel/UCp9m5TAvFyPaj3Wj5MKvOZQ" class="footer__social-btn footer__social-btn_d">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 footer__right-container">
					<div class="footer__map-wrapper">
						<div id="map" class="footer__map"></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright">
		<div class="container">
			<div class="copyright__text">
				(С) 2016-2018 / X-Fit "Галактика" <a target="_blank" href="/privacy-policy.pdf" class="copyright__link">Политика конфиденциальности</a>
			</div> 
		</div>
	</div>
	
	
	
	
	
	<form class="popup-wrapper" id="call-me-form">
		<div class="popup-wrapper__title">Закажите звонок</div>
		<div class="popup-wrapper__description">И наш менеджер свяжется с Вами в течение 5 минут</div>
		<label class="popup-wrapper__input-group item-group item-group_icon item-group_icon-user">
			<input type="text" autocomplete="name" name="name" class="popup-wrapper__input item-group__input" placeholder="Введите Ваше имя">
		</label>
		<label class="popup-wrapper__input-group item-group item-group_icon item-group_icon-tel">
			<input type="tel" autocomplete="tel" name="tel" class="popup-wrapper__input item-group__input" placeholder="Введите Ваш телефон">
		</label>

		<input type="hidden" name="form-type" value="call-me">
		<button type="submit" class="popup-wrapper__btn btn btn_green">
			<span>заказать звонок</span>
		</button>
	</form>
	<form class="popup-wrapper" id="thanks-and-gift-form">
		<div class="popup-wrapper__title">Спасибо!</div>
		<div class="popup-wrapper__description">Ваша заявка отправлена!</div>
		<div class="popup-wrapper__description-2">Вам предоставлен гостевой визит для друга/подруги, подарите ему тренировку, заполнив форму ниже</div>
		<label class="popup-wrapper__input-group item-group item-group_icon item-group_icon-user">
			<input type="text" autocomplete="name" name="name" class="popup-wrapper__input item-group__input" placeholder="Введите Ваше имя">
		</label>
		<label class="popup-wrapper__input-group item-group item-group_icon item-group_icon-tel">
			<input type="tel" autocomplete="tel" name="tel" class="popup-wrapper__input item-group__input" placeholder="Введите Ваш телефон">
		</label>


		<input type="hidden" name="form-type" value="gift">
		<input id="gift-parent-name" type="hidden" name="parentName" value="">
		<button type="submit" class="popup-wrapper__btn btn btn_green">
			<span>подарить тренировку</span>
		</button>
	</form>
	<div class="popup-wrapper" id="thanks">
		<div class="popup-wrapper__title">Спасибо!</div>
		<div class="popup-wrapper__description">Ваша заявка отправлена, <br><span class="orange">в ближайшее время с Вами свяжется наш специалист</span></div>
		<button data-fancybox-close class="popup-wrapper__input btn btn_green"><span>Ок</span></button>
	</div>


	<form class="out-popup"  id="stop-popup-form">
		<div class="out-popup__wrapper">
			<figure class="out-popup__img"></figure>
			<h1 class="out-popup__title">Стоп! Не уходите <br>с пустыми руками</h1>
			<div class="out-popup__description-1">Мы подготовили для вас подарок <span class="orange">— <br>2 месяца занятий за счет фитнес-клуба <br>X-Fit Галактика* </span></div>
			<div class="out-popup__description-2">Заполните форму ниже и уже завтра начните тренировки в одном из лучших фитнес-клубов Когалыма.</div>
			<label class="out-popup__input-group item-group item-group_icon item-group_icon-user">
				<input class="out-popup__input item-group__input" type="text" name="name" required placeholder="Введите Ваше имя">
			</label>
			<label class="out-popup__input-group item-group item-group_icon item-group_icon-tel">
				<input class="out-popup__input item-group__input" type="tel" name="tel" required placeholder="Введите Ваш телефон">
			</label>
			
			<input type="hidden" name="form-type" value="stop">
			<button type="submit" class="btn btn_green">
				<span>получить подарок</span>
			</button>
			<div class="out-popup__note">Подарочные месяцы предоставляются при покупке годовой клубной карты</div>
		</div>
	</form>
	
	
	
	
	<script>
		var addr = "Когалым, Дружбы народов д. 60",
			url = '/mail.php';
	</script>
	
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
	
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	
	<script src="js/inputmask/inputmask.min.js"></script>
	<script src="js/inputmask/inputmask.extensions.min.js"></script>
	<script src="js/inputmask/jquery.inputmask.min.js"></script>
	
	<script src="js/main.min.js"></script>
	
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter49821397 = new Ya.Metrika2({
						id:49821397,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/tag.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks2");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/49821397" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=6104282444857344"></script>


	<a href="//scroogefrog.com/en/"><img src="//stat.clickfrog.ru/img/clfg_ref/icon_0.png" alt="best spyware and adware remover"></a><div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div><script type="text/javascript">(function(d, w) {var clickfrog = function() {if(!d.getElementById('clickfrog_js_container')) {var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();sc.id = 'clickfrog_js_container';var c = document.getElementById('clickfrog_counter_container');c.parentNode.insertBefore(sc, c);}};if(w.opera == "[object Opera]"){d.addEventListener("DOMContentLoaded",clickfrog,false);}else {clickfrog();}})(document, window);</script><noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript><script type="text/javascript">var clickfrogru_uidh='31c4bcaf2118e2b62854e5d4dd80a4b6';</script>
</body>
</html>