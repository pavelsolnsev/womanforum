{% from './data.php' import data as pricecard %}

<section class="price" id="price">
	<div class="container">

		<div class="price__title title">
			{% if price or pricesale %}
			Чтобы завершить регистрацию, <br>выберите пакет участия
			{% else %}
			Cтоимость <br>участия
			{% endif %}
		</div><!-- price__title -->

		<div class="price__general">
			<div class="price__box">

				{% for item in pricecard %}
				<?php
				$price_card_attr = "href='#popup-price' {{ 'js-payment' if not item.soldout }} data-productId='{{ item.product_id | safe }}' data-quote_id='{{ item.quote_id | safe }}' data-unit='{{ item.unit | safe }}' data-type='{{ item.type | safe }}' data-land='{{ item.land | safe }}' data-event-id='{{ item.event_id | safe }}' data-form-type='{{ item.form_type | safe }}'";

				/*if ($version == 'version3' || $version == 'version4') {
					$price_card_attr = 'href="#popup_req_price" data-fancybox';
				}*/
				?>
				<div class="price-card {{ 'price-card_soldout' if item.soldout }}" id="price-{{ item.id | safe }}" <?= $price_card_attr ?> >
					<div class="price-card__inner">
						<div class="price-card__header">
							<div class="price-card__header-name">
								{{ item.name | safe }}
								{% if not item.soldout %}
								&mdash;<br>
								<span class="price-card__header-sale">{{ item.sale | safe }}</span>
								<span class="price-card__header-pricesale">{{ item.price | safe }} руб.</span>
								{% endif %}
							</div><!-- price-card__header-name -->
							<div class="price-card__header-price {{ item.price_class }}"></div>
						</div><!-- price-card__header -->
						<div class="price-card__wrap">
							<div class="price-card__list">{{ item.list | safe }}</div>
							<ul class="price-card__shedule">
								{% if item.priceup_1 %}<li class="price-card__shedule-item"><span>{{ item.priceup_1 | safe }}</span></li>{% endif %}
								{% if item.priceup_2 %}<li class="price-card__shedule-item"><span>{{ item.priceup_2 | safe }}</span></li>{% endif %}
							</ul>
							<div class="price-card__button button">{{ 'Sold Out' if item.soldout else 'Купить' }}</div>
						</div><!-- price-card__wrap -->
					</div><!-- price-card__inner -->
				</div><!-- price-card -->
				{% endfor %}

			</div><!-- price__box -->
			<div class="price__arrows slider-arrows"></div>
		</div><!-- price__general -->

	</div><!-- container -->
</section><!-- price -->
