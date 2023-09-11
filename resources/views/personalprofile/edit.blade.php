@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            
            
        </div>

        <div class="col-lg-8">
            
            <h2>Name:</h2>
            <h3>{{ $hpersonal[0]->lastname }}, {{ $hpersonal[0]->firstname }} {{ $hpersonal[0]->middlename }}</h3>

            <hr>

            <form method="POST" action="/myprofile/save" enctype="multipart/form-data">
                @csrf

                <h2>Nickname</h2>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input id="nick_name" type="text" class="form-control" name="nick_name" value="{{ $user->nick_name }}">
                        </div>
                    </div>
                
                <hr>

                <h2>Birthdate</h2> MM-DD-YYYY
                    <div class="form-group row">
                        <div>
                            <input id="birthdate" type="date" name="birthdate" class="form-control" value="{{date('Y-m-d', strtotime($user->birthdate))}}">
                        </div>
                    </div>
                <hr>

                <h2>Saying</h2>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <textarea style="height:200px" id="fav_saying" type="text" class="form-control" name="fav_saying">{{ $user->fav_saying }}</textarea>
                        </div>
                    </div>
                    
                <hr>
    
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <input type="submit" class="btn btn-primary" value="SUBMIT" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection