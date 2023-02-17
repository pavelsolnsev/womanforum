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
                {{ form.form( 'reg-form-version2', form_class='form_vertical', title='Регистрация на&nbsp;форум', button_class='button-link-version2') }}
                <?php */ ?>
            </div>
            <?php } else { ?>
            <div class="main__form">
                <?php /* ?>
                {{ form.form( 'reg-form', form_class='form_vertical', title='Регистрация на&nbsp;форум', button='Зарегистрироваться', button_class='button-link') }}
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