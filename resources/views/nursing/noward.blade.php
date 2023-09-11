@extends('layouts.nursinglayout')

@section('content')
    <h3 hidden id="currentmonth"></h3>
    <button class="btn btn-default" onclick="goBack()">Go Back</button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td align="center">
                    List Of Not Assigned Nurses
                </td>
            </tr> 
        </thead>
        <tbody>
             @foreach($notregistered as $nurse)
                <tr>
                    <td>
                        @foreach($hpersonal2 as $user)
                            @if($nurse->employeeid == $user->employeeid)
                                {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}} 
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection