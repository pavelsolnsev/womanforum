<!DOCTYPE html>
<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$lang = $get_lang = isset($_GET['lang']) && $_GET['lang'] != '' ? urldecode( strtolower($_GET['lang']) ) : 'en';
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';
$link = isset($_GET['link']) ? urldecode( strtolower($_GET['link']) ) : '';

$curURL = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$curURL = explode('?', $curURL);
$curURL = $curURL[0];

include_once $ROOT . 'config.php';
include_once $ROOT . 'elastic.php';

include_once $ROOT . 'chunks/common.php';
include_once $ROOT . 'version.php';
?>




<html lang="<?= $lang ?>">
<head>

    <?php if ($version == 'stavropol') { ?>
        <script type="text/javascript">
            !function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?169",t.onload=function(){VK.Retargeting.Init("VK-RTRG-1005515-cTvnN"),VK.Retargeting.Hit()},document.head.appendChild(t)}();
            </script>
    <?php } ?>

    <base href="<?= $BASE_HREF ?>">
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="facebook-domain-verification" content="hwe9lgcvqg9jlrfkfys2a75h0r02rp" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="image_src" href="">

    <!-- <link href="img/common/favicon.ico" type="image/x-icon" rel="icon"> -->
    <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->
    <!--[if lte IE 9]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->
    <!--[if lt IE 9]><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!--><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!--<![endif]-->

    <!-- Google Tag Manager --><script>(function(w, d, s, l, i) {w[l] = w[l] || []; w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'}); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', '<?=$GTM?>');</script><!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code --><script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '441284739782630'); fbq('track', 'PageView');</script><!-- End Facebook Pixel Code -->

</head>
<body class="<?= $version ? 'version-' . $version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> ">

    <!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?=$GTM?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->

    <!-- Facebook Pixel Code --><noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=441284739782630&ev=PageView&noscript=1"/></noscript><!-- End Facebook Pixel Code -->

    <?php if ($version == 'stavropol') { ?>
        <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1005515-cTvnN" style="position:fixed; left:-999px;" alt=""/></noscript>
    <?php } ?>

    

    <div class="wrapper">
        
