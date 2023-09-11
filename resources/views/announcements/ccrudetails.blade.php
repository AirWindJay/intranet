@extends('layouts.app')

@section('content')
<a href="/ccru" class="btn btn-danger">Go Back</a>
<h1>CCRU Details</h1>
    <div class="row">
        <div class="col-md-12" align="center">
            <h3 style="color: green">Document Number</h3><br>
            {{$ccru->yearnnumber}}<hr style="border: 0.5px solid black; border-radius: 5px; width: 25%">

            <h3 style="color: green">Document Title</h3><br>
            {{$ccru->title}}<hr style="border: 0.5px solid black; border-radius: 5px; width: 25%">

            <h3 style="color: green">Document Details</h3><br>
            {{$ccru->detail}}<hr style="border: 0.5px solid black; border-radius: 5px; width: 25%">

            <h3 style="color: green">For Division/s</h3><br>
            @if ($ccru->for_omcc == 1)
                OMCC;
            @endif
            @if ($ccru->for_medical == 1)
                MEDICAL;
            @endif
            @if ($ccru->for_nursing == 1)
                NURSING;
            @endif
            @if ($ccru->for_hopss == 1)
                HOPSS;
            @endif
            @if ($ccru->for_finance == 1)
                FINANCE;
            @endif
            <hr style="border: 0.5px solid black; border-radius: 5px; width: 25%">
            
            <h3 style="color: green">Image and PDF</h3><br>
            @foreach ($ccru->image as $subitems)
                @if($subitems->extension == 'png')
                    <div class="card-body" align="center">
                        <img src="../uploads/ccru/{{$subitems->file}}" alt="" width="70%">
                    </div>
                @elseif($subitems->extension == 'PNG')
                    <div class="card-body" align="center">
                        <img src="../uploads/ccru/{{$subitems->file}}" alt="" width="70%">
                    </div>
                @elseif($subitems->extension == 'jpg')
                    <div class="card-body" align="center">
                        <img src="../uploads/ccru/{{$subitems->file}}" alt="" width="70%">
                    </div>
                @elseif($subitems->extension == 'JPG')
                    <div class="card-body" align="center">
                        <img src="../uploads/ccru/{{$subitems->file}}" alt="" width="70%">
                    </div>
                @elseif($subitems->extension == 'pdf')
                    <div class="card-body" align="center">
                        <a href="../uploads/pdf/ccru/{{$subitems->file}}" target="_blank" style=""><h2>Get PDF</h2></a> 
                    </div>
                @elseif($subitems->extension == 'PDF')
                    <div class="card-body" align="center">
                        <a href="../uploads/pdf/ccru/{{$subitems->file}}" target="_blank" style=""><h2>Get PDF</h2></a> 
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection

@section('style')
    <style>
        td
        {
            border: 1px solid black; 
        }
    </style>
@endsection