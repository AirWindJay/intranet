@extends('layouts.nursinglayout')
@section('content')
    <h3>Schedule For Next Month</h3>
    <h1>Nursing Schedule Monitor = {{$ward->ward_name}}</h1>
    <form name="nurseoffform" method="POST" action="/nurse/off/save" enctype="multipart/form-data">
        @csrf
            <div class="col-md-6">
                <input id="employeeid" type="text" hidden class="form-control{{ $errors->has('employeeid') ? ' is-invalid' : '' }}" name="employeeid" value="{{$nursing->employeeid}}" required>

                @if ($errors->has('employeeid'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('employeeid') }}</strong>
                    </span>
                @endif
            </div>
        <div class="table-responsive">
            <table class="table table-bordered" style="width: 140%">
                <thead>
                    <tr align="center" style="font-weight: bold;">
                        <td style="width: 10%">Name</td>
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
                                @if($nursing->employeeid == $user->employeeid)
                                    {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}} 
                                @endif
                            @endforeach
                        </td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d1" name="d1" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d2" name="d2" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d3" name="d3" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d4" name="d4" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d5" name="d5" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d6" name="d6" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d7" name="d7" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d8" name="d8" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d9" name="d9" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d10" name="d10" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d11" name="d11" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d12" name="d12" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d13" name="d13" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d14" name="d14" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff1()" id="d15" name="d15" /></td>
                        <td style="background-color:black; width:1%"></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d16" name="d16" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d17" name="d17" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d18" name="d18" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d19" name="d19" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d20" name="d20" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d21" name="d21" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d22" name="d22" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d23" name="d23" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d24" name="d24" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d25" name="d25" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d26" name="d26" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d27" name="d27" /></td>
                        <td><input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d28" name="d28" /></td>
                        @if($date->nextmonth == 29)
                            <td>
                                <input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d29" name="d29" />
                            </td>
                        @endif
                        @if($date->nextmonth == 30)
                            <td>
                                <input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d29" name="d29" />
                            </td>
                            <td>
                                <input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d30" name="d30" />
                            </td>
                        @endif
                        @if($date->nextmonth == 31)
                            <td>
                                <input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d29" name="d29" />
                            </td>
                            <td>
                                <input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d30" name="d30" />
                            </td>
                            <td>
                                <input value="OFF" type="checkbox" onclick="return NurseOff2()" id="d31" name="d31" />
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
        <button type="SUBMIT" class="btn btn-success">SAVE</button>
    </form>

    <script>
        
        function NurseOff1() {

            var NewCount1 = 0

            if (document.nurseoffform.d1.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d2.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d3.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d4.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d5.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d6.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d7.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d8.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d9.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d10.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d11.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d12.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d13.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d14.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.nurseoffform.d15.checked)
            {NewCount1 = NewCount1 + 1}

            if (NewCount1 == 5)
            {
            alert('Pick 4 Every 15 days pls')
            document.nurseoffform; return false;
            }
            }

            function NurseOff2() {

            var NewCount2 = 0

            if (document.nurseoffform.d16.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d17.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d18.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d19.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d20.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d21.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d22.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d23.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d24.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d25.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d26.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d27.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.nurseoffform.d28.checked)
            {NewCount2 = NewCount2 + 1}
            
            try
            {
                if (document.nurseoffform.d29.checked)
                {NewCount2 = NewCount2 + 1}
            }
            catch(err) {}
            
            try
            {
                if (document.nurseoffform.d30.checked)
                {NewCount2 = NewCount2 + 1}
            }
            catch(err) {}

            try
            {
                if (document.nurseoffform.d31.checked)
                {NewCount2 = NewCount2 + 1}
            }
            catch(err) {}

            if (NewCount2 == 5)
            {
            alert('Pick 4 Every 15 days pls')
            document.nurseoffform; return false;
            }
            }
    </script>
@endsection