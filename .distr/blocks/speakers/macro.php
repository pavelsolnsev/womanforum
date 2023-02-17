{% from './data.php' import data as speakers, speakers_stavropol as speakers_stavropol %}
{% set flag = true %} {# Флаг для рендера заголовка для спикеров один раз #}


{% macro block() %}
<section class="speakers" id="speakers">
	<div class="container">

	<?php if ($version == 'stavropol') { ?>

		<div class="speakers__content">
		<h2 class="speakers__title title">Спикеры форума</h2>
		{% for item in speakers_stavropol %}
			<div class="speakers__col">
				{{ card(item) }}
			</div>
		{% endfor %}

	<?php } else { ?>

		<h2 class="speakers__title title speakers__title-head">Хедлайнер</h2>
		<div class="speakers__content" data-more-options='{"target":".speakers__col", "init":7, "inittablet":3, "initmobile":3, "desktop":3, "tablet":3, "mobile":3}'>
			{% for item in speakers %}


			{% if item.headliner %}
			<div class="speakers__col headliner" data-more-hidden>
				{{ card(item) }}
			</div>

			{% if flag %}
			<h2 class="speakers__title title">Спикеры форума</h2>
			{% set flag = false %}
			{% endif %}

			{% endif %}
			{% if not item.headliner %}
			<div class="speakers__col" data-more-hidden>
				{{ card(item) }}
			</div>
			{% endif %}
			{% endfor %}
		</div>
		<button class="button speakers__more-btn" data-more-btn>Показать больше спикеров <img data-src="img/speakers/plus.png" alt="" class="lazy"></button>

		<a href="https://drive.google.com/drive/folders/12hy-Hb_FmtxJXQQTPKeEDTstjGdXCm9A?usp=sharing" class="button speakers__more-btn button_program" target="_blank">Получить программу форума</a>
	<?php } ?>

	</div>
</section>
{% endmacro %}

{% macro card(item) %}
<div href="#popup-speaker" class="speakers__item" {% if item.descr %}data-fancybox{% endif %}>
	<div class="speakers__photo" data-image>
		<img data-src="img/speakers/card/{{ item.id }}.png" alt="{{ item.name | striptags }}" class="lazy">
	</div>
	<div class="speakers__info">
		{% if item.video %}
		<a href="{{ item.video }}" target="_blank" data-fancybox class="speakers__video">Смотреть видео-приглашение</a>
		{% endif %}
		<div class="speakers__name" data-name>{{ item.name | safe }}</div>
		<div class="speakers__post" data-post>{{ item.post | safe }}</div>
		<div class="speakers__desc" data-descr>{{ item.descr | safe }}</div>
		<a class="speakers__button button">Подробнее о&nbsp;спикере</a>
	</div>
</div>
{% endmacro %}