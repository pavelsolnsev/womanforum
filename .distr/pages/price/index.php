{% extends 'default.php' %}

{% set price_class = 'page-price' %}

{% block blocks %}
	{% set price = true %}
	{% include 'price/block.php' %}
{% endblock %}

{% block popups %}
{% include 'popups/block.php' %}
{% endblock %}