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
                border: 1px solid black;
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
        <div class="flex-center position-ref full-height" align="center" style="font-size: 15px">
            <div id="tablesize">
                <table class="table">
                    <thead class="thead-dark">
                        <tr id="thead">
                            <td><strong>Category</strong></td>
                            <td><strong>Count</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                JANUARY 2019 </b>
                            </td>
                        </tr>
                        @foreach($services1 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                FEBRUARY 2019 </b>
                            </td>
                        </tr>
                        @foreach($services2 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                MARCH 2019 </b>
                            </td>
                        </tr>
                        @foreach($services3 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                APRIL 2019 </b>
                            </td>
                        </tr>
                        @foreach($services4 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                MAY 2019 </b>
                            </td>
                        </tr>
                        @foreach($services5 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                JUNE 2019 </b>
                            </td>
                        </tr>
                        @foreach($services6 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                JULY 2019 </b>
                            </td>
                        </tr>
                        @foreach($services7 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                AUGUST 2019 </b>
                            </td>
                        </tr>
                        @foreach($services8 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                SEPTEMBER 2019 </b>
                            </td>
                        </tr>
                        @foreach($services9 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                OCTOBER 2019 </b>
                            </td>
                        </tr>
                        @foreach($services10 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                NOVEMBER 2019 </b>
                            </td>
                        </tr>
                        @foreach($services11 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center"><b>
                                DECEMBER 2019 </b>
                            </td>
                        </tr>
                        @foreach($services12 as $service)
                            <tr>
                                <td>
                                    {{$service->category}}
                                </td>
                                <td>
                                    {{$service->cc}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>