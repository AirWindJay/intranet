@extends('layouts.adminlayout')

@section('content')
    <h1 align="center" style="font-family:georgia"><b>Reminders<b></h1>
    <div class="container">
        <div class="col-md-12 mb-5">
            <form action="/webmaster/editreminders/save" method="post">
                @csrf
                <input type="text" id="id" name="id" value="{{$reminder->id}}" hidden>
                <textarea name="reminder" id="reminder" cols="30" rows="10" class="form-control">{{$reminder->reminders}}</textarea>
                <hr>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection


@section('style')
    
@endsection

@section('script')
    
@endsection