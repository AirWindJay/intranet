@extends('layouts.app')

@section('content')
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
    function goBack() {
        window.history.back();
    }
</script>
</head>
<body>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<h1 align="center" style="font-family:georgia"><b>Announcements<b></h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div style="background-color: #33F3FF" class="card-header">
                    {{$announcement[0]->title}} ( {{ date('F d, Y', strtotime($announcement[0]->created_at)) }} )
                </div>
                <div class="card-body">
                        {{$announcement[0]->detail}}
                </div>

                @foreach ($animage as $subitems)
                    @if ($announcement[0]->id == $subitems->ann_id)
                        @if($subitems->extension == 'png')
                            <div class="card-body" align="center">
                                <img src="../uploads/announcements/{{$subitems->file}}" alt="" width="70%">
                            </div>
                        @elseif($subitems->extension == 'jpg')
                            <div class="card-body" align="center">
                                <img src="../uploads/announcements/{{$subitems->file}}" alt="" width="70%">
                            </div>
                        @elseif($subitems->extension == 'pdf')
                            <div class="card-body" align="center">
                                <a href="../uploads/pdf/announcements/{{$subitems->file}}" target="_blank" style=""><h2>Get File</h2></a>
                            </div>
                        @endif    
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</div>
</body>
@endsection
