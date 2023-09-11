<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        * {
        box-sizing: border-box;
        }

        body {
        margin: 0;
        font-family: Arial;
        }

        /* The grid: Four equal columns that floats next to each other */
        .column {
        float: left;
        width: 25%;
        padding: 10px;
        }

        /* Style the images inside the grid */
        .column img {
        opacity: 0.8; 
        cursor: pointer; 
        }

        /* .column img:hover {
        opacity: 1;
        } */

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* The expanding image container */
        .container {
        position: relative;
        display: none;
        }

        /* Expanding image text */
        #imgtext {
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: white;
        font-size: 20px;
        }

        /* Closable button inside the expanded image */
        .closebtn {
        position: absolute;
        top: 10px;
        right: 15px;
        color: white;
        font-size: 35px;
        cursor: pointer;
        }
    </style>
</head>
<body style="background: #C5CBCB" onload="pageload()">
    <div id="app">
        <main>
            <div class="row">
                <div class="col-lg-12">
                    <marquee style="width:100%;" class="alert-danger">
                        <a href="https://forms.gle/SRFDbD912hyHmVF89" target="_blank" class="btn btn-info" style="font-size: 20px">
                            <strong>
                                Kindly answer the survey on Performance Governance System Assessment
                            </strong>
                        </a>
                    </marquee>
                </div>
                <div class="col-lg-12" align="center">
                    <button class="btn btn-info" onclick="pageannouncements()" id="loginbtn">INTRANET IMAGES</button>
                    {{-- <button class="btn btn-info" onclick="aboutBGHMC()" id="loginbtn">ABOUT BGHMC</button> --}}
                    <button class="btn btn-info" onclick="pageccru()" id="ccrubtn">CCRU ANNOUNCEMENTS</button>
                </div>
                <div class="col-lg-2" id="login">
                    <div class="card" style="width: 100%; height: 100%; background: #4CAF50">
                        <div class="card-header" align="center">
                            <img src="../img/BGHMC_LOGO.gif" alt="" width="30%">
                            <h3>BGHMC INTRANET</h3>
                            @if ( $errors->has('username'))
                                <small class="text-danger">Invalid Username or Password</small> <br>
                            @endif
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/login" enctype="multipart/form-data">
                                @csrf
                                <label for="user_name">USERNAME</label>
                                <input id="user_name" type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" placeholder="Username" required autofocus>
                                <br>
                                <label for="user_pass">PASSWORD</label>
                                <input id="user_pass" type="password" class="form-control{{ $errors->has('user_pass') ? ' is-invalid' : '' }}" placeholder="Password" name="user_pass" required>
                                <button type="submit" class="btn btn-success mt-5" style="width: 100%s">Login</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10" id="announcements">
                    <div style="height: 800px; overflow: auto; border: 1px solid black">
                        <div class="row">
                            @foreach ($announcements2 as $announcement)
                                @foreach ($announcement->animage as $item)
                                    @if($item->extension == 'png')
                                        <div class="col-sm-2">
                                            <div class="card-body" align="center">
                                                <img src="../uploads/announcements/{{$item->file}}" class="btn" style="width:90%" onclick="myFunction(this);">
                                            </div>
                                        </div>
                                    @elseif($item->extension == 'jpg')
                                        <div class="col-sm-2">
                                            <div class="card-body" align="center">
                                                <img src="../uploads/announcements/{{$item->file}}" class="btn" style="width:100%" onclick="myFunction(this);">
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>

                            <div class="container">
                                <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                                <img id="expandedImg" style="width:90%">
                            <div id="imgtext"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-10" id="ccru2">
                    <input type="text" class="form-control" placeholder="Search Document Number">
                    <input type="text" class="form-control" placeholder="Search Title/Details">
                    {{ $ccru->links() }}
                    <div style="height: 600px; overflow: auto; border: 1px solid black">
                        <table class="table table-sm table-bordered" style="width: 100%;" id="myTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>
                                        Document Number
                                    </th>
                                    <th>
                                        For Division/s
                                    </th>
                                    <th>
                                        <sup>Title</sup><sub>Details</sub>
                                    </th>
                                    <th>
                                        Document Date
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 12px">
                                @foreach ($ccru as $ann)
                                    <tr>
                                        <td>
                                            {{$ann->yearnnumber}}
                                        </td>
                                        <td>
                                            @if ($ann->for_omcc == 1)
                                                OMCC;
                                            @endif
                                            @if ($ann->for_medical == 1)
                                                MEDICAL;
                                            @endif
                                            @if ($ann->for_nursing == 1)
                                                NURSING;
                                            @endif
                                            @if ($ann->for_hopss == 1)
                                                HOPSS;
                                            @endif
                                            @if ($ann->for_finance == 1)
                                                FINANCE;
                                            @endif
                                        </td>
                                        <td>
                                            {{$ann->title}}
                                            @foreach ($ann->image as $ccruimage)
                                                @if ($ccruimage->extension == 'pdf')
                                                    <a href="../uploads/pdf/ccru/{{$ccruimage->file}}" class="btn btn-secondary">View PDF</a>
                                                @elseif ($ccruimage->extension == 'PDF')
                                                    <a href="../uploads/pdf/ccru/{{$ccruimage->file}}" class="btn btn-secondary">View PDF</a>
                                                @endif
                                            @endforeach
                                            <hr style="border: 0.5px solid black; border-radius: 5px;">
                                            {{$ann->detail}}
                                        </td>
                                        <td>
                                            {{date('m-d-Y', strtotime($ann->doc_date))}}
                                        </td>
                                        <td>
                                            <a href="/ccrudetailsout/{{$ann->id}}" target="_blank" class="btn btn-primary">View Complete Details</a><br><br>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    <marquee style="width:100%;" class="alert-danger">
                        <a href="https://forms.gle/SRFDbD912hyHmVF89" target="_blank" class="btn btn-info" style="font-size: 20px">
                            <strong>
                                Kindly answer the survey on Performance Governance System Assessment
                            </strong>
                        </a>
                    </marquee>
                </div>
            </div>
        </main>
    </div>
    

    <script src="/js/app.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function pageload()
        {
            $('#ccru2').hide();  
            $('#announcements').show();
        }
        function pageannouncements()
        {
            $('#ccru2').hide();
            $('#announcements').show();
        }
        
        function pageccru()
        {
            $('#ccru2').show();
            $('#announcements').hide();
        }
        function myFunction(imgs)
        {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }
    </script>
</body>
</html>
