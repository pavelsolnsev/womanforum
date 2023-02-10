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
        
	
	

<section class="price" id="price">
	<div class="container">

		<div class="price__title title">
			
			Чтобы завершить регистрацию, <br>выберите пакет участия
			
		</div><!-- price__title -->

		<div class="price__general">
			<div class="price__box">

				
				<?php
				$price_card_attr = "href='#popup-price' js-payment data-productId='70114188' data-quote_id='$quote_id_online' data-unit='$unit_price' data-type='$type_price_online' data-land='$land' data-event-id='' data-form-type='$form_type_price_online'";

				/*if ($version == 'version3' || $version == 'version4') {
					$price_card_attr = 'href="#popup_req_price" data-fancybox';
				}*/
				?>
				<div class="price-card " id="price-online-translation" <?= $price_card_attr ?> >
					<div class="price-card__inner">
						<div class="price-card__header">
							<div class="price-card__header-name">
								Онлайн-трансляция
								
								&mdash;<br>
								<span class="price-card__header-sale"><?= $online_sale ?></span>
								<span class="price-card__header-pricesale"><?= $online_price ?> руб.</span>
								
							</div><!-- price-card__header-name -->
							<div class="price-card__header-price "></div>
						</div><!-- price-card__header -->
						<div class="price-card__wrap">
							<div class="price-card__list">
    <ul>
    <li><span>Подключение к&nbsp;форуму в&nbsp;режиме онлайн</span></li>
    </ul>
    </div>
							<ul class="price-card__shedule">
								
								
							</ul>
							<div class="price-card__button button">Купить</div>
						</div><!-- price-card__wrap -->
					</div><!-- price-card__inner -->
				</div><!-- price-card -->
				
				<?php
				$price_card_attr = "href='#popup-price' js-payment data-productId='78450250' data-quote_id='$quote_id_ticket' data-unit='$unit_price' data-type='$type_price' data-land='$land' data-event-id='$event_id' data-form-type='$form_type_price_ticket'";

				/*if ($version == 'version3' || $version == 'version4') {
					$price_card_attr = 'href="#popup_req_price" data-fancybox';
				}*/
				?>
				<div class="price-card " id="price-standart" <?= $price_card_attr ?> >
					<div class="price-card__inner">
						<div class="price-card__header">
							<div class="price-card__header-name">
								Билет «Standart»
								
								&mdash;<br>
								<span class="price-card__header-sale"><?= $standart_sale ?></span>
								<span class="price-card__header-pricesale"><?= $standart_price ?> руб.</span>
								
							</div><!-- price-card__header-name -->
							<div class="price-card__header-price "></div>
						</div><!-- price-card__header -->
						<div class="price-card__wrap">
							<div class="price-card__list">
    <ul>
    <li><span>Аккредитация в&nbsp;зоне &laquo;Standart&raquo;</span></li>
    <li><span>Пакет участника</span></li>
    <li><span>Презентации спикеров</span></li>
    </ul>
    </div>
							<ul class="price-card__shedule">
								
								
							</ul>
							<div class="price-card__button button">Купить</div>
						</div><!-- price-card__wrap -->
					</div><!-- price-card__inner -->
				</div><!-- price-card -->
				
				<?php
				$price_card_attr = "href='#popup-price'  data-productId='70114169' data-quote_id='$quote_id_ticket' data-unit='$unit_price' data-type='$type_price' data-land='$land' data-event-id='$event_id' data-form-type='$form_type_price_ticket'";

				/*if ($version == 'version3' || $version == 'version4') {
					$price_card_attr = 'href="#popup_req_price" data-fancybox';
				}*/
				?>
				<div class="price-card price-card_soldout" id="price-econom" <?= $price_card_attr ?> >
					<div class="price-card__inner">
						<div class="price-card__header">
							<div class="price-card__header-name">
								Билет «Comfort»
								
							</div><!-- price-card__header-name -->
							<div class="price-card__header-price "></div>
						</div><!-- price-card__header -->
						<div class="price-card__wrap">
							<div class="price-card__list">
    <ul>
    <li><span>Аккредитация в&nbsp;зоне &laquo;Comfort&raquo;</span></li>
    <li><span>Пакет участника</span></li>
    <li><span>Презентации спикеров</span></li>
    </ul>
    </div>
							<ul class="price-card__shedule">
								
								
							</ul>
							<div class="price-card__button button">Sold Out</div>
						</div><!-- price-card__wrap -->
					</div><!-- price-card__inner -->
				</div><!-- price-card -->
				
				<?php
				$price_card_attr = "href='#popup-price' js-payment data-productId='70114170' data-quote_id='$quote_id_ticket' data-unit='$unit_price' data-type='$type_price' data-land='$land' data-event-id='$event_id' data-form-type='$form_type_price_ticket'";

				/*if ($version == 'version3' || $version == 'version4') {
					$price_card_attr = 'href="#popup_req_price" data-fancybox';
				}*/
				?>
				<div class="price-card " id="price-business" <?= $price_card_attr ?> >
					<div class="price-card__inner">
						<div class="price-card__header">
							<div class="price-card__header-name">
								Билет «BUSINESS»
								
								&mdash;<br>
								<span class="price-card__header-sale"><?= $business_sale ?></span>
								<span class="price-card__header-pricesale"><?= $business_price ?> руб.</span>
								
							</div><!-- price-card__header-name -->
							<div class="price-card__header-price "></div>
						</div><!-- price-card__header -->
						<div class="price-card__wrap">
							<div class="price-card__list">
    <ul>
    <li><span>Аккредитация в&nbsp;зоне BUSINESS</span></li>
    <li><span>Пакет участника</span></li>
    <li><span>Презентации спикеров</span></li>
    <li><span>Подарки от&nbsp;партнеров</span></li>
    <li><span>Онлайн-курс Евгении Линович &laquo;Успешный fashion-бренд&raquo;</span></li>
    </ul>
    </div>
							<ul class="price-card__shedule">
								
								
							</ul>
							<div class="price-card__button button">Купить</div>
						</div><!-- price-card__wrap -->
					</div><!-- price-card__inner -->
				</div><!-- price-card -->
				
				<?php
				$price_card_attr = "href='#popup-price'  data-productId='70114176' data-quote_id='$quote_id_ticket' data-unit='$unit_price' data-type='$type_price' data-land='$land' data-event-id='$event_id' data-form-type='$form_type_price_ticket'";

				/*if ($version == 'version3' || $version == 'version4') {
					$price_card_attr = 'href="#popup_req_price" data-fancybox';
				}*/
				?>
				<div class="price-card price-card_soldout" id="price-vip" <?= $price_card_attr ?> >
					<div class="price-card__inner">
						<div class="price-card__header">
							<div class="price-card__header-name">
								Билет «VIP»
								
							</div><!-- price-card__header-name -->
							<div class="price-card__header-price price-card__price_small"></div>
						</div><!-- price-card__header -->
						<div class="price-card__wrap">
							<div class="price-card__list">
    <ul>
    <li><span>Аккредитация в&nbsp;зоне &laquo;VIP&raquo; (партер)</span></li>
    <li><span>Пакет участника</span></li>
    <li><span>Презентации спикеров</span></li>
    <li><span>Подарки от&nbsp;партнеров</span></li>
    <li><span>Доступ к&nbsp;записи форума</span></li>
    <li><span>Онлайн-курс Екатерины Одинцовой &laquo;Как создать PR-агентство с&nbsp;нуля &amp;&nbsp;секреты эффективного пиара&raquo;</span></li>
    </ul>
    </div>
							<ul class="price-card__shedule">
								
								
							</ul>
							<div class="price-card__button button">Sold Out</div>
						</div><!-- price-card__wrap -->
					</div><!-- price-card__inner -->
				</div><!-- price-card -->
				
				<?php
				$price_card_attr = "href='#popup-price' js-payment data-productId='70114178' data-quote_id='$quote_id_ticket' data-unit='$unit_price' data-type='$type_price' data-land='$land' data-event-id='$event_id' data-form-type='$form_type_price_ticket'";

				/*if ($version == 'version3' || $version == 'version4') {
					$price_card_attr = 'href="#popup_req_price" data-fancybox';
				}*/
				?>
				<div class="price-card " id="price-platinum" <?= $price_card_attr ?> >
					<div class="price-card__inner">
						<div class="price-card__header">
							<div class="price-card__header-name">
								Билет «PLATINUM»
								
								&mdash;<br>
								<span class="price-card__header-sale"><?= $platinum_sale ?></span>
								<span class="price-card__header-pricesale"><?= $platinum_price ?> руб.</span>
								
							</div><!-- price-card__header-name -->
							<div class="price-card__header-price price-card__price_small"></div>
						</div><!-- price-card__header -->
						<div class="price-card__wrap">
							<div class="price-card__list">
    <ul>
    <li><span>Аккредитация в&nbsp;зоне &laquo;PLATINUM&raquo; (партер 1-3&nbsp;ряд)</span></li>
    <li><span>Пакет участника</span></li>
    <li><span>Презентации спикеров</span></li>
    <li><span>Подарки от&nbsp;партнеров</span></li>
    <li><span>Доступ к&nbsp;записи форума</span></li>
    <li><span>Доступ на&nbsp;платформу synergy.online&nbsp;&mdash; категория Gold</span></li>
    <li><span>Книга из&nbsp;Synergy Store</span></li>
    <li><span>Участие в&nbsp;автограф-сессиях и&nbsp;фото-сессиях со&nbsp;спикерами</span></li>
    <li><span>Ужин со&nbsp;спикерами</span></li>
    <li><span>Персональный ассистент</span></li>
    </ul>
    </div>
							<ul class="price-card__shedule">
								
								
							</ul>
							<div class="price-card__button button">Купить</div>
						</div><!-- price-card__wrap -->
					</div><!-- price-card__inner -->
				</div><!-- price-card -->
				

			</div><!-- price__box -->
			<div class="price__arrows slider-arrows"></div>
		</div><!-- price__general -->

	</div><!-- container -->
</section><!-- price -->


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
