<div class="modal" id="modalAdd" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Байгууллагын үйл ажиллагаа нэмэх</h4>
            </div>
            <div class="modal-body">
                <div id="modalmessage"></div>

                <form role="form" id="addform"  >
                    <div class="form-body">
                        <div class="form-group">
                            <label>Үйл ажиллагааны чиглэл</label>
                            <input type="text" name="serviceListName" id="serviceListName" class="form-control" placeholder=" Категори">
                        </div>
                        <div class="form-group" id="correspondentList">
                            <label class=>Категори</label>

                            <select multiple="multiple" class="multi-select" name="categoryId[]" id="categoryId">
                                <option value="">Сонгох</option>
                                {% for cat in categories %}
                                    <option value="{{cat['categoryId']|trim}}" >{{cat['categoryName']}}</option>
                                {% endfor%}
                            </select>

                        </div>
                    </div>
                    <button type="button" class="btn default" data-dismiss="modal">Хаах</button>
                    <button type="button" class="btn blue" onclick="addService()" >Хадгалах</button>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>