<table class="table table-bordered" style="width: 140%">
        <thead>
            <tr align="center" style="font-weight: bold;">
                <td style="width: 10%">Name</td>
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
            @foreach($fornursing as $nurse)
                <tr>
                    <td>
                        @if ($mydata[0]->role_id != 1)
                            <a href="/report/generator/{{$nurse->employeeid}}"> {{$nurse->lastname}}, {{$nurse->firstname}} {{$nurse->middlename}}
                                {{-- -{{$nurse->employeeid}}- --}}
                            </a>
                        @else
                            {{$nurse->lastname}}, {{$nurse->firstname}} {{$nurse->middlename}}
                        @endif
                    </td>
                    <td>{{$nurse->date1}}</td>
                    <td>{{$nurse->date2}}</td>
                    <td>{{$nurse->date3}}</td>
                    <td>{{$nurse->date4}}</td>
                    <td>{{$nurse->date5}}</td>
                    <td>{{$nurse->date6}}</td>
                    <td>{{$nurse->date7}}</td>
                    <td>{{$nurse->date8}}</td>
                    <td>{{$nurse->date9}}</td>
                    <td>{{$nurse->date10}}</td>
                    <td>{{$nurse->date11}}</td>
                    <td>{{$nurse->date12}}</td>
                    <td>{{$nurse->date13}}</td>
                    <td>{{$nurse->date14}}</td>
                    <td>{{$nurse->date15}}</td>
                    <td style="background-color:black; width:1%"></td>
                    <td>{{$nurse->date16}}</td>
                    <td>{{$nurse->date17}}</td>
                    <td>{{$nurse->date18}}</td>
                    <td>{{$nurse->date19}}</td>
                    <td>{{$nurse->date20}}</td>
                    <td>{{$nurse->date21}}</td>
                    <td>{{$nurse->date22}}</td>
                    <td>{{$nurse->date23}}</td>
                    <td>{{$nurse->date24}}</td>
                    <td>{{$nurse->date25}}</td>
                    <td>{{$nurse->date26}}</td>
                    <td>{{$nurse->date27}}</td>
                    <td>{{$nurse->date28}}</td>
                    @if($date->thismonth == 29)
                        <td style="width: 2%">
                            {{$nurse->date29}}
                        </td>
                    @endif
                    @if($date->thismonth == 30)
                        <td style="width: 2%">
                            {{$nurse->date29}}
                        </td>
                        <td style="width: 2%">
                            {{$nurse->date30}}
                        </td>
                    @endif
                    @if($date->thismonth == 31)
                        <td style="width: 2%">
                            {{$nurse->date29}}
                        </td>
                        <td style="width: 2%">
                            {{$nurse->date30}}
                        </td>
                        <td style="width: 2%">
                            {{$nurse->date31}}
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>