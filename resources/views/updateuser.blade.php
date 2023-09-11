<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('ajax/security.js') }}"></script>

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
            background-color: #33F3FF;
            color: black;
            text-align: right;
            }
    </style>
</head>
<body style="width:95%; margin:auto;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:black; color:white; border-radius: 10px;">
            <div class="container">
                <img src="../bghmclogo.gif" alt="" width="5%">
                <a class="navbar-brand" style="color:white" href="{{ url('/home') }}">
                    BGHMC Intranet
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a align="center" id="navbarDropdown" style="background-color:#33F3FF; border-radius: 25px; color:black" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="../userimage.jpg" alt="Avatar" width="11%" style="border-radius: 50%" > <span class="caret"> </span>
                                   USER
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="row">
                <div class="col-lg-12">
                    <H3 align="center">FOR NURSES PLS PICK "NURSING"</H3>
                    <form method="POST" action="/update/account">
                        @csrf
        
                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>
        
                            <div class="col-md-6">
                                <select id="department" type="department" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department">
                                    
                                    <optgroup label="OMCC">
                                        @foreach ($departmentOMCC as $deps)
                                            <option value="{{$deps->id}}">{{$deps->department}}</option>
                                        @endforeach
                                    </optgroup>

                                    <optgroup label="MEDICAL">
                                        @foreach ($departmentMEDICAL as $deps)
                                            <option value="{{$deps->id}}">{{$deps->department}}</option>
                                        @endforeach
                                    </optgroup>

                                    <optgroup label="NURSING">
                                            <option value="88">Nursing</option>
                                    </optgroup>

                                    <optgroup label="HOPSS">
                                        @foreach ($departmentHOPSS as $deps)
                                            <option value="{{$deps->id}}">{{$deps->department}}</option>
                                        @endforeach
                                    </optgroup>

                                    <optgroup label="FINANCE">
                                        @foreach ($departmentFINANCE as $deps)
                                            <option value="{{$deps->id}}">{{$deps->department}}</option>
                                        @endforeach
                                    </optgroup>

                                   
                                </select>
        
                                @if ($errors->has('department'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
<footer class="footer" style="align:right;"><b>INTRANET Developed by: (MIS)..........</b></footer>
</html>
