@extends('layouts.nursinglayout')
@section('content')
    <h3 hidden id="currentmonth"></h3>
    <button class="btn btn-default" onclick="goBack()">Go Back</button>
    <hr>
    <a href="/print2/list2" target="_blank"><button class="btn btn-success" style="width: 25%">PRINT</button></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td align="center">
                    Total List Nurses
                </td>
                <td align="center">
                    Ward
                </td>
                <td align="center">
                    Action
                </td>
            </tr> 
        </thead>
        <tbody>
            @foreach($fornursing as $nurse)
                <tr>
                    <td>
                        {{$nurse->lastname}}, {{$nurse->firstname}} {{$nurse->middlename}}
                        {{-- {{$nurse->employeeid}} --}}
                    </td>
                    <td>
                        @foreach ($wards as $ward)
                            @if ($nurse->ward_id == $ward->id)
                                {{$ward->ward_name}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        <a href="/nurse2/remove/ward/{{$nurse->employeeid}}"><button onclick="return confirm('Remove Ward Confirm?');" class="btn btn-danger">Remove Ward</button></a>
                        <a href="/nurse2/replace/ward/{{$nurse->employeeid}}"><button onclick="return confirm('Replace Ward Confirm?');" class="btn btn-success">Replace Ward</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection