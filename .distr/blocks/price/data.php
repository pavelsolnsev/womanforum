<?php


{% set data = [

  {
    id: 'online-translation',
    product_id: '70114188',
    name: 'Онлайн-трансляция',
    price: '<?= $online_price ?>',
    sale: '<?= $online_sale ?>',
    unit: '$unit_price',
    type: '$type_price_online',
    land: '$land',
    quote_id: '$quote_id_online',
    form_type: '$form_type_price_online',
    priceup_1: '',
    priceup_2: '',
    list: '
    <ul>
    <li><span>Подключение к&nbsp;форуму в&nbsp;режиме онлайн</span></li>
    </ul>
    '
  }
  ,
  {
    id: 'standart',
    product_id: '78450250',
    name: 'Билет «Standart»',
    price: '<?= $standart_price ?>',
    sale: '<?= $standart_sale ?>',
    unit: '$unit_price',
    type: '$type_price',
    land: '$land',
    quote_id: '$quote_id_ticket',
    form_type: '$form_type_price_ticket',
    event_id: '$event_id',
    priceup_1: '',
    priceup_2: '',
    list: '
    <ul>
    <li><span>Аккредитация в&nbsp;зоне &laquo;Standart&raquo;</span></li>
    <li><span>Пакет участника</span></li>
    <li><span>Презентации спикеров</span></li>
    </ul>
    '
  }
  ,
  {
    id: 'econom',
    product_id: '70114169',
    name: 'Билет «Comfort»',
    price: '<?= $econom_price ?>',
    sale: '<?= $econom_sale ?>',
    unit: '$unit_price',
    type: '$type_price',
    land: '$land',
    quote_id: '$quote_id_ticket',
    form_type: '$form_type_price_ticket',
    event_id: '$event_id',
    priceup_1: '',
    priceup_2: '',
    soldout: true,
    list: '
    <ul>
    <li><span>Аккредитация в&nbsp;зоне &laquo;Comfort&raquo;</span></li>
    <li><span>Пакет участника</span></li>
    <li><span>Презентации спикеров</span></li>
    </ul>
    '
  }
  ,
  {
    id: 'business',
    product_id: '70114170',
    name: 'Билет «BUSINESS»',
    price: '<?= $business_price ?>',
    sale: '<?= $business_sale ?>',
    unit: '$unit_price',
    type: '$type_price',
    land: '$land',
    quote_id: '$quote_id_ticket',
    form_type: '$form_type_price_ticket',
    event_id: '$event_id',
    priceup_1: '',
    priceup_2: '',
    list: '
    <ul>
    <li><span>Аккредитация в&nbsp;зоне BUSINESS</span></li>
    <li><span>Пакет участника</span></li>
    <li><span>Презентации спикеров</span></li>
    <li><span>Подарки от&nbsp;партнеров</span></li>
    <li><span>Онлайн-курс Евгении Линович &laquo;Успешный fashion-бренд&raquo;</span></li>
    </ul>
    '
  }
  ,
  {
    id: 'vip',
    product_id: '70114176',
    name: 'Билет «VIP»',
    price: '<?= $vip_price ?>',
    sale: '<?= $vip_sale ?>',
    unit: '$unit_price',
    type: '$type_price',
    land: '$land',
    quote_id: '$quote_id_ticket',
    form_type: '$form_type_price_ticket',
    event_id: '$event_id',
    priceup_1: '',
    priceup_2: '',
    price_class:'price-card__price_small',
    soldout: true,
    list: '
    <ul>
    <li><span>Аккредитация в&nbsp;зоне &laquo;VIP&raquo; (партер)</span></li>
    <li><span>Пакет участника</span></li>
    <li><span>Презентации спикеров</span></li>
    <li><span>Подарки от&nbsp;партнеров</span></li>
    <li><span>Доступ к&nbsp;записи форума</span></li>
    <li><span>Онлайн-курс Екатерины Одинцовой &laquo;Как создать PR-агентство с&nbsp;нуля &amp;&nbsp;секреты эффективного пиара&raquo;</span></li>
    </ul>
    '
  }
  ,
  {
    id: 'platinum',
    product_id: '70114178',
    name: 'Билет «PLATINUM»',
    price: '<?= $platinum_price ?>',
    sale: '<?= $platinum_sale ?>',
    unit: '$unit_price',
    type: '$type_price',
    land: '$land',
    quote_id: '$quote_id_ticket',
    form_type: '$form_type_price_ticket',
    event_id: '$event_id',
    priceup_1: '',
    priceup_2: '',
    price_class:'price-card__price_small',
    list: '
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
    '
  }
]%}
