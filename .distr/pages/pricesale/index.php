{% extends 'default.php' %}

{% set pricesale_class = 'page-pricesale' %}

{% block blocks %}
	{% set pricesale = true %}
	{% include 'price/block.php' %}
{% endblock %}

{% block popups %}
{% include 'popups/block.php' %}
{% endblock %}