@extends('layouts.nursinglayout')
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <td align="center">
                    <h1>Select Ward</h1>
                </td>
            </tr> 
        </thead>
        <tbody align="center">
            <tr>
                <td>
                    {{ $fornursings[0]->lastname }}, {{ $fornursings[0]->firstname }} {{ $fornursings[0]->middlename }}
                </td>
            </tr>
            <tr>
                <td>
                    <form method="POST" action="/nurse2/replace/ward/save">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="employeeid" hidden type="employeeid" class="form-control{{ $errors->has('employeeid') ? ' is-invalid' : '' }}" name="employeeid" value="{{$id}}" required>

                                @if ($errors->has('employeeid'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('employeeid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ward" class="col-md-4 col-form-label text-md-right">{{ __('Select Ward') }}</label>

                            <div class="col-md-6">
                                <select id="ward" type="ward" class="form-control{{ $errors->has('ward') ? ' is-invalid' : '' }}" name="ward">
                                    @foreach ($wards as $ward)
                                        @if ($myward[0]->ward_id == $ward->id)
                                        {
                                            <option selected value="{{$ward->id}}">{{$ward->ward_name}}</option>
                                        }
                                        @else
                                        {
                                            <option value="{{$ward->id}}">{{$ward->ward_name}}</option>
                                        }   
                                        @endif
                                    @endforeach
                                </select>

                                @if ($errors->has('ward'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ward') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection