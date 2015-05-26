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
<?php echo $this->tag->getTitle(); ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/uniform/css/uniform.default.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<?php echo $this->tag->stylesheetLink('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/fullcalendar/fullcalendar.min.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/jqvmap/jqvmap/jqvmap.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/morris/morris.css'); ?>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<?php echo $this->tag->stylesheetLink('assets/admin/pages/css/tasks.css'); ?>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<?php echo $this->tag->stylesheetLink('assets/global/css/components-rounded.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/css/plugins.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/admin/layout4/css/layout.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/admin/layout4/css/themes/light.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/admin/layout4/css/custom.css'); ?>


<!-- BEGIN PAGE LEVEL STYLES -->
<?php echo $this->tag->stylesheetLink('assets/global/plugins/select2/select2.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/maxazan-jquery-treegrid/css/jquery.treegrid.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/bootstrap-select/bootstrap-select.min.css'); ?>
<?php echo $this->tag->stylesheetLink('assets/global/plugins/jquery-multi-select/css/multi-select.css'); ?>
<!-- END PAGE LEVEL STYLES -->


<!-- END THEME STYLES -->
<link rel="shortcut icon" href="/invo/favicon.ico"/> 


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
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
                        <?php echo $this->tag->image(array('assets/admin/layout4/img/logo-light.png', 'class' => 'logo-default')); ?>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		<div class="page-actions">
			<div class="btn-group">
				<button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<span class="hidden-sm hidden-xs">Actions&nbsp;</span><i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="#">
						<i class="icon-docs"></i> New Post </a>
					</li>
					<li>
						<a href="#">
						<i class="icon-tag"></i> New Comment </a>
					</li>
					<li>
						<a href="#">
						<i class="icon-share"></i> Share </a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">
						<i class="icon-flag"></i> Comments <span class="badge badge-success">4</span>
						</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control input-sm" placeholder="Search..." name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="separator hide">
					</li>
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-bell"></i>
						<span class="badge badge-success">
						7 </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold">12 pending</span> notifications</h3>
								<a href="extra_profile.html">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="time">just now</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										New user registered. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Server #12 overloaded. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">10 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Server #2 not responding. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">14 hrs</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										Application error. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">2 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										A user IP blocked. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">4 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Storage Server #4 not responding dfdfdfd. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">5 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										System Error. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">9 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Storage server failed. </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<li class="separator hide">
					</li>
					<!-- BEGIN INBOX DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-envelope-open"></i>
						<span class="badge badge-danger">
						4 </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>You have <span class="bold">7 New</span> Messages</h3>
								<a href="inbox.html">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
                                                                                    <?php echo $this->tag->image(array('assets/admin/layout3/img/avatar2.jpg', 'class' => 'img-circle')); ?>
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">Just Now </span>
										</span>
										<span class="message">
										Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
                                                                                <?php echo $this->tag->image(array('assets/admin/layout3/img/avatar3.jpg', 'class' => 'img-circle')); ?>
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">16 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<?php echo $this->tag->image(array('assets/admin/layout3/img/avatar1.jpg', 'class' => 'img-circle')); ?>
										</span>
										<span class="subject">
										<span class="from">
										Bob Nilson </span>
										<span class="time">2 hrs </span>
										</span>
										<span class="message">
										Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
		                                                               <?php echo $this->tag->image(array('assets/admin/layout3/img/avatar1.jpg', 'class' => 'img-circle')); ?>

										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">40 mins </span>
										</span>
										<span class="message">
										Vivamus sed auctor 40% nibh congue nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
                                                                               <?php echo $this->tag->image(array('assets/admin/layout3/img/avatar3.jpg', 'class' => 'img-circle')); ?>
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">46 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>
					<!-- BEGIN TODO DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-calendar"></i>
						<span class="badge badge-primary">
						3 </span>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li class="external">
								<h3>You have <span class="bold">12 pending</span> tasks</h3>
								<a href="page_todo.html">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">New release v1.2 </span>
										<span class="percent">30%</span>
										</span>
										<span class="progress">
										<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Application deployment</span>
										<span class="percent">65%</span>
										</span>
										<span class="progress">
										<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile app release</span>
										<span class="percent">98%</span>
										</span>
										<span class="progress">
										<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Database migration</span>
										<span class="percent">10%</span>
										</span>
										<span class="progress">
										<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Web server upgrade</span>
										<span class="percent">58%</span>
										</span>
										<span class="progress">
										<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile development</span>
										<span class="percent">85%</span>
										</span>
										<span class="progress">
										<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">New UI release</span>
										<span class="percent">38%</span>
										</span>
										<span class="progress progress-striped">
										<span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
										</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">
						Nick </span>
						<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                                <?php echo $this->tag->image(array('assets/admin/layout3/img/avatar9.jpg', 'class' => 'img-circle')); ?>

						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="page_calendar.html">
								<i class="icon-calendar"></i> My Calendar </a>
							</li>
							<li>
								<a href="inbox.html">
								<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
								3 </span>
								</a>
							</li>
							<li>
								<a href="page_todo.html">
								<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
								7 </span>
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="extra_lock.html">
								<i class="icon-lock"></i> Lock Screen </a>
							</li>
							<li>
								<a href="login.html">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
        	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li>
					<a href="javascript:;">
					<i class="icon-book-open"></i>
					<span class="title">Лавлах</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="">
							<i class="icon-home"></i>
							Байгууллагын төрөл</a>
						</li>
						<li>
							<a href="cmcategory">
							<i class="icon-basket"></i>
							Байгууллагын категори</a>
						</li>
						<li>
							<a href="ecommerce_orders_view.html">
							<i class="icon-tag"></i>
							Байгууллагын үйлчилгээ</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-rocket"></i>
					<span class="title">Полигон</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="layout_sidebar_reversed.html">
							<span class="badge badge-warning">new</span>Right Sidebar Page</a>
						</li>
						<li>
							<a href="layout_sidebar_fixed.html">
							Sidebar Fixed Page</a>
						</li>
						<li>
							<a href="layout_sidebar_closed.html">
							Sidebar Closed Page</a>
						</li>
						<li>
							<a href="layout_blank_page.html">
							Blank Page</a>
						</li>
						<li>
							<a href="layout_boxed_page.html">
							Boxed Page</a>
						</li>
						<li>
							<a href="layout_language_bar.html">
							Language Switch Bar</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-diamond"></i>
					<span class="title">Цэг</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
							General Components</a>
						</li>
						<li>
							<a href="ui_buttons.html">
							Buttons</a>
						</li>
						<li>
							<a href="ui_icons.html">
							<span class="badge badge-danger">new</span>Font Icons</a>
						</li>
						<li>
							<a href="ui_colors.html">
							Flat UI Colors</a>
						</li>
						<li>
							<a href="ui_typography.html">
							Typography</a>
						</li>
						<li>
							<a href="ui_tabs_accordions_navs.html">
							Tabs, Accordions & Navs</a>
						</li>
						<li>
							<a href="ui_tree.html">
							<span class="badge badge-danger">new</span>Tree View</a>
						</li>
						<li>
							<a href="ui_page_progress_style_1.html">
							<span class="badge badge-warning">new</span>Page Progress Bar - Style 1</a>
						</li>
						<li>
							<a href="ui_blockui.html">
							Block UI</a>
						</li>
						<li>
							<a href="ui_notific8.html">
							Notific8 Notifications</a>
						</li>
						<li>
							<a href="ui_toastr.html">
							Toastr Notifications</a>
						</li>
						<li>
							<a href="ui_alert_dialog_api.html">
							<span class="badge badge-danger">new</span>Alerts & Dialogs API</a>
						</li>
						<li>
							<a href="ui_session_timeout.html">
							Session Timeout</a>
						</li>
						<li>
							<a href="ui_idle_timeout.html">
							User Idle Timeout</a>
						</li>
						<li>
							<a href="ui_modals.html">
							Modals</a>
						</li>
						<li>
							<a href="ui_extended_modals.html">
							Extended Modals</a>
						</li>
						<li>
							<a href="ui_tiles.html">
							Tiles</a>
						</li>
						<li>
							<a href="ui_datepaginator.html">
							<span class="badge badge-success">new</span>Date Paginator</a>
						</li>
						<li>
							<a href="ui_nestable.html">
							Nestable List</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-puzzle"></i>
					<span class="title">Зам</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="components_pickers.html">
							Date & Time Pickers</a>
						</li>
						<li>
							<a href="components_context_menu.html">
							Context Menu</a>
						</li>
						<li>
							<a href="components_dropdowns.html">
							Custom Dropdowns</a>
						</li>
						<li>
							<a href="components_form_tools.html">
							Form Tools</a>
						</li>
						<li>
							<a href="components_editors.html">
							Markdown & WYSIWYG Editors</a>
						</li>
						<li>
							<a href="components_ion_sliders.html">
							Ion Range Sliders</a>
						</li>
						<li>
							<a href="components_noui_sliders.html">
							NoUI Range Sliders</a>
						</li>
						<li>
							<a href="components_jqueryui_sliders.html">
							jQuery UI Sliders</a>
						</li>
						<li>
							<a href="components_knob_dials.html">
							Knob Circle Dials</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">Эвэнт</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="form_controls.html">
							Form Controls</a>
						</li>
						<li>
							<a href="form_icheck.html">
							iCheck Controls</a>
						</li>
						<li>
							<a href="form_layouts.html">
							Form Layouts</a>
						</li>
						<li>
							<a href="form_editable.html">
							<span class="badge badge-warning">new</span>Form X-editable</a>
						</li>
						<li>
							<a href="form_wizard.html">
							Form Wizard</a>
						</li>
						<li>
							<a href="form_validation.html">
							Form Validation</a>
						</li>
						<li>
							<a href="form_image_crop.html">
							<span class="badge badge-danger">new</span>Image Cropping</a>
						</li>
						<li>
							<a href="form_fileupload.html">
							Multiple File Upload</a>
						</li>
						<li>
							<a href="form_dropzone.html">
							Dropzone File Upload</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Хямдрал</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="table_basic.html">
							Basic Datatables</a>
						</li>
						<li>
							<a href="table_tree.html">
							Tree Datatables</a>
						</li>
						<li>
							<a href="table_responsive.html">
							Responsive Datatables</a>
						</li>
						<li>
							<a href="table_managed.html">
							Managed Datatables</a>
						</li>
						<li>
							<a href="table_editable.html">
							Editable Datatables</a>
						</li>
						<li>
							<a href="table_advanced.html">
							Advanced Datatables</a>
						</li>
						<li>
							<a href="table_ajax.html">
							Ajax Datatables</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="company.html">
					<i class="icon-wallet"></i>
					<span class="title">Байгууллага</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-bar-chart"></i>
					<span class="title">Автобусны маршрут</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="charts_amcharts.html">
							Amchart</a>
						</li>
						<li>
							<a href="charts_flotcharts.html">
							Flotchart</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->       
 	<div class="page-content-wrapper">
           <div class="page-content">
             <?php echo $this->flash->output(); ?>
             
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
			<!-- END PAGE CONTENT-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-list-ol"></i>БАЙГУУЛЛАГЫН КАТЕГОРИ ЖАГСААЛТ
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<button id="sample_editable_1_new" class="btn green" data-toggle="modal" href="#basic" onclick="getCorrespondent()">
											<i class="fa fa-plus"></i> Нэмэх
											</button>
                                            <button id="sample_editable_1_new" class="btn blue">
											<i class="fa fa-eye"></i> Харах
											</button>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-hover table-bordered tree" id="table_1">
							<thead>
							<tr>
								<th>
									 №
								</th>
								<th>
                                                                        Байгууллагын категори
								</th>
								<th>
									
								</th>
								<th>
									 Засах
								</th>
								<th>
									 Устгах
								</th>
							</tr>
							</thead>
							<tbody>						                                                           
                                <?php foreach ($categories as $category) { ?>
                                <tr class="treegrid-<?php echo $category['categoryId']; ?> <?php if ($category['parentId']) { ?> treegrid-parent-<?php echo $category['parentId']['categoryId']; ?> <?php } ?>">
								<td>
									<?php echo $category['categoryId']; ?>
								</td>
								<td>
									<?php echo $category['categoryName']; ?>
								</td>
								<td class="center">
								 <input type="checkbox">	
								</td>
								<td>
									<a class="edit" href="javascript:;">
									Засах </a>
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Устгах </a>
								</td>
							</tr>                                                                
                                                           <?php } ?>

							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Байгууллагын категори</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-body">
									<div class="form-group">
										<label>Категори</label>
										<div class="input-group">
											<span class="input-group-addon input-circle-left">
											<i class="fa fa-envelope"></i>
											</span>
									<input type="text" id="categoryInput" class="form-control input-circle-right" placeholder=" Категори">
										</div>
									</div>
									<div class="form-group" id="correspondentList">
										<label class=>Харъяалагдах категори</label>
										<div>
											<select class="form-control select2me" id="correspondentCategory" data-placeholder="Сонгох...">
												
											</select>
											
										</div>
									</div>
									<div class="form-group">
										<div class="checkbox-list">
											<label>
											<input type="checkbox" id="is_show_list"> Хэрэглэгчийн хэсэгт харагдах эсэх </label>
										</div>
									</div>
					</div>
					<div class="modal-footer form-actions">
						<button type="button" class="btn default" data-dismiss="modal">Хаах</button>
						<button type="button" class="btn blue" onclick="addCategory()">Хадгалах</button>
					</div>
				</form>
			</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
							<!-- /.modal -->



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
<?php echo $this->tag->javascriptInclude('assets/global/plugins/respond.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/excanvas.min.js'); ?> 
<![endif]-->
<?php echo $this->tag->javascriptInclude('assets/global/plugins/jquery.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/jquery-migrate.min.js'); ?>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<?php echo $this->tag->javascriptInclude('assets/global/plugins/jquery-ui/jquery-ui.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/jquery.blockui.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/jquery.cokie.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/uniform/jquery.uniform.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>
<!-- END CORE PLUGINS -->
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<?php echo $this->tag->javascriptInclude('assets/global/plugins/morris/morris.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/morris/raphael-min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/jquery.sparkline.min.js'); ?>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php echo $this->tag->javascriptInclude('assets/global/scripts/metronic.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/admin/layout4/scripts/layout.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/admin/layout4/scripts/demo.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/admin/pages/scripts/index3.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/admin/pages/scripts/tasks.js'); ?>



<?php echo $this->tag->javascriptInclude('assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/bootstrap-select/bootstrap-select.min.js'); ?>    
<?php echo $this->tag->javascriptInclude('assets/global/plugins/select2/select2.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/admin/pages/scripts/components-dropdowns.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/maxazan-jquery-treegrid/js/jquery.treegrid.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/global/plugins/maxazan-jquery-treegrid/js/jquery.treegrid.bootstrap3.js'); ?>


<script>
	function addCategory(){
		$.ajax({
  		method: "POST",
  		url: "cmcategory/add",
  		data: { categoryName: $('#categoryInput').val(), parentId: $('#correspondentCategory').val(),
  		isShowMenu:  $("#is_show_list").attr("checked") ? 1 : 0 }
  	})
  .done(function( msg ) {
    alert( "Data Saved: " + msg )});
  		getCorrespondent();
	}

	function getCorrespondent () {
		$.ajax({
      	url: 'cmcategory/jsonlist',
      	data: {
         	format: 'json'
      	},
      	type: 'GET',
      	error: function() {
         	$('#correspondentList').html('<p>An error has occurred</p>');
      	},
      	success: function(data) {
      		//var lists = JSON.parse(data);
		var $selectElement = $("#correspondentCategory");								
        
        $(data).each(function(){
    	var newOption = '<option value="' + this.categoryId + '">' + this.categoryName + '</option>';
    	$selectElement.append(newOption);
		});
      }
      
   });
	}


var TableAdvanced = function () {

    var initTable1 = function () {
        var table = $('#table_1');

        /* Table tools samples: https://www.datatables.net/release-datatables/extras/TableTools/ */


        var oTable = table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            "order": [
                [0, 'asc']
            ],
            
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": -1,

            "dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

        });

        var tableWrapper = $('#table_1_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper

        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
    }

    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }

            console.log('me 1');

            initTable1();

            console.log('me 2');
        }

    };

}();
  
   jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   
  $('#table_1').treegrid({
       treeColumn: 1,
      'initialState': 'collapsed',
       expanderExpandedClass: 'fa fa-minus-square-o',
       expanderCollapsedClass: 'fa fa-plus-square-o'
   });
      
   TableAdvanced.init();

	   
});
</script>
<!-- END JAVASCRIPTS -->


</body>
<!-- END BODY -->
</html>