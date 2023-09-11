@extends('layouts.app')

@section('content')

<script>
    function goBack() {
        window.history.back();
    }
</script>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<h1 align="center" style="font-family:georgia"><b>Suggestions<b></h1>
<div class="container">
    @foreach($sug as $su)
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div style="background-color: #33F3FF" class="card-header">
                        FROM: @foreach ($users as $user)
                            @if ($su->employeeid == $user->employeeid)
                                {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                            @endif
                        @endforeach 
                         ( {{ date('F d, Y', strtotime($su->created_at)) }} )
                        <a href="/message/reply/{{$su->employeeid}}"><button class="btn btn-success">View Conversation</button></a>
                    </div>
                    <div class="card-body">
                        {{$su->msg}}
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach 
</div>
@endsection
