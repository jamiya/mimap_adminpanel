{% extends "templates/base.volt" %}

{% block css %}
<!-- BEGIN PAGE LEVEL STYLES -->
{{ stylesheet_link('assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css') }}
{{ stylesheet_link('assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css') }}
{{ stylesheet_link('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}
{{ stylesheet_link('assets/global/plugins/maxazan-jquery-treegrid/css/jquery.treegrid.css') }}
{{ stylesheet_link('assets/global/plugins/bootstrap-select/bootstrap-select.min.css') }}
{{ stylesheet_link('assets/global/plugins/select2/select2.css') }}
{{ stylesheet_link('assets/global/plugins/jquery-multi-select/css/multi-select.css') }}
<!-- END PAGE LEVEL STYLES -->
{% endblock %}

{% block content %}
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-6">
			<!-- END PAGE CONTENT-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-list-ol"></i>БАЙГУУЛЛАГЫН КАТЕГОРИ НЭМЭХ
							</div>
						</div>
						<div class="portlet-body">


				<form role="form" method="POST"  >
					<div class="form-body">
									<div class="form-group">
								            <label>Категори</label>
								            <input type="text" name="categoryName" id="categoryInput" class="form-control" placeholder=" Категори">
									</div>
									<div class="form-group" id="correspondentList">
										<label class=>Харъяалагдах категори</label>
										<select class="form-control select2me" name="parentId" id="correspondentCategory" data-placeholder="Сонгох...">
                                                                                    <option value="0"  >Сонгох</option>
                                                                                    {% for category in categories %}
                                                                                        <option value="{{category['categoryId']}}" >{{category['categoryName']}}</option>
                                                                                    {% endfor%}
										</select>
	
									</div>
									<div class="form-group">
									            <label> Хэрэглэгчийн хэсэгт харагдах эсэх </label>
                                                                                    <input name="isShowMenu" type="checkbox" id="is_show_list" checked>
									</div>
					</div>
						<a href="{{url.get('cmcategory')}}" type="button" class="btn default">Хаах</a>
						<button type="submit" class="btn blue" >Хадгалах</button>
				</form>
                                                    
                                                    
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
{% include 'cmcategory/popup.volt'%}

{% endblock %} 

{% block js %}
{{ javascript_include('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}
{{ javascript_include('assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}
{{ javascript_include('assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') }}
{{ javascript_include('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}
{{ javascript_include('assets/global/plugins/maxazan-jquery-treegrid/js/jquery.treegrid.js') }}
{{ javascript_include('assets/global/plugins/maxazan-jquery-treegrid/js/jquery.treegrid.bootstrap3.js') }}
{{ javascript_include('assets/admin/pages/scripts/components-dropdowns.js') }}

{{ javascript_include('assets/global/plugins/bootstrap-select/bootstrap-select.min.js')}}  
{{ javascript_include('assets/global/plugins/select2/select2.min.js') }}
{{ javascript_include('assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js')}}
{{ javascript_include('assets/admin/pages/scripts/form-validation.js')}}


<script>
	function addCategory(){
		$.ajax({
  		method: "POST",
  		url: "cmcategory/add",
  		data: { categoryName: $('#categoryInput').val(), 
                        parentId: $('#correspondentCategory').val(),
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

{#            "order": [
                [0, 'asc']
            ],#}
            
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