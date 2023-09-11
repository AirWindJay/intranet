@extends('layouts.adminlayout')

@section('content')

<script>
    function goBack() {
        window.history.back();
    }
</script>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<h1 align="center" style="font-family:georgia"><b>Edit User<b></h1>
<div class="container">
    <div>
        <div class="col-md-10">
            

            <form method="POST" action="/usermanagementwebmaster/edit/save">
                @csrf

                <div class="form-group row">

                    <label for="name" class="col-md-4 col-form-label text-md-right">('{{$user[0]->lastname}}, {{$user[0]->firstname}} {{$user[0]->middlename}}')</label>

                    <div class="col-md-6">
                    <input hidden id="employeeid" type="employeeid" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="employeeid" value="{{$user[0]->employeeid}}" required>

                        @if ($errors->has('id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                    <div class="col-md-6">
                    <input id="role_id" type="role_id" class="form-control{{ $errors->has('role_id') ? ' is-invalid' : '' }}" name="role_id" value="{{$user[0]->role_id}}" required>

                        @if ($errors->has('role_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('role_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                    <div class="col-md-6">
                        <select id="department" type="department" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department">
                            
                            <optgroup label="OMCC">
                                @foreach ($departmentOMCC as $deps)
                                    <option value="{{$deps->id}}">{{$deps->department}}</option>
                                @endforeach
                            </optgroup>

                            <optgroup label="MEDICAL">
                                @foreach ($departmentMEDICAL as $deps)
                                    <option value="{{$deps->id}}">{{$deps->department}}</option>
                                @endforeach
                            </optgroup>

                            <optgroup label="NURSING">
                                    <option value="88">Nursing</option>
                            </optgroup>

                            <optgroup label="HOPSS">
                                @foreach ($departmentHOPSS as $deps)
                                    <option value="{{$deps->id}}">{{$deps->department}}</option>
                                @endforeach
                            </optgroup>

                            <optgroup label="FINANCE">
                                @foreach ($departmentFINANCE as $deps)
                                    <option value="{{$deps->id}}">{{$deps->department}}</option>
                                @endforeach
                            </optgroup>

                        </select>

                        @if ($errors->has('department'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('department') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div align="center">
                    @foreach ($departments as $department)
                        @if ($user[0]->department == $department->id)
                            {{$department->department}}
                        @endif
                    @endforeach
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection


@section('style')
    
@endsection

@section('script')
    
@endsection