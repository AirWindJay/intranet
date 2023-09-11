<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Intranet') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
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
            .table, td, tr{
                font-size: 20px;
                border: 3px solid black;
            }
            #thead{
                font-size: 25px;
            }
            #title{
                background-color:black;
                color:white;
                border-radius: 25px;
                width: 80%;
                margin-top: 10px;
            }
            #bodyreset{
                background-color:#97ECDB;
            }
            #tablesize{
                width: 99%;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" align="center">
            <div id="tablesize">
                <a href="/home"><button class="btn btn-dark" style="width: 50%">Home Page</button></a>
                
            </div>
        </div>
    </body>
    <footer class="footer" style="align:right;"><b>BGHMC INTRANET Developed by: (MIS).</b></footer>
</html>