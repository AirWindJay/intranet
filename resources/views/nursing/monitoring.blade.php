<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Intranet') }}</title>

    <!-- Scripts -->
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
        hr
        {
            border: 20px solid black;
        }
        body
        {
            background-color: black;
        }

        #barChart
        {
            background-color: wheat;
            border-radius: 6px;
        /*   Check out the fancy shadow  on this one */
            box-shadow: 0 3rem 5rem -2rem rgba(0, 0, 0, 0.6);
        }
        #barChart2
        {
            background-color: wheat;
            border-radius: 6px;
        /*   Check out the fancy shadow  on this one */
            box-shadow: 0 3rem 5rem -2rem rgba(0, 0, 0, 0.6);
        }
        #barChart3
        {
            background-color: wheat;
            border-radius: 6px;
        /*   Check out the fancy shadow  on this one */
            box-shadow: 0 3rem 5rem -2rem rgba(0, 0, 0, 0.6);
        }
    </style>
</head>
<body style="width:100%; margin:auto;">
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
                            <img src="../userimage.jpg" width="11%" style="border-radius: 50%" > <span class="caret"> </span>
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
                
    <div style="margin-left:160px; padding-bottom: 50px">
        <div class="w3-container">
            @include('nursing.monitoringselect')
            <h1 align="center" style="color: white;"><b>DATE #</b></h1>
            <h2 style="background-color: red; width: 40%; color:white">Target = RED</h2>
            <h2 style="background-color: #FFA540; width: 40%; color:white">Nurse per ward = BROWN</h2>
            <h2 style="width: 100%; background-color: grey; color:white" align="center">7-3</h2>
            <div class="table-responsive">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <canvas id="barChart" style="width: 12000px; height: 300px"></canvas>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <h2 style="width: 100%; background-color: grey; color:white" align="center">3-11</h2>
            <div class="table-responsive">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <canvas id="barChart2" style="width: 12000px; height: 300px"></canvas>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <h2 style="width: 100%; background-color: grey; color:white" align="center">11-7</h2>
            <div class="table-responsive">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <canvas id="barChart3" style="width: 12000px; height: 300px"></canvas>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



        
        <script src="{{ asset('ajax/monitor3.slim.min.js') }}"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

        <!-- Icons -->
        <script src="{{ asset('ajax/monitor1.min.js') }}"></script>
        <script>
        feather.replace()
        </script>

        <!-- Graphs -->
        <script src="{{ asset('ajax/monitor2.min.js') }}"></script>
        <script>
            var canvas = document.getElementById("barChart");
            var ctx = canvas.getContext('2d');
            
            var canvas2 = document.getElementById("barChart2");
            var ctx2 = canvas2.getContext('2d');
            
            var canvas3 = document.getElementById("barChart3");
            var ctx3 = canvas3.getContext('2d');

            // Global Options:
            Chart.defaults.global.defaultFontColor = 'BLACK';
            Chart.defaults.global.defaultFontSize = 16;

            var data = {
            labels: [
                @foreach($wards as $ward)
                    "{{$ward->ward_name}}",
                @endforeach
            ],
            datasets: [{
                label: "Target",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(225,0,0,0.4)",
                borderColor: "red", // The main line color
                borderCapStyle: 'square',
                borderDash: [], // try [5, 15] for instance
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "black",
                pointBackgroundColor: "white",
                pointBorderWidth: 1,
                pointHoverRadius: 8,
                pointHoverBackgroundColor: "red",
                pointHoverBorderColor: "brown",
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 10,
                // notice the gap in the data and the spanGaps: true
                data: [50, 59, 80, 81, 56, 55, 40, 0,60,55,30,78],
                spanGaps: true,
                }, {
                label: "Nurse Per Ward",
                fill: true,
                lineTension: 0.1,
                backgroundColor: "rgba(167,105,0,0.4)",
                borderColor: "rgb(167, 105, 0)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "white",
                pointBackgroundColor: "black",
                pointBorderWidth: 1,
                pointHoverRadius: 8,
                pointHoverBackgroundColor: "brown",
                pointHoverBorderColor: "yellow",
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 10,
                // notice the gap in the data and the spanGaps: false
                data: [
                    {{$count1[0]->counter}},
                    {{$count2[0]->counter}},
                    {{$count3[0]->counter}},
                    {{$count4[0]->counter}},
                    {{$count5[0]->counter}},
                    {{$count6[0]->counter}},
                    {{$count7[0]->counter}},
                    {{$count8[0]->counter}},
                    {{$count9[0]->counter}},
                    {{$count10[0]->counter}},
                    {{$count11[0]->counter}},
                    {{$count12[0]->counter}},
                    {{$count13[0]->counter}},
                    {{$count14[0]->counter}},
                    {{$count15[0]->counter}},
                    {{$count16[0]->counter}},
                    {{$count17[0]->counter}},
                    {{$count18[0]->counter}},
                    {{$count19[0]->counter}},
                    {{$count20[0]->counter}},
                    {{$count21[0]->counter}},
                    {{$count22[0]->counter}},
                    {{$count23[0]->counter}},
                    {{$count24[0]->counter}},
                    {{$count25[0]->counter}},
                    {{$count26[0]->counter}},
                    {{$count27[0]->counter}},
                    {{$count28[0]->counter}},
                    {{$count29[0]->counter}},
                    {{$count30[0]->counter}},
                    {{$count31[0]->counter}},
                    {{$count32[0]->counter}},
                    {{$count33[0]->counter}},
                    ],
                spanGaps: false,
                }

            ]
            };

            // Notice the scaleLabel at the same level as Ticks
            var options = {
            scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            },
                            scaleLabel: {
                                display: true,
                                labelString: '7-3',
                                fontSize: 20 
                            }
                        }]            
                    }  
            };

            // Chart declaration:
            var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
            });

            //////////////////////////////////////////////////////////



            var data2 = {
            labels: [
                @foreach($wards as $ward)
                    "{{$ward->ward_name}}",
                @endforeach
            ],
            datasets: [{
                label: "Target",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(225,0,0,0.4)",
                borderColor: "red", // The main line color
                borderCapStyle: 'square',
                borderDash: [], // try [5, 15] for instance
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "black",
                pointBackgroundColor: "white",
                pointBorderWidth: 1,
                pointHoverRadius: 8,
                pointHoverBackgroundColor: "red",
                pointHoverBorderColor: "brown",
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 10,
                // notice the gap in the data and the spanGaps: true
                data: [100, 59, 80, 81, 56, 55, 40, 0,60,55,30,78],
                spanGaps: true,
                }, {
                label: "Nurse Per Ward",
                fill: true,
                lineTension: 0.1,
                backgroundColor: "rgba(167,105,0,0.4)",
                borderColor: "rgb(167, 105, 0)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "white",
                pointBackgroundColor: "black",
                pointBorderWidth: 1,
                pointHoverRadius: 8,
                pointHoverBackgroundColor: "brown",
                pointHoverBorderColor: "yellow",
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 10,
                // notice the gap in the data and the spanGaps: false
                data: [
                    {{$count2_1[0]->counter}},
                    {{$count2_2[0]->counter}},
                    {{$count2_3[0]->counter}},
                    {{$count2_4[0]->counter}},
                    {{$count2_5[0]->counter}},
                    {{$count2_6[0]->counter}},
                    {{$count2_7[0]->counter}},
                    {{$count2_8[0]->counter}},
                    {{$count2_9[0]->counter}},
                    {{$count2_10[0]->counter}},
                    {{$count2_11[0]->counter}},
                    {{$count2_12[0]->counter}},
                    {{$count2_13[0]->counter}},
                    {{$count2_14[0]->counter}},
                    {{$count2_15[0]->counter}},
                    {{$count2_16[0]->counter}},
                    {{$count2_17[0]->counter}},
                    {{$count2_18[0]->counter}},
                    {{$count2_19[0]->counter}},
                    {{$count2_20[0]->counter}},
                    {{$count2_21[0]->counter}},
                    {{$count2_22[0]->counter}},
                    {{$count2_23[0]->counter}},
                    {{$count2_24[0]->counter}},
                    {{$count2_25[0]->counter}},
                    {{$count2_26[0]->counter}},
                    {{$count2_27[0]->counter}},
                    {{$count2_28[0]->counter}},
                    {{$count2_29[0]->counter}},
                    {{$count2_30[0]->counter}},
                    {{$count2_31[0]->counter}},
                    {{$count2_32[0]->counter}},
                    {{$count2_33[0]->counter}},
                    ],
                spanGaps: false,
                }

            ]
            };

            // Notice the scaleLabel at the same level as Ticks
            var options2 = {
            scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            },
                            scaleLabel: {
                                display: true,
                                labelString: '3-11',
                                fontSize: 20 
                            }
                        }]            
                    }  
            };

            // Chart declaration:
            var myBarChart2 = new Chart(ctx2, {
            type: 'line',
            data: data2,
            options: options2
            });




            //////////////////////////////////////////////////////////



            var data3 = {
            labels: [
                @foreach($wards as $ward)
                    "{{$ward->ward_name}}",
                @endforeach
            ],
            datasets: [{
                label: "Target",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(225,0,0,0.4)",
                borderColor: "red", // The main line color
                borderCapStyle: 'square',
                borderDash: [], // try [5, 15] for instance
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "black",
                pointBackgroundColor: "white",
                pointBorderWidth: 1,
                pointHoverRadius: 8,
                pointHoverBackgroundColor: "red",
                pointHoverBorderColor: "brown",
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 10,
                // notice the gap in the data and the spanGaps: true
                data: [00, 59, 80, 81, 56, 55, 40, 0,60,55,30,78],
                spanGaps: true,
                }, {
                label: "Nurse Per Ward",
                fill: true,
                lineTension: 0.1,
                backgroundColor: "rgba(167,105,0,0.4)",
                borderColor: "rgb(167, 105, 0)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "white",
                pointBackgroundColor: "black",
                pointBorderWidth: 1,
                pointHoverRadius: 8,
                pointHoverBackgroundColor: "brown",
                pointHoverBorderColor: "yellow",
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 10,
                // notice the gap in the data and the spanGaps: false
                data: [
                    {{$count3_1[0]->counter}},
                    {{$count3_2[0]->counter}},
                    {{$count3_3[0]->counter}},
                    {{$count3_4[0]->counter}},
                    {{$count3_5[0]->counter}},
                    {{$count3_6[0]->counter}},
                    {{$count3_7[0]->counter}},
                    {{$count3_8[0]->counter}},
                    {{$count3_9[0]->counter}},
                    {{$count3_10[0]->counter}},
                    {{$count3_11[0]->counter}},
                    {{$count3_12[0]->counter}},
                    {{$count3_13[0]->counter}},
                    {{$count3_14[0]->counter}},
                    {{$count3_15[0]->counter}},
                    {{$count3_16[0]->counter}},
                    {{$count3_17[0]->counter}},
                    {{$count3_18[0]->counter}},
                    {{$count3_19[0]->counter}},
                    {{$count3_20[0]->counter}},
                    {{$count3_21[0]->counter}},
                    {{$count3_22[0]->counter}},
                    {{$count3_23[0]->counter}},
                    {{$count3_24[0]->counter}},
                    {{$count3_25[0]->counter}},
                    {{$count3_26[0]->counter}},
                    {{$count3_27[0]->counter}},
                    {{$count3_28[0]->counter}},
                    {{$count3_29[0]->counter}},
                    {{$count3_30[0]->counter}},
                    {{$count3_31[0]->counter}},
                    {{$count3_32[0]->counter}},
                    {{$count3_33[0]->counter}},
                    ],
                spanGaps: false,
                }

            ]
            };

            // Notice the scaleLabel at the same level as Ticks
            var options3 = {
            scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            },
                            scaleLabel: {
                                display: true,
                                labelString: '3-11',
                                fontSize: 20 
                            }
                        }]            
                    }  
            };

            // Chart declaration:
            var myBarChart3 = new Chart(ctx3, {
            type: 'line',
            data: data3,
            options: options3
            });
        </script>
</body>
<footer class="footer" style="align:right;"><b>INTRANET Developed by: Erwin Jhay Cara Urbien Jr. (MIS)..........</b></footer>
</html>
