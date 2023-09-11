@extends('layouts.himolayout')

@section('content')
<br>
<button class="btn btn-primary" onclick="window.location.reload()">Refresh Page</button>
<h1 align="center" style="font-family:georgia"><b> HIMO Dashboard<b></h1>
<div>
    @include('himo.dashboardtable')
</div>
@endsection
