{% extends 'default.php' %}

{% block blocks %}
<?php if ($version == 'stavropol') { ?>
    {% include 'header/block.php' %}
    {% include 'main/block.php' %}
    {% include 'about/block.php' %}
    {% include 'speakers/block.php' %}
    {% include 'how/block.php' %}
    {% include 'partners/block.php' %}
    {% include 'services/block.php' %}
    {% include 'organizer/block.php' %}
    {% include 'reviews/block.php' %}
    {% include 'footer/block.php' %}
<?php } else { ?>
    {% include 'header/block.php' %}
    {% include 'main/block.php' %}
    {% include 'about/block.php' %}
    {% include 'speakers/block.php' %}
    <?php if ($version != 'version2') { ?>
        {#% include 'price/block.php' %#}
    <?php }?>
    {#% include 'request/block.php' %#}
    {% include 'place/block.php' %}
    {% include 'broadcast/block.php' %}
    {% include 'how/block.php' %}
    {% include 'partners/block.php' %}
    {% include 'services/block.php' %}
    {% include 'organizer/block.php' %}
    
    {% include 'reviews/block.php' %}
    {#% include 'request/block.php' %#}
    {% include 'footer/block.php' %}
<?php } ?>
{% endblock %}

{% block popups %}
{% include 'popups/block.php' %}
{% endblock %}