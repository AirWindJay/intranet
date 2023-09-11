@extends('layouts.nursinglayout')

@section('content')
    <h1>Nursing Schedule Monitor = {{$currentward->ward_name}}</h1>
    @foreach ($mydata as $me)
        @if($me->role_id == 4)
            <a href="/appendnurse/{{$currentward->id}}"><button class="btn btn-success">Add Nurse</button></a>
            <a href="/nurseschedule/edit/{{$currentward->id}}"><button class="btn btn-success">Edit Schedule</button></a>
        @endif
        @if($me->role_id == 9)
            <a href="/appendnurse/{{$currentward->id}}"><button class="btn btn-success">Add Nurse</button></a>
            <a href="/nurseschedule/edit/{{$currentward->id}}"><button class="btn btn-success">Edit Schedule </button></a>
        @endif
        @if($me->role_id == 11)
            <a href="/nurse1/appendnurse/{{$currentward->id}}"><button class="btn btn-success">Add Nurse</button></a>
            <a href="/nurse1/nurseschedule/edit/{{$currentward->id}}"><button class="btn btn-success">Edit Schedule </button></a>
        @endif
    @endforeach
        <div class="ui-select">
            <div class="table-responsive" style="overflow-x:auto;">
                <h3 id="currentmonth"></h3>
                @include('nursing.nurselevel1.table')
                <hr>
                <h3>Next Month</h3>
                @include('nursing.nurselevel1.table2')
            </div>
        </div>
@endsection