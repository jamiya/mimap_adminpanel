<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.6.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
{{ get_title() }}
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
{{ stylesheet_link('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}
{{ stylesheet_link('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}
{{ stylesheet_link('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}
{{ stylesheet_link('assets/global/plugins/uniform/css/uniform.default.css') }}
{{ stylesheet_link('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
{{ stylesheet_link('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}
{{ stylesheet_link('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}
{{ stylesheet_link('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}
{{ stylesheet_link('assets/global/plugins/morris/morris.css') }}
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
{% block css %}
{% endblock %}
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
{{ stylesheet_link('assets/global/css/components-rounded.css') }}
{{ stylesheet_link('assets/global/css/plugins.css') }}
{{ stylesheet_link('assets/admin/layout4/css/layout.css') }}
{{ stylesheet_link('assets/admin/layout4/css/themes/light.css') }}
{{ stylesheet_link('assets/admin/layout4/css/custom.css') }}



<!-- END THEME STYLES -->
<link rel="shortcut icon" href="{{url.get('favicon.ico')}}"/> 


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
{% include 'templates/header.volt'%}
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
        {% include 'templates/menu.volt'%}
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->       
 	<div class="page-content-wrapper">
           <div class="page-content">
             <div id="flashmessage">
             </div>
             {{ flash.output() }}
             {% block content %}
             {% endblock %}
           </div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
{{ javascript_include('assets/global/plugins/respond.min.js') }}
{{ javascript_include('assets/global/plugins/excanvas.min.js') }} 
<![endif]-->
{{ javascript_include('assets/global/plugins/jquery.min.js') }}
{{ javascript_include('assets/global/plugins/jquery-migrate.min.js') }}
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
{{ javascript_include('assets/global/plugins/jquery-ui/jquery-ui.min.js') }}
{{ javascript_include('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}
{{ javascript_include('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}
{{ javascript_include('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
{{ javascript_include('assets/global/plugins/jquery.blockui.min.js') }}
{{ javascript_include('assets/global/plugins/jquery.cokie.min.js') }}
{{ javascript_include('assets/global/plugins/uniform/jquery.uniform.min.js') }}
{{ javascript_include('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}
<!-- END CORE PLUGINS -->
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
{{ javascript_include('assets/global/plugins/morris/morris.min.js') }}
{{ javascript_include('assets/global/plugins/morris/raphael-min.js') }}
{{ javascript_include('assets/global/plugins/jquery.sparkline.min.js') }}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ javascript_include('assets/global/scripts/metronic.js') }}
{{ javascript_include('assets/admin/layout4/scripts/layout.js') }}
{{ javascript_include('assets/admin/layout4/scripts/demo.js') }}
{{ javascript_include('assets/admin/pages/scripts/index3.js') }}
{{ javascript_include('assets/admin/pages/scripts/tasks.js') }}

{% block js %}
{% endblock %}

</body>
<!-- END BODY -->
</html>