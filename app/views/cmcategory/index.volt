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
    {{ stylesheet_link('assets/global/css/components-rounded.css') }}
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
                                    <button id="sample_editable_1_new" class="btn green" data-toggle="modal" data-target="#modalAdd"  >
                                        <i class="fa fa-plus"></i> Нэмэх
                                    </button>
                                    <button id="sample_editable_1_new" class="btn blue" data-toggle="modal" data-target="#modalCatServ" >
                                        <i class="fa fa-eye" ></i> Харах
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
                                    Хэрэглэгчид харагдах 
                                </th>
                                <th colspan="2">
                                    Үйлдэл
                                </th>

                            </tr>
                        </thead>
                        <tbody id="catList">						                                                           
                            {% for index, category in categories %}
                                <tr class="treegrid-{{category['categoryId']}} {% if category['parentId'] %} treegrid-parent-{{ category['parentId']['categoryId'] }} {% endif %}"
                                    id="{{category['categoryId']|trim}}">
                                    <td>
                                        {{ index+1 }}
                                    </td>
                                    <td>
                                        {{ category['categoryName'] }}
                                    </td>
                                    <td>
                                        <i class="fa fa-{%if category['isShowMenu'] %}check-square-o{%else%}square-o{%endif%}"></i>
                                    </td>
                                    <td>
                                        <a href="javascript:;" onclick="updateCat({{category['categoryId']}})" class="btn btn-sm green" alt="Засах">
                                            <i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a  href="javascript:;" onclick="deleteConf({{category['categoryId']}})" class="btn btn-sm red" alt="Устгах">
                                            <i class="fa fa-trash"></i>
                                        </a>
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
    {% include 'cmcategory/modalAdd.volt'%}
    {% include 'cmcategory/modalUpdate.volt'%}
    {% include 'cmcategory/modalCatServ.volt'%}

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
    {{ javascript_include('assets/global/plugins/bootbox/bootbox.min.js')}}
    {{ javascript_include('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}
    {{ javascript_include('assets/global/plugins/jquery-validation/js/localization/messages_mn.js')}}


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
            };

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

        jQuery(document).ready(function () {
            Metronic.init(); // init metronic core componets
            Layout.init(); // init layout

            $('#table_1').treegrid({
                treeColumn: 1,
                'initialState': 'collapsed',
                expanderExpandedClass: 'fa fa-minus-square-o',
                expanderCollapsedClass: 'fa fa-plus-square-o'
            });



            // TableAdvanced.init();


        });

        function deleteConf(id) {

            bootbox.confirm("Устгахуу?", function (result) {
                if (result) {
                    deleteReq(id, function (data) {

                        if (data.responseResultType == "SUCCESS") {

                            flashMessage('success', 'Устлаа.');
                            $('table#table_1  tr#' + id).remove();

                        }
                        else {

                            flashMessage('danger', 'Устгаж болохгүй мэдээлэл байна.');
                        }

                    });
                }
            });
        }

        function deleteReq(id, callback) {

            $.ajax({
                url: 'cmcategory/deleteajax/' + id,
                type: 'GET',
                success: callback
            });

        }

        function flashMessage(type, message) {

            $("#flashmessage").html('<div class="alert alert-' + type + '">' + message + '</div>');

        }
    </script>
    <!-- END JAVASCRIPTS -->

    {% include 'cmcategory/modalJs.volt'%}
{% endblock %}