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
    <script src="{{ asset('ajax/security.js') }}"></script>

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
    </div>
                
    <div style="margin-left:160px;">

        <div class="w3-container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td align="center">
                            <h1>Select Ward</h1>
                        </td>
                    </tr> 
                </thead>
                <tbody align="center">
                    @foreach ($wards as $ward)
                       <tr>
                            <td>
                                <a href="/selectward/{{$ward->id}}"><button style="width: 40%" class="btn btn-dark">{{$ward->ward_name}}</button></a>
                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
<footer class="footer" style="align:right;"><b>INTRANET Developed by: Erwin Jhay Cara Urbien Jr. (MIS)..........</b></footer>
</html>
