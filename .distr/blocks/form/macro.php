{% macro form(form, form_class='', title_class='', button_class='', title='', button='Участвовать', form_text='', add_fields, exclude_fields) %}
<form action="<?=$action?>&form={{ form }}" class="form {{form_class}}">
    <div class="form__wrapper">
        {% if title.length %}
        <h3 class="form__title {{ title_class }}">{{ title | safe }}</h3>
        {% endif %}

        {% if form_text.length %}
        <div class="form__text">{{ form_text | safe }}</div>
        {% endif %}

        <div class="form__items">
            {% if not exclude_fields.name %}
            {{ form_item( 'name', 'text', 'Имя', true ) }}
            {% endif %}

            {% if not exclude_fields.phone %}
            {{ form_item( 'phone', 'text', 'Телефон', true ) }}
            {% endif %}

            {% if not exclude_fields.email %}
            {{ form_item( 'email', 'email', 'E-mail', true ) }}
            {% endif %}

            {% if add_fields.length %}
            {% for item in add_fields %}
            {{ form_item( item.name, item.type, item.placeholder, item.required, item.value ) }}
            {% endfor %}
            {% endif %}

            <div class="form__item form__item_button"><button class="form__button button {{ button_class }}" type="submit">{{ button }}</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer {{ form__footer_class }}">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon"></div>
                </div>
                <div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="fancybox-privacy-link form__more-link">политикой конфиденциальности</a>, условиями обработки персональных данных и <a href="doc/oferta.pdf" target="_blank" class="fancybox form__more-link">условиями оферты</a></div>
            </label>
        </div>
    </div>
</form>
{% endmacro %}

{% macro form_item(name, type, placeholder, required, value) %}
<div class="form__item form__item_{{ type }} {{ 'd-none' if type == 'hidden' }}">
    {% if type == 'textarea' %}
    <textarea name="{{ name }}" placeholder="{{ placeholder }}" class="form__input form__input_textarea" {{ 'required' if required }}></textarea>
    {% else %}
    <input name="{{ name }}" type="{{ type }}" placeholder="{{ placeholder }}" class="form__input" {{ 'min=1' if type == 'number' }} {{ 'required' if required }} value="{{ value }}">
    {% endif %}
</div><!-- form__item -->
{% endmacro %}