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