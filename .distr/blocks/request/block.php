<section class="request">
    <div class="container">
        <div class="request__inner">
            <?php if ($version == 'version2') { ?>
            <div class="request__form">
                {{ form.form( 'reg-form-version2', button_class='button-link-version2', title='<span>Регистрация<br> на&nbsp;форум</span> <span>Регистрация на&nbsp;форум</span>', form_class='form_gold', button='Зарегистрироваться') }}
            </div>
            <?php } else { ?>
            <div class="request__form">
                {{ form.form( 'reg-form', title='<span>Регистрация<br> на&nbsp;форум</span> <span>Регистрация на&nbsp;форум</span>', form_class='form_gold', button='Зарегистрироваться', button_class='button-link') }}
            </div>
            <?php }?>
        </div>
    </div>
</section>