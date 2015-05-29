{% extends "templates/base.volt" %}	


{% block css %}    
    {{ stylesheet_link('assets/global/plugins/bootstrap-gtreetable/bootstrap-gtreetable.min.css') }}
{% endblock %}

{% block content %}
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Tree Datatables <small>tree table samples</small></h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
					<!-- BEGIN THEME PANEL -->
					<div class="btn-group btn-theme-panel">
						<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
						<i class="icon-settings"></i>
						</a>
						<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<h3>THEME</h3>
									<ul class="theme-colors">
										<li class="theme-color theme-color-default active" data-theme="default">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Dark Header</span>
										</li>
										<li class="theme-color theme-color-light" data-theme="light">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Light Header</span>
										</li>
									</ul>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12 seperator">
									<h3>LAYOUT</h3>
									<ul class="theme-settings">
										<li>
											 Theme Style
											<select class="layout-style-option form-control input-small input-sm">
												<option value="square" selected="selected">Square corners</option>
												<option value="rounded">Rounded corners</option>
											</select>
										</li>
										<li>
											 Layout
											<select class="layout-option form-control input-small input-sm">
												<option value="fluid" selected="selected">Fluid</option>
												<option value="boxed">Boxed</option>
											</select>
										</li>
										<li>
											 Header
											<select class="page-header-option form-control input-small input-sm">
												<option value="fixed" selected="selected">Fixed</option>
												<option value="default">Default</option>
											</select>
										</li>
										<li>
											 Top Dropdowns
											<select class="page-header-top-dropdown-style-option form-control input-small input-sm">
												<option value="light">Light</option>
												<option value="dark" selected="selected">Dark</option>
											</select>
										</li>
										<li>
											 Sidebar Mode
											<select class="sidebar-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
										<li>
											 Sidebar Menu
											<select class="sidebar-menu-option form-control input-small input-sm">
												<option value="accordion" selected="selected">Accordion</option>
												<option value="hover">Hover</option>
											</select>
										</li>
										<li>
											 Sidebar Position
											<select class="sidebar-pos-option form-control input-small input-sm">
												<option value="left" selected="selected">Left</option>
												<option value="right">Right</option>
											</select>
										</li>
										<li>
											 Footer
											<select class="page-footer-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- END THEME PANEL -->
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="index.html">Home</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Data Tables</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Tree Datatables</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="note note-success note-bordered">
						<p>
							 GTreeTable is extension of Tweeter Bootstrap 3 framework, which allows to use tree structure inside HTML table. Full documentation is available <a href="https://github.com/gilek/bootstrap-gtreetable" target="_blank">here</a>
						</p>
					</div>
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-purple-plum">
								<i class="icon-speech font-purple-plum"></i>
								<span class="caption-subject bold uppercase"> Demo 2</span>
								<span class="caption-helper">right click inside the box</span>
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
									<i class="fa fa-user"></i> User <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu" role="menu">
										<li>
											<a href="#">
											<i class="icon-user"></i> New User </a>
										</li>
										<li>
											<a href="#">
											<i class="icon-present"></i> New Event <span class="badge badge-success">4</span>
											</a>
										</li>
										<li>
											<a href="#">
											<i class="icon-basket"></i> New order </a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">
											<i class="icon-flag"></i> Pending Orders <span class="badge badge-danger">4</span>
											</a>
										</li>
										<li>
											<a href="#">
											<i class="icon-users"></i> Pending Users <span class="badge badge-warning">12</span>
											</a>
										</li>
									</ul>
								</div>
								<a href="#" class="btn btn-circle red-sunglo btn-sm">
								<i class="fa fa-plus"></i> Add </a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-hover table-light gtreetable" id="gtreetable">
							<thead>
							<tr>
								<th>
									 Nested Tree Table
								</th>
							</tr>
							</thead>
							</table>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
{% endblock %} 

{% block js %}
    {{ javascript_include('assets/global/plugins/bootstrap-gtreetable/bootstrap-gtreetable.min.js') }}
    {{ javascript_include('assets/admin/pages/scripts/table-tree.js') }}
        
    <script>
        jQuery(document).ready(function() {    
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        TableTree.init(); // init demo page
        });
    </script>
{% endblock %}