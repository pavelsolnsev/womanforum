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

{# Блок для переопределения php-переменных версий на отдельных страницах в pages #}
{% block version %}{% endblock %}

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
<body class="<?= $version ? 'version-' . $version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?>{{ thanks_class }} {{ price_class }}">

    <!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?=$GTM?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->

    <!-- Facebook Pixel Code --><noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=441284739782630&ev=PageView&noscript=1"/></noscript><!-- End Facebook Pixel Code -->

    <?php if ($version == 'stavropol') { ?>
        <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1005515-cTvnN" style="position:fixed; left:-999px;" alt=""/></noscript>
    <?php } ?>

    {% import 'form/macro.php' as form %}

    <div class="wrapper">
        {% block blocks %}
        {% endblock %}
    </div>
    <div class="fixed hidden">
        <?php if ($version == 'version3') { ?>
            <a href="#price" class="fixed-button button scroll">Принять участие</a>
        <?php } else { ?>
            <a href="#popup-reg" class="fixed-button button" data-fancybox>Принять участие</a>
        <?php }?>
    </div>

    <div hidden>
        {% block popups %}
        {% endblock %}
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
