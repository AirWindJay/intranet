@extends('layouts.nursinglayout')

@section('content')
    <h3 id="currentmonth"></h3>
    <h1 hidden id="monitoringselect"></h1>
    @if ($mydata[0]->role_id == 4 || $mydata[0]->role_id == 9)
        <h1>Nursing Schedule Monitor <a href="/reports"><button class="btn btn-success">View Reports</button></a></h1>
    {{-- @elseif($mydata[0]->role_id == 11)
        <h1>Nursing Schedule Monitor <a href="/nurse1/reports"><button class="btn btn-success">View Reports</button></a></h1>
    @elseif($mydata[0]->role_id == 12)
        <h1>Nursing Schedule Monitor <a href="/nurse2/reports"><button class="btn btn-success">View Reports</button></a></h1> --}}
    @else
        <h1>Nursing Schedule Monitor</h1>
    @endif
    @if ($mydata[0]->role_id == 4 || $mydata[0]->role_id == 9)
        @include('nursing.select')
        @include('nursing.searcharea')
        @include('nursing.output')
    <hr>
    @endif
    @if ($mydata[0]->role_id == 11 || $mydata[0]->role_id == 12)
        @include('nursing.select')
        @include('nursing.searcharea')
        @include('nursing.output')
    <hr>
    @endif
    @if ($mydata[0]->role_id == 1)
        @include('nursing.dashboardtable')
    @endif
    @if ($mydata[0]->role_id == 4 || $mydata[0]->role_id == 9)
        @include('nursing.dashboardtableadmin')
    @endif
    @if ($mydata[0]->role_id == 11 || $mydata[0]->role_id == 12)
        @include('nursing.dashboardtableadmin')
    @endif
@endsection