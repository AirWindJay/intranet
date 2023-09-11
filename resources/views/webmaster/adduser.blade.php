@extends('layouts.adminlayout')

@section('content')
<h1 align="center" style="font-family:georgia"><b>Add Users<b></h1>
<div class="container">
    <div>
        <div class="col-md-10">
            

            <form method="POST" action="/adduser/save">
                @csrf

                <div class="form-group row">
                    <label for="employeeid" class="col-md-4 col-form-label text-md-right">{{ __('Employee ID') }}</label>

                    <div class="col-md-6">
                        <input id="employeeid" type="employeeid" class="form-control{{ $errors->has('employeeid') ? ' is-invalid' : '' }}" name="employeeid" value="{{ old('employeeid') }}" required>

                        @if ($errors->has('employeeid'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('employeeid') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                    <div class="col-md-6">
                        <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                    <div class="col-md-6">
                        <input id="fname" type="fname" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required>

                        @if ($errors->has('fname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('fname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                    <div class="col-md-6">
                        <input id="mname" type="mname" class="form-control{{ $errors->has('mname') ? ' is-invalid' : '' }}" name="mname" value="{{ old('mname') }}">

                        @if ($errors->has('mname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('mname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                    <div class="col-md-6">
                        <input id="lname" type="lname" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required>

                        @if ($errors->has('lname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('lname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="postitle" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                    <div class="col-md-6">
                        <input id="postitle" type="postitle" class="form-control{{ $errors->has('postitle') ? ' is-invalid' : '' }}" name="postitle" value="{{ old('postitle') }}" required>

                        @if ($errors->has('postitle'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('postitle') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
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