<?php if ($version == 'stavropol') { ?>
    <header class="header">
	<div class="container">
		<div class="header__inner">
			<div class="header__side header__side_left">
				<div class="header__logos">
					<img class="" src="img/header/logo.svg" alt="Synergy">
				</div>
			</div>

			<div class="header__side header__side_right">
				<?php if ($version != 'stavropol') { ?>
				<nav class="header__nav">
					<div class="header__links" id="header-links">
						<a class="scroll" href="#about">О&nbsp;форуме</a>
						<a class="scroll" href="#speakers">Спикеры</a>
						<?php if ($version != 'version2') { ?>
							<?php /* ?>
							<a class="scroll" href="#price">Стоимость участия</a> 
							<?php */ ?>
						<?php }?>
						<a class="scroll" href="#place">Место проведения</a>
						<a class="scroll" href="#how">Как это было?</a>
						<a class="scroll" href="#organizer">Организаторы</a>
					</div>
				</nav>
				<?php } ?>
			</div>
			<div class="header__wrap">
				<div class="header__contacts">
					<a href="tel:<?=$phone_link?>" class="header__phone"><span>
							<?=$phone?>
						</span></a>
					<a href="tel:<?=$phone_link?>" class="header__phone-icon"><img src="img/header/phone.svg" alt=""></a>
					<a href="mailto:<?=$email?>" class="header__mail"><span>
							<?=$email?>
						</span></a>
				</div>

				<?php if ($version == 'stavropol') { ?>
					<a class="header__button button" data-fancybox data-src="#popup-reg">Принять участие</a>
				<?php }?>


				<?php if ($version != 'stavropol') { ?>
				<svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="50">
					<!-- data-fancybox data-src="#mobile-menu" -->
					<path class="line top"
						d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
					<path class="line middle" d="m 30,50 h 40" />
					<path class="line bottom"
						d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
				</svg>
				<?php } ?>
			</div>
		</div>
	</div>
</header>

    <section class="main">
    <div class="container">
        <div class="main__inner">
            <div class="main__text">
                <p class="main__toptext">
                <?php if ($version == 'stavropol') { ?>
                    <span class="main__date">10 июля 2021 </span>
                <?php } else { ?>
                    <span class="main__date">16 апреля 2021 </span>
                    <span class="main__note">Vegas City Hall или онлайн участие</span>
                <?php }?>
                </p>
                <div class="main__mobiletext">
                    Четвертый форум<br> женщин-лидеров
                </div>
                <h1 class="main__title">synergy <br><span>woman</span><br>forum</h1>
                <p class="main__bottomtext">Трансформация:<br> женщины, меняющие<br> себя и мир вокруг</p>
            </div>
            <?php if ($version == 'version2') { ?>
            <div class="main__form">
                <?php /* ?>
                
<form action="<?=$action?>&form=reg-form-version2" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Регистрация на&nbsp;форум</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link-version2" type="submit">Участвовать</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

                <?php */ ?>
            </div>
            <?php } else { ?>
            <div class="main__form">
                <?php /* ?>
                
<form action="<?=$action?>&form=reg-form" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Регистрация на&nbsp;форум</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link" type="submit">Зарегистрироваться</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

                <?php */ ?>
            </div>
            <?php }?>

            <div class="main__trigger">
                <div class="triggers-box">
                    <div class="triggers-box__inner">
                        <div class="triggers">Мотивация</div>
                        <div class="triggers">Красота</div>
                        <div class="triggers">Стиль</div>
                        <div class="triggers">Карьера</div>
                        <div class="triggers">Бизнес</div>
                        <div class="triggers">Лайфстайл</div>
                        <div class="triggers">Культура</div>
                        <div class="triggers">Искусство</div>
                        <div class="triggers">Вдохновение</div>
                        <div class="triggers">Здоровье</div>
                        <div class="triggers">Спорт</div>
                        <div class="triggers">Мода</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main__button">
        <!-- <a href="#popup-reg" class="main__button-down button" data-fancybox>принять участие</a> -->
    </div>
</section>
    <section class="about" id="about">
    <div class="container">
        <div class="about__inner">

            <!-- <div class="about__img">
                <img data-src="img/about/pic-1.png" alt="" class="lazy">
            </div> -->

            <div class="about__content">
                <h2 class="about__title title">О форуме</h2>
                <div class="about__wrap">
                <?php if ($version == 'stavropol') { ?>
                    <p class="about__text big-text">2020 год стал годом перемен и&nbsp;обновлений, разрушения устоявшихся систем и&nbsp;ориентиров во&nbsp;всех жизненных ресурсах. Трансформация&nbsp;&mdash; процесс, который предстоит пройти человечеству на&nbsp;пути к&nbsp;качественно новой осознанной жизни. И&nbsp;на&nbsp;этом пути у&nbsp;женщины особая роль и&nbsp;миссия.</p>
                    <p class="about__text big-text">В&nbsp;этом году Synergy Woman Forum соберет женщин&nbsp;&mdash; ярчайших представительниц самых важных сфер жизни.</p>
                    <p class="about__text big-text">Как словить волну перехода и&nbsp;достичь желаемого? Как экологично пережить и&nbsp;встроиться в&nbsp;глобальные процессы изменений.</p>
                    <p class="about__text big-text">Участницы смогут понять, как перестроить жизненные опоры и&nbsp;границы, найти себя и&nbsp;свой путь в&nbsp;новой реальности, избавиться от&nbsp;шаблонного мышления и&nbsp;выйти на&nbsp;новый уровень осознанности. Трансформировать себя и&nbsp;мир вокруг.</p>
                <?php } else { ?>
                    <p class="about__text big-text">2020 год стал годом перемен и&nbsp;обновлений, разрушения устоявшихся систем и&nbsp;ориентиров во&nbsp;всех жизненных ресурсах. Трансформация&nbsp;&mdash; процесс, который предстоит пройти человечеству на&nbsp;пути к&nbsp;качественно новой осознанной жизни. И&nbsp;на&nbsp;этом пути у&nbsp;женщины особая роль и&nbsp;миссия.</p>
                    <p class="about__text big-text">В&nbsp;этом году Synergy Woman Forum соберет женщин&nbsp;&mdash; ярчайших представительниц самых важных сфер жизни. Более 60&nbsp;спикеров основной и&nbsp;параллельной сцены обсудят: что несет грядущая эпоха&nbsp;&mdash; опасность или возможности?</p>
                    <p class="about__text big-text">Как словить волну перехода и&nbsp;достичь желаемого? Как экологично пережить и&nbsp;встроиться в&nbsp;глобальные процессы изменений.</p>
                    <p class="about__text big-text">Более 10&nbsp;000 участниц смогут понять, как перестроить жизненные опоры и&nbsp;границы, найти себя и&nbsp;свой путь в&nbsp;новой реальности, избавиться от&nbsp;шаблонного мышления и&nbsp;выйти на&nbsp;новый уровень осознанности. Трансформировать себя и&nbsp;мир вокруг.</p>
                <?php }?>
                </div>
            </div>

        </div>
    </div>
</section>
    



<section class="speakers" id="speakers">
	<div class="container">

	<?php if ($version == 'stavropol') { ?>

		<div class="speakers__content">
		<h2 class="speakers__title title">Спикеры форума</h2>
		
			<div class="speakers__col">
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/orlova_a.png" alt="Анетта Орлова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Анетта <br>Орлова</div>
		<div class="speakers__post" data-post>Психолог, основатель онлайн-школы по самооценке «Self-Evolution», радиоведущая, бизнес-тренер</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Психолог, кандидат социологических наук, основатель онлайн-школы по самооценке "Self-Evolution" , бизнес-тренер, радиоведущая, эксперт центрально ТВ, автор книг по психологии, колумнист Forbes, Snob, PeopleTalk, АИФ, и др., спикер крупных форумов, ведущая бизнес-тренингов</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
		
			<div class="speakers__col">
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/m_levchuk.png" alt="Мила Левчук" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Мила <br>Левчук</div>
		<div class="speakers__post" data-post>Педагог-психолог, автор уникальной методики психологии отношений и книг-бестселлеров</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Педагог-психолог, автор уникальной методики психологии отношений и книг-бестселлеров</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
		
			<div class="speakers__col">
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/artemev.png" alt="Сергей Артемьев" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Сергей <br>Артемьев</div>
		<div class="speakers__post" data-post>Трансформационный тренер, эксперт по&nbsp;работе сознания и&nbsp;обучению soft-skills</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Автор инновационной системы развития личности и&nbsp;метода быстрого восстановления психологической целостности &laquo;Техника Возврата Управления&raquo;</li>
		<li>Автор аккредитованных курсов повышения квалификации в&nbsp;области психологии и&nbsp;коммуникации. Обучил более 1500&nbsp;психологов, 150 спикеров</li>
		<li>Действительный член профессиональной психотерапевтической лиги</li>
		<li>Приглашенный эксперт на&nbsp;федеральных&nbsp;ТВ, корпоративных университетах крупнейших компаний и&nbsp;бизнес-сообществах</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
		
			<div class="speakers__col">
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/galtsova.png" alt="Лорелла Гальцова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Лорелла <br>Гальцова</div>
		<div class="speakers__post" data-post>Психолог, эксперт по&nbsp;отношениям, коуч, бизнес-леди</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Создала свою методику выстраивания счастливых и&nbsp;гармоничных отношений, которая показала максимальную эффективность.</li>
		<li>За&nbsp;последние 10&nbsp;лет с&nbsp;помощью Лореллы:</li>
		<li>Создано более 2500 счастливых семей</li>
		<li>Сохранено 370 союзов</li>
		<li>Более 15&nbsp;тысяч женщин и&nbsp;мужчин из&nbsp;27&nbsp;стран мира прошли курсы и&nbsp;консультации</li>
		<li>75+&nbsp;ее образовательных программ строятся на&nbsp;психологии нового счастливого поколения.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
		
			<div class="speakers__col">
				
<div href="#popup-speaker" class="speakers__item" >
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/refill.png" alt="Панель спикеров продолжает пополняться" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Панель спикеров продолжает пополняться</div>
		<div class="speakers__post" data-post></div>
		<div class="speakers__desc" data-descr></div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
		

	<?php } else { ?>

		<h2 class="speakers__title title speakers__title-head">Хедлайнер</h2>
		<div class="speakers__content" data-more-options='{"target":".speakers__col", "init":7, "inittablet":3, "initmobile":3, "desktop":3, "tablet":3, "mobile":3}'>
			


			
			<div class="speakers__col headliner" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/uzerli.png" alt="Мерьем Узерли" class="lazy">
	</div>
	<div class="speakers__info">
		
		<a href="https://youtu.be/sWUPz6zPsvg" target="_blank" data-fancybox class="speakers__video">Смотреть видео-приглашение</a>
		
		<div class="speakers__name" data-name>Мерьем <br>Узерли</div>
		<div class="speakers__post" data-post>Актриса, модель, известна по&nbsp;главной роли в&nbsp;сериале &laquo;Великолепный век&raquo;</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Мерьем Узерли родилась в&nbsp;1983 году в&nbsp;Касселе, Германия. Она переехала в&nbsp;Гамбург, чтобы завершить свое образование и&nbsp;обучение актёрскому мастерству в&nbsp;студии Frese, прежде чем переехать в&nbsp;Берлин, чтобы продолжить свою театральную карьеру. Мерьем принимала участие в&nbsp;пьесах таких известных авторов, как &laquo;Шекспир&raquo;, &laquo;Брехт&raquo;, &laquo;Гольдони&raquo; и&nbsp;&laquo;Бюхнер&raquo;.</li>
		<li>Она сыграла во&nbsp;многих успешных проектах в&nbsp;Турции и&nbsp;Европе, особенно завоевала международную популярность благодаря телешоу &laquo;Великолепный век&raquo;.</li>
		<li>Известна разнообразием внешности и&nbsp;глубиной своих персонажей, особенно в&nbsp;таких фильмах, как &laquo;Другая сторона&raquo;, &laquo;Рана моей матери&raquo; и&nbsp;&laquo;Улей&raquo;. Совсем недавно она начала добиваться успеха в&nbsp;своей дополнительной роли в&nbsp;качестве исполнительного продюсера, к&nbsp;примеру в&nbsp;фильме &laquo;Улей&raquo;.</li>
		<li>Она стала лицом нескольких коммерческих брендов и&nbsp;только что открыла первый магазин здоровой еды под названием &laquo;NOSH NOSH&raquo; в&nbsp;Берлине.</li>
		<li>Более того, она добровольно тратит свое время на&nbsp;поддержку организаций в&nbsp;борьбе с&nbsp;жестоким обращением с&nbsp;детьми и&nbsp;тех, кто борется за&nbsp;гендерное равенство. За&nbsp;всю свою работу она была отмечена несколькими отличительными наградами.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>

			
			<h2 class="speakers__title title">Спикеры форума</h2>
			
			

			
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/moroz.png" alt="Дарья Мороз" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Дарья <br>Мороз</div>
		<div class="speakers__post" data-post>Заслуженная артистка России, актриса театра и кино</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Заслуженная артистка России</li>
		<li>Актриса театра и кино</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/vasiliev.png" alt="Александр Васильев" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Александр <br>Васильев</div>
		<div class="speakers__post" data-post>Историк моды, декоратор интерьеров, почетный член Российской Академии художества</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Историк моды</li>
		<li>Декоратор интерьеров</li>
		<li>Почетный член Российской Академии художества</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/volodina.png" alt="Василиса Володина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Василиса <br>Володина</div>
		<div class="speakers__post" data-post>Астролог, телеведущая, бизнес-консультант</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Профессиональный астролог, бизнес-консультант, телеведущая. </li>
		<li>Профессиональный опыт в&nbsp;Астрологии с&nbsp;1992&nbsp;года. И&nbsp;прежде всего, это опыт личного и&nbsp;корпоративного консультирования клиентов в&nbsp;темах разного масштаба&nbsp;&mdash; от&nbsp;государственных до&nbsp;бытовых. </li>
		<li>Василиса Володина&nbsp;&mdash; популяризатор астрологии как научного знания, автор многочисленных статей и&nbsp;публикаций. </li>
		<li>За&nbsp;годы работы Василиса написала 5&nbsp;книг-бестселлеров на&nbsp;тему астрологии общим тиражом около 500&nbsp;000&nbsp;экземпляров, одна из&nbsp;которых &laquo;Астрология обольщения. </li>
		<li>Ключи к&nbsp;сердцу мужчины&raquo; удостоилась премии &laquo;Открытие года-2012&raquo;. </li>
		<li>Активно ведет социальные сети, где пропагандирует логическое применение звездной науки в&nbsp;повседневной жизни. </li>
		<li>Автор учебно-практических курсов &laquo;ЛуНация&raquo;, &laquo;Время денег&raquo;, &laquo;Дети и&nbsp;родители&raquo;, &laquo;Волны судьбы&raquo;, &laquo;Знаки событий&raquo;, &laquo;Ключи года&raquo; с&nbsp;общим числом слушателей около 20&nbsp;000&nbsp;человек. </li>
		<li>Телевидение: 2006-2007 года ведущая авторской астрологической программы &laquo;Звездная ночь с&nbsp;Василисой Володиной&raquo; (СТС). </li>
		<li>В&nbsp;2012-м году принимала участие в&nbsp;создании цикла фильмов &laquo;Знаки Зодиака&raquo; (ТНТ).</li>
		<li>C 2008-2020 годa бессменный эксперт и&nbsp;ведущая ежедневной телевизионной программы &laquo;Давай Поженимся&raquo; (Первый канал).</li>
		<li>Образование: Московская Академия астрологии, Государственный Университет Управления (математик-экономист, факультет экономической кибернетики).</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/denisova.png" alt="Татьяна Денисова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Татьяна <br>Денисова</div>
		<div class="speakers__post" data-post>Режиссёр, продюсер, хореограф, наставник шоу Танцы на&nbsp;ТНТ</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Режиссёр, продюсер, хореограф, наставник шоу Танцы на&nbsp;ТНТ</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/ernst.png" alt="Софья Эрнст" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Софья <br>Эрнст</div>
		<div class="speakers__post" data-post>Российская модель, актриса</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Российская модель, актриса</li>
		<li>Окончила экономический факультет Санкт-Петербургского государственного университета. Профессионально занималась вокалом и фехтованием.</li>
		<li>Обучалась в школе-студии МХАТ на курсе Сергея Земцова и Игоря Золотовицкого.</li>
		<li>За свою карьеру исполнила роль Мари Эжен (Марины Влади) в нашумевшем сериале «Таинственная страсть», роль Сении в картине «Викинг», снялась в киноновелле «Сны Иосифа» Ренаты Литвиновой, сыграла модельера женской одежды и одну из возлюбленных великого поэта Татьяну Яковлеву в биографическом фильме «ВМаяковский». Всего в её фильмографии более 10 масштабных кинопроектов.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/zarkova.png" alt="Ирина Зарькова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ирина <br>Зарькова</div>
		<div class="speakers__post" data-post>Директор по&nbsp;коммуникациям групп компаний White Rabbit Family</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Директор по&nbsp;коммуникациям групп компаний White Rabbit Family</li>
		<li>Директором по&nbsp;коммуникациям ресторанной группы компаний White Rabbit Family Ирина Зарькова работает с&nbsp;ноября 2018&nbsp;года. Она отвечает за&nbsp;коммуникацию с&nbsp;российской и&nbsp;иностранной прессой, взаимоотношения с&nbsp;партнерами, стратегическое позиционирование всей компании и&nbsp;PR.</li>
		<li>За&nbsp;время ее&nbsp;работы рестораны White Rabbit и&nbsp;Selfie улучшили свои позиции в&nbsp;главном международном ресторанном рейтинге The World&rsquo;s 50&nbsp;Best (13&nbsp;и&nbsp;65&nbsp;места соответственно), а&nbsp;шеф-повара Владимир Мухин и&nbsp;Анатолий Казаков стали единственными российскими шеф-повара, которые попали в&nbsp;международный рейтинг The Best Chef Awards 2019 (9&nbsp;и&nbsp;99&nbsp;места соответственно).</li>
		<li>Под руководством Ирины в&nbsp;компании были проведены различные имиджевые активности: привозы самых известных шеф-поваров мира в&nbsp;рестораны WRF, участие ресторанов группы компаний в&nbsp;ярмарках и&nbsp;фестивалях (Esquire Weekend, Geek Picnic и&nbsp;другие), грандиозное 5-летие ресторана Selfie, на&nbsp;котором в&nbsp;4&nbsp;руки готовил Анатолий Казаков и&nbsp;Расмус Кофоед (Geranium, Копенгаген), презентация &laquo;Еды будущего&raquo;&nbsp;&mdash; холдинг White Rabbit Family первым в&nbsp;России привез и&nbsp;запустил в&nbsp;ресторанах блюда с&nbsp;растительным мясoм Beyond Meat, а&nbsp;также празднование побед и&nbsp;успехов российской гастрономии в&nbsp;рейтинге The World&rsquo;s 50&nbsp;Best в&nbsp;ресторане &laquo;Сахалин&raquo; летом 2019&nbsp;года.</li>
		<li>За&nbsp;время работы Ирины Зарьковой в&nbsp;компании были запущены такие проекты, как IKRA Explore, IKRA Talks, IKRA Awards (ранее проводился только фестиваль IKRA Fest), социальные проекты, такие как &quot;Я&nbsp;Шеф (совместный с&nbsp;компанией Electrolux благотворительный проект, который дает возможность выпускникам детских домов освоить профессию повара), Her kitchen rules (серия ужинов, public-talks с&nbsp;самыми известными женщинами шеф-поварами мира, проект направлен на&nbsp;разрушение гендерных стереотипов о&nbsp;том, что лучшие шеф-повара&nbsp;&mdash; мужчины).</li>
		<li>Ирина Зарькова имеет два высших образования&nbsp;&mdash; финансовое (Финансовая академия при правительстве&nbsp;РФ) и&nbsp;психологическое (Институт психологии Выготского по&nbsp;специальности &laquo;Психология личности&raquo;). </li>
		<li>White Rabbit Family сегодня&nbsp;&mdash; это 20&nbsp;заведений и&nbsp;гастромаркет в&nbsp;Москве, Сочи, Астане.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/shnurova.png" alt="Матильда Шнурова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Матильда <br>Шнурова</div>
		<div class="speakers__post" data-post>Основательница проектов BIO MY&nbsp;BIO, COCOCO bistro и&nbsp;ресторана Cococouture</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>В&nbsp;23&nbsp;года открыла свой первый бизнес&nbsp;&mdash; балетную школу &laquo;Айседора&raquo;, первую школу для непрофессиональных танцоров в&nbsp;Санкт-Петербурге, в&nbsp;которой преподавали артисты ведущих театров.</li>
		<li>Стала трендсеттером в&nbsp;ресторанной индустрии, начав в&nbsp;2012 году развивать идею использования локальных, фермерских и&nbsp;сезонных продуктов.</li>
		<li>Первая женщина ресторатор из&nbsp;России, вошедшая в&nbsp;рейтинг лучших ресторанов мира The World&rsquo;s 50&nbsp;Best Restaurants в&nbsp;2019 году с&nbsp;рестораном &laquo;Кококо&raquo;.</li>
		<li>За&nbsp;полгода открыла три ресторанных проекта во&nbsp;время пандемии&nbsp;&mdash; в&nbsp;июле healthy кафе BIO MY&nbsp;BIO и&nbsp;comfort food ресторан COCOCO Bistro и&nbsp;в&nbsp;декабре fine dining ресторан COCOCOUTURE.</li>
		<li>Разработала и&nbsp;реализовала в&nbsp;проекте BIO MY&nbsp;BIO уникальную для России концепцию осознанного питания, где каждое блюдо в&nbsp;меню исключает сахар, глютен и&nbsp;лактозу.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/azizan.png" alt="София Азизян" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>София <br>Азизян</div>
		<div class="speakers__post" data-post>Партнер компании&nbsp;EY, руководитель программы и&nbsp;конкурса &laquo;Деловые женщины&raquo;</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Партнер компании&nbsp;EY, руководитель практики аудиторских услуг в&nbsp;странах Центральной, Восточной, Юго-Восточной Европы и&nbsp;Центральной Азии, руководитель программы &laquo;Деловые женщины&raquo;, ментор программы Women&rsquo;s Leadership Forum, член организации Women Friendly Company, член Попечительского совета сообщества PRO Женщин, член Глобального Комитета EY&nbsp;по&nbsp;Разнообразию и&nbsp;Инклюзии (Global Diversity &amp;&nbsp;Inclusiveness Steering Committee)</li>
		<li>София обладает более чем 25-летним опытом проведения аудита финансовой отчетности, составленной в&nbsp;соответствии с&nbsp;российскими стандартами бухгалтерского учета (РСБУ), с&nbsp;Международными стандартами финансовой отчетности (МСФО) и&nbsp;с&nbsp;Общепринятыми в&nbsp;США принципами бухгалтерского учета (ОПБУ США).</li>
		<li>София принимала участие в&nbsp;ряде проектов по&nbsp;оказанию услуг широкому кругу клиентов, работающих в&nbsp;различных отраслях.</li>
		<li>София окончила университет королевы Виктории города Веллингтона, Новая Зеландия, имеет диплом бакалавра по&nbsp;экономике со&nbsp;специализацией в&nbsp;области аудита и&nbsp;коммерческого права.</li>
		<li>София&nbsp;&mdash; дипломированный бухгалтер Новой Зеландии (СА), член Института дипломированных бухгалтеров Новой Зеландии.</li>
		<li>С&nbsp;2013 года София руководит программой EY&nbsp;&laquo;Деловые женщины&raquo;, направленной на&nbsp;поддержку женского предпринимательства и&nbsp;продвижение женщин в&nbsp;бизнесе и&nbsp;объединяющей более 700 успешных женщин.</li>
		<li>София активно популяризирует тему женского лидерства, выступая на&nbsp;форумах и&nbsp;конференциях, таких как Woman Who Matters Анны Рудаковой, Women Leadership Forum Светланы Ланда. Она также вовлечена в&nbsp;многочисленные мероприятия Опоры России, Деловой России, Агентства стратегических инициатив и&nbsp;программы EY&nbsp;Women. Fast forward под руководством Джули Тигланд, управляющего партнера&nbsp;EY по&nbsp;региону EMEIA (Европа, Ближний Восток, Индия и&nbsp;Африка). София является ментором в&nbsp;программе Women Leadership Forum, членом Попечительского совета и&nbsp;ментором сообщества PRO Женщин Екатерины и&nbsp;Игоря Рыбаковых и&nbsp;членом организации Women Friendly Company.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/lichagina.png" alt="Лара Лычагина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Лара <br>Лычагина</div>
		<div class="speakers__post" data-post>Издатель, главный редактор The World Magazine</div>
		<div class="speakers__desc" data-descr>Издатель, главный редактор The World Magazine</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/chekalin.png" alt="Артем Чекалин" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Артем <br>Чекалин</div>
		<div class="speakers__post" data-post>Блогер 4 млн подписчиков, предприниматель, основатель компании Letique Cosmetics</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Бизнесмен, блогер с&nbsp;многомиллионной аудиторией (4&nbsp;млн.)</li>
		<li>Во&nbsp;время учебы в&nbsp;университете Артем начал заниматься бизнесом: оптовой продажей фруктов и&nbsp;овощей. Но&nbsp;через три года бизнес рухнул практически в&nbsp;один день из-за введения санкций, оставив Артема в&nbsp;долгах.</li>
		<li>После того, как бизнес рухнул, Артем начал заниматься общестроительными работами, однако этот бизнес пришлось также закрыть спустя два года. Тогда пришли мысли начать помогать своей жене, Валерии, у&nbsp;которой активно развивалась страница в&nbsp;Инстаграм.</li>
		<li>Спустя время Артем решил, что хочет иметь собственный заработок, а&nbsp;не&nbsp;только помогать Лере и&nbsp;в&nbsp;2018 году создал свой Instagram-аккаунт, на&nbsp;который сейчас подписаны 4млн человек. Так в&nbsp;декабре 2018&nbsp;года, по&nbsp;инициативе Артема Чекалина, супруги запустили косметическую марку LETIQUE, которая сейчас насчитывает более 300 дистрибьютеров и&nbsp;90&nbsp;офлайн островков по&nbsp;РФ, Казахстану и&nbsp;Беларусии.&nbsp;4&nbsp;июля 2020 года бренд вышел на&nbsp;рынок Европы и&nbsp;США, в&nbsp;декабре 2020 года на&nbsp;рынок Китая, а&nbsp;в&nbsp;данный момент ребята плотно занимаются выходом на&nbsp;маркетплейсы. Общая выручка с&nbsp;офлайн и&nbsp;оптом составляет более 2,1 млрд руб.&nbsp;на&nbsp;российском рынке и&nbsp;более 1.5млн руб.&nbsp;на&nbsp;западе.</li>
		<li>Набрав популярность в&nbsp;Инстаграм, Артем вместе с&nbsp;Валерией решили показать людям, каким образом они могут сделать свою жизнь такой&nbsp;же красивой, как в&nbsp;их&nbsp;Инстаграм аккаунтах. Так появился первый денежный марафон семьи Чекалиных, мотивирующий людей зарабатывать больше и&nbsp;жить только той жизнью, которой они хотят. Сейчас марафон набирает стремительные обороты, собирает множество положительных отзывов и&nbsp;делает все больше людей счастливыми.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/vladimirskaya.png" alt="Алена Владимирская" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Алена <br>Владимирская</div>
		<div class="speakers__post" data-post>Хедхантер и&nbsp;HR-консультант, руководитель &laquo;Лаборатории карьеры Алены Владимирской&raquo;, бывший главный хантер Mail.ru</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Алена Владимирская, известный хэдхантер, уже более 18&nbsp;лет в&nbsp;рекрутинге.</li>
		<li>Алена&nbsp;&mdash; обладатель премии &laquo;HR&nbsp;&mdash; бренд года&raquo;, основательница Лаборатории карьеры Алены Владимирской, постоянный спикер ключевых бизнес-мероприятий, а&nbsp;также автор курсов о&nbsp;карьере и&nbsp;колонки Forbes. Насчитывается больше 1000 написанных ею&nbsp;материалов в&nbsp;Коммерсанте, Ведомостях и&nbsp;других бизнес-изданиях.</li>
		<li>Алена реализовала более 350 доказанных успешных карьерных кейсов. Ведет профессиональную страницу в&nbsp;Facebook (более 168 тысяч читателей). Запустила сервис уникальных вакансий Facancy и&nbsp;Telegram-канал &laquo;Вакансии от&nbsp;Алены Владимирской&raquo;, который насчитывает более 100&nbsp;000 тысяч подписчиков.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/avseenko.png" alt="Наталья Авсеенко" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Наталья <br>Авсеенко</div>
		<div class="speakers__post" data-post>Чемпионка и&nbsp;рекордсменка мира по&nbsp;фридайвингу</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Чемпионка и&nbsp;рекордсменка мира по&nbsp;фридайвингу. Известна в&nbsp;мире как &laquo;Принцесса китов&raquo;, которая погрузилась под лед Белого моря на&nbsp;задержке дыхания и&nbsp;без термозащиты, чтобы установить контакт с&nbsp;белухами и&nbsp;увидеть границы возможностей человека. Об&nbsp;этом погружении был снят фильм &laquo;Потолок&raquo;. О&nbsp;Наталье написал крупнейший британский таблоид Dailу Mail. За&nbsp;одну ночь облетели ее&nbsp;фотографии ныряющей с&nbsp;белухами под толстым полярным льдом полностью обнаженной.</li>
		<li>В&nbsp;рамках проектов Phototeam.pro, которая специализируется на&nbsp;уникальных, сложных и&nbsp;даже экстремальных подводных арт- и&nbsp;исследовательских проектах она стала также героиней всемирно известных фильмов. Эти фильмы рассказывают об&nbsp;уникальности и&nbsp;широте человеческих возможностей; в&nbsp;них заключены глубокие смыслы, которые раскрываются каждому зрителю именно так, как он&nbsp;готов это увидеть и&nbsp;воспринять. Также в&nbsp;фильмах показана красота и&nbsp;уникальность России, это взгляд из-под воды. Среди кинопроектов можно выделить фильмы &laquo;Потолок&raquo;, &quot; Хозяйка Орды&quot; (совместно с&nbsp;каналом RT,), # Чайка, #Чайка: обретая крылья. Эти проекты стали известными во&nbsp;всем мире, они переводились на&nbsp;разные языки мира, так как все больше и&nbsp;больше с&nbsp;разных континентов людей хотели понять произносимое героями.</li>
		<li>Наталья стала соавтором книги о&nbsp;дельфинах. В&nbsp;2013 году была написана книга на&nbsp;русском и&nbsp;английском языках с&nbsp;привлечением мировых экспертов с&nbsp;целью защитить прекрасных морских млекопитающих, а&nbsp;именно черномосркую афалину, чье существование находится под угрозой исчезновения. Проект и&nbsp;книга &laquo;Быть дельфином&raquo; полюбились и&nbsp;взрослым и&nbsp;детям из&nbsp;разных стран мира.</li>
		<li>Сейчас Наталья, продолжая участвовать в&nbsp;проектах Phototeam.pro,&nbsp;&mdash; один из&nbsp;ведущих экспертов по&nbsp;системному развитию человека через воду и&nbsp;задержку дыхания: физическому, энергетическому, эмоциональному, ментальному. Она преподает не&nbsp;только в&nbsp;воде, но&nbsp;и&nbsp;проводит людей сквозь страхи и&nbsp;погружение в&nbsp;себя; в&nbsp;того, кто рядом; в&nbsp;подводный мир. Темы соединенности с&nbsp;собой; целостности, осознанности, счастья и&nbsp;любви, потоковости, как жить в&nbsp;ситуации неопределенности, как быть антихрупким&nbsp;&mdash; это&nbsp;то, с&nbsp;чем Наталью приглашают выступать на&nbsp;известных мировых площадках как в&nbsp;России, так и&nbsp;по&nbsp;всему миру. Она не&nbsp;просто говорит, но&nbsp;делает и&nbsp;трансформирует. Например, в&nbsp;рамках основанной ею&nbsp;школы фридайвинга PlavitaWay, в&nbsp;которой фридайвинг преподается не&nbsp;как экстремальный спорт, а&nbsp;как система всестороннего и&nbsp;экологичного развития человека, человека нового времени.</li>
		<li>Кандидат культурологии, доцент; инструктор-тренер по&nbsp;фридайвингу SSI; амбассадор экомиссии Mission Deep Blue, общественный деятель.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/ryzhkova.png" alt="Анна Рыжкова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Анна <br>Рыжкова</div>
		<div class="speakers__post" data-post>Карьерный консультант, контрибьютор Forbes, карьерный коуч в&nbsp;МШУ Сколково</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Карьерный консультант, контрибьютор Forbes, карьерный коуч в&nbsp;МШУ Сколково</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/ulishenko.png" alt="Алесь Улищенко" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Алесь <br>Улищенко</div>
		<div class="speakers__post" data-post>Автор блога @dr_ales о здоровье и красоте, основатель клиники остеопатии и фейспластики - Clinic Dr.Ales и Международной академии фейспластики и остеопатии</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Автор блога @dr_ales о здоровье и красоте</li>
		<li>Врач-остеопат, ортопед, пластический хирург</li>
		<li>Кандидат медицинских наук</li>
		<li>Основатель клиники остеопатии и фейспластики - Clinic Dr.Ales и Международной академии фейспластики и остеопатии</li>
		<li>Автор фейспластики</li>
		<li>15 лет в сфере естественного оздоровления и омоложения</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/belkina.png" alt="Марина Белкина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Марина <br>Белкина</div>
		<div class="speakers__post" data-post>Основатель и&nbsp;директор развивающейся сети салонов красоты МАРЛЕН/SAXAP, 29&nbsp;салонов по&nbsp;России</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Основатель и&nbsp;директор развивающейся сети салонов красоты МАРЛЕН/SAXAP, 19&nbsp;салонов по&nbsp;России:
		<ul>
		<li>Москва&nbsp;&mdash;11&nbsp;салонов </li>
		<li>Новосибирск&nbsp;&mdash;4&nbsp;салона</li>
		<li>Санкт-Петербург&nbsp;&mdash;3&nbsp;салона </li>
		<li>Екатеринбург&nbsp;&mdash;1&nbsp;салон</li>
		</ul>
		</li>
		<li>Все салоны в&nbsp;собственности </li>
		<li>Победитель премии &laquo;Главные женщины Сибири 2019&raquo;</li>
		<li>Стали лучшей сетью Салонов по&nbsp;премии NGS в&nbsp;2018г</li>
		<li>Кандидат мастера спорта по&nbsp;лёгкой атлетики </li>
		<li>Жена и&nbsp;мама двоих детей </li>
		<li>Открыла свой первый кабинет красоты в&nbsp;18&nbsp;лет </li>
		<li>&laquo;Моя работа&nbsp;&mdash; дело моей жизни&raquo;</li>
		<li>10&nbsp;лет опыта в&nbsp;индустрии красоты</li>
		<li>&laquo;Любимое занятие это&nbsp;&mdash; маркетинг , сама составляю все рекламные компании для салонов , конечно не&nbsp;без помощи команды , но&nbsp;сама очень люблю это дело.<br>
		Все мое детство и&nbsp;юность я&nbsp;посвятила спорту: профессиональные занятия легкой атлетикой, спортивная школа, получение звания кандидата в&nbsp;мастера спорта, сборы, соревнования... Я&nbsp;благодарна этому периоду, ведь он&nbsp;дал мне выдержку, целеустремленность, тягу к&nbsp;победам, терпение и&nbsp;силу воли&nbsp;&mdash; качества, которые сейчас так помогают в&nbsp;ведении бизнеса.<br>
		С&nbsp;началом моей карьеры происходило и&nbsp;становление личности. Работа в&nbsp;сфере красоты&nbsp;&mdash; единственная и&nbsp;любимая, открыла свой первый салон в&nbsp;18&nbsp;лет. На&nbsp;ранних этапах было тяжело понять, чего хочется и&nbsp;что я&nbsp;могу. Любая мелочь казалась катастрофой. Но&nbsp;сейчас выработался &laquo;иммунитет&raquo; на&nbsp;проблемы. Я&nbsp;уверена, любую трудность можно преодолеть и&nbsp;даже из&nbsp;безвыходной, на&nbsp;первый взгляд, ситуации найти выход. Наша главная задача&nbsp;&mdash; поддерживать клиентский спрос и&nbsp;высокий уровень сервиса, а&nbsp;все остальное&nbsp;&mdash; решается.<br>
		Мой принцип: &laquo;Клиент всегда прав&raquo;. Именно для своих гостей мы&nbsp;работаем и&nbsp;повышаем экспертность каждые полгода. В&nbsp;сети салонов наши клиенты могут получить практически любой вид услуги: от&nbsp;качественного ухода за&nbsp;волосами и&nbsp;маникюра до&nbsp;эпиляции. Кстати, удаление волос&nbsp;&mdash; один из&nbsp;самых сильных профилей с&nbsp;запатентованной авторской методикой, лучшими новинками и&nbsp;технологиями.<br>
		&laquo;НЕЛЬЗЯ, НЕВОЗМОЖНО&raquo;&nbsp;&mdash; ЭТИХ СЛОВ ДЛЯ МЕНЯ НЕ&nbsp;СУЩЕСТВУЕТ. Я&nbsp;СТАВЛЮ ЦЕЛИ, ОПРЕДЕЛЯЮ ВРЕМЯ ИХ&nbsp;ИСПОЛНЕНИЯ И&nbsp;НЕ&nbsp;ОТКЛАДЫВАЮ ВАЖНЫЕ ДЕЛА НА&nbsp;ПОТОМ.<br>
		Под моим руководством более 400 сотрудников и&nbsp;19&nbsp;салонов в&nbsp;четырех городах России и&nbsp;это только начало , с&nbsp;2020 года мы&nbsp;ставим цель открывать по&nbsp;6&nbsp;салонов в&nbsp;год.<br>
		Достичь успеха&nbsp;&mdash; значит прийти к&nbsp;своей цели. Сейчас моя цель&nbsp;&mdash; стать лучшей сетью салонов красоты по&nbsp;России по&nbsp;критериям &laquo;количество/сервис/качество оказываемых услуг&raquo; с&nbsp;сохранением доступной цены для клиентов и&nbsp;идеальных условий для команды. Я&nbsp;развиваюсь в&nbsp;той сфере, которую отлично знаю и&nbsp;безмерно люблю, поэтому и&nbsp;новые вершины покоряю с&nbsp;удовольствием. В&nbsp;прошлом году мы&nbsp;получили признание в&nbsp;народной премии НГС и&nbsp;вошли в&nbsp;топ-10 лучших салонов красоты по&nbsp;версии читателей.<br>
		Моя работа&nbsp;&mdash; дело моей жизни. Но&nbsp;первостепенна для меня семья. Мое женское счастье&nbsp;&mdash; это мои дети, Макар и&nbsp;Варвара, и&nbsp;муж, с&nbsp;которым мы&nbsp;уже 13&nbsp;лет вместе. Семейное благополучие и&nbsp;общие интересы&nbsp;&mdash; то, что дарит мне гармонию&quot;.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/ganytdinova.png" alt="Мария Гайнутдинова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Мария <br>Гайнутдинова</div>
		<div class="speakers__post" data-post>Основатель аутсорсинговой компании GOYA Consulting</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Более 20 лет работы в сфере финансов</li>
		<li>Изучила и внедрила более 20 способов законного снижения налогов</li>
		<li>В своём инстаграм @mariya_gainutdinova рассказывает о налогах легко и просто</li>
		<li>Более 10 лет работы с крупными строительными и производственными компаниями</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/alonchikova.png" alt="Елена Алончикова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Елена <br>Алончикова</div>
		<div class="speakers__post" data-post>Исполнительный директор Synergy Speakers Agency</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Исполнительный директор Synergy Speakers Agency</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/troska.png" alt="Ирина Троска" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ирина <br>Троска</div>
		<div class="speakers__post" data-post>Операционный директор и&nbsp;директор по&nbsp;фитнесу X-Fit в&nbsp;России</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Более 20 лет опыта в открытии и управлении проектами фитнес-индустрии.</li>
		<li>Начав работать в 14 лет тренером групповых программ, уже к 21 стала фитнес-директором одной из международных сетей фитнес-клубов в России.</li>
		<li>Лектор конгрессов Fitness Expert, SNPro, FitHitCompany, MIOFF. Преподаватель MBA Intensive in Fitness в Государственном университете управления.</li>
		<li>В настоящий момент — операционный директор сети фитнес-клубов X-FIT (более 90 клубов, 8 000 сотрудников, 350 000 клиентов).</li>
		<li>Сегодня вместе с командой специалистов сфокусирована на развитии и разработке программ, направленных на восстановление ресурсов организма, укрепление иммунитета и поддержание баланса после пандемии.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/kasaticova.png" alt="Надежда Касатикова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Надежда <br>Касатикова</div>
		<div class="speakers__post" data-post>Основатель и&nbsp;CEO сети салонов ExpressNails&nbsp;&mdash; Brow&amp;Nail Company</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Выпускница Stanford MBA&rsquo; 05</li>
		<li>Основатель и&nbsp;CEO сети салонов ExpressNails&nbsp;&mdash; Brow&amp;Nail Company</li>
		<li>Основатель и&nbsp;CEO uNails&nbsp;&mdash; мобильное приложение uber Beauty услуг на&nbsp;дом</li>
		<li>Инноватор, которая привезла, внедрила и&nbsp;популяризировала концепт &laquo;Комплекс в&nbsp;4&nbsp;руки&raquo; в&nbsp;beauty индустрию России</li>
		<li>Автор бизнес марафона &laquo;Работа-это кайф&raquo;</li>
		<li>Автор бизнес марафона &laquo;Клиентская растяжка&raquo;</li>
		<li>Автор методики &laquo;Smart контракт&raquo; для увеличения эффективности сотрудников beauty сферы</li>
		<li>Автор и&nbsp;ведущая международного проекта Pro Beauty Business на&nbsp;YouTube канале&nbsp;&mdash; Надежда Касатикова ( Россия/Италия/Испания/Великобритания и&nbsp;др)</li>
		<li>Автор и&nbsp;ведущая проекта Pro Beauty Tour на&nbsp;You Tube канале Надежда Касатикова</li>
		<li>Эксперт beauty индустрии&nbsp;РФ и&nbsp;автор аудиторской системы анализа beauty Компаний и&nbsp;внедрению антикризисных мер</li>
		<li>Супруга длиною в&nbsp;23&nbsp;года и&nbsp;молодая мама очаровательных двух мальчишек!</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/lugovaya.png" alt="Наталья Луговая" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Наталья <br>Луговая</div>
		<div class="speakers__post" data-post>Сексолог</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Сексолог</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/shimanskaja.png" alt="Виктория Шиманская" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Виктория <br>Шиманская</div>
		<div class="speakers__post" data-post>Доктор психологии. Российский эксперт по развитию Эмоционального Интеллекта</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Доктор психологии. Российский эксперт по развитию Эмоционального Интеллекта</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/usupova.png" alt="Надежда Юсупова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Надежда <br>Юсупова</div>
		<div class="speakers__post" data-post>Fashion-эксперт. Дизайнер брендов Speranza Couture и&nbsp;Love Me. Владелица бутика Wedding Rooms</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Эксперт-практик в&nbsp;сфере fashion с&nbsp;опытом успешной работы более 10&nbsp;лет.</li>
		<li>Владелица бутика свадебных и&nbsp;вечерних платьев Wedding Rooms на&nbsp;Никольской, 10</li>
		<li>Победитель WEDDING Awards 2015</li>
		<li>Дизайнер премиального бренда свадебных и&nbsp;вечерних платьев Speranza Couture</li>
		<li>Хэдлайнер #MBFWRussia, Arab Fashion Week</li>
		<li>Победитель WEDDING Awards 2017, Arab Fashion Awards 2017, WHITE Wedding Awards 2017, 2019</li>
		<li>Дизайнер бренда современной женской одежды LOVE ME</li>
		<li>Идейный вдохновитель и&nbsp;основатель онлайн-школы в&nbsp;сфере обучения fashion-бизнесу</li>
		<li>Спикер Woman Who Matters 2018, 2019</li>
		<li>10&nbsp;000+ клиентов по&nbsp;всему миру</li>
		<li>100+ публикаций в&nbsp;СМИ</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/cruz.png" alt="Виктория Круз" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Виктория <br>Круз</div>
		<div class="speakers__post" data-post>Вице-президент по&nbsp;устойчивому развитию в&nbsp;Amilla Fushi на&nbsp;Мальдивах</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Вице-президент по&nbsp;устойчивому развитию в&nbsp;Amilla Fushi на&nbsp;Мальдивах</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/vinovaya.png" alt="Евгения Виновая" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Евгения <br>Виновая</div>
		<div class="speakers__post" data-post>Создатель уникального магазина для взрослых</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Создатель и&nbsp;владелица интим-бутика &laquo;Взрослые Люди&raquo; на&nbsp;Малой Бронной, включенного в&nbsp;список московских достопримечательностей и&nbsp;лучших мест для шоппинга.
		Первого магазина в&nbsp;отрасли, с&nbsp;которым сотрудничают звезды российской эстрады и&nbsp;кино, поэты и&nbsp;художники, где проводятся кино- и&nbsp;фото- съемки, художественные и&nbsp;фото- выставки, имеющие культурную и&nbsp;социальную для города ценность.</li>
		<li>&laquo;Запретную&raquo; тему успешно вывела в&nbsp;пространство здоровья и&nbsp;доверия, возведя до&nbsp;уровня искусства.</li>
		<li>В&nbsp;своем Инстаграм @vl_adults проводит эфиры с&nbsp;экспертами различных областей знаний, в&nbsp;том числе врачами (андрологами, сексологами, психологами, специалистами по&nbsp;телесности и&nbsp;телесным практикам), где с&nbsp;научной точки зрения освещает важные для интимного здоровья и&nbsp;жизни вопросы</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/vanakht.png" alt="Евгения Ванахт" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Евгения <br>Ванахт</div>
		<div class="speakers__post" data-post>Врач, писатель, сооснователь проекта франшиз Тренинговых Центров &laquo;Подари себе крылья&raquo;</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Врач, писатель, сооснователь проекта франшиз Тренинговых Центров &laquo;Подари себе крылья&raquo;</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/kadyr.png" alt="Айжан Кадыр" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Айжан <br>Кадыр</div>
		<div class="speakers__post" data-post>Коуч, сооснователь проекта франшизы Тренинговых Центров &laquo;Подари себе крылья&raquo;</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Коуч, сооснователь проекта франшизы Тренинговых Центров &laquo;Подари себе крылья&raquo;</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/bessonova.png" alt="Марина Бессонова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Марина <br>Бессонова</div>
		<div class="speakers__post" data-post>Нутрициолог, специалист по&nbsp;сбалансированному образу жизни</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Дипломированный нутрициолог, ФГБОУВО &laquo;Российский государственный социальный университет&raquo;, г. Москва</li>
		<li>Участник образовательной программы STANFORD UNIVERSITY &laquo;CHILD&nbsp;NUTRITUION AND COOKING&raquo;, США</li>
		<li>Сертифицированный участник образовательной программы ASSOCIATION OF&nbsp;NUTRITION &amp;&nbsp;DETOX COACHING</li>
		<li>Сертифицированный участник образовательных программ в&nbsp;Международном институте интегральной превентивной и&nbsp;антивозрастной медицины PreventAge, г. Москва</li>
		<li>Участник научно-практической конференции по&nbsp;диетологии и&nbsp;нутрициологии 2019&nbsp;г.</li>
		<li>Сертифицированный участник курса &laquo;Психология и&nbsp;психофизиология пищевого поведения&raquo;, Лицей &laquo;Ученый фитнес&raquo;, г. Москва</li>
		<li>Сертифицированный участник курсов &laquo;Основы биохимии&raquo;, &laquo;Питание беременных и&nbsp;кормящих&raquo; Владимира Сударева Академии РОСТФИТ</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/kuznetsova.png" alt="Юлия Кузнецова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Юлия <br>Кузнецова</div>
		<div class="speakers__post" data-post>Президент Ассоциации инвестиционных и&nbsp;финансовых советников фондового рынка. Основатель Международной академии инвестиций&nbsp;JK</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Self made вумен</li>
		<li>Экономист с&nbsp;20&nbsp;летним стажем в&nbsp;сфере управления финансами</li>
		<li>Специалист финансового рынка по&nbsp;брокерской, дилерской деятельности, деятельности по&nbsp;управлению ценными бумагами и&nbsp;инвестиционными фондами&nbsp;&mdash; аттестованный Центробанком РФ</li>
		<li>Квалифицированный инвестор-практик с&nbsp;опытом инвестирования 13&nbsp;лет</li>
		<li>Основатель единственной лицензированной Международной академии инвестиций JK</li>
		<li>Создатель уникальных авторских курсов по&nbsp;инвестированию, не&nbsp;имеющих аналогов, которые успешно окончили 10000 человек и&nbsp;научились зарабатывать от&nbsp;30&nbsp;до&nbsp;200% годовых в&nbsp;долларах</li>
		<li>Бизнес-аналитик, дипломированный Бизнес-коуч</li>
		<li>Супервизор института психоанализа</li>
		<li>Создала капитал с&nbsp;нуля до&nbsp;4&nbsp;млн долларов</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/kombarova.png" alt="Екатерина Комбарова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Екатерина <br>Комбарова</div>
		<div class="speakers__post" data-post>Основатель и&nbsp;дизайнер модного дома Maison Kaleidoscope, профессиональный художник</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Основатель и&nbsp;дизайнер модного дома Maison Kaleidoscope, профессиональный художник</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/o_moroz.png" alt="Ольга Мороз" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ольга <br>Мороз</div>
		<div class="speakers__post" data-post>Главный врач, соучредитель Клиники эстетической медицины Ольги Мороз</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Главный врач, соучредитель Клиники эстетической медицины Ольги Мороз</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/voinich.png" alt="Наталья Войнич" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Наталья <br>Войнич</div>
		<div class="speakers__post" data-post>Соосновательница Le Journal Intime</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Более 20 лет опыта в создании медицинского компрессионного белья.</li>
		<li>Имея образование в области медицины и клинической психологии в ___ году создала компанию NATIVE, ставшую одним из лидеров отрасли постоперационного белья. В 2015 компания получила «Национальный знак качества» в категории «Выбор России. Надежный Поставщик».</li>
		<li>В 2015 году вместе с сестрой, Татьяной Валентович, запустила бренд fashion-белья Le Journal Intime, в основе которого использовала разработки и материалы из направления компрессионного белья. Компания первой на российском рынке представила бюстгальтеры с поддержкой груди, которую обеспечивают уникальный крой и компрессионные свойства эластичных материалов.
		</li>
		<li>Le Journal Intime является постоянным участником международных и национальных профессиональных бельевых выставок. В этом году эксперты крупнейшей парижской выставки Salon International de la Lingerie уже третий раз отобрали изделия из новой коллекции для представления в рубрике Selection, куда приглашают бренды, задающие тренды бельевой индустрии.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/orlova_a.png" alt="Анетта Орлова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Анетта <br>Орлова</div>
		<div class="speakers__post" data-post>Психолог, основатель онлайн-школы по самооценке «Self-Evolution», радиоведущая, бизнес-тренер</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Психолог, кандидат социологических наук, основатель онлайн-школы по самооценке "Self-Evolution" , бизнес-тренер, радиоведущая, эксперт центрально ТВ, автор книг по психологии, колумнист Forbes, Snob, PeopleTalk, АИФ, и др., спикер крупных форумов, ведущая бизнес-тренингов</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/m_levchuk.png" alt="Мила Левчук" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Мила <br>Левчук</div>
		<div class="speakers__post" data-post>Педагог-психолог, автор уникальной методики психологии отношений и книг-бестселлеров</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Педагог-психолог, автор уникальной методики психологии отношений и книг-бестселлеров</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/m_klimenko.png" alt="Мила Клименко" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Мила <br>Клименко</div>
		<div class="speakers__post" data-post>Основатель Школы NIKK MOLE</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Основатель Школы NIKK MOLE и всех проектов под одноименным брендом. Звездный визажист, топ-стилист, бьюти-тренер. Автор легендарного продукта для оформления бровей Brow Paste и множества эксклюзивных техник работы в макияже и дизайне бровей. Создатель нескольких серий профессионального инструмента и косметических средств по торговой маркой NIKK MOLE. Жюри первого в России ТВ-шоу о макияже «Мейкаперы» на канале «Пятница!». Блогер с миллионной аудиторией подписчиков в Instagram. Спикер форумов по развитию личного бренда и успешному продвижению.
		Мила имеет высшее художественное образование и опыт в преподавании более 10 лет.
		</li>
		<li>Многократно выигрывала российские и международные чемпионаты в сфере красоты и визажа. Объездила полмира со своими мастер-классами. Ежегодно участвует в крупнейших бьюти-выставках в России и за рубежом.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/eka_bespyatih.png" alt="Екатерина Беспятых" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Екатерина <br>Беспятых</div>
		<div class="speakers__post" data-post>Международный эксперт по&nbsp;тайм-менеджменту для женщин. Основательница Академии женского развития Woman Time</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Международный эксперт по&nbsp;тайм-менеджменту для женщин</li>
		<li>Основательница Академии женского развития Woman Time</li>
		<li>Спикер Skolkovo, Crocus City Hall, Synergy Forum</li>
		<li>Руководитель проектов в&nbsp;Faberlic и&nbsp;социального проекта &laquo;Я-МАМА&raquo;</li>
		<li>Лауреат премий: Women Success Awards, Mama Club, Woman Who Matters, Национальной премии &laquo;День Матери в&nbsp;России&raquo;, Человек года, Moda Topical, Лучшие социальные проекты России</li>
		<li>Автор книги &laquo;Ресурсный тайм-менеджмент для женщин&raquo;</li>
		<li>Колумнист РБК, Космо, Harpers Bazar и&nbsp;др.</li>
		<li>Эксперт на&nbsp;радио и&nbsp;TV</li>
		<li>Жена, многодетная мама</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/dar_tulubenskaya.png" alt="Дарья Тулубенская" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Дарья <br>Тулубенская</div>
		<div class="speakers__post" data-post>Партнер, член Совета директоров InterSearch Global, руководитель карьерного проекта SmartTrek</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Партнер, член Совета директоров InterSearch Global, руководитель карьерного проекта SmartTrek. Руководит практиками fashion &amp;&nbsp;beauty retail, товары повседневного спроса (FMCG), спортивная индустрия и&nbsp;текстильная промышленность</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/yuli_durnova.png" alt="Юлия Дурнова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Юлия <br>Дурнова</div>
		<div class="speakers__post" data-post>Руководитель специальных проектов ООО СРТ</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Руководитель специальных проектов ООО СРТ</li>
		<li>ННГУ им. Н.И. Лобачевского, специальности биофизика и&nbsp;менеджмент организаций НИУ ВШЭ Президентская программа “Инновационный менеджмент”</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/artemev.png" alt="Сергей Артемьев" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Сергей <br>Артемьев</div>
		<div class="speakers__post" data-post>Трансформационный тренер, эксперт по&nbsp;работе сознания и&nbsp;обучению soft-skills</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Автор инновационной системы развития личности и&nbsp;метода быстрого восстановления психологической целостности &laquo;Техника Возврата Управления&raquo;</li>
		<li>Автор аккредитованных курсов повышения квалификации в&nbsp;области психологии и&nbsp;коммуникации. Обучил более 1500&nbsp;психологов, 150 спикеров</li>
		<li>Действительный член профессиональной психотерапевтической лиги</li>
		<li>Приглашенный эксперт на&nbsp;федеральных&nbsp;ТВ, корпоративных университетах крупнейших компаний и&nbsp;бизнес-сообществах</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/andreev.png" alt="Павел Андреев" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Павел <br>Андреев</div>
		<div class="speakers__post" data-post>Профессиональный астролог</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>11&nbsp;лет практики</li>
		<li>Создатель авторской методики обучения</li>
		<li>Более 104&nbsp;000 учеников по&nbsp;всему миру</li>
		<li>Автор 5&nbsp;книг-бестселлеров по&nbsp;астрологии</li>
		<li>Свыше 10&nbsp;000 проведенных консультаций, а&nbsp;среди клиентов самые успешные предприниматели и&nbsp;представители шоу-бизнеса.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/gildebrandt.png" alt="Ирина Гильдебрандт" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ирина <br>Гильдебрандт</div>
		<div class="speakers__post" data-post>Директор направления социально-экономических исследований Аналитического центра НАФИ</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Эксперт в&nbsp;сфере социально-экономических исследований, в&nbsp;том числе занимается активным развитием темы женского лидерства. Участница проекта-победителя &laquo;Стереотипы в&nbsp;отношении женщин&raquo; на&nbsp;международном конкурсе EQUALS in&nbsp;Tech 2020. Выпускница образовательной программы &laquo;Женщина-лидер&raquo; от&nbsp;Совета Евразийского женского форума в&nbsp;рамках президентской платформы &laquo;Россия&nbsp;&mdash; страна возможностей&raquo;.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/burashova.png" alt="Анна Бурашова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Анна <br>Бурашова</div>
		<div class="speakers__post" data-post>Главный редактор Marie Claire</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>25&nbsp;лет в&nbsp;профессии. Работала на&nbsp;телевидении в&nbsp;новостной и&nbsp;глянцевой журналистике. Прошла путь от&nbsp;кинообозревателя до&nbsp;главного редактора нескольких изданий.&nbsp;8&nbsp;лет занимается развитием проекта Marie Claire в&nbsp;России. Участвует в&nbsp;жюри различных премий Business Woman Award Veuve Clicquot, Save Russian Soul и&nbsp;др.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/vasilchenko.png" alt="Юрий Васильченко" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Юрий <br>Васильченко</div>
		<div class="speakers__post" data-post>Тренер компании &laquo;Альфа-Медика&raquo;</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Тренер компании &laquo;Альфа-Медика&raquo;</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/pisareva.png" alt="Ирина Писарева" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ирина <br>Писарева</div>
		<div class="speakers__post" data-post>Звездный нутрициолог. Спортивный диетолог. Член национальной ассоциации диетологов и&nbsp;нутрициологов.</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Звездный нутрициолог. Спортивный диетолог. Член национальной ассоциации диетологов и&nbsp;нутрициологов.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/shubina.png" alt="Виктория Шубина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Виктория <br>Шубина</div>
		<div class="speakers__post" data-post>Вице-президент Федерации Триатлона России</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Вице-президент Федерации Триатлона России</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/russka.png" alt="Анна Русска" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Анна <br>Русска</div>
		<div class="speakers__post" data-post>Продюсер, брендинг и&nbsp;маркетинг эксперт, издатель, инфлюенсер, основатель группы-компаний ANNARUSSKA Group</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Основатель группы-компаний ANNARUSSKA Group, в&nbsp;которую входят:</li>
		<li>&bull; Продюсерский центр по&nbsp;созданию и&nbsp;развитию брендов;</li>
		<li>&bull; Издательский дом: печатный журнал AR&nbsp;World Luxury Guide и&nbsp;новостной интернет-ресурс AR&nbsp;World Luxury Guide WWW.ANNARUSSKA.RU о&nbsp;премиальном стиле жизни и&nbsp;успешных людях;</li>
		<li>&bull; Медиа Продакшн-компания.</li>
		<li>В&nbsp;клиентский портфель компании входят такие мировые бренды, как: Damiani, Rolls Royce, Christian Dior Beauty, PIAGET, Carolina Herrera, Maserati, Bentley, R&eacute;my Martin и&nbsp;другие. </li>
		<li>Имея за&nbsp;спиной 10-летний опыт в&nbsp;продюсировании и&nbsp;развитии брендов, Анна выступает в&nbsp;качестве эксперта на&nbsp;крупных российских и&nbsp;международных форумах, проводит консультации топ директорам известных компаний и&nbsp;читает лекции по&nbsp;маркетингу и&nbsp;брендингу. </li>
		<li>На&nbsp;сегодняшний день Анна проконсультировала более 1000 компаний и&nbsp;создала более 20&nbsp;брендов, разрабатывала и&nbsp;реализовывала маркетинг- и&nbsp;PR стратегии для ведущих</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/sereda.png" alt="Ирина Середа" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ирина <br>Середа</div>
		<div class="speakers__post" data-post>Генеральный директор DIM&nbsp;в России. Инвестор, эксперт по&nbsp;личным финансам, наставник по&nbsp;созданию пассивного дохода</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/grishin.png" alt="Владислав Гришин" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Владислав <br>Гришин</div>
		<div class="speakers__post" data-post>Шеф-повар любительского направления крупнейшей в&nbsp;стране кулинарной школы Novikov School</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Специально для участниц Synergy Woman Forum Владислав проведет мастер-класс, на&nbsp;котором расскажет, как приготовить утиную грудку с&nbsp;пюре из&nbsp;корня сельдерея и&nbsp;черничным соусом и&nbsp;буррату с&nbsp;капонатой и&nbsp;соусом песто.</li>
		<li>Чтобы готовить вместе с&nbsp;шеф-поваром во&nbsp;время мастер-класса мы&nbsp;рекомендуем подготовить заранее все ингредиенты в&nbsp;соответствии с&nbsp;рецептами.</li>
		<li>УТИНАЯ ГРУДКА С&nbsp;ПЮРЕ ИЗ&nbsp;КОРНЯ СЕЛЬДЕРЕЯ И&nbsp;ЧЕРНИЧНЫМ СОУСОМ</li>
		<li>&bull; Утиная грудка 260&nbsp;г <br>
		&bull; Корень сельдерея 150&nbsp;г <br>
		&bull; Лук репчатый 50&nbsp;г <br>
		&bull; Масло Сливочное 50&nbsp;г <br>
		&bull; Соль, сахар, черный перец по&nbsp;вкусу  <br>
		&bull; Сливки&nbsp;33% 50&nbsp;г <br>
		&bull; Вино белое сухое 50&nbsp;г  <br>
		&bull; Черника с/м 50&nbsp;г <br>
		&bull; Лимон 50&nbsp;г <br>
		&bull; Чеснок 10&nbsp;г <br>
		&bull; Тимьян 10&nbsp;г </li>
		<li>БУРРАТА С&nbsp;КАПОНАТОЙ И&nbsp;СОУСОМ ПЕСТО</li>
		<li>&bull; Буррата 1&nbsp;шт  <br>
		&bull; Баклажаны 50&nbsp;г <br>
		&bull; Цукини 50&nbsp;г <br>
		&bull; Оливки Каламатта 40&nbsp;г  <br>
		&bull; Болгарский перец 50&nbsp;г  <br>
		&bull; Томаты в&nbsp;собственном соку 50&nbsp;г  <br>
		&bull; Оливковое масло 30&nbsp;г <br>
		&bull; Лук шалот 40&nbsp;г <br>
		&bull; Соль, сахар, чёрный перец по&nbsp;вкусу  <br>
		&bull; Базилик 100&nbsp;г <br>
		&bull; Кедровые орехи 40&nbsp;г  <br>
		&bull; Пармезан 40&nbsp;г  <br>
		&bull; Растительное масло 80&nbsp;г <br>
		&bull; Сок лимона 30&nbsp;г</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/shuppo.png" alt="Ольга Шуппо" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ольга <br>Шуппо</div>
		<div class="speakers__post" data-post>Врач антивозрастной медицины, научный руководитель сети Grand Clinic</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/gorod.png" alt="Дарья Город" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Дарья <br>Город</div>
		<div class="speakers__post" data-post>Психолог, эзотерик, автор книги-бестселлера &laquo;Быть настоящей женщиной&raquo; и&nbsp;умных ежедневников</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/kozhokova.png" alt="Диана Кожокова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Диана <br>Кожокова</div>
		<div class="speakers__post" data-post>Директор Synergy Business Club</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/galtsova.png" alt="Лорелла Гальцова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Лорелла <br>Гальцова</div>
		<div class="speakers__post" data-post>Психолог, эксперт по&nbsp;отношениям, коуч, бизнес-леди</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Создала свою методику выстраивания счастливых и&nbsp;гармоничных отношений, которая показала максимальную эффективность.</li>
		<li>За&nbsp;последние 10&nbsp;лет с&nbsp;помощью Лореллы:</li>
		<li>Создано более 2500 счастливых семей</li>
		<li>Сохранено 370 союзов</li>
		<li>Более 15&nbsp;тысяч женщин и&nbsp;мужчин из&nbsp;27&nbsp;стран мира прошли курсы и&nbsp;консультации</li>
		<li>75+&nbsp;ее образовательных программ строятся на&nbsp;психологии нового счастливого поколения.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/avtandilyan.png" alt="Луиза Автандилян" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Луиза <br>Автандилян</div>
		<div class="speakers__post" data-post>Врач -стоматолог. Основатель и&nbsp;генеральный директор стоматологии и&nbsp;косметологии Smile Studio.</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Основатель и&nbsp;генеральный директор стоматологии и&nbsp;косметологии Smile Studio.</li>
		<li>Официальный партнёр и&nbsp;лицо компании Amazing White </li>
		<li>Автор и&nbsp;создатель онлайн&nbsp;&mdash; школы &laquo;Продвижение в&nbsp;Инстаграме&raquo; </li>
		<li>Член медицинского союза &laquo;Единство&raquo;</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/ershova.png" alt="Илоанга Ершова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Илоанга <br>Ершова</div>
		<div class="speakers__post" data-post>Директор по&nbsp;развитию бизнеса Ozon</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/zolotukhina.png" alt="Елизавета Золотухина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Елизавета <br>Золотухина</div>
		<div class="speakers__post" data-post>Лайфстайл и&nbsp;тревел блогер @turbo.mama</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Лайфстайл и&nbsp;тревел блогер</li>
		<li>Спикер Synergy Global forum, городских мероприятий в&nbsp;Москве, Санкт-Петербурге</li>
		<li>Маркетолог, лауреат премии Successful Ladies Awards-2018&nbsp;в номинации &laquo;Лучший автор блога для мам&raquo;</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/muradyan.png" alt="Гагик Мурадян" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Гагик <br>Мурадян</div>
		<div class="speakers__post" data-post>Директор Synergy Business Regatta</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/surinovich.png" alt="Алёна Суринович" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Алёна <br>Суринович</div>
		<div class="speakers__post" data-post>Генеральный директор Lumene &amp;&nbsp;Cutrin</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/chekalina.png" alt="Валерия Чекалина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Валерия <br>Чекалина</div>
		<div class="speakers__post" data-post>Блогер 9+ млн подписчиков, основательница компании Letique Cosmetics</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Блогер с&nbsp;многомиллионной аудиторией (9&nbsp;млн.), основательница косметического бренда LETIQUE, фитнес и&nbsp;денежного марафонов.</li>
		<li>Начиная свой путь в&nbsp;бизнесе с&nbsp;собственного опыта, Валерия сейчас делится с&nbsp;огромной аудиторией всеми ценными знаниями, которые смогла приобрести за&nbsp;годы своего развития.</li>
		<li>После родов Валерия, потеряв форму, стала заниматься спортом дома, отбирая правильные советы для себя самой, следила за&nbsp;питанием. Достигнув прекрасного результата, Лера поняла, что хочет нести это в&nbsp;массы, заряжая девушек пониманием, что если смогла она, то&nbsp;они тоже смогут. Так в&nbsp;ноябре 2017 года началась дорога к&nbsp;созданию собственного марафона Похудения, который сейчас является одним из&nbsp;крупнейших фитнес проектов в&nbsp;России&nbsp;&mdash; более 200 тыс клиентов за&nbsp;прошлый год. Отличительной чертой марафона является&nbsp;то, что Валерия сама показывает тренировки от&nbsp;и&nbsp;до, то&nbsp;есть тренируется &laquo;вместе со&nbsp;всеми&raquo;. Проходящих марафон Лера в&nbsp;том числе мотивирует подарками за&nbsp;упорство в&nbsp;достижении цели (от&nbsp;косметики и&nbsp;айфонов последней модели до&nbsp;автомобилей класса люкс).</li>
		<li>Ухаживая за&nbsp;собой, Валерия прибегала к&nbsp;помощи домашних средств, которые делала сама: &laquo;Я&nbsp;всегда любила создавать средства для ухода за&nbsp;телом в&nbsp;домашних условиях: смешивала скрабы, варила обертывания. У&nbsp;меня хорошо получалось и&nbsp;были рецепты, которыми я&nbsp;делилась с&nbsp;подругами&raquo;. Так у&nbsp;мужа Валерии Артема появилась мысль сделать целый бренд, чтобы не&nbsp;только друзья, но&nbsp;и&nbsp;весь мир мог узнать, что не&nbsp;обязательно платить огромные средства за&nbsp;косметику, чтобы выглядеть шикарно, как его жена. Так в&nbsp;декабре 2018 года появилась косметическая марка LETIQUE, которая сейчас насчитывает более 300 дистрибьютеров и&nbsp;90&nbsp;офлайн островков по&nbsp;РФ, Казахстану и&nbsp;Беларусии.&nbsp;4&nbsp;июля 2020 года бренд вышел на&nbsp;рынок Европы и&nbsp;США, в&nbsp;декабре 2020 года на&nbsp;рынок Китая, а&nbsp;в&nbsp;данный момент ребята плотно занимаются выходом на&nbsp;маркетплейсы. Общая выручка с&nbsp;офлайн и&nbsp;оптом составляет более 2,1 млрд руб.&nbsp;на&nbsp;российском рынке и&nbsp;более 1.5млн руб.&nbsp;на&nbsp;Западе.</li>
		<li>Набрав огромную популярность в&nbsp;Инстаграм, Валерия задумалась о&nbsp;том, что хочет пошагово показать людям, каким образом они могут зарабатывать больше и&nbsp;сделать свою жизнь такой&nbsp;же красивой, как в&nbsp;Инстаграме Лерчек. Так Валерия и&nbsp;Артем Чекалины запустили свой первый денежный марафон, мотивирующий людей зарабатывать больше и&nbsp;жить только той жизнью, которой они хотят. Сейчас марафон набирает стремительные обороты, собирает множество положительных отзывов и&nbsp;делает все больше людей счастливыми.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/grazioza.png" alt="Виолетта Грациоза" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Виолетта <br>Грациоза</div>
		<div class="speakers__post" data-post>Основатель бренда, концепции	и&nbsp;студии лазерной эпиляции и&nbsp;аппаратной косметологии EgoEstetica Magic</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" >
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/refill.png" alt="Панель спикеров продолжает пополняться" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Панель спикеров продолжает пополняться</div>
		<div class="speakers__post" data-post></div>
		<div class="speakers__desc" data-descr></div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			
		</div>
		<button class="button speakers__more-btn" data-more-btn>Показать больше спикеров <img data-src="img/speakers/plus.png" alt="" class="lazy"></button>

		<a href="https://drive.google.com/drive/folders/12hy-Hb_FmtxJXQQTPKeEDTstjGdXCm9A?usp=sharing" class="button speakers__more-btn button_program" target="_blank">Получить программу форума</a>
	<?php } ?>

	</div>
</section>



    <section class="how" id="how">
    <div class="container">
        <h1 class="how__title title">Как это было?</h1>
        <div class="how__wrap">
            <a href="https://youtu.be/hh2nQBkQb44" class="how__video" data-fancybox>
                <img data-src="img/how/play.svg" alt="play-pic" class="how__video-play lazy">
            </a>
            <a href="https://youtu.be/47aX31dieEY" class="how__video" data-fancybox>
                <img data-src="img/how/play.svg" alt="play-pic" class="how__video-play lazy">
            </a>
        </div>
    </div>
</section>
    

<section class="partners" id="partners">
	<div class="container">
		<div class="partners__box">

			<div class="partners__subtitle title">Генеральный спонсор</div>
			<img src="img/partners/vtb.png" alt="" class="partners__img">

			<?php if ($version != 'stavropol') { ?>
			<div class="partners__subtitle title">Официальный партнер</div>
			<a href="https://safmarhotels.com/"><img src="img/partners/safmar.png" alt="" class="partners__img"></a>

			<div class="partners__subtitle title">Информационные партнеры</div>
			<div class="partners__items">
				
				<div class="partners__card">
					
						<img src="img/partners/strategy.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/business-excellence.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/pro-business.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/boss.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/cetre.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/psychologies.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/mir24.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/wday.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/romantika.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/ok.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/marie_claire.png" alt="" class="lazy">
					
				</div><!-- col -->
				
			</div><!-- row -->

			<h2 class="partners__title title">Партнеры</h2>
			<div class="partners__items">
				
				<div class="partners__card">
					<a href="https://theworldmag.com/" target="_blank">
						<img src="img/partners/world.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.samplesociety.ru/faq" target="_blank">
						<img src="img/partners/glambag.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.samplesociety.ru/faq" target="_blank">
						<img src="img/partners/glambox.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.xfit.ru" target="_blank">
						<img src="img/partners/xfit.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.authentica.love" target="_blank">
						<img src="img/partners/authentica.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.galladance.com" target="_blank">
						<img src="img/partners/galladance.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://braun-russia.ru" target="_blank">
						<img src="img/partners/braun.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://creamcheese.ru" target="_blank">
						<img src="img/partners/creamcheese.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://www.karatsc.ru" target="_blank">
						<img src="img/partners/karatsc.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://martori.ru/" target="_blank">
						<img src="img/partners/martori.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://lumene.ru" target="_blank">
						<img src="img/partners/lumene.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/moore.clinic/" target="_blank">
						<img src="img/partners/moore.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://elemis.ru" target="_blank">
						<img src="img/partners/elemis.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.erborian.ru" target="_blank">
						<img src="img/partners/erborian.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://asiatique.rest" target="_blank">
						<img src="img/partners/asiatique.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.ihg.com/intercontinental/hotels/ru/ru/maamunagau-island/mlemm/hoteldetail" target="_blank">
						<img src="img/partners/ihg.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://aldocoppola.ru/" target="_blank">
						<img src="img/partners/aldocoppola.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://mygenetics.ru" target="_blank">
						<img src="img/partners/genetics.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://silvashi.com/ " target="_blank">
						<img src="img/partners/silvashi.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://beautyboutiq.ru/" target="_blank">
						<img src="img/partners/beautyboutiq.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://tkbaikalaqua.com/" target="_blank">
						<img src="img/partners/baikal.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://synclear.ru/?utm_source=synergywoman&amp;utm_medium=logo&amp;utm_campaign=synergywoman.partner" target="_blank">
						<img src="img/partners/synclear.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.amilla.com/ru" target="_blank">
						<img src="img/partners/amilla.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/dessange.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://waterful.ru/en/ " target="_blank">
						<img src="img/partners/waterful.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://instagram.com/artfly_msk" target="_blank">
						<img src="img/partners/artfly.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://swisspharmcosmetics.com/" target="_blank">
						<img src="img/partners/swisspharmcosmetics.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://respace.su/?utm_medium=synergy_woman_forum" target="_blank">
						<img src="img/partners/respace.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://emvycosmetics.com/" target="_blank">
						<img src="img/partners/emvy.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://nadezhdayusupova.com/ " target="_blank">
						<img src="img/partners/nadezhdayusupova.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://lejournalintime.com/" target="_blank">
						<img src="img/partners/lejournalintime.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://mixit.ru/" target="_blank">
						<img src="img/partners/mixit.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/ganciarussia/" target="_blank">
						<img src="img/partners/ganciarussia.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://freeage.shop/" target="_blank">
						<img src="img/partners/freeage.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.volshebnitsa.ru/" target="_blank">
						<img src="img/partners/volshebnitsa.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://citynebo.com/" target="_blank">
						<img src="img/partners/citynebo.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://instagram.com/monideal_body?igshid=1bixpgcxg9j2" target="_blank">
						<img src="img/partners/monideal_body.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://instagram.com/monideal_clinic_?igshid=1ggdtpbv8hsjb" target="_blank">
						<img src="img/partners/monideal_clinic.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://xn--80aaa6bkfrbe5b.xn--p1ai/" target="_blank">
						<img src="img/partners/sahar.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://russequelle.ru/" target="_blank">
						<img src="img/partners/russequelle.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.bio-cera.ru/" target="_blank">
						<img src="img/partners/bio_cera.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.brandb24.ru/" target="_blank">
						<img src="img/partners/brandb24.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://shop.rivegauche.ru/search?text=naturalium" target="_blank">
						<img src="img/partners/naturalium.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://shop.rivegauche.ru/search?text=charles%20worthington" target="_blank">
						<img src="img/partners/worthington.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://shop.rivegauche.ru/search?text=st%20moriz" target="_blank">
						<img src="img/partners/moriz.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://maisonkaleidoscope.ru/" target="_blank">
						<img src="img/partners/maisonkaleidoscope.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://lila.moscow" target="_blank">
						<img src="img/partners/lila.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://avroraclinic.ru/" target="_blank">
						<img src="img/partners/avroraclinic.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/vl_adults/?hl=ru" target="_blank">
						<img src="img/partners/vl_adults.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://www.glowgo.ru/" target="_blank">
						<img src="img/partners/glowgo.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://youterra-aroma.ru/" target="_blank">
						<img src="img/partners/youterra.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://beautybash.ru/-brands" target="_blank">
						<img src="img/partners/beautybash.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://delfycosmetics.ru/" target="_blank">
						<img src="img/partners/delfycosmetics.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.jkmarafon.ru/" target="_blank">
						<img src="img/partners/jkmarafon.jpeg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/berlinki.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.russkart.com/" target="_blank">
						<img src="img/partners/rk.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/russequelle.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/grand-clinik.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://hvalwaters.ru/" target="_blank">
						<img src="img/partners/hval-waters.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://collagen-live.ru/" target="_blank">
						<img src="img/partners/collagen.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.bianca-city.ru/" target="_blank">
						<img src="img/partners/bianka.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/kasablanka.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.rendez-vous.ru/" target="_blank">
						<img src="img/partners/rendez-vous.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://supremebeauty.ru/products/miller-harris/" target="_blank">
						<img src="img/partners/miller-harris.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/the.moon.stones/ " target="_blank">
						<img src="img/partners/moin-stones.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://kevynaucoinbeauty.ru" target="_blank">
						<img src="img/partners/kevyn-aucoin.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.letu.ru/product/baldessarini-bella/95700033?srcid=cp_bella_april_2021&amp;utm_source=synergy-Direct&amp;utm_content=cp_bella_april_2021" target="_blank">
						<img src="img/partners/baldessarin.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://businessgolos.ru/" target="_blank">
						<img src="img/partners/golos.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/p/CGnj5H6ltzL/?igshid=1mxh0ma9880ny" target="_blank">
						<img src="img/partners/dushevno.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://platkinina.ru" target="_blank">
						<img src="img/partners/platkinina.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://fc8.ru/" target="_blank">
						<img src="img/partners/udacha.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://kinomax.ru/" target="_blank">
						<img src="img/partners/kinomax.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://eestetica.ru/" target="_blank">
						<img src="img/partners/eestetica.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://vassatrend.ru/" target="_blank">
						<img src="img/partners/vassatrend.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://alliance-rental.ru/  " target="_blank">
						<img src="img/partners/alliance-rental.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://maisonkaleidoscope.ru/" target="_blank">
						<img src="img/partners/president.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/722detailing/ " target="_blank">
						<img src="img/partners/detailing.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/mett.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://marutaka.ru/" target="_blank">
						<img src="img/partners/marutaka.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://cashmeremoscow.ru/" target="_blank">
						<img src="img/partners/cashmeremoscow.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://candelaclinic.ru/" target="_blank">
						<img src="img/partners/candelaclinic.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://faceplace.me/" target="_blank">
						<img src="img/partners/faceplace.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://prouve.ru/" target="_blank">
						<img src="img/partners/prouve.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
			</div><!-- row -->

			<div class="partners__buttonbox">
				<a href="#popup-partner" class="partners__button button" data-fancybox>Стать партнером</a>
				<a href="#popup-accreditation" class="partners__button  partners__button_accreditation button" data-fancybox>Аккредитация СМИ</a>
			</div>
			<?php } ?>
			
		</div><!-- partners__box -->
	</div><!-- container -->
</section><!-- partners -->

    <section class="services">
    <div class="container">
        <div class="services__inner">
            <h2 class="services__title title">Сервисы <br>для предпринимателей</h2>
            <div class="services__wrap">
                <div class="services__slider">
                    <div class="services__item">
                        <img src="img/services/synergy-digital.svg" alt="">
                    </div>
                    <div class="services__item">
                        <img src="img/services/synergy-crm.svg" alt="">
                    </div>
                    <div class="services__item">
                        <img src="img/services/synergy-pay.svg" alt="">
                    </div>
                    <div class="services__item">
                        <img src="img/services/synergy-bot.svg" alt="">
                    </div>
                    <div class="services__item">
                        <img src="img/services/synergy-gt.svg" alt="">
                    </div>
                    <div class="services__item">
                        <img src="img/services/synergy-design.svg" alt="">
                    </div>
                </div>
                <div class="services__arrows slider-arrows"></div>
            </div>
        </div>
    </div>
</section>
    <section class="organizer" id="organizer">
    <div class="container">
        <div class="organizer__inner">
            <div class="organizer__top-content">
                <div class="organizer__side">
                    <h2 class="organizer__title title">Организатор</h2>
                    <p class="organizer__text big-text">Школа Бизнеса &laquo;Синергия&raquo; была основана в&nbsp;1988
                        году и&nbsp;является первой бизнес-школой в&nbsp;России и&nbsp;СНГ. На&nbsp;базе школы
                        проводится обучение по&nbsp;программам МВА и&nbsp;профессиональной переподготовки, семинары
                        и&nbsp;тренинги ведущих российских и&nbsp;мировых экспертов.</p>
                    <p class="organizer__text small-text">Качество образования в&nbsp;Школе Бизнеса отмечено
                        6&nbsp;престижными аккредитациями международной ассоциации AMBA. Школа Бизнеса
                        &laquo;Синергия&raquo; имеет филиалы за&nbsp;рубежом: в&nbsp;Нью-Йорке, Лондоне и&nbsp;Дубае,
                        где ведется обучение по&nbsp;Executive Education на&nbsp;английском языке.</p>
                </div>

                <div class="organizer__img">
                    <img data-src="img/organizer/pic-1.png" alt="" class="lazy">
                </div>

            </div>
        </div>
    </div>
    <?php if ($version != 'stavropol') { ?>
    <div class="organizer__bottom-content">
        <div class="container">
            <div class="organizer__subtitle">Франшиза Школы бизнеса &laquo;Синергия&raquo;</div>
            <div class="organizer__desc">Станьте лицом известного бренда<br> в&nbsp;сфере бизнес-образования</div>

            <div class="organizer__franchise">
                <div class="organizer__franchise-desc">
                    <p class="organizer__franchise-slim-text small-text">&laquo;Синергия&raquo;&nbsp;&mdash; организатор
                        масштабных бизнес-мероприятий в&nbsp;России и&nbsp;за&nbsp;рубежом. Среди наших
                        достижений&nbsp;&mdash; две записи в&nbsp;Книге рекордов Гиннесса и&nbsp;престижные
                        event-награды. Synergy Global Forum 2019 собрал на&nbsp;стадионе &laquo;Газпром Арена&raquo; 125
                        топовых спикеров и&nbsp;более 25&nbsp;000&nbsp;участников.</p>
                </div>

                <div class="organizer__franchise-numbs">
                    <div class="organizer__franchise-numbs-row">
                        <div class="organizer__franchise-numb organizer__franchise-numb_n1">
                            <span class="organizer__franchise-numb-text">Срок запуска</span>
                            <span class="organizer__franchise-numb-count">14 дней</span>
                        </div>

                        <div class="organizer__franchise-numb-separate"></div>

                        <div class="organizer__franchise-numb organizer__franchise-numb_n2">
                            <span class="organizer__franchise-numb-text">Плановая окупаемость</span>
                            <span class="organizer__franchise-numb-count">4 месяца</span>
                        </div>
                    </div>

                    <div class="organizer__franchise-numb organizer__franchise-numb_n3">
                        <span class="organizer__franchise-numb-text">Cтартовая стоимость франшизы</span>
                        <span class="organizer__franchise-numb-count">ОТ 250 000 РУБ.</span>
                    </div>
                    <a class="button organizer__franchise-btn" data-fancybox data-src="#popup-organizer">скачать
                        презентацию</a>
                </div>
            </div>

            <?php /* ?>
            <?php if ($version == 'version2') { ?>
            <div class="organizer__for">
                
<form action="<?=$action?>&form=reg-form-version2" class="form form_discover">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Узнать подробности</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link-version2" type="submit">отправить</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

            </div>

            <?php } else { ?>
            <div class="organizer__for">
                
<form action="<?=$action?>&form=reg-form" class="form form_discover">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Узнать подробности</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link" type="submit">отправить</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

            </div>
            <?php }?>
            <?php */ ?>

        </div>
    </div>
    <?php } ?>
</section>
    <section class="reviews">
    <div class="container">
        <div class="reviews__inner">
            <h2 class="reviews__title title">Отзывы</h2>

            <div class="reviews__list">
                <div class="reviews__item">
                    <img src="img/reviews/pic-1.png" alt="">
                </div>
                <div class="reviews__item">
                    <img src="img/reviews/pic-2.png" alt="">
                </div>
                <div class="reviews__item">
                    <img src="img/reviews/pic-3.png" alt="">
                </div>
                <div class="reviews__item">
                    <img src="img/reviews/pic-4.png" alt="">
                </div>
                <div class="reviews__item">
                    <img src="img/reviews/pic-5.png" alt="">
                </div>
                <div class="reviews__item">
                    <img src="img/reviews/pic-6.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
    <footer class="footer">
    <div class="container">
        <div class="footer__inner">

            <div class="footer__top">
                <div class="footer__logo">
                    <img src="img/footer/logo.svg" alt="">
                </div>
                <?php if ($version != 'stavropol') { ?>
                <ul class="footer__nav">
                    <li>
                        <a class="scroll" href="#about">О&nbsp;форуме</a>
                        <a class="scroll" href="#speakers">Спикеры</a>
                    </li>

                    <li>
                        <?php if ($version != 'version2') { ?>
                            <?php /* ?>
                            <a class="scroll" href="#price">Стоимость участия</a>
                            <?php */ ?>
                        <?php }?>
                        <a class="scroll" href="#place">Место проведения</a>
                    </li>
                    <li>
                        <a class="scroll" href="#how">Как это было?</a>
						<a class="scroll" href="#organizer">Организаторы</a>
                    </li>
                </ul>
                <?php } ?>
                <div class="footer__contacts">
                    <a class="footer__phone" href="tel:<?=$phone_link?>"> <?=$phone?> </a>
                    <a class="footer__mail" href="mailto:<?=$email?>"><span><?=$email?></span></a>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="footer__privacy">
                    <a class="fancybox-privacy-link footer__link" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru">Политика конфиденциальности</a>
                </div>

                <div class="footer__developer">
                    <span>Разработано и продвигается </span><a href="https://sydi.ru/" class="footer__link" target="_blank">Synergy Digital</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php } else { ?>
    <header class="header">
	<div class="container">
		<div class="header__inner">
			<div class="header__side header__side_left">
				<div class="header__logos">
					<img class="" src="img/header/logo.svg" alt="Synergy">
				</div>
			</div>

			<div class="header__side header__side_right">
				<?php if ($version != 'stavropol') { ?>
				<nav class="header__nav">
					<div class="header__links" id="header-links">
						<a class="scroll" href="#about">О&nbsp;форуме</a>
						<a class="scroll" href="#speakers">Спикеры</a>
						<?php if ($version != 'version2') { ?>
							<?php /* ?>
							<a class="scroll" href="#price">Стоимость участия</a> 
							<?php */ ?>
						<?php }?>
						<a class="scroll" href="#place">Место проведения</a>
						<a class="scroll" href="#how">Как это было?</a>
						<a class="scroll" href="#organizer">Организаторы</a>
					</div>
				</nav>
				<?php } ?>
			</div>
			<div class="header__wrap">
				<div class="header__contacts">
					<a href="tel:<?=$phone_link?>" class="header__phone"><span>
							<?=$phone?>
						</span></a>
					<a href="tel:<?=$phone_link?>" class="header__phone-icon"><img src="img/header/phone.svg" alt=""></a>
					<a href="mailto:<?=$email?>" class="header__mail"><span>
							<?=$email?>
						</span></a>
				</div>

				<?php if ($version == 'stavropol') { ?>
					<a class="header__button button" data-fancybox data-src="#popup-reg">Принять участие</a>
				<?php }?>


				<?php if ($version != 'stavropol') { ?>
				<svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="50">
					<!-- data-fancybox data-src="#mobile-menu" -->
					<path class="line top"
						d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
					<path class="line middle" d="m 30,50 h 40" />
					<path class="line bottom"
						d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
				</svg>
				<?php } ?>
			</div>
		</div>
	</div>
</header>

    <section class="main">
    <div class="container">
        <div class="main__inner">
            <div class="main__text">
                <p class="main__toptext">
                <?php if ($version == 'stavropol') { ?>
                    <span class="main__date">10 июля 2021 </span>
                <?php } else { ?>
                    <span class="main__date">16 апреля 2021 </span>
                    <span class="main__note">Vegas City Hall или онлайн участие</span>
                <?php }?>
                </p>
                <div class="main__mobiletext">
                    Четвертый форум<br> женщин-лидеров
                </div>
                <h1 class="main__title">synergy <br><span>woman</span><br>forum</h1>
                <p class="main__bottomtext">Трансформация:<br> женщины, меняющие<br> себя и мир вокруг</p>
            </div>
            <?php if ($version == 'version2') { ?>
            <div class="main__form">
                <?php /* ?>
                
<form action="<?=$action?>&form=reg-form-version2" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Регистрация на&nbsp;форум</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link-version2" type="submit">Участвовать</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

                <?php */ ?>
            </div>
            <?php } else { ?>
            <div class="main__form">
                <?php /* ?>
                
<form action="<?=$action?>&form=reg-form" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Регистрация на&nbsp;форум</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link" type="submit">Зарегистрироваться</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

                <?php */ ?>
            </div>
            <?php }?>

            <div class="main__trigger">
                <div class="triggers-box">
                    <div class="triggers-box__inner">
                        <div class="triggers">Мотивация</div>
                        <div class="triggers">Красота</div>
                        <div class="triggers">Стиль</div>
                        <div class="triggers">Карьера</div>
                        <div class="triggers">Бизнес</div>
                        <div class="triggers">Лайфстайл</div>
                        <div class="triggers">Культура</div>
                        <div class="triggers">Искусство</div>
                        <div class="triggers">Вдохновение</div>
                        <div class="triggers">Здоровье</div>
                        <div class="triggers">Спорт</div>
                        <div class="triggers">Мода</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main__button">
        <!-- <a href="#popup-reg" class="main__button-down button" data-fancybox>принять участие</a> -->
    </div>
</section>
    <section class="about" id="about">
    <div class="container">
        <div class="about__inner">

            <!-- <div class="about__img">
                <img data-src="img/about/pic-1.png" alt="" class="lazy">
            </div> -->

            <div class="about__content">
                <h2 class="about__title title">О форуме</h2>
                <div class="about__wrap">
                <?php if ($version == 'stavropol') { ?>
                    <p class="about__text big-text">2020 год стал годом перемен и&nbsp;обновлений, разрушения устоявшихся систем и&nbsp;ориентиров во&nbsp;всех жизненных ресурсах. Трансформация&nbsp;&mdash; процесс, который предстоит пройти человечеству на&nbsp;пути к&nbsp;качественно новой осознанной жизни. И&nbsp;на&nbsp;этом пути у&nbsp;женщины особая роль и&nbsp;миссия.</p>
                    <p class="about__text big-text">В&nbsp;этом году Synergy Woman Forum соберет женщин&nbsp;&mdash; ярчайших представительниц самых важных сфер жизни.</p>
                    <p class="about__text big-text">Как словить волну перехода и&nbsp;достичь желаемого? Как экологично пережить и&nbsp;встроиться в&nbsp;глобальные процессы изменений.</p>
                    <p class="about__text big-text">Участницы смогут понять, как перестроить жизненные опоры и&nbsp;границы, найти себя и&nbsp;свой путь в&nbsp;новой реальности, избавиться от&nbsp;шаблонного мышления и&nbsp;выйти на&nbsp;новый уровень осознанности. Трансформировать себя и&nbsp;мир вокруг.</p>
                <?php } else { ?>
                    <p class="about__text big-text">2020 год стал годом перемен и&nbsp;обновлений, разрушения устоявшихся систем и&nbsp;ориентиров во&nbsp;всех жизненных ресурсах. Трансформация&nbsp;&mdash; процесс, который предстоит пройти человечеству на&nbsp;пути к&nbsp;качественно новой осознанной жизни. И&nbsp;на&nbsp;этом пути у&nbsp;женщины особая роль и&nbsp;миссия.</p>
                    <p class="about__text big-text">В&nbsp;этом году Synergy Woman Forum соберет женщин&nbsp;&mdash; ярчайших представительниц самых важных сфер жизни. Более 60&nbsp;спикеров основной и&nbsp;параллельной сцены обсудят: что несет грядущая эпоха&nbsp;&mdash; опасность или возможности?</p>
                    <p class="about__text big-text">Как словить волну перехода и&nbsp;достичь желаемого? Как экологично пережить и&nbsp;встроиться в&nbsp;глобальные процессы изменений.</p>
                    <p class="about__text big-text">Более 10&nbsp;000 участниц смогут понять, как перестроить жизненные опоры и&nbsp;границы, найти себя и&nbsp;свой путь в&nbsp;новой реальности, избавиться от&nbsp;шаблонного мышления и&nbsp;выйти на&nbsp;новый уровень осознанности. Трансформировать себя и&nbsp;мир вокруг.</p>
                <?php }?>
                </div>
            </div>

        </div>
    </div>
</section>
    



<section class="speakers" id="speakers">
	<div class="container">

	<?php if ($version == 'stavropol') { ?>

		<div class="speakers__content">
		<h2 class="speakers__title title">Спикеры форума</h2>
		
			<div class="speakers__col">
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/orlova_a.png" alt="Анетта Орлова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Анетта <br>Орлова</div>
		<div class="speakers__post" data-post>Психолог, основатель онлайн-школы по самооценке «Self-Evolution», радиоведущая, бизнес-тренер</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Психолог, кандидат социологических наук, основатель онлайн-школы по самооценке "Self-Evolution" , бизнес-тренер, радиоведущая, эксперт центрально ТВ, автор книг по психологии, колумнист Forbes, Snob, PeopleTalk, АИФ, и др., спикер крупных форумов, ведущая бизнес-тренингов</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
		
			<div class="speakers__col">
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/m_levchuk.png" alt="Мила Левчук" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Мила <br>Левчук</div>
		<div class="speakers__post" data-post>Педагог-психолог, автор уникальной методики психологии отношений и книг-бестселлеров</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Педагог-психолог, автор уникальной методики психологии отношений и книг-бестселлеров</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
		
			<div class="speakers__col">
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/artemev.png" alt="Сергей Артемьев" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Сергей <br>Артемьев</div>
		<div class="speakers__post" data-post>Трансформационный тренер, эксперт по&nbsp;работе сознания и&nbsp;обучению soft-skills</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Автор инновационной системы развития личности и&nbsp;метода быстрого восстановления психологической целостности &laquo;Техника Возврата Управления&raquo;</li>
		<li>Автор аккредитованных курсов повышения квалификации в&nbsp;области психологии и&nbsp;коммуникации. Обучил более 1500&nbsp;психологов, 150 спикеров</li>
		<li>Действительный член профессиональной психотерапевтической лиги</li>
		<li>Приглашенный эксперт на&nbsp;федеральных&nbsp;ТВ, корпоративных университетах крупнейших компаний и&nbsp;бизнес-сообществах</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
		
			<div class="speakers__col">
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/galtsova.png" alt="Лорелла Гальцова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Лорелла <br>Гальцова</div>
		<div class="speakers__post" data-post>Психолог, эксперт по&nbsp;отношениям, коуч, бизнес-леди</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Создала свою методику выстраивания счастливых и&nbsp;гармоничных отношений, которая показала максимальную эффективность.</li>
		<li>За&nbsp;последние 10&nbsp;лет с&nbsp;помощью Лореллы:</li>
		<li>Создано более 2500 счастливых семей</li>
		<li>Сохранено 370 союзов</li>
		<li>Более 15&nbsp;тысяч женщин и&nbsp;мужчин из&nbsp;27&nbsp;стран мира прошли курсы и&nbsp;консультации</li>
		<li>75+&nbsp;ее образовательных программ строятся на&nbsp;психологии нового счастливого поколения.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
		
			<div class="speakers__col">
				
<div href="#popup-speaker" class="speakers__item" >
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/refill.png" alt="Панель спикеров продолжает пополняться" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Панель спикеров продолжает пополняться</div>
		<div class="speakers__post" data-post></div>
		<div class="speakers__desc" data-descr></div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
		

	<?php } else { ?>

		<h2 class="speakers__title title speakers__title-head">Хедлайнер</h2>
		<div class="speakers__content" data-more-options='{"target":".speakers__col", "init":7, "inittablet":3, "initmobile":3, "desktop":3, "tablet":3, "mobile":3}'>
			


			
			<div class="speakers__col headliner" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/uzerli.png" alt="Мерьем Узерли" class="lazy">
	</div>
	<div class="speakers__info">
		
		<a href="https://youtu.be/sWUPz6zPsvg" target="_blank" data-fancybox class="speakers__video">Смотреть видео-приглашение</a>
		
		<div class="speakers__name" data-name>Мерьем <br>Узерли</div>
		<div class="speakers__post" data-post>Актриса, модель, известна по&nbsp;главной роли в&nbsp;сериале &laquo;Великолепный век&raquo;</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Мерьем Узерли родилась в&nbsp;1983 году в&nbsp;Касселе, Германия. Она переехала в&nbsp;Гамбург, чтобы завершить свое образование и&nbsp;обучение актёрскому мастерству в&nbsp;студии Frese, прежде чем переехать в&nbsp;Берлин, чтобы продолжить свою театральную карьеру. Мерьем принимала участие в&nbsp;пьесах таких известных авторов, как &laquo;Шекспир&raquo;, &laquo;Брехт&raquo;, &laquo;Гольдони&raquo; и&nbsp;&laquo;Бюхнер&raquo;.</li>
		<li>Она сыграла во&nbsp;многих успешных проектах в&nbsp;Турции и&nbsp;Европе, особенно завоевала международную популярность благодаря телешоу &laquo;Великолепный век&raquo;.</li>
		<li>Известна разнообразием внешности и&nbsp;глубиной своих персонажей, особенно в&nbsp;таких фильмах, как &laquo;Другая сторона&raquo;, &laquo;Рана моей матери&raquo; и&nbsp;&laquo;Улей&raquo;. Совсем недавно она начала добиваться успеха в&nbsp;своей дополнительной роли в&nbsp;качестве исполнительного продюсера, к&nbsp;примеру в&nbsp;фильме &laquo;Улей&raquo;.</li>
		<li>Она стала лицом нескольких коммерческих брендов и&nbsp;только что открыла первый магазин здоровой еды под названием &laquo;NOSH NOSH&raquo; в&nbsp;Берлине.</li>
		<li>Более того, она добровольно тратит свое время на&nbsp;поддержку организаций в&nbsp;борьбе с&nbsp;жестоким обращением с&nbsp;детьми и&nbsp;тех, кто борется за&nbsp;гендерное равенство. За&nbsp;всю свою работу она была отмечена несколькими отличительными наградами.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>

			
			<h2 class="speakers__title title">Спикеры форума</h2>
			
			

			
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/moroz.png" alt="Дарья Мороз" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Дарья <br>Мороз</div>
		<div class="speakers__post" data-post>Заслуженная артистка России, актриса театра и кино</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Заслуженная артистка России</li>
		<li>Актриса театра и кино</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/vasiliev.png" alt="Александр Васильев" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Александр <br>Васильев</div>
		<div class="speakers__post" data-post>Историк моды, декоратор интерьеров, почетный член Российской Академии художества</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Историк моды</li>
		<li>Декоратор интерьеров</li>
		<li>Почетный член Российской Академии художества</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/volodina.png" alt="Василиса Володина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Василиса <br>Володина</div>
		<div class="speakers__post" data-post>Астролог, телеведущая, бизнес-консультант</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Профессиональный астролог, бизнес-консультант, телеведущая. </li>
		<li>Профессиональный опыт в&nbsp;Астрологии с&nbsp;1992&nbsp;года. И&nbsp;прежде всего, это опыт личного и&nbsp;корпоративного консультирования клиентов в&nbsp;темах разного масштаба&nbsp;&mdash; от&nbsp;государственных до&nbsp;бытовых. </li>
		<li>Василиса Володина&nbsp;&mdash; популяризатор астрологии как научного знания, автор многочисленных статей и&nbsp;публикаций. </li>
		<li>За&nbsp;годы работы Василиса написала 5&nbsp;книг-бестселлеров на&nbsp;тему астрологии общим тиражом около 500&nbsp;000&nbsp;экземпляров, одна из&nbsp;которых &laquo;Астрология обольщения. </li>
		<li>Ключи к&nbsp;сердцу мужчины&raquo; удостоилась премии &laquo;Открытие года-2012&raquo;. </li>
		<li>Активно ведет социальные сети, где пропагандирует логическое применение звездной науки в&nbsp;повседневной жизни. </li>
		<li>Автор учебно-практических курсов &laquo;ЛуНация&raquo;, &laquo;Время денег&raquo;, &laquo;Дети и&nbsp;родители&raquo;, &laquo;Волны судьбы&raquo;, &laquo;Знаки событий&raquo;, &laquo;Ключи года&raquo; с&nbsp;общим числом слушателей около 20&nbsp;000&nbsp;человек. </li>
		<li>Телевидение: 2006-2007 года ведущая авторской астрологической программы &laquo;Звездная ночь с&nbsp;Василисой Володиной&raquo; (СТС). </li>
		<li>В&nbsp;2012-м году принимала участие в&nbsp;создании цикла фильмов &laquo;Знаки Зодиака&raquo; (ТНТ).</li>
		<li>C 2008-2020 годa бессменный эксперт и&nbsp;ведущая ежедневной телевизионной программы &laquo;Давай Поженимся&raquo; (Первый канал).</li>
		<li>Образование: Московская Академия астрологии, Государственный Университет Управления (математик-экономист, факультет экономической кибернетики).</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/denisova.png" alt="Татьяна Денисова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Татьяна <br>Денисова</div>
		<div class="speakers__post" data-post>Режиссёр, продюсер, хореограф, наставник шоу Танцы на&nbsp;ТНТ</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Режиссёр, продюсер, хореограф, наставник шоу Танцы на&nbsp;ТНТ</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/ernst.png" alt="Софья Эрнст" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Софья <br>Эрнст</div>
		<div class="speakers__post" data-post>Российская модель, актриса</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Российская модель, актриса</li>
		<li>Окончила экономический факультет Санкт-Петербургского государственного университета. Профессионально занималась вокалом и фехтованием.</li>
		<li>Обучалась в школе-студии МХАТ на курсе Сергея Земцова и Игоря Золотовицкого.</li>
		<li>За свою карьеру исполнила роль Мари Эжен (Марины Влади) в нашумевшем сериале «Таинственная страсть», роль Сении в картине «Викинг», снялась в киноновелле «Сны Иосифа» Ренаты Литвиновой, сыграла модельера женской одежды и одну из возлюбленных великого поэта Татьяну Яковлеву в биографическом фильме «ВМаяковский». Всего в её фильмографии более 10 масштабных кинопроектов.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/zarkova.png" alt="Ирина Зарькова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ирина <br>Зарькова</div>
		<div class="speakers__post" data-post>Директор по&nbsp;коммуникациям групп компаний White Rabbit Family</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Директор по&nbsp;коммуникациям групп компаний White Rabbit Family</li>
		<li>Директором по&nbsp;коммуникациям ресторанной группы компаний White Rabbit Family Ирина Зарькова работает с&nbsp;ноября 2018&nbsp;года. Она отвечает за&nbsp;коммуникацию с&nbsp;российской и&nbsp;иностранной прессой, взаимоотношения с&nbsp;партнерами, стратегическое позиционирование всей компании и&nbsp;PR.</li>
		<li>За&nbsp;время ее&nbsp;работы рестораны White Rabbit и&nbsp;Selfie улучшили свои позиции в&nbsp;главном международном ресторанном рейтинге The World&rsquo;s 50&nbsp;Best (13&nbsp;и&nbsp;65&nbsp;места соответственно), а&nbsp;шеф-повара Владимир Мухин и&nbsp;Анатолий Казаков стали единственными российскими шеф-повара, которые попали в&nbsp;международный рейтинг The Best Chef Awards 2019 (9&nbsp;и&nbsp;99&nbsp;места соответственно).</li>
		<li>Под руководством Ирины в&nbsp;компании были проведены различные имиджевые активности: привозы самых известных шеф-поваров мира в&nbsp;рестораны WRF, участие ресторанов группы компаний в&nbsp;ярмарках и&nbsp;фестивалях (Esquire Weekend, Geek Picnic и&nbsp;другие), грандиозное 5-летие ресторана Selfie, на&nbsp;котором в&nbsp;4&nbsp;руки готовил Анатолий Казаков и&nbsp;Расмус Кофоед (Geranium, Копенгаген), презентация &laquo;Еды будущего&raquo;&nbsp;&mdash; холдинг White Rabbit Family первым в&nbsp;России привез и&nbsp;запустил в&nbsp;ресторанах блюда с&nbsp;растительным мясoм Beyond Meat, а&nbsp;также празднование побед и&nbsp;успехов российской гастрономии в&nbsp;рейтинге The World&rsquo;s 50&nbsp;Best в&nbsp;ресторане &laquo;Сахалин&raquo; летом 2019&nbsp;года.</li>
		<li>За&nbsp;время работы Ирины Зарьковой в&nbsp;компании были запущены такие проекты, как IKRA Explore, IKRA Talks, IKRA Awards (ранее проводился только фестиваль IKRA Fest), социальные проекты, такие как &quot;Я&nbsp;Шеф (совместный с&nbsp;компанией Electrolux благотворительный проект, который дает возможность выпускникам детских домов освоить профессию повара), Her kitchen rules (серия ужинов, public-talks с&nbsp;самыми известными женщинами шеф-поварами мира, проект направлен на&nbsp;разрушение гендерных стереотипов о&nbsp;том, что лучшие шеф-повара&nbsp;&mdash; мужчины).</li>
		<li>Ирина Зарькова имеет два высших образования&nbsp;&mdash; финансовое (Финансовая академия при правительстве&nbsp;РФ) и&nbsp;психологическое (Институт психологии Выготского по&nbsp;специальности &laquo;Психология личности&raquo;). </li>
		<li>White Rabbit Family сегодня&nbsp;&mdash; это 20&nbsp;заведений и&nbsp;гастромаркет в&nbsp;Москве, Сочи, Астане.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/shnurova.png" alt="Матильда Шнурова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Матильда <br>Шнурова</div>
		<div class="speakers__post" data-post>Основательница проектов BIO MY&nbsp;BIO, COCOCO bistro и&nbsp;ресторана Cococouture</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>В&nbsp;23&nbsp;года открыла свой первый бизнес&nbsp;&mdash; балетную школу &laquo;Айседора&raquo;, первую школу для непрофессиональных танцоров в&nbsp;Санкт-Петербурге, в&nbsp;которой преподавали артисты ведущих театров.</li>
		<li>Стала трендсеттером в&nbsp;ресторанной индустрии, начав в&nbsp;2012 году развивать идею использования локальных, фермерских и&nbsp;сезонных продуктов.</li>
		<li>Первая женщина ресторатор из&nbsp;России, вошедшая в&nbsp;рейтинг лучших ресторанов мира The World&rsquo;s 50&nbsp;Best Restaurants в&nbsp;2019 году с&nbsp;рестораном &laquo;Кококо&raquo;.</li>
		<li>За&nbsp;полгода открыла три ресторанных проекта во&nbsp;время пандемии&nbsp;&mdash; в&nbsp;июле healthy кафе BIO MY&nbsp;BIO и&nbsp;comfort food ресторан COCOCO Bistro и&nbsp;в&nbsp;декабре fine dining ресторан COCOCOUTURE.</li>
		<li>Разработала и&nbsp;реализовала в&nbsp;проекте BIO MY&nbsp;BIO уникальную для России концепцию осознанного питания, где каждое блюдо в&nbsp;меню исключает сахар, глютен и&nbsp;лактозу.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/azizan.png" alt="София Азизян" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>София <br>Азизян</div>
		<div class="speakers__post" data-post>Партнер компании&nbsp;EY, руководитель программы и&nbsp;конкурса &laquo;Деловые женщины&raquo;</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Партнер компании&nbsp;EY, руководитель практики аудиторских услуг в&nbsp;странах Центральной, Восточной, Юго-Восточной Европы и&nbsp;Центральной Азии, руководитель программы &laquo;Деловые женщины&raquo;, ментор программы Women&rsquo;s Leadership Forum, член организации Women Friendly Company, член Попечительского совета сообщества PRO Женщин, член Глобального Комитета EY&nbsp;по&nbsp;Разнообразию и&nbsp;Инклюзии (Global Diversity &amp;&nbsp;Inclusiveness Steering Committee)</li>
		<li>София обладает более чем 25-летним опытом проведения аудита финансовой отчетности, составленной в&nbsp;соответствии с&nbsp;российскими стандартами бухгалтерского учета (РСБУ), с&nbsp;Международными стандартами финансовой отчетности (МСФО) и&nbsp;с&nbsp;Общепринятыми в&nbsp;США принципами бухгалтерского учета (ОПБУ США).</li>
		<li>София принимала участие в&nbsp;ряде проектов по&nbsp;оказанию услуг широкому кругу клиентов, работающих в&nbsp;различных отраслях.</li>
		<li>София окончила университет королевы Виктории города Веллингтона, Новая Зеландия, имеет диплом бакалавра по&nbsp;экономике со&nbsp;специализацией в&nbsp;области аудита и&nbsp;коммерческого права.</li>
		<li>София&nbsp;&mdash; дипломированный бухгалтер Новой Зеландии (СА), член Института дипломированных бухгалтеров Новой Зеландии.</li>
		<li>С&nbsp;2013 года София руководит программой EY&nbsp;&laquo;Деловые женщины&raquo;, направленной на&nbsp;поддержку женского предпринимательства и&nbsp;продвижение женщин в&nbsp;бизнесе и&nbsp;объединяющей более 700 успешных женщин.</li>
		<li>София активно популяризирует тему женского лидерства, выступая на&nbsp;форумах и&nbsp;конференциях, таких как Woman Who Matters Анны Рудаковой, Women Leadership Forum Светланы Ланда. Она также вовлечена в&nbsp;многочисленные мероприятия Опоры России, Деловой России, Агентства стратегических инициатив и&nbsp;программы EY&nbsp;Women. Fast forward под руководством Джули Тигланд, управляющего партнера&nbsp;EY по&nbsp;региону EMEIA (Европа, Ближний Восток, Индия и&nbsp;Африка). София является ментором в&nbsp;программе Women Leadership Forum, членом Попечительского совета и&nbsp;ментором сообщества PRO Женщин Екатерины и&nbsp;Игоря Рыбаковых и&nbsp;членом организации Women Friendly Company.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/lichagina.png" alt="Лара Лычагина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Лара <br>Лычагина</div>
		<div class="speakers__post" data-post>Издатель, главный редактор The World Magazine</div>
		<div class="speakers__desc" data-descr>Издатель, главный редактор The World Magazine</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/chekalin.png" alt="Артем Чекалин" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Артем <br>Чекалин</div>
		<div class="speakers__post" data-post>Блогер 4 млн подписчиков, предприниматель, основатель компании Letique Cosmetics</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Бизнесмен, блогер с&nbsp;многомиллионной аудиторией (4&nbsp;млн.)</li>
		<li>Во&nbsp;время учебы в&nbsp;университете Артем начал заниматься бизнесом: оптовой продажей фруктов и&nbsp;овощей. Но&nbsp;через три года бизнес рухнул практически в&nbsp;один день из-за введения санкций, оставив Артема в&nbsp;долгах.</li>
		<li>После того, как бизнес рухнул, Артем начал заниматься общестроительными работами, однако этот бизнес пришлось также закрыть спустя два года. Тогда пришли мысли начать помогать своей жене, Валерии, у&nbsp;которой активно развивалась страница в&nbsp;Инстаграм.</li>
		<li>Спустя время Артем решил, что хочет иметь собственный заработок, а&nbsp;не&nbsp;только помогать Лере и&nbsp;в&nbsp;2018 году создал свой Instagram-аккаунт, на&nbsp;который сейчас подписаны 4млн человек. Так в&nbsp;декабре 2018&nbsp;года, по&nbsp;инициативе Артема Чекалина, супруги запустили косметическую марку LETIQUE, которая сейчас насчитывает более 300 дистрибьютеров и&nbsp;90&nbsp;офлайн островков по&nbsp;РФ, Казахстану и&nbsp;Беларусии.&nbsp;4&nbsp;июля 2020 года бренд вышел на&nbsp;рынок Европы и&nbsp;США, в&nbsp;декабре 2020 года на&nbsp;рынок Китая, а&nbsp;в&nbsp;данный момент ребята плотно занимаются выходом на&nbsp;маркетплейсы. Общая выручка с&nbsp;офлайн и&nbsp;оптом составляет более 2,1 млрд руб.&nbsp;на&nbsp;российском рынке и&nbsp;более 1.5млн руб.&nbsp;на&nbsp;западе.</li>
		<li>Набрав популярность в&nbsp;Инстаграм, Артем вместе с&nbsp;Валерией решили показать людям, каким образом они могут сделать свою жизнь такой&nbsp;же красивой, как в&nbsp;их&nbsp;Инстаграм аккаунтах. Так появился первый денежный марафон семьи Чекалиных, мотивирующий людей зарабатывать больше и&nbsp;жить только той жизнью, которой они хотят. Сейчас марафон набирает стремительные обороты, собирает множество положительных отзывов и&nbsp;делает все больше людей счастливыми.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/vladimirskaya.png" alt="Алена Владимирская" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Алена <br>Владимирская</div>
		<div class="speakers__post" data-post>Хедхантер и&nbsp;HR-консультант, руководитель &laquo;Лаборатории карьеры Алены Владимирской&raquo;, бывший главный хантер Mail.ru</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Алена Владимирская, известный хэдхантер, уже более 18&nbsp;лет в&nbsp;рекрутинге.</li>
		<li>Алена&nbsp;&mdash; обладатель премии &laquo;HR&nbsp;&mdash; бренд года&raquo;, основательница Лаборатории карьеры Алены Владимирской, постоянный спикер ключевых бизнес-мероприятий, а&nbsp;также автор курсов о&nbsp;карьере и&nbsp;колонки Forbes. Насчитывается больше 1000 написанных ею&nbsp;материалов в&nbsp;Коммерсанте, Ведомостях и&nbsp;других бизнес-изданиях.</li>
		<li>Алена реализовала более 350 доказанных успешных карьерных кейсов. Ведет профессиональную страницу в&nbsp;Facebook (более 168 тысяч читателей). Запустила сервис уникальных вакансий Facancy и&nbsp;Telegram-канал &laquo;Вакансии от&nbsp;Алены Владимирской&raquo;, который насчитывает более 100&nbsp;000 тысяч подписчиков.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/avseenko.png" alt="Наталья Авсеенко" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Наталья <br>Авсеенко</div>
		<div class="speakers__post" data-post>Чемпионка и&nbsp;рекордсменка мира по&nbsp;фридайвингу</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Чемпионка и&nbsp;рекордсменка мира по&nbsp;фридайвингу. Известна в&nbsp;мире как &laquo;Принцесса китов&raquo;, которая погрузилась под лед Белого моря на&nbsp;задержке дыхания и&nbsp;без термозащиты, чтобы установить контакт с&nbsp;белухами и&nbsp;увидеть границы возможностей человека. Об&nbsp;этом погружении был снят фильм &laquo;Потолок&raquo;. О&nbsp;Наталье написал крупнейший британский таблоид Dailу Mail. За&nbsp;одну ночь облетели ее&nbsp;фотографии ныряющей с&nbsp;белухами под толстым полярным льдом полностью обнаженной.</li>
		<li>В&nbsp;рамках проектов Phototeam.pro, которая специализируется на&nbsp;уникальных, сложных и&nbsp;даже экстремальных подводных арт- и&nbsp;исследовательских проектах она стала также героиней всемирно известных фильмов. Эти фильмы рассказывают об&nbsp;уникальности и&nbsp;широте человеческих возможностей; в&nbsp;них заключены глубокие смыслы, которые раскрываются каждому зрителю именно так, как он&nbsp;готов это увидеть и&nbsp;воспринять. Также в&nbsp;фильмах показана красота и&nbsp;уникальность России, это взгляд из-под воды. Среди кинопроектов можно выделить фильмы &laquo;Потолок&raquo;, &quot; Хозяйка Орды&quot; (совместно с&nbsp;каналом RT,), # Чайка, #Чайка: обретая крылья. Эти проекты стали известными во&nbsp;всем мире, они переводились на&nbsp;разные языки мира, так как все больше и&nbsp;больше с&nbsp;разных континентов людей хотели понять произносимое героями.</li>
		<li>Наталья стала соавтором книги о&nbsp;дельфинах. В&nbsp;2013 году была написана книга на&nbsp;русском и&nbsp;английском языках с&nbsp;привлечением мировых экспертов с&nbsp;целью защитить прекрасных морских млекопитающих, а&nbsp;именно черномосркую афалину, чье существование находится под угрозой исчезновения. Проект и&nbsp;книга &laquo;Быть дельфином&raquo; полюбились и&nbsp;взрослым и&nbsp;детям из&nbsp;разных стран мира.</li>
		<li>Сейчас Наталья, продолжая участвовать в&nbsp;проектах Phototeam.pro,&nbsp;&mdash; один из&nbsp;ведущих экспертов по&nbsp;системному развитию человека через воду и&nbsp;задержку дыхания: физическому, энергетическому, эмоциональному, ментальному. Она преподает не&nbsp;только в&nbsp;воде, но&nbsp;и&nbsp;проводит людей сквозь страхи и&nbsp;погружение в&nbsp;себя; в&nbsp;того, кто рядом; в&nbsp;подводный мир. Темы соединенности с&nbsp;собой; целостности, осознанности, счастья и&nbsp;любви, потоковости, как жить в&nbsp;ситуации неопределенности, как быть антихрупким&nbsp;&mdash; это&nbsp;то, с&nbsp;чем Наталью приглашают выступать на&nbsp;известных мировых площадках как в&nbsp;России, так и&nbsp;по&nbsp;всему миру. Она не&nbsp;просто говорит, но&nbsp;делает и&nbsp;трансформирует. Например, в&nbsp;рамках основанной ею&nbsp;школы фридайвинга PlavitaWay, в&nbsp;которой фридайвинг преподается не&nbsp;как экстремальный спорт, а&nbsp;как система всестороннего и&nbsp;экологичного развития человека, человека нового времени.</li>
		<li>Кандидат культурологии, доцент; инструктор-тренер по&nbsp;фридайвингу SSI; амбассадор экомиссии Mission Deep Blue, общественный деятель.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/ryzhkova.png" alt="Анна Рыжкова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Анна <br>Рыжкова</div>
		<div class="speakers__post" data-post>Карьерный консультант, контрибьютор Forbes, карьерный коуч в&nbsp;МШУ Сколково</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Карьерный консультант, контрибьютор Forbes, карьерный коуч в&nbsp;МШУ Сколково</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/ulishenko.png" alt="Алесь Улищенко" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Алесь <br>Улищенко</div>
		<div class="speakers__post" data-post>Автор блога @dr_ales о здоровье и красоте, основатель клиники остеопатии и фейспластики - Clinic Dr.Ales и Международной академии фейспластики и остеопатии</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Автор блога @dr_ales о здоровье и красоте</li>
		<li>Врач-остеопат, ортопед, пластический хирург</li>
		<li>Кандидат медицинских наук</li>
		<li>Основатель клиники остеопатии и фейспластики - Clinic Dr.Ales и Международной академии фейспластики и остеопатии</li>
		<li>Автор фейспластики</li>
		<li>15 лет в сфере естественного оздоровления и омоложения</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/belkina.png" alt="Марина Белкина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Марина <br>Белкина</div>
		<div class="speakers__post" data-post>Основатель и&nbsp;директор развивающейся сети салонов красоты МАРЛЕН/SAXAP, 29&nbsp;салонов по&nbsp;России</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Основатель и&nbsp;директор развивающейся сети салонов красоты МАРЛЕН/SAXAP, 19&nbsp;салонов по&nbsp;России:
		<ul>
		<li>Москва&nbsp;&mdash;11&nbsp;салонов </li>
		<li>Новосибирск&nbsp;&mdash;4&nbsp;салона</li>
		<li>Санкт-Петербург&nbsp;&mdash;3&nbsp;салона </li>
		<li>Екатеринбург&nbsp;&mdash;1&nbsp;салон</li>
		</ul>
		</li>
		<li>Все салоны в&nbsp;собственности </li>
		<li>Победитель премии &laquo;Главные женщины Сибири 2019&raquo;</li>
		<li>Стали лучшей сетью Салонов по&nbsp;премии NGS в&nbsp;2018г</li>
		<li>Кандидат мастера спорта по&nbsp;лёгкой атлетики </li>
		<li>Жена и&nbsp;мама двоих детей </li>
		<li>Открыла свой первый кабинет красоты в&nbsp;18&nbsp;лет </li>
		<li>&laquo;Моя работа&nbsp;&mdash; дело моей жизни&raquo;</li>
		<li>10&nbsp;лет опыта в&nbsp;индустрии красоты</li>
		<li>&laquo;Любимое занятие это&nbsp;&mdash; маркетинг , сама составляю все рекламные компании для салонов , конечно не&nbsp;без помощи команды , но&nbsp;сама очень люблю это дело.<br>
		Все мое детство и&nbsp;юность я&nbsp;посвятила спорту: профессиональные занятия легкой атлетикой, спортивная школа, получение звания кандидата в&nbsp;мастера спорта, сборы, соревнования... Я&nbsp;благодарна этому периоду, ведь он&nbsp;дал мне выдержку, целеустремленность, тягу к&nbsp;победам, терпение и&nbsp;силу воли&nbsp;&mdash; качества, которые сейчас так помогают в&nbsp;ведении бизнеса.<br>
		С&nbsp;началом моей карьеры происходило и&nbsp;становление личности. Работа в&nbsp;сфере красоты&nbsp;&mdash; единственная и&nbsp;любимая, открыла свой первый салон в&nbsp;18&nbsp;лет. На&nbsp;ранних этапах было тяжело понять, чего хочется и&nbsp;что я&nbsp;могу. Любая мелочь казалась катастрофой. Но&nbsp;сейчас выработался &laquo;иммунитет&raquo; на&nbsp;проблемы. Я&nbsp;уверена, любую трудность можно преодолеть и&nbsp;даже из&nbsp;безвыходной, на&nbsp;первый взгляд, ситуации найти выход. Наша главная задача&nbsp;&mdash; поддерживать клиентский спрос и&nbsp;высокий уровень сервиса, а&nbsp;все остальное&nbsp;&mdash; решается.<br>
		Мой принцип: &laquo;Клиент всегда прав&raquo;. Именно для своих гостей мы&nbsp;работаем и&nbsp;повышаем экспертность каждые полгода. В&nbsp;сети салонов наши клиенты могут получить практически любой вид услуги: от&nbsp;качественного ухода за&nbsp;волосами и&nbsp;маникюра до&nbsp;эпиляции. Кстати, удаление волос&nbsp;&mdash; один из&nbsp;самых сильных профилей с&nbsp;запатентованной авторской методикой, лучшими новинками и&nbsp;технологиями.<br>
		&laquo;НЕЛЬЗЯ, НЕВОЗМОЖНО&raquo;&nbsp;&mdash; ЭТИХ СЛОВ ДЛЯ МЕНЯ НЕ&nbsp;СУЩЕСТВУЕТ. Я&nbsp;СТАВЛЮ ЦЕЛИ, ОПРЕДЕЛЯЮ ВРЕМЯ ИХ&nbsp;ИСПОЛНЕНИЯ И&nbsp;НЕ&nbsp;ОТКЛАДЫВАЮ ВАЖНЫЕ ДЕЛА НА&nbsp;ПОТОМ.<br>
		Под моим руководством более 400 сотрудников и&nbsp;19&nbsp;салонов в&nbsp;четырех городах России и&nbsp;это только начало , с&nbsp;2020 года мы&nbsp;ставим цель открывать по&nbsp;6&nbsp;салонов в&nbsp;год.<br>
		Достичь успеха&nbsp;&mdash; значит прийти к&nbsp;своей цели. Сейчас моя цель&nbsp;&mdash; стать лучшей сетью салонов красоты по&nbsp;России по&nbsp;критериям &laquo;количество/сервис/качество оказываемых услуг&raquo; с&nbsp;сохранением доступной цены для клиентов и&nbsp;идеальных условий для команды. Я&nbsp;развиваюсь в&nbsp;той сфере, которую отлично знаю и&nbsp;безмерно люблю, поэтому и&nbsp;новые вершины покоряю с&nbsp;удовольствием. В&nbsp;прошлом году мы&nbsp;получили признание в&nbsp;народной премии НГС и&nbsp;вошли в&nbsp;топ-10 лучших салонов красоты по&nbsp;версии читателей.<br>
		Моя работа&nbsp;&mdash; дело моей жизни. Но&nbsp;первостепенна для меня семья. Мое женское счастье&nbsp;&mdash; это мои дети, Макар и&nbsp;Варвара, и&nbsp;муж, с&nbsp;которым мы&nbsp;уже 13&nbsp;лет вместе. Семейное благополучие и&nbsp;общие интересы&nbsp;&mdash; то, что дарит мне гармонию&quot;.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/ganytdinova.png" alt="Мария Гайнутдинова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Мария <br>Гайнутдинова</div>
		<div class="speakers__post" data-post>Основатель аутсорсинговой компании GOYA Consulting</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Более 20 лет работы в сфере финансов</li>
		<li>Изучила и внедрила более 20 способов законного снижения налогов</li>
		<li>В своём инстаграм @mariya_gainutdinova рассказывает о налогах легко и просто</li>
		<li>Более 10 лет работы с крупными строительными и производственными компаниями</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/alonchikova.png" alt="Елена Алончикова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Елена <br>Алончикова</div>
		<div class="speakers__post" data-post>Исполнительный директор Synergy Speakers Agency</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Исполнительный директор Synergy Speakers Agency</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/troska.png" alt="Ирина Троска" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ирина <br>Троска</div>
		<div class="speakers__post" data-post>Операционный директор и&nbsp;директор по&nbsp;фитнесу X-Fit в&nbsp;России</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Более 20 лет опыта в открытии и управлении проектами фитнес-индустрии.</li>
		<li>Начав работать в 14 лет тренером групповых программ, уже к 21 стала фитнес-директором одной из международных сетей фитнес-клубов в России.</li>
		<li>Лектор конгрессов Fitness Expert, SNPro, FitHitCompany, MIOFF. Преподаватель MBA Intensive in Fitness в Государственном университете управления.</li>
		<li>В настоящий момент — операционный директор сети фитнес-клубов X-FIT (более 90 клубов, 8 000 сотрудников, 350 000 клиентов).</li>
		<li>Сегодня вместе с командой специалистов сфокусирована на развитии и разработке программ, направленных на восстановление ресурсов организма, укрепление иммунитета и поддержание баланса после пандемии.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/kasaticova.png" alt="Надежда Касатикова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Надежда <br>Касатикова</div>
		<div class="speakers__post" data-post>Основатель и&nbsp;CEO сети салонов ExpressNails&nbsp;&mdash; Brow&amp;Nail Company</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Выпускница Stanford MBA&rsquo; 05</li>
		<li>Основатель и&nbsp;CEO сети салонов ExpressNails&nbsp;&mdash; Brow&amp;Nail Company</li>
		<li>Основатель и&nbsp;CEO uNails&nbsp;&mdash; мобильное приложение uber Beauty услуг на&nbsp;дом</li>
		<li>Инноватор, которая привезла, внедрила и&nbsp;популяризировала концепт &laquo;Комплекс в&nbsp;4&nbsp;руки&raquo; в&nbsp;beauty индустрию России</li>
		<li>Автор бизнес марафона &laquo;Работа-это кайф&raquo;</li>
		<li>Автор бизнес марафона &laquo;Клиентская растяжка&raquo;</li>
		<li>Автор методики &laquo;Smart контракт&raquo; для увеличения эффективности сотрудников beauty сферы</li>
		<li>Автор и&nbsp;ведущая международного проекта Pro Beauty Business на&nbsp;YouTube канале&nbsp;&mdash; Надежда Касатикова ( Россия/Италия/Испания/Великобритания и&nbsp;др)</li>
		<li>Автор и&nbsp;ведущая проекта Pro Beauty Tour на&nbsp;You Tube канале Надежда Касатикова</li>
		<li>Эксперт beauty индустрии&nbsp;РФ и&nbsp;автор аудиторской системы анализа beauty Компаний и&nbsp;внедрению антикризисных мер</li>
		<li>Супруга длиною в&nbsp;23&nbsp;года и&nbsp;молодая мама очаровательных двух мальчишек!</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/lugovaya.png" alt="Наталья Луговая" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Наталья <br>Луговая</div>
		<div class="speakers__post" data-post>Сексолог</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Сексолог</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/shimanskaja.png" alt="Виктория Шиманская" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Виктория <br>Шиманская</div>
		<div class="speakers__post" data-post>Доктор психологии. Российский эксперт по развитию Эмоционального Интеллекта</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Доктор психологии. Российский эксперт по развитию Эмоционального Интеллекта</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/usupova.png" alt="Надежда Юсупова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Надежда <br>Юсупова</div>
		<div class="speakers__post" data-post>Fashion-эксперт. Дизайнер брендов Speranza Couture и&nbsp;Love Me. Владелица бутика Wedding Rooms</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Эксперт-практик в&nbsp;сфере fashion с&nbsp;опытом успешной работы более 10&nbsp;лет.</li>
		<li>Владелица бутика свадебных и&nbsp;вечерних платьев Wedding Rooms на&nbsp;Никольской, 10</li>
		<li>Победитель WEDDING Awards 2015</li>
		<li>Дизайнер премиального бренда свадебных и&nbsp;вечерних платьев Speranza Couture</li>
		<li>Хэдлайнер #MBFWRussia, Arab Fashion Week</li>
		<li>Победитель WEDDING Awards 2017, Arab Fashion Awards 2017, WHITE Wedding Awards 2017, 2019</li>
		<li>Дизайнер бренда современной женской одежды LOVE ME</li>
		<li>Идейный вдохновитель и&nbsp;основатель онлайн-школы в&nbsp;сфере обучения fashion-бизнесу</li>
		<li>Спикер Woman Who Matters 2018, 2019</li>
		<li>10&nbsp;000+ клиентов по&nbsp;всему миру</li>
		<li>100+ публикаций в&nbsp;СМИ</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/cruz.png" alt="Виктория Круз" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Виктория <br>Круз</div>
		<div class="speakers__post" data-post>Вице-президент по&nbsp;устойчивому развитию в&nbsp;Amilla Fushi на&nbsp;Мальдивах</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Вице-президент по&nbsp;устойчивому развитию в&nbsp;Amilla Fushi на&nbsp;Мальдивах</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/vinovaya.png" alt="Евгения Виновая" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Евгения <br>Виновая</div>
		<div class="speakers__post" data-post>Создатель уникального магазина для взрослых</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Создатель и&nbsp;владелица интим-бутика &laquo;Взрослые Люди&raquo; на&nbsp;Малой Бронной, включенного в&nbsp;список московских достопримечательностей и&nbsp;лучших мест для шоппинга.
		Первого магазина в&nbsp;отрасли, с&nbsp;которым сотрудничают звезды российской эстрады и&nbsp;кино, поэты и&nbsp;художники, где проводятся кино- и&nbsp;фото- съемки, художественные и&nbsp;фото- выставки, имеющие культурную и&nbsp;социальную для города ценность.</li>
		<li>&laquo;Запретную&raquo; тему успешно вывела в&nbsp;пространство здоровья и&nbsp;доверия, возведя до&nbsp;уровня искусства.</li>
		<li>В&nbsp;своем Инстаграм @vl_adults проводит эфиры с&nbsp;экспертами различных областей знаний, в&nbsp;том числе врачами (андрологами, сексологами, психологами, специалистами по&nbsp;телесности и&nbsp;телесным практикам), где с&nbsp;научной точки зрения освещает важные для интимного здоровья и&nbsp;жизни вопросы</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/vanakht.png" alt="Евгения Ванахт" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Евгения <br>Ванахт</div>
		<div class="speakers__post" data-post>Врач, писатель, сооснователь проекта франшиз Тренинговых Центров &laquo;Подари себе крылья&raquo;</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Врач, писатель, сооснователь проекта франшиз Тренинговых Центров &laquo;Подари себе крылья&raquo;</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/kadyr.png" alt="Айжан Кадыр" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Айжан <br>Кадыр</div>
		<div class="speakers__post" data-post>Коуч, сооснователь проекта франшизы Тренинговых Центров &laquo;Подари себе крылья&raquo;</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Коуч, сооснователь проекта франшизы Тренинговых Центров &laquo;Подари себе крылья&raquo;</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/bessonova.png" alt="Марина Бессонова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Марина <br>Бессонова</div>
		<div class="speakers__post" data-post>Нутрициолог, специалист по&nbsp;сбалансированному образу жизни</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Дипломированный нутрициолог, ФГБОУВО &laquo;Российский государственный социальный университет&raquo;, г. Москва</li>
		<li>Участник образовательной программы STANFORD UNIVERSITY &laquo;CHILD&nbsp;NUTRITUION AND COOKING&raquo;, США</li>
		<li>Сертифицированный участник образовательной программы ASSOCIATION OF&nbsp;NUTRITION &amp;&nbsp;DETOX COACHING</li>
		<li>Сертифицированный участник образовательных программ в&nbsp;Международном институте интегральной превентивной и&nbsp;антивозрастной медицины PreventAge, г. Москва</li>
		<li>Участник научно-практической конференции по&nbsp;диетологии и&nbsp;нутрициологии 2019&nbsp;г.</li>
		<li>Сертифицированный участник курса &laquo;Психология и&nbsp;психофизиология пищевого поведения&raquo;, Лицей &laquo;Ученый фитнес&raquo;, г. Москва</li>
		<li>Сертифицированный участник курсов &laquo;Основы биохимии&raquo;, &laquo;Питание беременных и&nbsp;кормящих&raquo; Владимира Сударева Академии РОСТФИТ</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/kuznetsova.png" alt="Юлия Кузнецова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Юлия <br>Кузнецова</div>
		<div class="speakers__post" data-post>Президент Ассоциации инвестиционных и&nbsp;финансовых советников фондового рынка. Основатель Международной академии инвестиций&nbsp;JK</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Self made вумен</li>
		<li>Экономист с&nbsp;20&nbsp;летним стажем в&nbsp;сфере управления финансами</li>
		<li>Специалист финансового рынка по&nbsp;брокерской, дилерской деятельности, деятельности по&nbsp;управлению ценными бумагами и&nbsp;инвестиционными фондами&nbsp;&mdash; аттестованный Центробанком РФ</li>
		<li>Квалифицированный инвестор-практик с&nbsp;опытом инвестирования 13&nbsp;лет</li>
		<li>Основатель единственной лицензированной Международной академии инвестиций JK</li>
		<li>Создатель уникальных авторских курсов по&nbsp;инвестированию, не&nbsp;имеющих аналогов, которые успешно окончили 10000 человек и&nbsp;научились зарабатывать от&nbsp;30&nbsp;до&nbsp;200% годовых в&nbsp;долларах</li>
		<li>Бизнес-аналитик, дипломированный Бизнес-коуч</li>
		<li>Супервизор института психоанализа</li>
		<li>Создала капитал с&nbsp;нуля до&nbsp;4&nbsp;млн долларов</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/kombarova.png" alt="Екатерина Комбарова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Екатерина <br>Комбарова</div>
		<div class="speakers__post" data-post>Основатель и&nbsp;дизайнер модного дома Maison Kaleidoscope, профессиональный художник</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Основатель и&nbsp;дизайнер модного дома Maison Kaleidoscope, профессиональный художник</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/o_moroz.png" alt="Ольга Мороз" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ольга <br>Мороз</div>
		<div class="speakers__post" data-post>Главный врач, соучредитель Клиники эстетической медицины Ольги Мороз</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Главный врач, соучредитель Клиники эстетической медицины Ольги Мороз</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/voinich.png" alt="Наталья Войнич" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Наталья <br>Войнич</div>
		<div class="speakers__post" data-post>Соосновательница Le Journal Intime</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Более 20 лет опыта в создании медицинского компрессионного белья.</li>
		<li>Имея образование в области медицины и клинической психологии в ___ году создала компанию NATIVE, ставшую одним из лидеров отрасли постоперационного белья. В 2015 компания получила «Национальный знак качества» в категории «Выбор России. Надежный Поставщик».</li>
		<li>В 2015 году вместе с сестрой, Татьяной Валентович, запустила бренд fashion-белья Le Journal Intime, в основе которого использовала разработки и материалы из направления компрессионного белья. Компания первой на российском рынке представила бюстгальтеры с поддержкой груди, которую обеспечивают уникальный крой и компрессионные свойства эластичных материалов.
		</li>
		<li>Le Journal Intime является постоянным участником международных и национальных профессиональных бельевых выставок. В этом году эксперты крупнейшей парижской выставки Salon International de la Lingerie уже третий раз отобрали изделия из новой коллекции для представления в рубрике Selection, куда приглашают бренды, задающие тренды бельевой индустрии.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/orlova_a.png" alt="Анетта Орлова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Анетта <br>Орлова</div>
		<div class="speakers__post" data-post>Психолог, основатель онлайн-школы по самооценке «Self-Evolution», радиоведущая, бизнес-тренер</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Психолог, кандидат социологических наук, основатель онлайн-школы по самооценке "Self-Evolution" , бизнес-тренер, радиоведущая, эксперт центрально ТВ, автор книг по психологии, колумнист Forbes, Snob, PeopleTalk, АИФ, и др., спикер крупных форумов, ведущая бизнес-тренингов</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/m_levchuk.png" alt="Мила Левчук" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Мила <br>Левчук</div>
		<div class="speakers__post" data-post>Педагог-психолог, автор уникальной методики психологии отношений и книг-бестселлеров</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Педагог-психолог, автор уникальной методики психологии отношений и книг-бестселлеров</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/m_klimenko.png" alt="Мила Клименко" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Мила <br>Клименко</div>
		<div class="speakers__post" data-post>Основатель Школы NIKK MOLE</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Основатель Школы NIKK MOLE и всех проектов под одноименным брендом. Звездный визажист, топ-стилист, бьюти-тренер. Автор легендарного продукта для оформления бровей Brow Paste и множества эксклюзивных техник работы в макияже и дизайне бровей. Создатель нескольких серий профессионального инструмента и косметических средств по торговой маркой NIKK MOLE. Жюри первого в России ТВ-шоу о макияже «Мейкаперы» на канале «Пятница!». Блогер с миллионной аудиторией подписчиков в Instagram. Спикер форумов по развитию личного бренда и успешному продвижению.
		Мила имеет высшее художественное образование и опыт в преподавании более 10 лет.
		</li>
		<li>Многократно выигрывала российские и международные чемпионаты в сфере красоты и визажа. Объездила полмира со своими мастер-классами. Ежегодно участвует в крупнейших бьюти-выставках в России и за рубежом.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/eka_bespyatih.png" alt="Екатерина Беспятых" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Екатерина <br>Беспятых</div>
		<div class="speakers__post" data-post>Международный эксперт по&nbsp;тайм-менеджменту для женщин. Основательница Академии женского развития Woman Time</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Международный эксперт по&nbsp;тайм-менеджменту для женщин</li>
		<li>Основательница Академии женского развития Woman Time</li>
		<li>Спикер Skolkovo, Crocus City Hall, Synergy Forum</li>
		<li>Руководитель проектов в&nbsp;Faberlic и&nbsp;социального проекта &laquo;Я-МАМА&raquo;</li>
		<li>Лауреат премий: Women Success Awards, Mama Club, Woman Who Matters, Национальной премии &laquo;День Матери в&nbsp;России&raquo;, Человек года, Moda Topical, Лучшие социальные проекты России</li>
		<li>Автор книги &laquo;Ресурсный тайм-менеджмент для женщин&raquo;</li>
		<li>Колумнист РБК, Космо, Harpers Bazar и&nbsp;др.</li>
		<li>Эксперт на&nbsp;радио и&nbsp;TV</li>
		<li>Жена, многодетная мама</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/dar_tulubenskaya.png" alt="Дарья Тулубенская" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Дарья <br>Тулубенская</div>
		<div class="speakers__post" data-post>Партнер, член Совета директоров InterSearch Global, руководитель карьерного проекта SmartTrek</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Партнер, член Совета директоров InterSearch Global, руководитель карьерного проекта SmartTrek. Руководит практиками fashion &amp;&nbsp;beauty retail, товары повседневного спроса (FMCG), спортивная индустрия и&nbsp;текстильная промышленность</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/yuli_durnova.png" alt="Юлия Дурнова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Юлия <br>Дурнова</div>
		<div class="speakers__post" data-post>Руководитель специальных проектов ООО СРТ</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Руководитель специальных проектов ООО СРТ</li>
		<li>ННГУ им. Н.И. Лобачевского, специальности биофизика и&nbsp;менеджмент организаций НИУ ВШЭ Президентская программа “Инновационный менеджмент”</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/artemev.png" alt="Сергей Артемьев" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Сергей <br>Артемьев</div>
		<div class="speakers__post" data-post>Трансформационный тренер, эксперт по&nbsp;работе сознания и&nbsp;обучению soft-skills</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Автор инновационной системы развития личности и&nbsp;метода быстрого восстановления психологической целостности &laquo;Техника Возврата Управления&raquo;</li>
		<li>Автор аккредитованных курсов повышения квалификации в&nbsp;области психологии и&nbsp;коммуникации. Обучил более 1500&nbsp;психологов, 150 спикеров</li>
		<li>Действительный член профессиональной психотерапевтической лиги</li>
		<li>Приглашенный эксперт на&nbsp;федеральных&nbsp;ТВ, корпоративных университетах крупнейших компаний и&nbsp;бизнес-сообществах</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/andreev.png" alt="Павел Андреев" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Павел <br>Андреев</div>
		<div class="speakers__post" data-post>Профессиональный астролог</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>11&nbsp;лет практики</li>
		<li>Создатель авторской методики обучения</li>
		<li>Более 104&nbsp;000 учеников по&nbsp;всему миру</li>
		<li>Автор 5&nbsp;книг-бестселлеров по&nbsp;астрологии</li>
		<li>Свыше 10&nbsp;000 проведенных консультаций, а&nbsp;среди клиентов самые успешные предприниматели и&nbsp;представители шоу-бизнеса.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/gildebrandt.png" alt="Ирина Гильдебрандт" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ирина <br>Гильдебрандт</div>
		<div class="speakers__post" data-post>Директор направления социально-экономических исследований Аналитического центра НАФИ</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Эксперт в&nbsp;сфере социально-экономических исследований, в&nbsp;том числе занимается активным развитием темы женского лидерства. Участница проекта-победителя &laquo;Стереотипы в&nbsp;отношении женщин&raquo; на&nbsp;международном конкурсе EQUALS in&nbsp;Tech 2020. Выпускница образовательной программы &laquo;Женщина-лидер&raquo; от&nbsp;Совета Евразийского женского форума в&nbsp;рамках президентской платформы &laquo;Россия&nbsp;&mdash; страна возможностей&raquo;.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/burashova.png" alt="Анна Бурашова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Анна <br>Бурашова</div>
		<div class="speakers__post" data-post>Главный редактор Marie Claire</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>25&nbsp;лет в&nbsp;профессии. Работала на&nbsp;телевидении в&nbsp;новостной и&nbsp;глянцевой журналистике. Прошла путь от&nbsp;кинообозревателя до&nbsp;главного редактора нескольких изданий.&nbsp;8&nbsp;лет занимается развитием проекта Marie Claire в&nbsp;России. Участвует в&nbsp;жюри различных премий Business Woman Award Veuve Clicquot, Save Russian Soul и&nbsp;др.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/vasilchenko.png" alt="Юрий Васильченко" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Юрий <br>Васильченко</div>
		<div class="speakers__post" data-post>Тренер компании &laquo;Альфа-Медика&raquo;</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Тренер компании &laquo;Альфа-Медика&raquo;</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/pisareva.png" alt="Ирина Писарева" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ирина <br>Писарева</div>
		<div class="speakers__post" data-post>Звездный нутрициолог. Спортивный диетолог. Член национальной ассоциации диетологов и&nbsp;нутрициологов.</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Звездный нутрициолог. Спортивный диетолог. Член национальной ассоциации диетологов и&nbsp;нутрициологов.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/shubina.png" alt="Виктория Шубина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Виктория <br>Шубина</div>
		<div class="speakers__post" data-post>Вице-президент Федерации Триатлона России</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Вице-президент Федерации Триатлона России</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/russka.png" alt="Анна Русска" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Анна <br>Русска</div>
		<div class="speakers__post" data-post>Продюсер, брендинг и&nbsp;маркетинг эксперт, издатель, инфлюенсер, основатель группы-компаний ANNARUSSKA Group</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Основатель группы-компаний ANNARUSSKA Group, в&nbsp;которую входят:</li>
		<li>&bull; Продюсерский центр по&nbsp;созданию и&nbsp;развитию брендов;</li>
		<li>&bull; Издательский дом: печатный журнал AR&nbsp;World Luxury Guide и&nbsp;новостной интернет-ресурс AR&nbsp;World Luxury Guide WWW.ANNARUSSKA.RU о&nbsp;премиальном стиле жизни и&nbsp;успешных людях;</li>
		<li>&bull; Медиа Продакшн-компания.</li>
		<li>В&nbsp;клиентский портфель компании входят такие мировые бренды, как: Damiani, Rolls Royce, Christian Dior Beauty, PIAGET, Carolina Herrera, Maserati, Bentley, R&eacute;my Martin и&nbsp;другие. </li>
		<li>Имея за&nbsp;спиной 10-летний опыт в&nbsp;продюсировании и&nbsp;развитии брендов, Анна выступает в&nbsp;качестве эксперта на&nbsp;крупных российских и&nbsp;международных форумах, проводит консультации топ директорам известных компаний и&nbsp;читает лекции по&nbsp;маркетингу и&nbsp;брендингу. </li>
		<li>На&nbsp;сегодняшний день Анна проконсультировала более 1000 компаний и&nbsp;создала более 20&nbsp;брендов, разрабатывала и&nbsp;реализовывала маркетинг- и&nbsp;PR стратегии для ведущих</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/sereda.png" alt="Ирина Середа" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ирина <br>Середа</div>
		<div class="speakers__post" data-post>Генеральный директор DIM&nbsp;в России. Инвестор, эксперт по&nbsp;личным финансам, наставник по&nbsp;созданию пассивного дохода</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/grishin.png" alt="Владислав Гришин" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Владислав <br>Гришин</div>
		<div class="speakers__post" data-post>Шеф-повар любительского направления крупнейшей в&nbsp;стране кулинарной школы Novikov School</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Специально для участниц Synergy Woman Forum Владислав проведет мастер-класс, на&nbsp;котором расскажет, как приготовить утиную грудку с&nbsp;пюре из&nbsp;корня сельдерея и&nbsp;черничным соусом и&nbsp;буррату с&nbsp;капонатой и&nbsp;соусом песто.</li>
		<li>Чтобы готовить вместе с&nbsp;шеф-поваром во&nbsp;время мастер-класса мы&nbsp;рекомендуем подготовить заранее все ингредиенты в&nbsp;соответствии с&nbsp;рецептами.</li>
		<li>УТИНАЯ ГРУДКА С&nbsp;ПЮРЕ ИЗ&nbsp;КОРНЯ СЕЛЬДЕРЕЯ И&nbsp;ЧЕРНИЧНЫМ СОУСОМ</li>
		<li>&bull; Утиная грудка 260&nbsp;г <br>
		&bull; Корень сельдерея 150&nbsp;г <br>
		&bull; Лук репчатый 50&nbsp;г <br>
		&bull; Масло Сливочное 50&nbsp;г <br>
		&bull; Соль, сахар, черный перец по&nbsp;вкусу  <br>
		&bull; Сливки&nbsp;33% 50&nbsp;г <br>
		&bull; Вино белое сухое 50&nbsp;г  <br>
		&bull; Черника с/м 50&nbsp;г <br>
		&bull; Лимон 50&nbsp;г <br>
		&bull; Чеснок 10&nbsp;г <br>
		&bull; Тимьян 10&nbsp;г </li>
		<li>БУРРАТА С&nbsp;КАПОНАТОЙ И&nbsp;СОУСОМ ПЕСТО</li>
		<li>&bull; Буррата 1&nbsp;шт  <br>
		&bull; Баклажаны 50&nbsp;г <br>
		&bull; Цукини 50&nbsp;г <br>
		&bull; Оливки Каламатта 40&nbsp;г  <br>
		&bull; Болгарский перец 50&nbsp;г  <br>
		&bull; Томаты в&nbsp;собственном соку 50&nbsp;г  <br>
		&bull; Оливковое масло 30&nbsp;г <br>
		&bull; Лук шалот 40&nbsp;г <br>
		&bull; Соль, сахар, чёрный перец по&nbsp;вкусу  <br>
		&bull; Базилик 100&nbsp;г <br>
		&bull; Кедровые орехи 40&nbsp;г  <br>
		&bull; Пармезан 40&nbsp;г  <br>
		&bull; Растительное масло 80&nbsp;г <br>
		&bull; Сок лимона 30&nbsp;г</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/shuppo.png" alt="Ольга Шуппо" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Ольга <br>Шуппо</div>
		<div class="speakers__post" data-post>Врач антивозрастной медицины, научный руководитель сети Grand Clinic</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/gorod.png" alt="Дарья Город" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Дарья <br>Город</div>
		<div class="speakers__post" data-post>Психолог, эзотерик, автор книги-бестселлера &laquo;Быть настоящей женщиной&raquo; и&nbsp;умных ежедневников</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/kozhokova.png" alt="Диана Кожокова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Диана <br>Кожокова</div>
		<div class="speakers__post" data-post>Директор Synergy Business Club</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/galtsova.png" alt="Лорелла Гальцова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Лорелла <br>Гальцова</div>
		<div class="speakers__post" data-post>Психолог, эксперт по&nbsp;отношениям, коуч, бизнес-леди</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Создала свою методику выстраивания счастливых и&nbsp;гармоничных отношений, которая показала максимальную эффективность.</li>
		<li>За&nbsp;последние 10&nbsp;лет с&nbsp;помощью Лореллы:</li>
		<li>Создано более 2500 счастливых семей</li>
		<li>Сохранено 370 союзов</li>
		<li>Более 15&nbsp;тысяч женщин и&nbsp;мужчин из&nbsp;27&nbsp;стран мира прошли курсы и&nbsp;консультации</li>
		<li>75+&nbsp;ее образовательных программ строятся на&nbsp;психологии нового счастливого поколения.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/avtandilyan.png" alt="Луиза Автандилян" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Луиза <br>Автандилян</div>
		<div class="speakers__post" data-post>Врач -стоматолог. Основатель и&nbsp;генеральный директор стоматологии и&nbsp;косметологии Smile Studio.</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Основатель и&nbsp;генеральный директор стоматологии и&nbsp;косметологии Smile Studio.</li>
		<li>Официальный партнёр и&nbsp;лицо компании Amazing White </li>
		<li>Автор и&nbsp;создатель онлайн&nbsp;&mdash; школы &laquo;Продвижение в&nbsp;Инстаграме&raquo; </li>
		<li>Член медицинского союза &laquo;Единство&raquo;</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/ershova.png" alt="Илоанга Ершова" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Илоанга <br>Ершова</div>
		<div class="speakers__post" data-post>Директор по&nbsp;развитию бизнеса Ozon</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/zolotukhina.png" alt="Елизавета Золотухина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Елизавета <br>Золотухина</div>
		<div class="speakers__post" data-post>Лайфстайл и&nbsp;тревел блогер @turbo.mama</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Лайфстайл и&nbsp;тревел блогер</li>
		<li>Спикер Synergy Global forum, городских мероприятий в&nbsp;Москве, Санкт-Петербурге</li>
		<li>Маркетолог, лауреат премии Successful Ladies Awards-2018&nbsp;в номинации &laquo;Лучший автор блога для мам&raquo;</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/muradyan.png" alt="Гагик Мурадян" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Гагик <br>Мурадян</div>
		<div class="speakers__post" data-post>Директор Synergy Business Regatta</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/surinovich.png" alt="Алёна Суринович" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Алёна <br>Суринович</div>
		<div class="speakers__post" data-post>Генеральный директор Lumene &amp;&nbsp;Cutrin</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/chekalina.png" alt="Валерия Чекалина" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Валерия <br>Чекалина</div>
		<div class="speakers__post" data-post>Блогер 9+ млн подписчиков, основательница компании Letique Cosmetics</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li>Блогер с&nbsp;многомиллионной аудиторией (9&nbsp;млн.), основательница косметического бренда LETIQUE, фитнес и&nbsp;денежного марафонов.</li>
		<li>Начиная свой путь в&nbsp;бизнесе с&nbsp;собственного опыта, Валерия сейчас делится с&nbsp;огромной аудиторией всеми ценными знаниями, которые смогла приобрести за&nbsp;годы своего развития.</li>
		<li>После родов Валерия, потеряв форму, стала заниматься спортом дома, отбирая правильные советы для себя самой, следила за&nbsp;питанием. Достигнув прекрасного результата, Лера поняла, что хочет нести это в&nbsp;массы, заряжая девушек пониманием, что если смогла она, то&nbsp;они тоже смогут. Так в&nbsp;ноябре 2017 года началась дорога к&nbsp;созданию собственного марафона Похудения, который сейчас является одним из&nbsp;крупнейших фитнес проектов в&nbsp;России&nbsp;&mdash; более 200 тыс клиентов за&nbsp;прошлый год. Отличительной чертой марафона является&nbsp;то, что Валерия сама показывает тренировки от&nbsp;и&nbsp;до, то&nbsp;есть тренируется &laquo;вместе со&nbsp;всеми&raquo;. Проходящих марафон Лера в&nbsp;том числе мотивирует подарками за&nbsp;упорство в&nbsp;достижении цели (от&nbsp;косметики и&nbsp;айфонов последней модели до&nbsp;автомобилей класса люкс).</li>
		<li>Ухаживая за&nbsp;собой, Валерия прибегала к&nbsp;помощи домашних средств, которые делала сама: &laquo;Я&nbsp;всегда любила создавать средства для ухода за&nbsp;телом в&nbsp;домашних условиях: смешивала скрабы, варила обертывания. У&nbsp;меня хорошо получалось и&nbsp;были рецепты, которыми я&nbsp;делилась с&nbsp;подругами&raquo;. Так у&nbsp;мужа Валерии Артема появилась мысль сделать целый бренд, чтобы не&nbsp;только друзья, но&nbsp;и&nbsp;весь мир мог узнать, что не&nbsp;обязательно платить огромные средства за&nbsp;косметику, чтобы выглядеть шикарно, как его жена. Так в&nbsp;декабре 2018 года появилась косметическая марка LETIQUE, которая сейчас насчитывает более 300 дистрибьютеров и&nbsp;90&nbsp;офлайн островков по&nbsp;РФ, Казахстану и&nbsp;Беларусии.&nbsp;4&nbsp;июля 2020 года бренд вышел на&nbsp;рынок Европы и&nbsp;США, в&nbsp;декабре 2020 года на&nbsp;рынок Китая, а&nbsp;в&nbsp;данный момент ребята плотно занимаются выходом на&nbsp;маркетплейсы. Общая выручка с&nbsp;офлайн и&nbsp;оптом составляет более 2,1 млрд руб.&nbsp;на&nbsp;российском рынке и&nbsp;более 1.5млн руб.&nbsp;на&nbsp;Западе.</li>
		<li>Набрав огромную популярность в&nbsp;Инстаграм, Валерия задумалась о&nbsp;том, что хочет пошагово показать людям, каким образом они могут зарабатывать больше и&nbsp;сделать свою жизнь такой&nbsp;же красивой, как в&nbsp;Инстаграме Лерчек. Так Валерия и&nbsp;Артем Чекалины запустили свой первый денежный марафон, мотивирующий людей зарабатывать больше и&nbsp;жить только той жизнью, которой они хотят. Сейчас марафон набирает стремительные обороты, собирает множество положительных отзывов и&nbsp;делает все больше людей счастливыми.</li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" data-fancybox>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/grazioza.png" alt="Виолетта Грациоза" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Виолетта <br>Грациоза</div>
		<div class="speakers__post" data-post>Основатель бренда, концепции	и&nbsp;студии лазерной эпиляции и&nbsp;аппаратной косметологии EgoEstetica Magic</div>
		<div class="speakers__desc" data-descr>
		<ul>
		<li></li>
		</ul>
		</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			


			
			
			<div class="speakers__col" data-more-hidden>
				
<div href="#popup-speaker" class="speakers__item" >
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/refill.png" alt="Панель спикеров продолжает пополняться" class="lazy">
	</div>
	<div class="speakers__info">
		
		<div class="speakers__name" data-name>Панель спикеров продолжает пополняться</div>
		<div class="speakers__post" data-post></div>
		<div class="speakers__desc" data-descr></div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>

			</div>
			
			
		</div>
		<button class="button speakers__more-btn" data-more-btn>Показать больше спикеров <img data-src="img/speakers/plus.png" alt="" class="lazy"></button>

		<a href="https://drive.google.com/drive/folders/12hy-Hb_FmtxJXQQTPKeEDTstjGdXCm9A?usp=sharing" class="button speakers__more-btn button_program" target="_blank">Получить программу форума</a>
	<?php } ?>

	</div>
</section>



    <?php if ($version != 'version2') { ?>
        
    <?php }?>
    
    <section class="place" id="place">
    <div class="container">
        <div class="place__inner">
            <div class="place__content">
                <h2 class="place__title title">Место проведения</h2>
                <p class="place__text">Vegas City Hall – это новое технологичное пространство на&nbsp;территории Crocus City для проведения мероприятий любого масштаба, дискуссионная площадка с&nbsp;современным звуковым и&nbsp;световым оборудованием. Здесь проходят знаковые культурные и&nbsp;бизнес-события.</p>
                <a href="https://yandex.ru/maps/-/CCUMI-QmGA" target="_blank"  class="place__button button">Посмотреть на карте</a>
            </div>
            <!-- <div class="place__statistics">
                <img src="img/place/statistics.png" alt="">
                <ul>
                    <li><span>10</span> лет</li>
                    <li><span>7000</span> человек</li>
                    <li><span>250</span> мероприятий</li>
                </ul>
            </div> -->
        </div>
    </div>
    <img data-src="img/place/place.jpg" alt="" class="place__img lazy">
    <img data-src="img/place/place-tab.jpg" alt="" class="place__img-tab lazy">
</section>
    <section class="broadcast">

    <div class="broadcast__side">
        <div class="container">
            <div class="broadcast__list">
                <div class="broadcast__item">
                    <span class="broadcast__item-count">>500</span>
                    <span class="broadcast__item-text strong__text">Спикеров<br> со&nbsp;всего мира</span>
                </div>
                <div class="broadcast__item">
                    <span class="broadcast__item-count">>50</span>
                    <span class="broadcast__item-text">Часов экспертного<br> контента</span>
                </div>
                <div class="broadcast__item">
                    <span class="broadcast__item-count">5</span>
                    <span class="broadcast__item-text">Сцен с&nbsp;онлайн-<br> трансляцией</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="broadcast__inner">
            <h2 class="broadcast__title title">Трансляция<br> на&nbsp;Synergy Online</h2>
            <div class="broadcast__content">
                <p class="broadcast__text big-text">Прямая онлайн-трансляция пройдет на&nbsp;платформе Synergy Online.
                    Уникальная цифровая платформа даст доступ к&nbsp;самому актуальному контенту, дополнительным
                    материалам от&nbsp;спикеров, записям всех форумов &laquo;‎Синергии&raquo; и&nbsp;полезным сервисам
                    для организации и&nbsp;оптимизации работы.</p>
                <p class="broadcast__text small-text">Еженедельно на&nbsp;Synergy Online проходят панельные дискуссии
                    на&nbsp;различные темы:от антикризисных решений для бизнеса до&nbsp;искусства и&nbsp;спорта.
                    Оформите подписку и&nbsp;оставайтесь в&nbsp;курсе на&nbsp;Synergy Online.</p>
            </div>

            <?php /* ?>
            <?php if ($version == 'version2') { ?>
            <div class="broadcast__form">
                
<form action="<?=$action?>&form=reg-form-version2" class="form form_discover">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Узнать подробности</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link-version2" type="submit">отправить</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

            </div>
            <?php } else { ?>

            <div class="broadcast__form">
                
<form action="<?=$action?>&form=reg-form" class="form form_discover">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Узнать подробности</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link" type="submit">отправить</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

            </div>
            <?php }?>
            <?php */ ?>


            <div class="broadcast__wrap">
                <div class="broadcast__block">
                    <h2 class="broadcast__title title">База знаний</h2>
                    <p class="broadcast__desc">Оформив подписку на&nbsp;Synergy.Online, вы&nbsp;получите доступ
                        к&nbsp;базе знаний, где собраны обучающие видео от&nbsp;ведущих экспертов России и&nbsp;мира.
                    </p>
                </div>
                <ul class="broadcast__info">
                    <li>Дополнительные материалы:<br> чек-листы, презентации</li>
                    <li>Онлайн-программы Школы<br> бизнеса &laquo;Синергия&raquo;</li>
                    <li>Просмотр на&nbsp;любых<br> устройствах<br> в&nbsp;HD-качестве</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="broadcast__side">
        <div class="container">
            <div class="broadcast__list">
                <div class="broadcast__item">
                    <span class="broadcast__item-count">500+</span>
                    <span class="broadcast__item-text strong__text">часов обучающих<br> видео</span>
                </div>
                <div class="broadcast__item">
                    <span class="broadcast__item-count">465</span>
                    <span class="broadcast__item-text strong__text">ведущих<br> бизнес-спикеров<br> планеты</span>
                </div>
                <div class="broadcast__item">
                    <span class="broadcast__item-count">10+</span>
                    <span class="broadcast__item-text strong__text">ключевых тем: от старта<br> бизнеса до личной<br>
                        эффективности</span>
                </div>
            </div>
        </div>
    </div>

</section>
    <section class="how" id="how">
    <div class="container">
        <h1 class="how__title title">Как это было?</h1>
        <div class="how__wrap">
            <a href="https://youtu.be/hh2nQBkQb44" class="how__video" data-fancybox>
                <img data-src="img/how/play.svg" alt="play-pic" class="how__video-play lazy">
            </a>
            <a href="https://youtu.be/47aX31dieEY" class="how__video" data-fancybox>
                <img data-src="img/how/play.svg" alt="play-pic" class="how__video-play lazy">
            </a>
        </div>
    </div>
</section>
    

<section class="partners" id="partners">
	<div class="container">
		<div class="partners__box">

			<div class="partners__subtitle title">Генеральный спонсор</div>
			<img src="img/partners/vtb.png" alt="" class="partners__img">

			<?php if ($version != 'stavropol') { ?>
			<div class="partners__subtitle title">Официальный партнер</div>
			<a href="https://safmarhotels.com/"><img src="img/partners/safmar.png" alt="" class="partners__img"></a>

			<div class="partners__subtitle title">Информационные партнеры</div>
			<div class="partners__items">
				
				<div class="partners__card">
					
						<img src="img/partners/strategy.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/business-excellence.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/pro-business.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/boss.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/cetre.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/psychologies.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/mir24.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/wday.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/romantika.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/ok.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/marie_claire.png" alt="" class="lazy">
					
				</div><!-- col -->
				
			</div><!-- row -->

			<h2 class="partners__title title">Партнеры</h2>
			<div class="partners__items">
				
				<div class="partners__card">
					<a href="https://theworldmag.com/" target="_blank">
						<img src="img/partners/world.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.samplesociety.ru/faq" target="_blank">
						<img src="img/partners/glambag.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.samplesociety.ru/faq" target="_blank">
						<img src="img/partners/glambox.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.xfit.ru" target="_blank">
						<img src="img/partners/xfit.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.authentica.love" target="_blank">
						<img src="img/partners/authentica.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.galladance.com" target="_blank">
						<img src="img/partners/galladance.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://braun-russia.ru" target="_blank">
						<img src="img/partners/braun.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://creamcheese.ru" target="_blank">
						<img src="img/partners/creamcheese.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://www.karatsc.ru" target="_blank">
						<img src="img/partners/karatsc.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://martori.ru/" target="_blank">
						<img src="img/partners/martori.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://lumene.ru" target="_blank">
						<img src="img/partners/lumene.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/moore.clinic/" target="_blank">
						<img src="img/partners/moore.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://elemis.ru" target="_blank">
						<img src="img/partners/elemis.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.erborian.ru" target="_blank">
						<img src="img/partners/erborian.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://asiatique.rest" target="_blank">
						<img src="img/partners/asiatique.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.ihg.com/intercontinental/hotels/ru/ru/maamunagau-island/mlemm/hoteldetail" target="_blank">
						<img src="img/partners/ihg.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://aldocoppola.ru/" target="_blank">
						<img src="img/partners/aldocoppola.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://mygenetics.ru" target="_blank">
						<img src="img/partners/genetics.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://silvashi.com/ " target="_blank">
						<img src="img/partners/silvashi.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://beautyboutiq.ru/" target="_blank">
						<img src="img/partners/beautyboutiq.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://tkbaikalaqua.com/" target="_blank">
						<img src="img/partners/baikal.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://synclear.ru/?utm_source=synergywoman&amp;utm_medium=logo&amp;utm_campaign=synergywoman.partner" target="_blank">
						<img src="img/partners/synclear.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.amilla.com/ru" target="_blank">
						<img src="img/partners/amilla.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/dessange.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://waterful.ru/en/ " target="_blank">
						<img src="img/partners/waterful.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://instagram.com/artfly_msk" target="_blank">
						<img src="img/partners/artfly.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://swisspharmcosmetics.com/" target="_blank">
						<img src="img/partners/swisspharmcosmetics.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://respace.su/?utm_medium=synergy_woman_forum" target="_blank">
						<img src="img/partners/respace.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://emvycosmetics.com/" target="_blank">
						<img src="img/partners/emvy.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://nadezhdayusupova.com/ " target="_blank">
						<img src="img/partners/nadezhdayusupova.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://lejournalintime.com/" target="_blank">
						<img src="img/partners/lejournalintime.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://mixit.ru/" target="_blank">
						<img src="img/partners/mixit.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/ganciarussia/" target="_blank">
						<img src="img/partners/ganciarussia.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://freeage.shop/" target="_blank">
						<img src="img/partners/freeage.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.volshebnitsa.ru/" target="_blank">
						<img src="img/partners/volshebnitsa.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://citynebo.com/" target="_blank">
						<img src="img/partners/citynebo.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://instagram.com/monideal_body?igshid=1bixpgcxg9j2" target="_blank">
						<img src="img/partners/monideal_body.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://instagram.com/monideal_clinic_?igshid=1ggdtpbv8hsjb" target="_blank">
						<img src="img/partners/monideal_clinic.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://xn--80aaa6bkfrbe5b.xn--p1ai/" target="_blank">
						<img src="img/partners/sahar.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://russequelle.ru/" target="_blank">
						<img src="img/partners/russequelle.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.bio-cera.ru/" target="_blank">
						<img src="img/partners/bio_cera.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.brandb24.ru/" target="_blank">
						<img src="img/partners/brandb24.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://shop.rivegauche.ru/search?text=naturalium" target="_blank">
						<img src="img/partners/naturalium.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://shop.rivegauche.ru/search?text=charles%20worthington" target="_blank">
						<img src="img/partners/worthington.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://shop.rivegauche.ru/search?text=st%20moriz" target="_blank">
						<img src="img/partners/moriz.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://maisonkaleidoscope.ru/" target="_blank">
						<img src="img/partners/maisonkaleidoscope.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://lila.moscow" target="_blank">
						<img src="img/partners/lila.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://avroraclinic.ru/" target="_blank">
						<img src="img/partners/avroraclinic.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/vl_adults/?hl=ru" target="_blank">
						<img src="img/partners/vl_adults.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://www.glowgo.ru/" target="_blank">
						<img src="img/partners/glowgo.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://youterra-aroma.ru/" target="_blank">
						<img src="img/partners/youterra.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://beautybash.ru/-brands" target="_blank">
						<img src="img/partners/beautybash.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://delfycosmetics.ru/" target="_blank">
						<img src="img/partners/delfycosmetics.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.jkmarafon.ru/" target="_blank">
						<img src="img/partners/jkmarafon.jpeg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/berlinki.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.russkart.com/" target="_blank">
						<img src="img/partners/rk.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/russequelle.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/grand-clinik.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://hvalwaters.ru/" target="_blank">
						<img src="img/partners/hval-waters.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://collagen-live.ru/" target="_blank">
						<img src="img/partners/collagen.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.bianca-city.ru/" target="_blank">
						<img src="img/partners/bianka.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/kasablanka.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.rendez-vous.ru/" target="_blank">
						<img src="img/partners/rendez-vous.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://supremebeauty.ru/products/miller-harris/" target="_blank">
						<img src="img/partners/miller-harris.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/the.moon.stones/ " target="_blank">
						<img src="img/partners/moin-stones.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://kevynaucoinbeauty.ru" target="_blank">
						<img src="img/partners/kevyn-aucoin.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.letu.ru/product/baldessarini-bella/95700033?srcid=cp_bella_april_2021&amp;utm_source=synergy-Direct&amp;utm_content=cp_bella_april_2021" target="_blank">
						<img src="img/partners/baldessarin.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://businessgolos.ru/" target="_blank">
						<img src="img/partners/golos.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/p/CGnj5H6ltzL/?igshid=1mxh0ma9880ny" target="_blank">
						<img src="img/partners/dushevno.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://platkinina.ru" target="_blank">
						<img src="img/partners/platkinina.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="http://fc8.ru/" target="_blank">
						<img src="img/partners/udacha.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://kinomax.ru/" target="_blank">
						<img src="img/partners/kinomax.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://eestetica.ru/" target="_blank">
						<img src="img/partners/eestetica.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://vassatrend.ru/" target="_blank">
						<img src="img/partners/vassatrend.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://alliance-rental.ru/  " target="_blank">
						<img src="img/partners/alliance-rental.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://maisonkaleidoscope.ru/" target="_blank">
						<img src="img/partners/president.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://www.instagram.com/722detailing/ " target="_blank">
						<img src="img/partners/detailing.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					
						<img src="img/partners/mett.png" alt="" class="lazy">
					
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://marutaka.ru/" target="_blank">
						<img src="img/partners/marutaka.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://cashmeremoscow.ru/" target="_blank">
						<img src="img/partners/cashmeremoscow.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://candelaclinic.ru/" target="_blank">
						<img src="img/partners/candelaclinic.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://faceplace.me/" target="_blank">
						<img src="img/partners/faceplace.png" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
				<div class="partners__card">
					<a href="https://prouve.ru/" target="_blank">
						<img src="img/partners/prouve.jpg" alt="" class="lazy">
					</a>
				</div><!-- col -->
				
			</div><!-- row -->

			<div class="partners__buttonbox">
				<a href="#popup-partner" class="partners__button button" data-fancybox>Стать партнером</a>
				<a href="#popup-accreditation" class="partners__button  partners__button_accreditation button" data-fancybox>Аккредитация СМИ</a>
			</div>
			<?php } ?>
			
		</div><!-- partners__box -->
	</div><!-- container -->
</section><!-- partners -->

    <section class="services">
    <div class="container">
        <div class="services__inner">
            <h2 class="services__title title">Сервисы <br>для предпринимателей</h2>
            <div class="services__wrap">
                <div class="services__slider">
                    <div class="services__item">
                        <img src="img/services/synergy-digital.svg" alt="">
                    </div>
                    <div class="services__item">
                        <img src="img/services/synergy-crm.svg" alt="">
                    </div>
                    <div class="services__item">
                        <img src="img/services/synergy-pay.svg" alt="">
                    </div>
                    <div class="services__item">
                        <img src="img/services/synergy-bot.svg" alt="">
                    </div>
                    <div class="services__item">
                        <img src="img/services/synergy-gt.svg" alt="">
                    </div>
                    <div class="services__item">
                        <img src="img/services/synergy-design.svg" alt="">
                    </div>
                </div>
                <div class="services__arrows slider-arrows"></div>
            </div>
        </div>
    </div>
</section>
    <section class="organizer" id="organizer">
    <div class="container">
        <div class="organizer__inner">
            <div class="organizer__top-content">
                <div class="organizer__side">
                    <h2 class="organizer__title title">Организатор</h2>
                    <p class="organizer__text big-text">Школа Бизнеса &laquo;Синергия&raquo; была основана в&nbsp;1988
                        году и&nbsp;является первой бизнес-школой в&nbsp;России и&nbsp;СНГ. На&nbsp;базе школы
                        проводится обучение по&nbsp;программам МВА и&nbsp;профессиональной переподготовки, семинары
                        и&nbsp;тренинги ведущих российских и&nbsp;мировых экспертов.</p>
                    <p class="organizer__text small-text">Качество образования в&nbsp;Школе Бизнеса отмечено
                        6&nbsp;престижными аккредитациями международной ассоциации AMBA. Школа Бизнеса
                        &laquo;Синергия&raquo; имеет филиалы за&nbsp;рубежом: в&nbsp;Нью-Йорке, Лондоне и&nbsp;Дубае,
                        где ведется обучение по&nbsp;Executive Education на&nbsp;английском языке.</p>
                </div>

                <div class="organizer__img">
                    <img data-src="img/organizer/pic-1.png" alt="" class="lazy">
                </div>

            </div>
        </div>
    </div>
    <?php if ($version != 'stavropol') { ?>
    <div class="organizer__bottom-content">
        <div class="container">
            <div class="organizer__subtitle">Франшиза Школы бизнеса &laquo;Синергия&raquo;</div>
            <div class="organizer__desc">Станьте лицом известного бренда<br> в&nbsp;сфере бизнес-образования</div>

            <div class="organizer__franchise">
                <div class="organizer__franchise-desc">
                    <p class="organizer__franchise-slim-text small-text">&laquo;Синергия&raquo;&nbsp;&mdash; организатор
                        масштабных бизнес-мероприятий в&nbsp;России и&nbsp;за&nbsp;рубежом. Среди наших
                        достижений&nbsp;&mdash; две записи в&nbsp;Книге рекордов Гиннесса и&nbsp;престижные
                        event-награды. Synergy Global Forum 2019 собрал на&nbsp;стадионе &laquo;Газпром Арена&raquo; 125
                        топовых спикеров и&nbsp;более 25&nbsp;000&nbsp;участников.</p>
                </div>

                <div class="organizer__franchise-numbs">
                    <div class="organizer__franchise-numbs-row">
                        <div class="organizer__franchise-numb organizer__franchise-numb_n1">
                            <span class="organizer__franchise-numb-text">Срок запуска</span>
                            <span class="organizer__franchise-numb-count">14 дней</span>
                        </div>

                        <div class="organizer__franchise-numb-separate"></div>

                        <div class="organizer__franchise-numb organizer__franchise-numb_n2">
                            <span class="organizer__franchise-numb-text">Плановая окупаемость</span>
                            <span class="organizer__franchise-numb-count">4 месяца</span>
                        </div>
                    </div>

                    <div class="organizer__franchise-numb organizer__franchise-numb_n3">
                        <span class="organizer__franchise-numb-text">Cтартовая стоимость франшизы</span>
                        <span class="organizer__franchise-numb-count">ОТ 250 000 РУБ.</span>
                    </div>
                    <a class="button organizer__franchise-btn" data-fancybox data-src="#popup-organizer">скачать
                        презентацию</a>
                </div>
            </div>

            <?php /* ?>
            <?php if ($version == 'version2') { ?>
            <div class="organizer__for">
                
<form action="<?=$action?>&form=reg-form-version2" class="form form_discover">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Узнать подробности</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link-version2" type="submit">отправить</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

            </div>

            <?php } else { ?>
            <div class="organizer__for">
                
<form action="<?=$action?>&form=reg-form" class="form form_discover">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Узнать подробности</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link" type="submit">отправить</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

            </div>
            <?php }?>
            <?php */ ?>

        </div>
    </div>
    <?php } ?>
</section>
    
    <section class="reviews">
    <div class="container">
        <div class="reviews__inner">
            <h2 class="reviews__title title">Отзывы</h2>

            <div class="reviews__list">
                <div class="reviews__item">
                    <img src="img/reviews/pic-1.png" alt="">
                </div>
                <div class="reviews__item">
                    <img src="img/reviews/pic-2.png" alt="">
                </div>
                <div class="reviews__item">
                    <img src="img/reviews/pic-3.png" alt="">
                </div>
                <div class="reviews__item">
                    <img src="img/reviews/pic-4.png" alt="">
                </div>
                <div class="reviews__item">
                    <img src="img/reviews/pic-5.png" alt="">
                </div>
                <div class="reviews__item">
                    <img src="img/reviews/pic-6.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
    
    <footer class="footer">
    <div class="container">
        <div class="footer__inner">

            <div class="footer__top">
                <div class="footer__logo">
                    <img src="img/footer/logo.svg" alt="">
                </div>
                <?php if ($version != 'stavropol') { ?>
                <ul class="footer__nav">
                    <li>
                        <a class="scroll" href="#about">О&nbsp;форуме</a>
                        <a class="scroll" href="#speakers">Спикеры</a>
                    </li>

                    <li>
                        <?php if ($version != 'version2') { ?>
                            <?php /* ?>
                            <a class="scroll" href="#price">Стоимость участия</a>
                            <?php */ ?>
                        <?php }?>
                        <a class="scroll" href="#place">Место проведения</a>
                    </li>
                    <li>
                        <a class="scroll" href="#how">Как это было?</a>
						<a class="scroll" href="#organizer">Организаторы</a>
                    </li>
                </ul>
                <?php } ?>
                <div class="footer__contacts">
                    <a class="footer__phone" href="tel:<?=$phone_link?>"> <?=$phone?> </a>
                    <a class="footer__mail" href="mailto:<?=$email?>"><span><?=$email?></span></a>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="footer__privacy">
                    <a class="fancybox-privacy-link footer__link" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru">Политика конфиденциальности</a>
                </div>

                <div class="footer__developer">
                    <span>Разработано и продвигается </span><a href="https://sydi.ru/" class="footer__link" target="_blank">Synergy Digital</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php } ?>

    </div>
    <div class="fixed hidden">
        <?php if ($version == 'version3') { ?>
            <a href="#price" class="fixed-button button scroll">Принять участие</a>
        <?php } else { ?>
            <a href="#popup-reg" class="fixed-button button" data-fancybox>Принять участие</a>
        <?php }?>
    </div>

    <div hidden>
        
