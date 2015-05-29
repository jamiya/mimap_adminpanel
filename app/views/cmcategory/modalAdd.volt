<div class="modal" id="modalAdd" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Байгууллагын категори нэмэх</h4>
            </div>
            <div class="modal-body">
                <div id="modalmessage"></div>

                <form role="form" id="addform"  >
                    <div class="form-body">
                        <div class="form-group">
                            <label>Категори</label>
                            <input type="text" name="categoryName" id="categoryName" class="form-control" placeholder=" Категори">
                            </div>
                        <div class="form-group" id="correspondentList">
                            <label class=>Харъяалагдах категори</label>
                            <select class="form-control select2me" name="parentId" id="parentId" data-placeholder="Сонгох...">

                            </select>

                        </div>
                        <div class="form-group">
                            <label> Хэрэглэгчийн хэсэгт харагдах эсэх </label>
                            <input name="isShowMenu" type="checkbox" id="isShowMenu" checked>
                        </div>
                    </div>
                    <button type="button" class="btn default" data-dismiss="modal">Хаах</button>
                    <button type="button" class="btn blue" onclick="addCategory()" >Хадгалах</button>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>