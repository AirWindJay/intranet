<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Intranet') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('ajax/admin.js') }}"></script>
    @yield('script')

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
<body style="width:100%; margin:auto; background-color:black; color:white;">
    <div id="app">
        <div class="w3-sidebar w3-bar-block w3-black" style="width:150px">
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
            <a href="{{ url('/home') }}" class="w3-bar-item w3-button">Home</a>
        </div>
                
        <div style="margin-left:150px;">
            <div class="w3-container">
                @yield('content')
            </div>
        </div>
    </div>
</body>
<footer class="footer" style="align:right;"><b>INTRANET Developed by: (MIS)..........</b></footer>
</html>
