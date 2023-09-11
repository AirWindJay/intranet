@extends('layouts.app')

@section('content')

<script>
    function goBack() {
        window.history.back();
    }
</script>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<h1 align="center" style="font-family:georgia"><b>FINANCE ANNOUCEMENTS<b></h1>
<div class="container"> 
    @if($mydata[0]->role_id == 6)
        <a class="btn btn-primary" style="margin-bottom:10px;" href="/announcement/add">Post New Announcement</a>
    @endif
    @if($mydata[0]->role_id == 9)
        <a class="btn btn-primary" style="margin-bottom:10px;" href="/announcement/add">Post New Announcement</a>
    @endif
    @foreach($announcement as $ann)
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div style="background-color: #33F3FF" class="card-header">
                        {{$ann->title}} ( {{ date('F d, Y', strtotime($ann->created_at)) }} )
                        @if($mydata[0]->role_id == 9)
                            <a class="btn btn-success btn-sm pull-right" style="margin-left: 91%;" href="/announcement/edit/{{$ann->id}}">Edit</a>
                            <form method="POST" action="/announcement/delete">
                                @csrf
                                <div class="form-group row">
                                        <div class="col-md-6">
                                            <input id="id" hidden type="id" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{$ann->id}}" required>
                    
                                            @if ($errors->has('id'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                <button type="submit" onclick="return confirm('Delete Post?');" class="btn btn-danger btn-sm pull-right" style="margin-left: 90%;">
                                    {{ __('Delete') }}
                                </button>
                            </form>
                        @endif
                        @if($mydata[0]->role_id == 6)
                            <a class="btn btn-success btn-sm pull-right" style="margin-left: 91%;" href="/announcement/edit/{{$ann->id}}">Edit</a>
                            <form method="POST" action="/announcement/delete">
                                @csrf
                                
                                <div class="form-group row">
                                        <div class="col-md-6">
                                            <input id="id" hidden type="id" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{$ann->id}}" required>
                    
                                            @if ($errors->has('id'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                <button type="submit" onclick="return confirm('Delete Post?');" class="btn btn-danger btn-sm pull-right" style="margin-left: 90%;">
                                    {{ __('Delete') }}
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="card-body">
                        {{$ann->detail}}
                    </div>

                    @foreach ($animage as $subitems)
                        @if ($subitems->ann_id == $ann->id)
                            @if($subitems->extension == 'png')
                                <div class="card-body" align="center">
                                    <img src="../uploads/announcements/{{$subitems->file}}" alt="" width="50%">
                                </div>
                            @elseif($subitems->extension == 'jpg')
                                <div class="card-body" align="center">
                                    <img src="../uploads/announcements/{{$subitems->file}}" alt="" width="50%">
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
        <hr>
    @endforeach 
</div>
@endsection
