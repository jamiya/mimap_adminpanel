<div class="form-group">
    <label>Категори</label>
    <input type="hidden" id="categoryId" name="categoryId" value="{{category['categoryId']}}" />
    <input type="text" name="categoryName" id="categoryName" class="form-control" placeholder=" Категори" value="{{category['categoryName']}}" required>
</div>
<div class="form-group" id="correspondentList">
        <label class=>Харъяалагдах категори</label>
        <select class="form-control select2me" name="parentId" id="parentId" data-placeholder="Сонгох...">
            <option value="">Сонгох</option>
            {% for cat in categories %}
                <option value="{{cat['categoryId']}}" {% if cat['categoryId']==category['parentId']['categoryId'] %}selected{%endif%} >{{cat['categoryName']}}</option>
            {% endfor%}
        </select>

</div>
<div class="form-group">
            <label> Хэрэглэгчийн хэсэгт харагдах эсэх </label>
            <input name="isShowMenu" type="checkbox" id="is_show_list" {% if category['isShowMenu'] %}checked{%endif%} >
</div>
