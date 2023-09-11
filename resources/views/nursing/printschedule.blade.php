<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('/bghmc.png')}}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    {{-- <script src="{{ asset('js/jquery.slim.min.js') }}" defer></script> --}}
    <script src="{{ asset('ajax/security.js') }}"></script>
    {{-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/sticky-footer.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div class="page">
        <main class="py-4">
            <button id="btnprint" style="width: 25%" onclick=" printpage()">PRINT</button>
            <table class="table table-bordered" style="font-size: 20px">
                <thead>
                    <tr>
                        @if($date[0]->thismonth == 29)
                            <td colspan="31" align="center">
                                WARD: {{$ward_name}}
                            </td>
                        @endif
                        @if($date[0]->thismonth == 30)
                            <td colspan="32" align="center">
                                WARD: {{$ward_name}}
                            </td>
                        @endif
                        @if($date[0]->thismonth == 31)
                            <td colspan="33" align="center">
                                WARD: {{$ward_name}}
                            </td>
                        @endif
                    </tr>
                    <tr align="center" style="font-weight: bold;">
                        <td style="width: 9%">Name</td>
                        <td style="width: 2%">1</td>
                        <td style="width: 2%">2</td>
                        <td style="width: 2%">3</td>
                        <td style="width: 2%">4</td>
                        <td style="width: 2%">5</td>
                        <td style="width: 2%">6</td>
                        <td style="width: 2%">7</td>
                        <td style="width: 2%">8</td>
                        <td style="width: 2%">9</td>
                        <td style="width: 2%">10</td>
                        <td style="width: 2%">11</td>
                        <td style="width: 2%">12</td>
                        <td style="width: 2%">13</td>
                        <td style="width: 2%">14</td>
                        <td style="width: 2%">15</td>
                        <td style="width: 2%">16</td>
                        <td style="width: 2%">17</td>
                        <td style="width: 2%">18</td>
                        <td style="width: 2%">19</td>
                        <td style="width: 2%">20</td>
                        <td style="width: 2%">21</td>
                        <td style="width: 2%">22</td>
                        <td style="width: 2%">23</td>
                        <td style="width: 2%">24</td>
                        <td style="width: 2%">25</td>
                        <td style="width: 2%">26</td>
                        <td style="width: 2%">27</td>
                        <td style="width: 2%">28</td>
                        @if($date[0]->thismonth == 29)
                            <td style="width: 2%">
                                29
                            </td>
                        @endif
                        @if($date[0]->thismonth == 30)
                            <td style="width: 2%">
                                29
                            </td>
                            <td style="width: 2%">
                                30
                            </td>
                        @endif
                        @if($date[0]->thismonth == 31)
                            <td style="width: 2%">
                                29
                            </td>
                            <td style="width: 2%">
                                30
                            </td>
                            <td style="width: 2%">
                                31
                            </td>
                        @endif
                    </tr>
                </thead>
                <tbody style="font-size: 10px">
                    @foreach ($fornursing as $nurse)
                        <tr>
                            <td>
                                {{$nurse->lastname}}, {{$nurse->firstname}} {{$nurse->middlename}}
                            </td>
                            <td>{{$nurse->date1}}</td>
                            <td>{{$nurse->date2}}</td>
                            <td>{{$nurse->date3}}</td>
                            <td>{{$nurse->date4}}</td>
                            <td>{{$nurse->date5}}</td>
                            <td>{{$nurse->date6}}</td>
                            <td>{{$nurse->date7}}</td>
                            <td>{{$nurse->date8}}</td>
                            <td>{{$nurse->date9}}</td>
                            <td>{{$nurse->date10}}</td>
                            <td>{{$nurse->date11}}</td>
                            <td>{{$nurse->date12}}</td>
                            <td>{{$nurse->date13}}</td>
                            <td>{{$nurse->date14}}</td>
                            <td>{{$nurse->date15}}</td>
                            <td>{{$nurse->date16}}</td>
                            <td>{{$nurse->date17}}</td>
                            <td>{{$nurse->date18}}</td>
                            <td>{{$nurse->date19}}</td>
                            <td>{{$nurse->date20}}</td>
                            <td>{{$nurse->date21}}</td>
                            <td>{{$nurse->date22}}</td>
                            <td>{{$nurse->date23}}</td>
                            <td>{{$nurse->date24}}</td>
                            <td>{{$nurse->date25}}</td>
                            <td>{{$nurse->date26}}</td>
                            <td>{{$nurse->date27}}</td>
                            <td>{{$nurse->date28}}</td>
                            @if($date[0]->thismonth == 29)
                                <td style="width: 2%">
                                    {{$nurse->date29}}
                                </td>
                            @endif
                            @if($date[0]->thismonth == 30)
                                <td style="width: 2%">
                                    {{$nurse->date29}}
                                </td>
                                <td style="width: 2%">
                                    {{$nurse->date30}}
                                </td>
                            @endif
                            @if($date[0]->thismonth == 31)
                                <td style="width: 2%">
                                    {{$nurse->date29}}
                                </td>
                                <td style="width: 2%">
                                    {{$nurse->date30}}
                                </td>
                                <td style="width: 2%">
                                    {{$nurse->date31}}
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
    <div class="footer">
      <p id="foot" style="background-color: black; color: white;">INTRANET Developed by: Erwin Jhay Cara Urbien Jr. MIS.</p>
    </div>
</body>

<style>
.footer {
    background-color: white;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color: black;
    text-align: right;
}
@page {
  size: landscape;
}
</style>
{{-- <style type="text/css" media="print">   
    @page { 
        size: landscape;
    }
    body { 
        writing-mode: tb-rl;
    }
</style> --}}
<script>
    function printpage()
    {
        $("#btnprint").hide();
        $("#foot").hide();
        window.print();
        $("#btnprint").show();
        $("#foot").show();
    }
</script>
</html>
