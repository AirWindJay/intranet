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

                <form method="POST" action="/report/generate" enctype="multipart/form-data">
                    @csrf
                    <table class="table">
                        <thead>
                            <tr>
                                <td>
                                    SELECT MONTH
                                </td>
                                <td>
                                    SELECT YEAR
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select id="month" type="text" class="form-control" name="month">
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="year" type="text" class="form-control" name="year">
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary" value="Generate Report" name="submit">
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>

                <table class="table">
                    <thead class="thead-dark">
                        <tr align="center" id="thead">
                            <td><strong>Officer</strong></td>
                            <td><strong>Problem</strong></td>
                            <td><strong>Inserted By</strong></td>
                            <td><strong>Location</strong></td>
                            <td><strong>Date/Time</strong></td>
                            <td><strong>Status</strong></td>
                        </tr>
                    </thead>
                    @foreach($services as $service)
                    <tr align="center">
                            <td style="width: 13%">
                                @foreach($hpersonal2 as $user)
                                    @if($service->officerid == $user->employeeid)
                                        {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                                    @endif
                                @endforeach
                            </td>

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
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
    <footer class="footer" style="align:right;"><b>BGHMC INTRANET Developed by: (MIS).</b></footer>
</html>