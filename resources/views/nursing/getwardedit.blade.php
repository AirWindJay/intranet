@extends('layouts.nursinglayout')

@section('content')
    <button class="btn btn-default" onclick="goBack()">Go Back</button>
    <h1>Nursing Schedule Monitor = {{$currentward->ward_name}}</h1>
    <form method="POST" action="/nurseschedule/edit/save">
        @csrf
        <div class="col-md-6">
            <input id="ward_id" type="ward_id" hidden class="form-control{{ $errors->has('ward_id') ? ' is-invalid' : '' }}" name="ward_id" value={{$currentward->id}}>
    
            @if ($errors->has('ward_id'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('ward_id') }}</strong>
                </span>
            @endif
        </div>
        <div class="ui-select">
            <div class="table-responsive">
                <h3 id="currentmonth"></h3>
                @include('nursing.edittable')
                <hr>
                <h3>Next Month</h3>
                @include('nursing.edittable2')
            </div>
        </div>
        <button style="margin-top: 10px;" type="submit" class="btn btn-success">SAVE</button>
    </form>
@endsection