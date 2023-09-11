<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    @yield('style') 
    

    <!-- Styles hard coded -->
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #4CAF50;
            color: black;
            text-align: right;
            }
        /* #app  {
            background-image: url("/images/mmobackground.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        } */
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel d-print-none" style="background-color:#4CAF50; color:black;">
            <div class="container">
                <a href="{{ url('/home') }}">
                    <img src="/../bghmclogo.gif" alt="" width="10%">
                    BGHMC Intranet
                </a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a align="center" id="navbarDropdown" style="background-color:#33F3FF; border-radius: 25px; color:black" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="/../userimage.jpg" alt="Avatar" width="11%" style="border-radius: 50%" > <span class="caret"> </span>
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
                </ul>
            </div>
        </nav>
        <div class="d-print-none row" style="background-color: grey">
            <a href="/pharmacy/index" class="col btn btn-info">Pharmacy Index</a>
            <a href="/pharmacy/index2" class="col btn btn-info">Medicine Price</a>
            <a href="/pharmacy/search" class="col btn btn-success">CF4 Frequency</a>
            {{-- <a href="/pharmacy/backlog" class="col btn btn-success">CF4 Frequency Backlog</a> --}}
            <a href="/pharmacy/backlog/OPD" class="col btn btn-success">OPD CF4 Frequency Backlog</a>
            <a href="/pharmacy/backlog/ER" class="col btn btn-success">ER CF4 Frequency Backlog</a>
            <a href="/pharmacy/backlog/ADM" class="col btn btn-success">ADM CF4 Frequency Backlog</a>
        </div>
        

        <main>
            <div class="col-md-12">
                <div>
                    @yield('content')
                </div>
            </div>
        </main>


    </div>
</body>
<footer class="footer d-print-none" style="align:right;"><b>INTRANET Developed by: (MIS)..........</b></footer>
</html>