<!-- POPUP-REG -->
<?php if ($version == 'version2') { ?>
<div class="popup popup-reg" id="popup-reg">
    
<form action="<?=$action?>&form=reg-form-version2" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Регистрация на&nbsp;форум</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link-version2" type="submit">Участвовать</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

</div>

<?php } else { ?>
<div class="popup popup-reg" id="popup-reg">
    
<form action="<?=$action?>&form=reg-form" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Регистрация на&nbsp;форум</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link" type="submit">Участвовать</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

</div>

<?php }?>

<div class="popup popup-reg" id="popup_req_price">
    
<form action="<?=$action?>&form=popup_req_price" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Регистрация на&nbsp;форум</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button button-link-version4" type="submit">Участвовать</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

</div>

<div class="popup popup-reg" id="popup-partner">
    
<form action="<?=$action?>&form=" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Стать партнером форума</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button " type="submit">Зарегистрироваться</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

</div>

<div class="popup popup-reg" id="popup-organizer">
    
<form action="<?=$action?>&form=" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Узнать более подробно</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button " type="submit">Отправить заявку</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

</div>

<!-- POPUP-SPEAKER -->

<div class="popup popup-speaker" id="popup-speaker">
    <div class="popup-speaker__box">

        <div class="popup-speaker__card">
            <div class="popup-speaker__card-wrapper">
                <div class="popup-speaker__card-photo" data-image><img src="img/speakers/card/uzerli.png" alt=""></div>
                <div>
                    <div class="popup-speaker__card-name title" data-name></div>
                    <div class="popup-speaker__card-post small-text" data-post></div>
                </div>
            </div>
            <div class="popup-speaker__card-post popup-speaker__card-mobile small-text " data-post></div>
        </div>

        <div class="popup-speaker__content">
            <div class="popup-speaker__form">
                <?php /* ?>
                
<form action="<?=$action?>&form=reg" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Регистрация на&nbsp;форум</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button " type="submit">купить</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>

                <?php */ ?>
            </div>
            <div class="popup-speaker__info" data-descr></div>
        </div>

    </div>
