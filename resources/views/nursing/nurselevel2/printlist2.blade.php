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
    <div id="app">
        <main class="py-4">
            <button id="btnprint" style="width: 25%" onclick=" printpage()">PRINT</button>
            <table class="table table-bordered" style="font-size: 20px">
                <thead>
                    <tr>
                        <td align="center">
                            Total List Nurses
                        </td>
                    </tr> 
                </thead>
                <tbody>
                    @foreach($fornursing as $nurse)
                        <tr>
                            <td>
                                {{$nurse->lastname}}, {{$nurse->firstname}} {{$nurse->middlename}} 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
    <div class="footer">
      <p id="foot" style="background-color: black; color: white;">Intranet: Developed By MIS.</p>
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
</style>
<script>
        function printpage()
        {
            $("#btnprint").hide();
            window.print();
            $("#btnprint").show();
        }
    </script>
</html>
