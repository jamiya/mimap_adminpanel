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