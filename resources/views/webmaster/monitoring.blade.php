@extends('layouts.adminlayout')

@section('content')
        <div align="center">
            <h1>Admin Dashboard</h1>
        </div>
        <div class="container" align="center">
            <div class="row" style="width: 150%; margin-left: -100px">
                <div class="col-md-3" style="border: 4px solid white; color:white; margin-left: 10px; margin-right: 10px; height: 350px; background-color:black">
                    <h1>Total Services</h1><h1> {{$counttotalservicerequest}}</h1><hr>
                    <h1>Services Today</h1><h1> {{$counttodayservicerequest}}</h1>
                </div>
                <div class="col-md-3" style="border: 4px solid white; color:white; margin-left: 10px; margin-right: 10px; height: 350px; background-color:black">
                    <h1>Total Announcements</h1><h1> {{$counttotalannouncement}}</h1><hr>
                    <h1>Announcements Today</h1><h1> {{$counttodayannouncement}}</h1>
                </div>
                <div class="col-md-3" style="border: 4px solid white; color:white; margin-left: 10px; margin-right: 10px; height: 350px; background-color:black">
                    <h1>Total CCRU Announcements</h1><h1> {{$counttotalccru}}</h1><hr>
                    <h1>CCRU Announcements Today</h1><h1> {{$counttodayccru}}</h1>
                </div>
            </div>
            <hr>
            <div class="row" style="width: 150%; margin-left: -100px">
                <div class="col-md-3" style="border: 4px solid white; color:white; margin-left: 10px; margin-right: 10px; height: 350px; background-color:black">
                    <h1>Total Users</h1><h1> {{$countusers}}</h1>
                </div>
                <div class="col-md-3" style="border: 4px solid white; color:white; margin-left: 10px; margin-right: 10px; height: 350px; background-color:black">
                    <h1>Total Messages</h1><h1> {{$countsuggestions}}</h1>
                </div>
                <div class="col-md-3" style="border: 4px solid white; color:white; margin-left: 10px; margin-right: 10px; height: 350px; background-color:black"></div>
            </div>
        </div>
@endsection


@section('style')
    
@endsection

@section('script')
    
@endsection