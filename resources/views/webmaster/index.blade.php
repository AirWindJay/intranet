@extends('layouts.adminlayout')

@section('content')

<script>
    function goBack() {
        window.history.back();
    }
</script>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<div class="container">
    <div>
        <div class="col-md-10 table-responsive">
            
            <form method="POST" action="/update/date">
                @csrf
                
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="thismonth" type="thismonth" name="thismonth" required>

                        @if ($errors->has('thismonth'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('thismonth') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="nextmonth" type="nextmonth" name="nextmonth" required>

                        @if ($errors->has('nextmonth'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nextmonth') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                
                <button type="submit" onclick="return confirm('Confirm?');" class="btn btn-success btn-sm">
                    {{ __('UPDATE') }}
                </button>
            </form>
            <hr>
            PRINT BEFORE UPDATING
            <br>
            <button class="w3-bar-item w3-button" onclick="updatenursing()">UPDATE NURSING</button>
            <hr>

        </div>
    </div>
</div>
<div>
    <table align="center" class="table-dark" style="width: 70%; border: 1px solid white">
        <thead>
            <tr style="border: 1px solid white">
                <td>
                    Name
                </td>
                <td>
                    Department
                </td>
                <td>
                    Division
                </td>
                <td>
                    Role
                </td>
                <td>
                    Action
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr style="border: 1px solid white">
                    <td>
                        {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                    </td>
                    <td>
                        @foreach ($departments as $department)
                            @if ($department->id == $user->department)
                                {{$department->department}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @if ($user->division == '1')
                            OMCC
                        @elseif ($user->division == '2')
                            MEDICAL
                        @elseif ($user->division == '3')
                            NURSING
                        @elseif ($user->division == '4')
                            HOPSS
                        @elseif ($user->division == '5')
                            FINANCE
                        @endif
                    </td>
                    <td>
                        {{$user->role_id}}
                    </td>
                    <td>
                        <a href="/usermanagementwebmaster/edit/{{$user->employeeid}}"><button class="btn btn-dark">EDIT</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


@section('style')
    
@endsection

@section('script')
    
@endsection