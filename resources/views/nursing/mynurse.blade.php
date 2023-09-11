@extends('layouts.nursinglayout')
@section('content')
    <h1>Nursing Schedule Monitor = {{$ward}}</h1>
    <hr>
    <h3 id="currentmonth"></h3>
    <div class="table-responsive">
        <table class="table table-bordered" style="width: 150%">
            <thead>
                <tr align="center" style="font-weight: bold;">
                    <td>Name</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td style="background-color:black;"></td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    @if($date->thismonth == 29)
                        <td>
                            29
                        </td>
                    @endif
                    @if($date->thismonth == 30)
                        <td>
                            29
                        </td>
                        <td>
                            30
                        </td>
                    @endif
                    @if($date->thismonth == 31)
                        <td>
                            29
                        </td>
                        <td>
                            30
                        </td>
                        <td>
                            31
                        </td>
                    @endif
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        @foreach($users as $user)
                            @if($nursing->employeeid == $user->employeeid)
                                {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                            @endif
                        @endforeach
                    </td>
                    <td>{{$nursing->date1}}</td>
                    <td>{{$nursing->date2}}</td>
                    <td>{{$nursing->date3}}</td>
                    <td>{{$nursing->date4}}</td>
                    <td>{{$nursing->date5}}</td>
                    <td>{{$nursing->date6}}</td>
                    <td>{{$nursing->date7}}</td>
                    <td>{{$nursing->date8}}</td>
                    <td>{{$nursing->date9}}</td>
                    <td>{{$nursing->date10}}</td>
                    <td>{{$nursing->date11}}</td>
                    <td>{{$nursing->date12}}</td>
                    <td>{{$nursing->date13}}</td>
                    <td>{{$nursing->date14}}</td>
                    <td>{{$nursing->date15}}</td>
                    <td style="background-color:black; width:1%"></td>
                    <td>{{$nursing->date16}}</td>
                    <td>{{$nursing->date17}}</td>
                    <td>{{$nursing->date18}}</td>
                    <td>{{$nursing->date19}}</td>
                    <td>{{$nursing->date20}}</td>
                    <td>{{$nursing->date21}}</td>
                    <td>{{$nursing->date22}}</td>
                    <td>{{$nursing->date23}}</td>
                    <td>{{$nursing->date24}}</td>
                    <td>{{$nursing->date25}}</td>
                    <td>{{$nursing->date26}}</td>
                    <td>{{$nursing->date27}}</td>
                    <td>{{$nursing->date28}}</td>
                    @if($date->thismonth == 29)
                        <td>
                            {{$nursing->date29}}
                        </td>
                    @endif
                    @if($date->thismonth == 30)
                        <td>
                            {{$nursing->date29}}
                        </td>
                        <td>
                            {{$nursing->date30}}
                        </td>
                    @endif
                    @if($date->thismonth == 31)
                        <td>
                            {{$nursing->date29}}
                        </td>
                        <td>
                            {{$nursing->date30}}
                        </td>
                        <td>
                            {{$nursing->date31}}
                        </td>
                    @endif
                </tr>
                @foreach($nursing2 as $nurse)
                    @if($nurse->employeeid !== $nursing->employeeid)
                    <tr>
                        <td>
                            @foreach($users as $user)
                                @if($nurse->employeeid == $user->employeeid)
                                    {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                                @endif
                            @endforeach
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
                            <td>
                                {{$nurse->date29}}
                            </td>
                        @endif
                        @if($date->thismonth == 30)
                            <td>
                                {{$nurse->date29}}
                            </td>
                            <td>
                                {{$nurse->date30}}
                            </td>
                        @endif
                        @if($date->thismonth == 31)
                            <td>
                                {{$nurse->date29}}
                            </td>
                            <td>
                                {{$nurse->date30}}
                            </td>
                            <td>
                                {{$nurse->date31}}
                            </td>
                        @endif
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>

    <hr>


    <h3>Next Month</h3>
    @if($nextnursing->is_active == 0)
        <a href="/nurse/off"><button class="btn btn-primary">Request Date Off</button></a>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered" style="width: 150%">
            <thead>
                <tr align="center" style="font-weight: bold;">
                    <td style="width: 15%">Name</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td style="background-color:black;"></td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    @if($date->nextmonth == 29)
                        <td>
                            29
                        </td>
                    @endif
                    @if($date->nextmonth == 30)
                        <td>
                            29
                        </td>
                        <td>
                            30
                        </td>
                    @endif
                    @if($date->nextmonth == 31)
                        <td>
                            29
                        </td>
                        <td>
                            30
                        </td>
                        <td>
                            31
                        </td>
                    @endif
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        @foreach($users as $user)
                            @if($nextnursing->employeeid == $user->employeeid)
                                {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                            @endif
                        @endforeach
                    </td>
                    <td>{{$nextnursing->date1}}</td>
                    <td>{{$nextnursing->date2}}</td>
                    <td>{{$nextnursing->date3}}</td>
                    <td>{{$nextnursing->date4}}</td>
                    <td>{{$nextnursing->date5}}</td>
                    <td>{{$nextnursing->date6}}</td>
                    <td>{{$nextnursing->date7}}</td>
                    <td>{{$nextnursing->date8}}</td>
                    <td>{{$nextnursing->date9}}</td>
                    <td>{{$nextnursing->date10}}</td>
                    <td>{{$nextnursing->date11}}</td>
                    <td>{{$nextnursing->date12}}</td>
                    <td>{{$nextnursing->date13}}</td>
                    <td>{{$nextnursing->date14}}</td>
                    <td>{{$nextnursing->date15}}</td>
                    <td style="background-color:black; width:1%"></td>
                    <td>{{$nextnursing->date16}}</td>
                    <td>{{$nextnursing->date17}}</td>
                    <td>{{$nextnursing->date18}}</td>
                    <td>{{$nextnursing->date19}}</td>
                    <td>{{$nextnursing->date20}}</td>
                    <td>{{$nextnursing->date21}}</td>
                    <td>{{$nextnursing->date22}}</td>
                    <td>{{$nextnursing->date23}}</td>
                    <td>{{$nextnursing->date24}}</td>
                    <td>{{$nextnursing->date25}}</td>
                    <td>{{$nextnursing->date26}}</td>
                    <td>{{$nextnursing->date27}}</td>
                    <td>{{$nextnursing->date28}}</td>
                    @if($date->nextmonth == 29)
                        <td>
                            {{$nextnursing->date29}}
                        </td>
                    @endif
                    @if($date->nextmonth == 30)
                        <td>
                            {{$nextnursing->date29}}
                        </td>
                        <td>
                            {{$nextnursing->date30}}
                        </td>
                    @endif
                    @if($date->nextmonth == 31)
                        <td>
                            {{$nextnursing->date29}}
                        </td>
                        <td>
                            {{$nextnursing->date30}}
                        </td>
                        <td>
                            {{$nextnursing->date31}}
                        </td>
                    @endif
                </tr>
                @foreach($nextnursing2 as $nurse)
                    @if($nurse->employeeid !== $nextnursing->employeeid)
                    <tr>
                        <td>
                            @foreach($users as $user)
                                @if($nurse->employeeid == $user->employeeid)
                                    {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                                @endif
                            @endforeach
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
                        @if($date->nextmonth == 29)
                            <td>
                                {{$nurse->date29}}
                            </td>
                        @endif
                        @if($date->nextmonth == 30)
                            <td>
                                {{$nurse->date29}}
                            </td>
                            <td>
                                {{$nurse->date30}}
                            </td>
                        @endif
                        @if($date->nextmonth == 31)
                            <td>
                                {{$nurse->date29}}
                            </td>
                            <td>
                                {{$nurse->date30}}
                            </td>
                            <td>
                                {{$nurse->date31}}
                            </td>
                        @endif
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection