<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Intranet') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('ajax/security.js') }}"></script>
    <script>
    function goBack()
    {
        window.history.back();
    }
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

    <!-- Styles hard coded -->
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: right;
            }
    </style>
</head>
<body style="width:100%; margin:auto; background-color:#9CFAE0;">
    <script>
        var index = 1;
        function addfield(){
            var employeeid = $('.employeeid').html();
            var tr = '<tr><td><div class="col-md-10"><select id="employeeid['+index+']" type="employeeid['+index+']" name="employeeid['+index+']" class="form-control"> @foreach ($notregistered as $not) <option value="{{$not->employeeid}}"> @foreach ($users as $user) @if($user->employeeid == $not->employeeid) {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}} @endif @endforeach </option> @endforeach </select> @if ($errors->has('employeeid[+index+]')) <span class="invalid-feedback" role="alert"> <strong>{{ $errors->first('employeeid[+index+]') }}</strong></span> @endif </div> </td><td><input type="button" class="btn btn-danger delete" onclick="deletefield()" value="X"></td></tr>';
        
                
            index++;
            console.log('Add People Involved index : ' + index);
            $('.addnursebody').append(tr);

        }
        
        function deletefield(){
        $('.addnursebody').delegate('.delete', 'click', function(){
            $(this).parent().parent().remove();
        });
        }
    </script>
    <div id="app">
        <div class="w3-sidebar w3-bar-block w3-black" style="width:160px">
            <ul class="navbar-nav ml-auto" style="margin-bottom: 50px">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a align="center" id="navbarDropdown" style="background-color:black;  color:white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="../userimage.jpg" alt="Avatar" width="11%" style="border-radius: 50%" > <span class="caret"> </span>
                            {{ $hpersonal[0]->lastname }}, {{ $hpersonal[0]->firstname }} {{ $hpersonal[0]->middlename }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/myprofile"> {{ __('My Profile') }}</a>
                            <a class="dropdown-item" href="/logout"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            <a href="{{ url('/home') }}" class="btn btn-primary" style="background-color:black; color:white; width:100%;">Home</a>
            <a href="/nurse/dashboard/{{$date2}}" class="btn btn-success" style="background-color:black; color:white; width:100%;">Nurse Dashboard</i></a>
    
            @if ($mydata[0]->role_id == 4 || $mydata[0]->role_id == 9)
                <a href="/noward" class="btn btn-success" style="background-color:black; color:white; width:100%;">Not Assigned Nurses</i></a>
            @endif

            @if ($mydata[0]->role_id == 11)
                <a href="/nurse1/noward" class="btn btn-success" style="background-color:black; color:white; width:100%;">Not Assigned Nurses</i></a>
            @endif
            
            @if ($mydata[0]->role_id == 12)
                <a href="/nurse2/noward" class="btn btn-success" style="background-color:black; color:white; width:100%;">Not Assigned Nurses</i></a>
            @endif
    
            @if ($mydata[0]->role_id != 4 || $mydata[0]->role_id != 9 || $mydata[0]->role_id != 12)
                <a href="/nurse" class="btn btn-success" style="background-color:black; color:white; width:100%;">Go To My Ward</i></a>
            @endif
                 
            @if ($mydata[0]->role_id == 4 || $mydata[0]->role_id == 9)
                <a href="/nurse/list" class="btn btn-success" style="background-color:black; color:white; width:100%;">List of Nurses</i></a>
            @endif
            
            @if ($mydata[0]->role_id == 11)
                <a href="/nurse1/list" class="btn btn-success" style="background-color:black; color:white; width:100%;">List of Nurses</i></a>
            @endif
            

            @if ($mydata[0]->role_id == 12)
                <a href="/nurse2/list1" class="btn btn-success" style="background-color:black; color:white; width:100%;">List of Nurse I</i></a>
            @endif

            @if ($mydata[0]->role_id == 12)
                <a href="/nurse2/list2" class="btn btn-success" style="background-color:black; color:white; width:100%;">List of Nurses II & III</i></a>
            @endif
            
    
            @if ($mydata[0]->role_id == 4 || $mydata[0]->role_id == 9)
                <a href="/nurse/monitoring/{{$date2}}" class="btn btn-success" style="background-color:black; color:white; width:100%;">Nurse Monitoring</i></a>
            @endif

            @if ($mydata[0]->role_id == 4 || $mydata[0]->role_id == 9)
                <a href="/report/generator/$2y$10$UYLST4BCSOBrFi8A790gHOpC7EDwWW4rYDK" class="btn btn-success" style="background-color:black; color:white; width:100%;">Create Report</i></a>
            @endif

            @if ($mydata[0]->role_id == 1 || $mydata[0]->role_id == 9)
                <p>
                    <strong>
                    <a class="btn btn-danger" style="background-color:black; color:white; width:100%;" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Ward
                    </a>
                    </strong>
                </p>

            
                <div class="collapse" id="collapseExample1">
                    <div class="card card-body" style="background-color:black; font-size: 12px">

                        @foreach ($wards as $ward)
                        <a class="nav-item" id="collapseitems1" href="/ward/{{$ward->id}}">
                        {{$ward->ward_name}}
                        </a>
                        <hr>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($mydata[0]->role_id == 11)
                <p>
                    <strong>
                    <a class="btn btn-danger" style="background-color:black; color:white; width:100%;" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                        Ward
                    </a>
                    </strong>
                </p>

            
                <div class="collapse" id="collapseExample2">
                    <div class="card card-body" style="background-color:black; font-size: 12px">

                        @foreach ($wards as $ward)
                        <a class="nav-item" id="collapseitems2" href="/nurse1/ward/{{$ward->id}}">
                        {{$ward->ward_name}}
                        </a>
                        <hr>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($mydata[0]->role_id == 12)
                <p>
                    <strong>
                    <a class="btn btn-danger" style="background-color:black; color:white; width:100%;" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                        Ward
                    </a>
                    </strong>
                </p>

            
                <div class="collapse" id="collapseExample3">
                    <div class="card card-body" style="background-color:black; font-size: 12px">

                        @foreach ($wards as $ward)
                        <a class="nav-item" id="collapseitems2" href="/ward/{{$ward->id}}">
                        {{$ward->ward_name}}
                        </a>
                        <hr>
                        @endforeach
                    </div>
                </div>
            @endif



    </div>
                
    <div style="margin-left:160px;">

        <div class="w3-container">
            <button class="btn btn-default" onclick="goBack()">Go Back</button>
            <h1>Nursing Schedule Monitor = {{$currentward->ward_name}}</h1>
            <form method="POST" action="/nurse2/appendnurse/save" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="ward_id" type="ward_id" hidden class="form-control{{ $errors->has('ward_id') ? ' is-invalid' : '' }}" name="ward_id" value="{{$currentward->id}}">

                    @if ($errors->has('ward_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ward_id') }}</strong>
                        </span>
                    @endif
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td align="center" colspan="2">
                                Add Nurses To Ward
                            </td>
                        </tr>
                    </thead>
                    <tbody class="addnursebody">
                        <tr>
                            <td>
                                <div class="col-md-10">
                                    <select id="employeeid[0]" type="employeeid[0]" name="employeeid[0]" class="form-control">
                                        @foreach ($notregistered as $not)
                                            <option value="{{$not->employeeid}}">
                                                @foreach ($users as $user)
                                                    @if($user->employeeid == $not->employeeid)
                                                        {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                                                    @endif
                                                @endforeach
                                            </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('employeeid[0]'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('employeeid[0]') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <input type="button" id="add" class="add btn btn-primary btn-sm pull-right" onclick="addfield()" value="Add More">
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="form-group row mb-0">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Save') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<footer class="footer" style="align:right;"><b>INTRANET Developed by: Erwin Jhay Cara Urbien Jr. (MIS)..........</b></footer>
</html>