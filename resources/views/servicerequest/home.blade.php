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
                border: .5px solid grey;
            }
            #thead{
                font-size: 25px;
            }
            #bodyreset{
                background-color: #3D3D3D;
                color: white;
            }
            #tablesize{
                width: 99%;
                margin: auto;
            }
            blink
            {
                animation: blinker 0.6s linear infinite;
                color: red;
            }
            @keyframes blinker {  
                50% { opacity: 0; }
            }
        </style>
    </head>
    <body id="bodyreset" onload="getreminders()">
        <div>
            <audio id="audio" src="{{ asset('audio/bonus1.wav') }}" type="audio/wav"></audio>
        </div>
        <div id="resetthis">
            <div class="flex-center position-ref full-height" align="center">
                <div id="tablesize">
                    <table class="table table-fixed" id="myTable">
                        <thead class="thead-dark">
                            <tr align="center" id="thead">
                                <td style="width: 40%"><strong>Problem</strong></td>
                                <td style="width: 13%"><strong>Inserted By</strong></td>
                                <td style="width: 18%"><strong>Location</strong></td>
                                <td style="width: 7%"><strong>Time</strong></td>
                                <td style="width: 9%"><strong>Status</strong></td>
                                <td style="width: 13%"><strong>Officer</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <footer class="footer" id="footer" style="font-size: 25px; width: 100%;white-space: nowrap">
        <marquee style="width:100%;" id="marqueetext"></marquee>
    </footer>
    <style>

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #74A8C6;
            color: black;
            text-align: right;
        }
        .table, td, tr{
            font-size: 20px;
            border: 2px solid grey;
        }
        #thead{
            font-size: 25px;
        }
        
        #bodyreset{
            background-color: #3D3D3D;
            color: white;
        }
        #tablesize{
            width: 99%;
            margin: auto;
        }
        .navbar {
            overflow: hidden;
            background-color: #3D3D3D;
            position: fixed;
            top: 0;
            width: 100%;
        }
    </style>

    <script>

        setInterval(function() {
            getreminders();
        }, 300000); 

        setInterval(function(){
            getdata();
            playaudio();
        }, 5000);


        function getdata(){
            console.log('getdata');
            var template = '';
            $.ajax({
                type: 'GET',
                url: '/getservicerequest', 
                success:function(data){
                    if(data != null)
                    {
                        data.forEach(element =>
                        {
                            template += '<tr>' +
                                '<td>'+ element.category +'<hr style="border: 1px dotted #232929; width: 90%"> '+ element.remarks +' </td>' +
                                '<td>'+ element.reqlast +', '+ element.reqfirst +' '+ element.reqmiddle +'</td>' +
                                '<td align="center">'+ element.location +' </td> ' +
                                '<td style="width:5%" align="center">'+ element.created_at +'</td> ';
                                if(element.status == 0)
                                {
                                    template += '<td style="background-color:BLACK; COLOR: #E96848; width: 10%;" align="center"><h3 style="margin:auto"><blink>PENDING</blink></h3></td>';      
                                }
                                else
                                {
                                    template += '<td style="background-color:#007bff; COLOR: BLACK; width: 10%;" align="center"><h3 style="margin:auto">PROCESSING</h3></td>';
                                }
                                
                                if(element.officerid == null)
                                {
                                    template += '<td style="width: 13%" align="center"></td>';
                                }
                                else
                                {
                                    template += '<td>'+ element.offlast +', '+ element.offfirst +' '+ element.offmiddle +'</td>';
                                }
                                    template += '</tr>';   
                        })             
                        $('#myTable tbody').empty();
                        $('#myTable tbody').append(template);
                    }
                }
            });
        }

        function getreminders(){
            var template = '';
            $.ajax({
                type: 'GET',
                url: '/getreminders', 
                success:function(data){
                    console.log(data);
                    if(data.length > 0)
                    {
                        data.forEach(element =>
                        {
                            template += ''+ element.reminders +'&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;';     
                        });
                            $('#marqueetext').empty();
                            $('#marqueetext').append(template);
                    }
                }
            });
        }

        function playaudio(){
            var x = document.getElementById("audio"); 
            $.ajax({
                type: 'GET',
                url:'/playaudio',
                success: function(data){
                    if (data > 0)
                    {
                        x.play();
                        stopaudio();
                    }
                },
                error: function(data){},
            });
        }
        function stopaudio(){
            $.ajax({
                type: 'GET',
                url: '/stopaudio',
                success: function(data){
                console.log('stopaudio');
                }
            });
        }

    </script>
</html>