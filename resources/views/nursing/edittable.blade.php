<table class="table table-bordered" style="width: 140%">
    <thead>
        <tr align="center" style="font-weight: bold;">
            <td style="width: 10%">NURSE_NAME_LIST</td>
            <td style="width: 2%">1</td>
            <td style="width: 2%">2</td>
            <td style="width: 2%">3</td>
            <td style="width: 2%">4</td>
            <td style="width: 2%">5</td>
            <td style="width: 2%">6</td>
            <td style="width: 2%">7</td>
            <td style="width: 2%">8</td>
            <td style="width: 2%">9</td>
            <td style="width: 2%">10</td>
            <td style="width: 2%">11</td>
            <td style="width: 2%">12</td>
            <td style="width: 2%">13</td>
            <td style="width: 2%">14</td>
            <td style="width: 2%">15</td>
            <td style="background-color:black; width:1%"></td>
            <td style="width: 2%">16</td>
            <td style="width: 2%">17</td>
            <td style="width: 2%">18</td>
            <td style="width: 2%">19</td>
            <td style="width: 2%">20</td>
            <td style="width: 2%">21</td>
            <td style="width: 2%">22</td>
            <td style="width: 2%">23</td>
            <td style="width: 2%">24</td>
            <td style="width: 2%">25</td>
            <td style="width: 2%">26</td>
            <td style="width: 2%">27</td>
            <td style="width: 2%">28</td>
            @if($date->thismonth == 29)
                <td style="width: 2%">
                    29
                </td>
            @endif
            @if($date->thismonth == 30)
                <td style="width: 2%">
                    29
                </td>
                <td style="width: 2%">
                    30
                </td>
            @endif
            @if($date->thismonth == 31)
                <td style="width: 2%">
                    29
                </td>
                <td style="width: 2%">
                    30
                </td>
                <td style="width: 2%">
                    31
                </td>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($nursing as $nurse)
            <tr>
                <td>
                    @foreach($users as $user)
                        @if($nurse->employeeid == $user->employeeid)
                            {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}} 
                        @endif
                    @endforeach
                </td>
                <td>
                    <select id="date1_1[{{$nurse->id}}]" type="date1_1[{{$nurse->id}}]" name="date1_1[{{$nurse->id}}]">
                        @if ($nurse->date1 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date1 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date1 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date1 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_2[{{$nurse->id}}]" type="date1_2[{{$nurse->id}}]" name="date1_2[{{$nurse->id}}]">
                        @if ($nurse->date2 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date2 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date2 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date2 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_3[{{$nurse->id}}]" type="date1_3[{{$nurse->id}}]" name="date1_3[{{$nurse->id}}]">
                        @if ($nurse->date3 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date3 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date3 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date3 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_4[{{$nurse->id}}]" type="date1_4[{{$nurse->id}}]" name="date1_4[{{$nurse->id}}]">
                        @if ($nurse->date4 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date4 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date4 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date4 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_5[{{$nurse->id}}]" type="date1_5[{{$nurse->id}}]" name="date1_5[{{$nurse->id}}]">
                        @if ($nurse->date5 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date5 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date5 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date5 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_6[{{$nurse->id}}]" type="date1_6[{{$nurse->id}}]" name="date1_6[{{$nurse->id}}]">
                        @if ($nurse->date6 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date6 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date6 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date6 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_7[{{$nurse->id}}]" type="date1_7[{{$nurse->id}}]" name="date1_7[{{$nurse->id}}]">
                        @if ($nurse->date7 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date7 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date7 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date7 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_8[{{$nurse->id}}]" type="date1_8[{{$nurse->id}}]" name="date1_8[{{$nurse->id}}]">
                        @if ($nurse->date8 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date8 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date8 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date8 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_9[{{$nurse->id}}]" type="date1_9[{{$nurse->id}}]" name="date1_9[{{$nurse->id}}]">
                        @if ($nurse->date9 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date9 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date9 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date9 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_10[{{$nurse->id}}]" type="date1_10[{{$nurse->id}}]" name="date1_10[{{$nurse->id}}]">
                        @if ($nurse->date10 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date10 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date10 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date10 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_11[{{$nurse->id}}]" type="date1_11[{{$nurse->id}}]" name="date1_11[{{$nurse->id}}]">
                        @if ($nurse->date11 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date11 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date11 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date11 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_12[{{$nurse->id}}]" type="date1_12[{{$nurse->id}}]" name="date1_12[{{$nurse->id}}]">
                        @if ($nurse->date12 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date12 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date12 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date12 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_13[{{$nurse->id}}]" type="date1_13[{{$nurse->id}}]" name="date1_13[{{$nurse->id}}]">
                        @if ($nurse->date13 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date13 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date13 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date13 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_14[{{$nurse->id}}]" type="date1_14[{{$nurse->id}}]" name="date1_14[{{$nurse->id}}]">
                        @if ($nurse->date14 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date14 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date14 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date14 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_15[{{$nurse->id}}]" type="date1_15[{{$nurse->id}}]" name="date1_15[{{$nurse->id}}]">
                        @if ($nurse->date15 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date15 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date15 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date15 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>
                <td style="background-color:black; width:1%"></td>
                {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    
                    
                    
                    
                    
                    
                    
                    
                    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                <td>
                    <select id="date1_16[{{$nurse->id}}]" type="date1_16[{{$nurse->id}}]" name="date1_16[{{$nurse->id}}]">
                        @if ($nurse->date16 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date16 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date16 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date16 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_17[{{$nurse->id}}]" type="date1_17[{{$nurse->id}}]" name="date1_17[{{$nurse->id}}]">
                        @if ($nurse->date17 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date17 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date17 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date17 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_18[{{$nurse->id}}]" type="date1_18[{{$nurse->id}}]" name="date1_18[{{$nurse->id}}]">
                        @if ($nurse->date18 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date18 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date18 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date18 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_19[{{$nurse->id}}]" type="date1_19[{{$nurse->id}}]" name="date1_19[{{$nurse->id}}]">
                        @if ($nurse->date19 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date19 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date19 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date19 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_20[{{$nurse->id}}]" type="date1_20[{{$nurse->id}}]" name="date1_20[{{$nurse->id}}]">
                        @if ($nurse->date20 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date20 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date20 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date20 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_21[{{$nurse->id}}]" type="date1_21[{{$nurse->id}}]" name="date1_21[{{$nurse->id}}]">
                        @if ($nurse->date21 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date21 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date21 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date21 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_22[{{$nurse->id}}]" type="date1_22[{{$nurse->id}}]" name="date1_22[{{$nurse->id}}]">
                        @if ($nurse->date22 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date22 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date22 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date22 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_23[{{$nurse->id}}]" type="date1_23[{{$nurse->id}}]" name="date1_23[{{$nurse->id}}]">
                        @if ($nurse->date23 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date23 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date23 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date23 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_24[{{$nurse->id}}]" type="date1_24[{{$nurse->id}}]" name="date1_24[{{$nurse->id}}]">
                        @if ($nurse->date24 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date24 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date24 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date24 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_25[{{$nurse->id}}]" type="date1_25[{{$nurse->id}}]" name="date1_25[{{$nurse->id}}]">
                        @if ($nurse->date25 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date25 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date25 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date25 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_26[{{$nurse->id}}]" type="date1_26[{{$nurse->id}}]" name="date1_26[{{$nurse->id}}]">
                        @if ($nurse->date26 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date26 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date26 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date26 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_27[{{$nurse->id}}]" type="date1_27[{{$nurse->id}}]" name="date1_27[{{$nurse->id}}]">
                        @if ($nurse->date27 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date27 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date27 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date27 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>

                <td>
                    <select id="date1_28[{{$nurse->id}}]" type="date1_28[{{$nurse->id}}]" name="date1_28[{{$nurse->id}}]">
                        @if ($nurse->date28 == '7-3')
                            <option value='7-3' selected>7-3</option>
                        @else
                            <option value='7-3'>7-3</option>
                        @endif

                        @if ($nurse->date28 == '3-11')
                            <option value='3-11' selected>3-11</option>
                        @else
                            <option value='3-11'>3-11</option>
                        @endif

                        @if ($nurse->date28 == '11-7')
                            <option value='11-7' selected>11-7</option>
                        @else
                            <option value='11-7'>11-7</option>
                        @endif

                        @if ($nurse->date28 == 'OFF')
                            <option value='OFF' selected>OFF</option>
                        @else
                            <option value='OFF'>OFF</option>
                        @endif
                    </select>
                </td>
                
                @if($date->thismonth == 29)
                    <td>
                        <select id="date1_29[{{$nurse->id}}]" type="date1_29[{{$nurse->id}}]" name="date1_29[{{$nurse->id}}]">
                            @if ($nurse->date29 == '7-3')
                                <option value='7-3' selected>7-3</option>
                            @else
                                <option value='7-3'>7-3</option>
                            @endif

                            @if ($nurse->date29 == '3-11')
                                <option value='3-11' selected>3-11</option>
                            @else
                                <option value='3-11'>3-11</option>
                            @endif

                            @if ($nurse->date29 == '11-7')
                                <option value='11-7' selected>11-7</option>
                            @else
                                <option value='11-7'>11-7</option>
                            @endif

                            @if ($nurse->date29 == 'OFF')
                                <option value='OFF' selected>OFF</option>
                            @else
                                <option value='OFF'>OFF</option>
                            @endif
                        </select>
                    </td>
                @endif
                @if($date->thismonth == 30)
                    <td>
                        <select id="date1_29[{{$nurse->id}}]" type="date1_29[{{$nurse->id}}]" name="date1_29[{{$nurse->id}}]">
                            @if ($nurse->date29 == '7-3')
                                <option value='7-3' selected>7-3</option>
                            @else
                                <option value='7-3'>7-3</option>
                            @endif

                            @if ($nurse->date29 == '3-11')
                                <option value='3-11' selected>3-11</option>
                            @else
                                <option value='3-11'>3-11</option>
                            @endif

                            @if ($nurse->date29 == '11-7')
                                <option value='11-7' selected>11-7</option>
                            @else
                                <option value='11-7'>11-7</option>
                            @endif

                            @if ($nurse->date29 == 'OFF')
                                <option value='OFF' selected>OFF</option>
                            @else
                                <option value='OFF'>OFF</option>
                            @endif
                        </select>
                    </td>

                    <td>
                        <select id="date1_30[{{$nurse->id}}]" type="date1_30[{{$nurse->id}}]" name="date1_30[{{$nurse->id}}]">
                            @if ($nurse->date30 == '7-3')
                                <option value='7-3' selected>7-3</option>
                            @else
                                <option value='7-3'>7-3</option>
                            @endif
    
                            @if ($nurse->date30 == '3-11')
                                <option value='3-11' selected>3-11</option>
                            @else
                                <option value='3-11'>3-11</option>
                            @endif
    
                            @if ($nurse->date30 == '11-7')
                                <option value='11-7' selected>11-7</option>
                            @else
                                <option value='11-7'>11-7</option>
                            @endif
    
                            @if ($nurse->date30 == 'OFF')
                                <option value='OFF' selected>OFF</option>
                            @else
                                <option value='OFF'>OFF</option>
                            @endif
                        </select>
                    </td>
                @endif
                @if($date->thismonth == 31)
                    <td>
                        <select id="date1_29[{{$nurse->id}}]" type="date1_29[{{$nurse->id}}]" name="date1_29[{{$nurse->id}}]">
                            @if ($nurse->date29 == '7-3')
                                <option value='7-3' selected>7-3</option>
                            @else
                                <option value='7-3'>7-3</option>
                            @endif

                            @if ($nurse->date29 == '3-11')
                                <option value='3-11' selected>3-11</option>
                            @else
                                <option value='3-11'>3-11</option>
                            @endif

                            @if ($nurse->date29 == '11-7')
                                <option value='11-7' selected>11-7</option>
                            @else
                                <option value='11-7'>11-7</option>
                            @endif

                            @if ($nurse->date29 == 'OFF')
                                <option value='OFF' selected>OFF</option>
                            @else
                                <option value='OFF'>OFF</option>
                            @endif
                        </select>
                    </td>

                    <td>
                        <select id="date1_30[{{$nurse->id}}]" type="date1_30[{{$nurse->id}}]" name="date1_30[{{$nurse->id}}]">
                            @if ($nurse->date30 == '7-3')
                                <option value='7-3' selected>7-3</option>
                            @else
                                <option value='7-3'>7-3</option>
                            @endif
    
                            @if ($nurse->date30 == '3-11')
                                <option value='3-11' selected>3-11</option>
                            @else
                                <option value='3-11'>3-11</option>
                            @endif
    
                            @if ($nurse->date30 == '11-7')
                                <option value='11-7' selected>11-7</option>
                            @else
                                <option value='11-7'>11-7</option>
                            @endif
    
                            @if ($nurse->date30 == 'OFF')
                                <option value='OFF' selected>OFF</option>
                            @else
                                <option value='OFF'>OFF</option>
                            @endif
                        </select>
                    </td>

                    <td>
                        <select id="date1_31[{{$nurse->id}}]" type="date1_31[{{$nurse->id}}]" name="date1_31[{{$nurse->id}}]">
                            @if ($nurse->date31 == '7-3')
                                <option value='7-3' selected>7-3</option>
                            @else
                                <option value='7-3'>7-3</option>
                            @endif
    
                            @if ($nurse->date31 == '3-11')
                                <option value='3-11' selected>3-11</option>
                            @else
                                <option value='3-11'>3-11</option>
                            @endif
    
                            @if ($nurse->date31 == '11-7')
                                <option value='11-7' selected>11-7</option>
                            @else
                                <option value='11-7'>11-7</option>
                            @endif
    
                            @if ($nurse->date31 == 'OFF')
                                <option value='OFF' selected>OFF</option>
                            @else
                                <option value='OFF'>OFF</option>
                            @endif
                        </select>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>