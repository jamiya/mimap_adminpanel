{% extends "templates/base.volt" %}	

{% block content %}

{% endblock %}

{% block js %}
   <script>
        jQuery(document).ready(function() {    
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        });
    </script>
{% endblock %}