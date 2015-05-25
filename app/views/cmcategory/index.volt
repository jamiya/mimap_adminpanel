{% extends "templates/base.volt" %}

{% block css %}
<!-- BEGIN PAGE LEVEL STYLES -->
{{ stylesheet_link('assets/global/plugins/select2/select2.css') }}
{{ stylesheet_link('assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css') }}
{{ stylesheet_link('assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css') }}
{{ stylesheet_link('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}
{{ stylesheet_link('assets/global/plugins/maxazan-jquery-treegrid/css/jquery.treegrid.css') }}
<!-- END PAGE LEVEL STYLES -->
{% endblock %}

{% block content %}
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
											<a id="sample_editable_1_new" class="btn green" data-toggle="modal" href="#basic">
											<i class="fa fa-plus"></i> Нэмэх
											</a>
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
                                                           {% for  category in categories %}
                                                            <tr class="treegrid-{{category['categoryId']}} {% if category['parentId'] %} treegrid-parent-{{ category['parentId']['categoryId'] }} {% endif %}">
								<td>
									{{ category['categoryId'] }}
								</td>
								<td>
									{{ category['categoryName'] }}
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
                                                           {% endfor %}

							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
{% include 'cmcategory/add.volt'%}

{% endblock %} 

{% block js %}
    
{{ javascript_include('assets/global/plugins/select2/select2.min.js') }}
{{ javascript_include('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}
{{ javascript_include('assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}
{{ javascript_include('assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') }}
{{ javascript_include('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}
{{ javascript_include('assets/global/plugins/maxazan-jquery-treegrid/js/jquery.treegrid.js') }}
{{ javascript_include('assets/global/plugins/maxazan-jquery-treegrid/js/jquery.treegrid.bootstrap3.js') }}


<script>

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
{% endblock %}