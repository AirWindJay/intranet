@extends('layouts.nursinglayout')

@section('content')
    <h3 hidden id="currentmonth"></h3>
    <h1>Report Generator</h1>
        
    
    {{--FORM  --}}
        <form method="POST" name="reportform" action="/report/generator/save" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="employeeid" class="col-md-4 col-form-label text-md-right">{{ __('Nurse') }}</label>

                <div class="col-md-6">
                    <select id="employeeid" type="employeeid" class="form-control{{ $errors->has('employeeid') ? ' is-invalid' : '' }}" name="employeeid">
                        @foreach ($fornursing as $nurse)
                            @if ($id == $nurse->employeeid)
                                <option selected value="{{$nurse->employeeid}}">{{$nurse->lastname}}, {{$nurse->firstname}} {{$nurse->middlename}}</option>
                            @endif
                                <option value="{{$nurse->employeeid}}">{{$nurse->lastname}}, {{$nurse->firstname}} {{$nurse->middlename}}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('employeeid'   ))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('employeeid') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                <div class="col-md-6">
                    <input type="checkbox" name="for_absent" value="1">ABSENT<br>
                    <input type="checkbox" name="for_late" value="1">LATE<br>
                    <input type="checkbox" name="for_undertime" value="1">UNDERTIME<br>
                    <input type="checkbox" name="for_reentry" value="1">RE-ENTRY / REPORTED FOR DUTY<br>
                </div>
            </div>
            <hr>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">{{ __('Validity') }}</label>

                <div class="col-md-6">
                    <input type="checkbox" name="for_valid" id="for_valid" onclick="return form1()" value="1">Valid<br>
                    <input type="checkbox" name="for_invalid" id="for_invalid" onclick="return form1()" value="1">Invalid<br>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">{{ __('Notification') }}</label>

                <div class="col-md-6">
                    <input type="checkbox" name="for_notified" id="for_notified" onclick="return form2()" value="1">Notified<br>
                    <input type="checkbox" name="for_notnotified" id="for_notnotified" onclick="return form2()" value="1">Not Notified<br>
                </div>
            </div>
            <hr>

            <div class="form-group row">
                <label for="remarks" class="col-md-4 col-form-label text-md-right">{{ __('Remarks') }}</label>

                <div class="col-md-6">
                    <textarea style="height:200px" id="remarks" type="remarks" class="form-control{{ $errors->has('remarks') ? ' is-invalid' : '' }}" name="remarks" value="{{ old('remarks') }}" required></textarea>

                    @if ($errors->has('remarks'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('remarks') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('date') }}</label>

                <div class="col-md-6">
                    <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="<?php echo date("Y-m-d");?>">

                    @if ($errors->has('date'   ))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


                <hr>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <input type="submit" class="btn btn-primary" value="SUBMIT" name="submit">
                </div>
            </div>
        </form>
    {{-- END FORM --}}




    {{-- SCRIPTS --}}


    <script>
        
        function form1()
        {

            var NewCount1 = 0

            if (document.reportform.for_valid.checked)
            {NewCount1 = NewCount1 + 1}

            if (document.reportform.for_invalid.checked)
            {NewCount1 = NewCount1 + 1}


            if (NewCount1 == 2)
            {
            alert('Alert')
            document.reportform; return false;
            }
        }

        function form2()
        {

            var NewCount2 = 0

            if (document.reportform.for_notified.checked)
            {NewCount2 = NewCount2 + 1}

            if (document.reportform.for_notnotified.checked)
            {NewCount2 = NewCount2 + 1}

            if (NewCount2 == 2)
            {
            alert('Alert')
            document.reportform; return false;
            }
        }
    </script>
@endsection 