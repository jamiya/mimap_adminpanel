{% extends "templates/base.volt" %}

{% block css %}
    <!-- BEGIN PAGE LEVEL STYLES -->
    {{ stylesheet_link('assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css') }}
    {{ stylesheet_link('assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css') }}
    {{ stylesheet_link('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}
    {{ stylesheet_link('assets/global/plugins/bootstrap-select/bootstrap-select.min.css') }}
    {{ stylesheet_link('assets/global/plugins/select2/select2.css') }}
    {{ stylesheet_link('assets/global/plugins/jquery-multi-select/css/multi-select.css') }}
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
                        <i class="fa fa-list-ol"></i>БАЙГУУЛЛАГЫН ҮЙЛЧИЛГЭЭНИЙ ЖАГСААЛТ
                    </div>
                </div>
                <div class="portlet-body">

                    <form class="form-inline" role="form">

                        <div class="btn-group">
                            <button type="button" id="sample_editable_1_new" class="btn green" data-toggle="modal" data-target="#modalAdd"  >
                                <i class="fa fa-plus"></i> Нэмэх
                            </button>
                            <button type="button" id="sample_editable_1_new" class="btn blue" data-toggle="modal" data-target="#modalCatServ" >
                                <i class="fa fa-eye" ></i> Харах
                            </button>
                        </div>


                        <div class="form-group">
                            <label  for=""> Үйл ажиллагааны чиглэл: </label>
                            <input type="text" class="form-control" id="searchService" >
                        </div>
                        <div class="form-group">
                            <label  for=""> Категори: </label>
                            <select class="form-control input-xlarge select2me" id="searchCategories" data-placeholder="Сонгох...">
                                <option value="">Сонгох</option>
                                {% for cat in categories %}
                                    <option value="{{cat['categoryName']|trim}}" {% if cat['categoryId']==category['parentId']['categoryId'] %}selected{%endif%} >{{cat['categoryName']}}</option>
                                {% endfor%}
                            </select>
                        </div>
                        <button type="button" id="search" class="btn btn-default">Хайх</button>
                    </form>

                    <hr>

                    <table class="table table-hover table-bordered tree" id="table_1">
                        <thead>
                            <tr>
                                <th>
                                    №
                                </th>
                                <th>
                                    Үйл ажиллагааны чиглэл
                                </th>
                                <th>
                                    Категори 
                                </th>
                                <th >
                                    Засах
                                </th> 
                                <th>
                                    Устгах
                                </th>

                            </tr>
                        </thead>
                        <tbody id="serviceList">						                                                           
                            {% for index, service in services %}
                                <tr id="{{service['serviceListId']|trim}}">
                                    <td>
                                        {{ index+1 }}
                                    </td>
                                    <td>
                                        {{ service['serviceListName'] }}
                                    </td>
                                    <td>
                                        {% for cat in service['categories'] %}
                                            <span class="label label-default">{{cat['categoryName']}}</span>
                                        {% endfor %}
                                    </td>
                                    <td>
                                        <a href="javascript:;" onclick="updateCat({{service['serviceListId']}})" class="btn btn-sm green" alt="Засах">
                                            <i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a  href="javascript:;" onclick="deleteConf({{service['serviceListId']}})" class="btn btn-sm red" alt="Устгах">
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
    {% include 'cmservice/modalAdd.volt'%}
    {% include 'cmservice/modalUpdate.volt'%}
    {% include 'cmcategory/modalCatServ.volt'%}
    
{% endblock %} 

{% block js %}

    {{ javascript_include('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}
    {{ javascript_include('assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}
    {{ javascript_include('assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}
    {{ javascript_include('assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') }}
    {{ javascript_include('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}

    {{ javascript_include('assets/global/plugins/bootstrap-select/bootstrap-select.min.js')}}
    {{ javascript_include('assets/global/plugins/select2/select2.min.js') }}
    {{ javascript_include('assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js')}}

    {{ javascript_include('assets/global/plugins/bootbox/bootbox.min.js')}}
    {{ javascript_include('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}
    {{ javascript_include('assets/global/plugins/jquery-validation/js/localization/messages_mn.js')}}


    <script>


        jQuery(document).ready(function () {
            Metronic.init(); // init metronic core componets
            Layout.init(); // init layout

            $('#table_1').dataTable();


            $('#search').on('click', function () {

                $('#table_1').DataTable().column(1).search($('#searchService').val()).draw();
                $('#table_1').DataTable().column(2).search($('#searchCategories').val().trim()).draw();

            });

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
                url: 'cmservice/deleteajax/' + id,
                type: 'GET',
                success: callback
            });

        }

        function flashMessage(type, message) {

            $("#flashmessage").html('<div class="alert alert-' + type + '">' + message + '</div>');

        }
    </script>
    <!-- END JAVASCRIPTS -->

    {% include 'cmservice/modalJs.volt'%}
{% endblock %}