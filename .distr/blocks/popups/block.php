<!-- POPUP-REG -->
<?php if ($version == 'version2') { ?>
<div class="popup popup-reg" id="popup-reg">
    {{ form.form( 'reg-form-version2', form_class='form_vertical', title='Регистрация на&nbsp;форум', button_class='button-link-version2') }}
</div>

<?php } else { ?>
<div class="popup popup-reg" id="popup-reg">
    {{ form.form( 'reg-form', form_class='form_vertical', title='Регистрация на&nbsp;форум', button_class='button-link') }}
</div>

<?php }?>

<div class="popup popup-reg" id="popup_req_price">
    {{ form.form( 'popup_req_price', form_class='form_vertical', title='Регистрация на&nbsp;форум', button_class='button-link-version4') }}
</div>

<div class="popup popup-reg" id="popup-partner">
    {{ form.form( form_class='form_vertical', title='Стать партнером форума', button='Зарегистрироваться') }}
</div>

<div class="popup popup-reg" id="popup-organizer">
    {{ form.form( form_class='form_vertical', title='Узнать более подробно', button='Отправить заявку') }}
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
                {{ form.form( 'reg', form_class='form_vertical', title='Регистрация на&nbsp;форум', button='купить') }}
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