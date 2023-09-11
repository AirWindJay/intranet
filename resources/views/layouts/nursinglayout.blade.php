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
    <script src="{{ asset('ajax/nursing.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extend.css') }}" rel="stylesheet">
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
<body style="width:100%; margin:auto; background-color:#9CFAE0;" onload="myFunction()">
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
                            <img src="/../userimage.jpg" width="11%" style="border-radius: 50%" > <span class="caret"> </span>
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

            <a href="/Module/dashboard2" class="btn btn-success" style="background-color:black; color:white; width:100%;">CF4 Monitoring</i></a>

            
            <a href="http://192.168.6.179:83" class="btn btn-success" style="background-color:black; color:white; width:100%;">Chart Checklist</i></a>


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
                
    <div style="margin-left:160px; margin-bottom: 50px;">

        <div class="w3-container">
                @yield('content')
        </div>
    </div>
</body>
<footer class="footer" style="align:right;"><b>INTRANET Developed by: Erwin Jhay Cara Urbien Jr. (MIS)..........</b></footer>
</html>