</div>

<!-- POPUP-PRICE -->

<div class="popup-price" id="popup-price">
    <div class="popup-price__inner">
        <div class="popup-price__name" js-package></div>
        <div class="popup-price__price" js-cost></div>

        <form action="<?=$action?>&unit=synergy&form=reg&callbackSuccess=<?=$callbackSuccess?>" class="form form_vertical">
            <div class="form__wrapper">
                <div class="popup-price__close-btn" data-fancybox-close>
                    <img src="img/popups/close-btn.svg" alt="icon">
                </div>
                <div class="form__title">Пожалуйста, зарегистрируйтесь</div>
                <div class="form__items">
                    <div class="form__item form__item_text ">
                        <input name="name" type="text" placeholder="Имя" class="form__input" tabindex="1" required>
                    </div><!-- form__item -->
                    <div class="form__item form__item_text ">
                        <input name="phone" type="text" placeholder="Телефон" class="form__input" tabindex="2" required>
                    </div><!-- form__item -->
                    <div class="form__item form__item_email ">
                        <input name="email" type="email" placeholder="Эл.почта" class="form__input" tabindex="3"
                            required>
                    </div><!-- form__item -->

                    <div class="form__item form__item_tab-text">
                        Количество билетов
                    </div><!-- form__item -->
                    <div class="form__item form__item_tab">
                        <input type="number" name="tickets_count" class="form__input" tabindex="4" min="1" value="1">
                    </div><!-- form__item -->

                    <div class="form__item form__item_button"><button class="form__button button"
                            type="submit">Зарегистрироваться</button>
                    </div>
                </div><!-- form__items -->
                <div class="form__more">
                    <label class="form__footer ">
                        <div class="form__footer-checkbox">
                            <input type="checkbox" name="personalDataAgree2" checked>
                            <div class="form__footer-checkbox-icon"></div>
                        </div>
                        <div class="form__footer-text">
                            Я&nbsp;соглашаюсь с <a href="#privacy" class="fancybox form__more-link"> политикой конфиденциальности</a> и&nbsp;условиями обработки персональных данных
                        </div>
                    </label>
                </div>
                <input type="hidden" name="product_id" value="">
                <input type="hidden" name="quote_id" value="">
                <input type="hidden" name="partner" value="">
                <input type="hidden" name="unit" value="">
                <input type="hidden" name="type" value="">
                <input type="hidden" name="land" value="">
                <input type="hidden" name="event_id" value="">
                <input type="hidden" name="form" value="">

				<?php if ($version == 'version4') { ?>
				    <input type="hidden" name="discount" value="50"> 
                    <input name="promocode" type="hidden" value="woman_sale50">
				<?php }?>

            </div>
        </form>
    </div>
