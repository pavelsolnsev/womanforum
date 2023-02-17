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