{% from './data.php' import partners as partners,  partners_1 as partners_1 %}

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
				{% for item in partners_1 %}
				<div class="partners__card">
					{% if item.href %}<a href="{{ item.href }}" target="_blank">{% endif %}
						<img src="img/partners/{{ item.image }}" alt="" class="lazy">
					{% if item.href %}</a>{% endif %}
				</div><!-- col -->
				{% endfor %}
			</div><!-- row -->

			<h2 class="partners__title title">Партнеры</h2>
			<div class="partners__items">
				{% for item in partners %}
				<div class="partners__card">
					{% if item.href %}<a href="{{ item.href }}" target="_blank">{% endif %}
						<img src="img/partners/{{ item.image }}" alt="" class="lazy">
					{% if item.href %}</a>{% endif %}
				</div><!-- col -->
				{% endfor %}
			</div><!-- row -->

			<div class="partners__buttonbox">
				<a href="#popup-partner" class="partners__button button" data-fancybox>Стать партнером</a>
				<a href="#popup-accreditation" class="partners__button  partners__button_accreditation button" data-fancybox>Аккредитация СМИ</a>
			</div>
			<?php } ?>
			
		</div><!-- partners__box -->
	</div><!-- container -->
</section><!-- partners -->
