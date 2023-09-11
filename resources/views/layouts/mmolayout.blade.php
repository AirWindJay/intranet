<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('ajax/mmo.js') }}"></script>

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
            background-color: #4CAF50;
            color: black;
            text-align: right;
            }
        /* #app  {
            background-image: url("/images/mmobackground.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        } */
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#4CAF50; color:black;">
            <div class="container">
                <img src="../bghmclogo.gif" alt="" width="5%">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <button class="btn btn-dark">BGHMC Intranet</button> 
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
                </div>
            </div>
        </nav>


        <main class="py-4">
            <div class="col-md-12" >
                <div class="card">
                    <div class="card-header">
                        <h1>MMO DASHBOARD</h1>
                        {{-- <a href="/mmo/dashboard" class="btn btn-success">MMO DASHBOARD</a> --}}
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Items</button>
                    </div>
                    @yield('content')
                </div>
            </div>
        </main>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Items</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="POST" action="/mmo/additem/save">
                            @csrf
                            <table class="table-bordered" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>
                                            Items
                                        </th>
                                        <th>
                                            Qty
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                        <th colspan="2">
                                            Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="additems">
                                    <tr>
                                        <td>
                                            <select type="text" name="item_id[0]" id="item_id[0]" class="form-control" >
                                                @foreach ($additemscats as $itemscat)
                                                    <optgroup label="{{$itemscat->description}}">
                                                        @foreach ($additems as $item)
                                                            @if ($itemscat->id == $item->cat_id)
                                                                <option value="{{$item->id}}">{{$item->description}}</option>
                                                            @endif
                                                        @endforeach
                                                    </optgroup>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="item_qty[0]" id="item_qty[0]" class="form-control">
                                        </td>
                                        <td>
                                            <select name="adjust[0]" id="adjust[0]" class="form-control">
                                                <option value="1">Add</option>
                                                <option value="2">Deduct</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="item_price[0]" id="item_price[0]" class="form-control">
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">
                                            <input type="button" id="add" class="add btn btn-success btn-sm pull-right" onclick="addfield()" value="Add More">
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <hr>
                            <button type="submit" class="btn btn-primary" style="width: 100%">
                                {{ __('Save') }}
                            </button>
                        </form>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
    @yield('script')
    <script>
        var index_involved = 1;
        function addfield(){
            var item_id = $('.item_id').html();
            var tr = '<tr> <td> <select type="text" name="item_id[' + index_involved + ']" id="item_id[' + index_involved + ']" class="form-control" > @foreach($additemscats as $itemscat) <optgroup label=" {{$itemscat->description}} "> @foreach($additems as $item) @if($itemscat->id == $item->cat_id) <option value=" {{$item->id}} "> {{$item->description}} </option> @endif @endforeach </optgroup> @endforeach </select> </td> <td> <input type="number" name="item_qty[' + index_involved + ']" id="item_qty[' + index_involved + ']" class="form-control"> </td> <td> <select name="adjust[' + index_involved + ']" id="adjust[' + index_involved + ']" class="form-control"> <option value="1">Add</option> <option value="2">Deduct</option></select> </td> <td> <input type="number" name="item_price[' + index_involved + ']" id="item_price[' + index_involved + ']" class="form-control"> </td> <td><input type="button" class="btn btn-danger delete" onclick="deletefield()" value="X"></td></tr>';
            
            console.log('Add Item : ' + index_involved);
                
            index_involved++;
            $('.additems').append(tr);
        }

        function deletefield(){
            $('.additems').delegate('.delete', 'click', function(){
                $(this).parent().parent().remove();
            });
        }
    </script>
</body>
<footer class="footer" style="align:right;"><b>INTRANET Developed by: (MIS)..........</b></footer>
</html>
