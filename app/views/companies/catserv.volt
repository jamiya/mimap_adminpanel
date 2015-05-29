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
                                </tr>                                                                
                            {% endfor %}