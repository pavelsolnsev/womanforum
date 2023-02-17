<? php
{% set partners = [

	 { image: 'world.png', href: 'https://theworldmag.com/' }
	,{ image: 'glambag.png', href: 'https://www.samplesociety.ru/faq' }
	,{ image: 'glambox.png', href: 'https://www.samplesociety.ru/faq' }
	,{ image: 'xfit.png', href: 'https://www.xfit.ru' }
	,{ image: 'authentica.png', href: 'https://www.authentica.love' }
	,{ image: 'galladance.png', href: 'https://www.galladance.com' }
	,{ image: 'braun.png', href: 'https://braun-russia.ru' }
	,{ image: 'creamcheese.png', href: 'http://creamcheese.ru' }
	,{ image: 'karatsc.png', href: 'http://www.karatsc.ru' }
	,{ image: 'martori.png', href: 'https://martori.ru/' }
	,{ image: 'lumene.png', href: 'https://lumene.ru' }
	,{ image: 'moore.png', href: 'https://www.instagram.com/moore.clinic/' }
	,{ image: 'elemis.png', href: 'https://elemis.ru' }
	,{ image: 'erborian.png', href: 'https://www.erborian.ru' }
	,{ image: 'asiatique.png', href: 'https://asiatique.rest' }
	,{ image: 'ihg.png', href: 'https://www.ihg.com/intercontinental/hotels/ru/ru/maamunagau-island/mlemm/hoteldetail' }
	,{ image: 'aldocoppola.png', href: 'https://aldocoppola.ru/' }
	,{ image: 'genetics.png', href: 'https://mygenetics.ru' }
	,{ image: 'silvashi.png', href: 'https://silvashi.com/ ' }
	,{ image: 'beautyboutiq.png', href: 'https://beautyboutiq.ru/' }
	,{ image: 'baikal.png', href: 'https://tkbaikalaqua.com/' }
	,{ image: 'synclear.png', href: 'http://synclear.ru/?utm_source=synergywoman&utm_medium=logo&utm_campaign=synergywoman.partner' }
	,{ image: 'amilla.png', href: 'https://www.amilla.com/ru' }
	,{ image: 'dessange.png', href: '' }
	,{ image: 'waterful.png', href: 'https://waterful.ru/en/ ' }
	,{ image: 'artfly.png', href: 'https://instagram.com/artfly_msk' }
	,{ image: 'swisspharmcosmetics.png', href: 'https://swisspharmcosmetics.com/' }
	,{ image: 'respace.png', href: 'http://respace.su/?utm_medium=synergy_woman_forum' }
	,{ image: 'emvy.png', href: 'https://emvycosmetics.com/' }
	,{ image: 'nadezhdayusupova.png', href: 'http://nadezhdayusupova.com/ ' }
	,{ image: 'lejournalintime.png', href: 'https://lejournalintime.com/' }
	,{ image: 'mixit.png', href: 'https://mixit.ru/' }
	,{ image: 'ganciarussia.png', href: 'https://www.instagram.com/ganciarussia/' }
	,{ image: 'freeage.png', href: 'https://freeage.shop/' }
	,{ image: 'volshebnitsa.png', href: 'https://www.volshebnitsa.ru/' }
	,{ image: 'citynebo.png', href: 'http://citynebo.com/' }
	,{ image: 'monideal_body.png', href: 'https://instagram.com/monideal_body?igshid=1bixpgcxg9j2' }
	,{ image: 'monideal_clinic.png', href: 'https://instagram.com/monideal_clinic_?igshid=1ggdtpbv8hsjb' }
	,{ image: 'sahar.png', href: 'https://xn--80aaa6bkfrbe5b.xn--p1ai/' }
	,{ image: 'russequelle.png', href: 'https://russequelle.ru/' }
	,{ image: 'bio_cera.png', href: 'https://www.bio-cera.ru/' }
	,{ image: 'brandb24.png', href: 'https://www.brandb24.ru/' }
	,{ image: 'naturalium.png', href: 'https://shop.rivegauche.ru/search?text=naturalium' }
	,{ image: 'worthington.png', href: 'https://shop.rivegauche.ru/search?text=charles%20worthington' }
	,{ image: 'moriz.png', href: 'https://shop.rivegauche.ru/search?text=st%20moriz' }
	,{ image: 'maisonkaleidoscope.png', href: 'https://maisonkaleidoscope.ru/' }
	,{ image: 'lila.jpg', href: 'https://lila.moscow' }
	,{ image: 'avroraclinic.png', href: 'https://avroraclinic.ru/' }
	,{ image: 'vl_adults.png', href: 'https://www.instagram.com/vl_adults/?hl=ru' }
	,{ image: 'glowgo.png', href: 'http://www.glowgo.ru/' }
	,{ image: 'youterra.png', href: 'https://youterra-aroma.ru/' }
	,{ image: 'beautybash.jpg', href: 'https://beautybash.ru/-brands' }
	,{ image: 'delfycosmetics.jpg', href: 'https://delfycosmetics.ru/' }
	,{ image: 'jkmarafon.jpeg', href: 'https://www.jkmarafon.ru/' }
	,{ image: 'berlinki.png', href: '' }
	,{ image: 'rk.png', href: 'https://www.russkart.com/' }
	,{ image: 'russequelle.png', href: '' }
	,{ image: 'grand-clinik.png', href: '' }
	,{ image: 'hval-waters.png', href: 'https://hvalwaters.ru/' }
	,{ image: 'collagen.png', href: 'https://collagen-live.ru/' }
	,{ image: 'bianka.png', href: 'https://www.bianca-city.ru/' }
	,{ image: 'kasablanka.png', href: '' }
	,{ image: 'rendez-vous.png', href: 'https://www.rendez-vous.ru/' }
	,{ image: 'miller-harris.jpg', href: 'https://supremebeauty.ru/products/miller-harris/' }
	,{ image: 'moin-stones.png', href: 'https://www.instagram.com/the.moon.stones/ ' }
	,{ image: 'kevyn-aucoin.png', href: 'http://kevynaucoinbeauty.ru' }
	,{ image: 'baldessarin.jpg', href: 'https://www.letu.ru/product/baldessarini-bella/95700033?srcid=cp_bella_april_2021&utm_source=synergy-Direct&utm_content=cp_bella_april_2021' }
	,{ image: 'golos.png', href: 'https://businessgolos.ru/' }
	,{ image: 'dushevno.png', href: 'https://www.instagram.com/p/CGnj5H6ltzL/?igshid=1mxh0ma9880ny' }
	,{ image: 'platkinina.png', href: 'http://platkinina.ru' }
	,{ image: 'udacha.png', href: 'http://fc8.ru/' }
	,{ image: 'kinomax.png', href: 'https://kinomax.ru/' }
	,{ image: 'eestetica.png', href: 'https://eestetica.ru/' }
	,{ image: 'vassatrend.png', href: 'https://vassatrend.ru/' }
	,{ image: 'alliance-rental.jpg', href: 'https://alliance-rental.ru/  ' }
	,{ image: 'president.png', href: 'https://maisonkaleidoscope.ru/' }
	,{ image: 'detailing.png', href: 'https://www.instagram.com/722detailing/ ' }
	,{ image: 'mett.png', href: '' }
	,{ image: 'marutaka.png', href: 'https://marutaka.ru/' }
	,{ image: 'cashmeremoscow.png', href: 'https://cashmeremoscow.ru/' }
	,{ image: 'candelaclinic.png', href: 'https://candelaclinic.ru/' }
	,{ image: 'faceplace.png', href: 'https://faceplace.me/' }
	,{ image: 'prouve.jpg', href: 'https://prouve.ru/' }
]
%}


{% set partners_1 = [

	{ image: 'strategy.png', href: '' }
	,{ image: 'business-excellence.png', href: '' }
	,{ image: 'pro-business.png', href: '' }
	,{ image: 'boss.png', href: '' }
	,{ image: 'cetre.png', href: '' }
	,{ image: 'psychologies.png', href: '' }
	,{ image: 'mir24.png', href: '' }
	,{ image: 'wday.png', href: '' }
	,{ image: 'romantika.png', href: '' }
	,{ image: 'ok.png', href: '' }
	,{ image: 'marie_claire.png', href: '' }

]
%}


{# Резерв #}
{#

,{ image: 'persona.png', href: 'https://www.instagram.com/persona_patriki_love_love' }
,{ image: 'ecobox.png', href: 'https://ecoboxplanet.com/' }
#}
