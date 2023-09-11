@extends('layouts.app')

@section('content')

<h1 align="center" style="font-family:georgia"><b>Customer Satisfaction Survey (Online Version)<b></h1>
<div class="container">
    <div>
        <div class="col-md-12">
            <label class="col-form-label">{{ __('In pursuit of service excellence, we would like to get your comments/ suggestions. We will appreciate it if you can spend a moment to answer the survey, Thank You') }}</label>
            @foreach ($services as $service)
                <form method="POST" action="/adminmyrequests/acknowledge/save" enctype="multipart/form-data">
                @csrf
                    <hr style="border:3px solid grey">
                    <div class="form-group row">
                        

                        <div class="col-md-6">
                            <label class="col-form-label text-md-right">{{ __('Are You a BGHMC employee?') }}</label><br>
                            <input type="radio" name="bghmc_employee" id="bghmc_employee" value="1">Yes
                            <input type="radio" name="bghmc_employee" id="bghmc_employee" value="0">No
                        </div>
                    </div>
                    <hr style="border:3px solid grey">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('What Is The Purpose Of Your Visit/Transaction?') }}</label>

                        <div class="col-md-6">
                            <input style="margin-bottom: 15px" type="checkbox" name="purpose1" value="1">Patient Medical Treatment<br>
                            <input style="margin-bottom: 15px" type="checkbox" name="purpose2" value="1">Submit Report/Documents<br>
                            <input style="margin-bottom: 15px" type="checkbox" name="purpose3" value="1">Inquire, Request data, Request documents<br>
                            <input style="margin-bottom: 15px" type="checkbox" name="purpose4" value="1" checked>Seek Technical Assistance<br>
                            <input style="margin-bottom: 15px" type="checkbox" name="purpose5" value="1">Interview, Research<br>
                            <input style="margin-bottom: 15px" type="checkbox" name="purpose6" value="1">Follow-up Documents<br>
                            <input style="margin-bottom: 15px" type="checkbox" name="purpose7" value="1">Apply for:
                            <input style="margin-bottom: 15px" type="checkbox" name="purpose7_1" value="1">Certification
                            <input style="margin-bottom: 15px" type="checkbox" name="purpose7_2" value="1">Authentication<br>
                            <input style="margin-bottom: 15px" type="checkbox" name="purpose8" value="1">Others(Please Specify)
                            <input style="margin-bottom: 15px" id="purpose_others" type="text" class="form-control" name="purpose_others">
                        </div>
                    </div>
                    <hr style="border:3px solid grey">


                    <div class="form-group row">
                        <div class="col-md-12">
                            <label class="col-form-label text-md-right">{{ __('How long did you wait before you accomplished the purpose of you visit/transaction?') }}</label><br>
                            <input style="margin-left:25px" type="radio" name="timer" id="timer" value="0">Minute/s<br>
                            <input style="margin-left:25px" type="radio" name="timer" id="timer" value="1">Hour/s<br>
                            <input style="margin-left:25px" type="radio" name="timer" id="timer" value="2">Day/s<br>
                            <input style="margin-left:25px" type="radio" name="timer" id="timer" value="3">Week/s<br>
                            <input style="margin-left:25px" type="radio" name="timer" id="timer" value="4">Month/s
                        </div>
                    </div> 

                    <hr style="border:3px solid grey">
                    
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label class="col-form-label text-md-right">{{ __('Please Check the for your appropriate answer') }}</label>
                            <table class="table-bordered" style="width: 100%">
                                <thead>
                                    <tr align="center">
                                        <th style="width: 40%">
                                            Statement
                                        </th>
                                        <th style="padding-top: 10px; padding-bottom: 10px">
                                            Strongly Agree
                                        </th>
                                        <th>
                                            Agree
                                        </th>
                                        <th>
                                            Disagree
                                        </th>
                                        <th>
                                            Strongly Disagree
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding-top: 10px; padding-bottom: 10px">
                                            Received the appropriate services needed
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey1" id="survey1" value="1">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey1" id="survey1" value="2">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey1" id="survey1" value="3">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey1" id="survey1" value="4">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-top: 10px; padding-bottom: 10px">
                                            Timely response was given
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey2" id="survey2" value="1">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey2" id="survey2" value="2">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey2" id="survey2" value="3">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey2" id="survey2" value="4">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-top: 10px; padding-bottom: 10px">
                                            The staff was well informed
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey3" id="survey3" value="1">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey3" id="survey3" value="2">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey3" id="survey3" value="3">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey3" id="survey3" value="4">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-top: 10px; padding-bottom: 10px">
                                            The staff was courteous/ approachable
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey4" id="survey4" value="1">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey4" id="survey4" value="2">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey4" id="survey4" value="3">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey4" id="survey4" value="4">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-top: 10px; padding-bottom: 10px">
                                            The services rendered were just, honest and fair
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey5" id="survey5" value="1">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey5" id="survey5" value="2">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey5" id="survey5" value="3">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey5" id="survey5" value="4">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-top: 10px; padding-bottom: 10px">
                                            The Workplace was clean & organized
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey6" id="survey6" value="1">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey6" id="survey6" value="2">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey6" id="survey6" value="3">
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="survey6" id="survey6" value="4">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <hr style="border:3px solid grey">
                    <div class="form-group row">
                        

                        <div class="col-md-6">
                            <label class="col-form-label text-md-right">{{ __('As a whole, are you satisfied with the service received?') }}</label><br>
                            <input type="radio" name="satisfied" id="satisfied" value="1">Yes
                            <input type="radio" name="satisfied" id="satisfied" value="0">No
                        </div>
                    </div>
                    
                    <hr style="border:3px solid grey">
                    <div class="form-group row">
                        <div class="col-md-6">
                        <input id="id" type="id" hidden class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{$service->id}}" required>

                            @if ($errors->has('id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    

                    <div class="form-group row">    
                        
                        
                        <div class="col-md-12">
                            <label for="ack_remarks" class="col-form-label text-md-right">{{ __('Remarks/Comments/Acknowledgement/Comments/Suggestions') }}</label>
                            <textarea style="height:250px" id="ack_remarks" type="ack_remarks" class="form-control" name="ack_remarks" value="{{ old('ack_remarks') }}"></textarea>

                            @if ($errors->has('ack_remarks'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ack_remarks') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{-- <hr style="border:3px solid grey">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Rate My Performance ') }}</label>

                        <div class="col-md-6">
                            <input type="radio" name="rating" value="5"> 5 - Outstanding<br>
                            <input type="radio" name="rating" value="4"> 4 - Very Satisfactory<br>
                            <input type="radio" name="rating" value="3"> 3 - Satisfactory<br>
                            <input type="radio" name="rating" value="2"> 2 - Fair<br>
                            <input type="radio" name="rating" value="1"> 1 - Poor
                        </div>
                    </div> --}}
                    <hr style="border:3px solid grey">
                    <div class="form-group row">
                        <label class="col-form-label text-md-right">{{ __('(Optional)') }}</label><br>

                        <div class="col-md-12">
                        <label class="col-form-label text-md-right">{{ __('Requester Name ') }}</label>
                        <input id="requester_name" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="requester_name">
                        
                        <label class="col-form-label text-md-right">{{ __('Address') }}</label>
                        <input id="requester_address" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="requester_address">
                        
                        <label class="col-form-label text-md-right">{{ __('Contact Number') }}</label>
                        <input id="requester_contact" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="requester_contact">
                        </div>
                    </div>

                    <hr style="border:3px solid grey">

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary" value="SUBMIT" name="submit" style="margin-bottom: 50px; width: 50%">
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