</div>

<!-- MOBILE-MENU -->

<div class="popup mobile-menu" id="mobile-menu">
    <div class="container">
        <div class="mobile-menu__inner">
            <div class="mobile-menu__header">
                <div class="mobile-menu__logo">
                    <img class="" src="img/popups/logo-popup.svg" alt="Synergy">
                </div>
            </div>
            <ul class="mobile-menu__list">
                <li><a class="scroll" href="#about">О форуме</a></li>
                <li><a class="scroll" href="#speakers">Спикеры</a></li>
                <li><a class="scroll" href="#price">Стоимость участия</a></li>
                <li><a class="scroll" href="#place">Место проведения</a></li>
                <li><a class="scroll" href="#how">Как это было?</a></li>
                <li><a class="scroll" href="#organizer">Организаторы</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="popup-accreditation" id="popup-accreditation">
    <div class="popup-accreditation__title">Запрос <br>на&nbsp;аккредитацию СМИ присылать на&nbsp;почту</div>
    <div class="popup-accreditation__text">
        <p>Эльмира Гулиева&nbsp;&mdash; <br><b><a href="mailto:EGulieva@synergypress.ru">EGulieva@synergypress.ru</a></b></p>
        <p>Решение о&nbsp;предоставлении аккредитации будет направлено Вам на&nbsp;почту.</p>
    </div>
</div>

    </div>

    <!-- Плагины и хелперы -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js"></script>

    <script src="js/script.js"></script>

    <script src="https://js.stripe.com/v3/"></script>

    <script src="https://syn.su/js/lander.js" defer></script>

</body>
</html>
