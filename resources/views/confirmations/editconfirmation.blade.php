@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:#33F3FF; font-size:25px;">Announcement Updated</div>
                <div class="card-header" style="font-size:25px;">
                    @if(Auth::user()->division == 1)
                        <p>
                            <strong>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black" role="button" aria-expanded="false" href="/omcc">
                                Go To My Division
                            </a>
                            </strong>
                        </p>
                    @elseif(Auth::user()->division == 2)
                        <p>
                            <strong>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black" role="button" aria-expanded="false" href="/medical">
                                Go To My Division
                            </a>
                            </strong>
                        </p>
                    @elseif(Auth::user()->division == 3)
                        <p>
                            <strong>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black" role="button" aria-expanded="false" href="/nursing">
                                Go To My Division
                            </a>
                            </strong>
                        </p>
                    @elseif(Auth::user()->division == 4)
                        <p>
                            <strong>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black" role="button" aria-expanded="false" href="/hopss">
                                Go To My Division
                            </a>
                            </strong>
                        </p>
                    @elseif(Auth::user()->division == 5)
                        <p>
                            <strong>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black" role="button" aria-expanded="false" href="/finance">
                                Go To My Division
                            </a>
                            </strong>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
