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
        <script src="{{ asset('ajax/security.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        

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
            #body{
                background-color:#97ECDB;
            }
            #tablesize{
                width: 99%;
                margin: auto;
            }
        </style>
        <script>
            function reload()
            {
                location.reload();
            }
        </script>

    </head>
    <body id="body">
        <div class="flex-center position-ref full-height" align="center">
            <div id="title">
                <h1>SERVICE REQUEST MONITORING</h1>
            </div>
            <div align="center">
                <a href="/home"><button class="btn btn-dark">Home Page</button></a>
                <a href="/servicerequest/request"><button class="btn btn-primary">Request For Service</button></a><hr>
            </div>
            <div align="center">
                <button class="btn btn-success" onclick="reload()">Refresh</button><hr>
            </div>
            <div id="tablesize">
                <table class="table">
                    <thead class="thead-dark">
                        <tr align="center" id="thead">
                            <td><strong>Problem</strong></td>
                            <td><strong>Inserted By</strong></td>
                            <td><strong>Location</strong></td>
                            <td><strong>Date/Time</strong></td>
                            <td><strong>Status</strong></td>
                            <td><strong>Officer</strong></td>
                        </tr>
                    </thead>
                    @foreach($services as $service)
                    <tr align="center">
                            <td>
                                {{$service->category}}
                                <hr>
                                {{$service->remarks}}
                            </td>

                            <td style="width: 13%">
                                @foreach($hpersonal2 as $user)
                                    @if($user->employeeid == $service->employeeid)
                                        {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                                    @endif
                                @endforeach
                            </td>

                            <td>
                                {{$service->location}}
                            </td>

                            <td style="width:5%">
                                {{date('F d Y H:i:s', strtotime($service->created_at))}}
                            </td>


                                @if($service->status == 0)
                                    <td style="background-color:#E96848; width: 10%; padding-top: 30px"><b>PENDING</b></td>
                                @elseif($service->status == 1)
                                    <td style="background-color:#308BCE; width: 10%; padding-top: 30px"><b>PROCESSING</b></td>
                                @elseif($service->status == 2)
                                    <td style="background-color:#12A919; width: 10%; padding-top: 30px"><b>FINISHED</b></td>
                                @elseif($service->status == 3)
                                    <td style="background-color:#E3F3A3; width: 10%; padding-top: 30px"><b>ACKNOWLEDGE</b></td>
                                @endif


                            <td style="width: 20%;">
                                @if(is_null($service->officerid))
                                @else
                                    @foreach($hpersonal2 as $user)
                                        @if($service->officerid == $user->employeeid)
                                            {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                                            @if($service->status == 2)
                                                <a href="/myrequests/acknowledge/{{$service->id}}" style="width:100%; padding-top: 30px; padding-bottom: 30px; color:black; font-size:30px;" class="btn btn-success">Acknowledge</a>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
    <footer class="footer" style="align:right;"><b>BGHMC INTRANET Developed by: (MIS)...........</b></footer>
</html>
