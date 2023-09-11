@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            
            
        </div>

        <div class="col-lg-8">
            
            <h2>Name:</h2>
            <h3>{{ $hpersonal[0]->lastname }}, {{ $hpersonal[0]->firstname }} {{ $hpersonal[0]->middlename }}</h3>

            <hr>

            <h2>Nickname</h2>
                @foreach ($userprofile as $item)
                    <h3>{{ $item->nick_name }}</h3>
                @endforeach
            
            <hr>

            <h2>Birthdate</h2>
                @foreach ($userprofile as $item)
                    <h3>{{date('F d Y', strtotime($item->birthdate))}}</h3>
                @endforeach
            <hr>

            <h2>Saying</h2>
                @foreach ($userprofile as $item)
                    <h3>{{ $item->fav_saying }}</h3>
                @endforeach
                
            <hr>

            <a href="/myprofile/{{Auth::user()->employeeid}}"><button class="btn btn-success">EDIT (OPTIONAL)</button></a>
        </div>
    </div>
@endsection