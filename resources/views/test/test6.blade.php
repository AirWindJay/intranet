@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <marquee style="width:100%;" class="alert-danger">
                <a href="https://forms.gle/SRFDbD912hyHmVF89" target="_blank" class="btn btn-info" style="font-size: 20px">
                    <strong>
                        Kindly answer the survey on Performance Governance System Assessment
                    </strong>
                </a>
            </marquee>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 100%; height: 650px; overflow: auto;">
                <div class="card-header">Welcome to BGHMC's Intranet</div>
                <div class="card-body" style="background-color: #d6cbd3;">
                <div class="card-item" align="center">
                    <div class="row">
                        @if($mydata[0]->role_id == 9)
                            <div class="col-md-6">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" href="/webmaster/reminders">
                                            REMINDERS
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @endif

                        

                        @if($mydata[0]->role_id == 9)
                            <div class="col-md-6">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" href="/webmaster/addpost">
                                            Add Announcement
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @endif

                        <div class="col-md-6">
                            <p>
                                <strong>
                                    <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        About BGHMC
                                    </a>
                                </strong>
                            </p>
                        </div>

                    
                        <div class="collapse col-md-12" id="collapseExample">
                            <div class="card card-body" style="background-color:powderblue;">

                                    <a class="nav-item" id="collapseitems" href="/bghmchistory">
                                    History
                                    </a>
                                
                                    <a class="nav-item" id="collapseitems" href="/bghmcmvqp">
                                    Mission, Vision and Quality Policy
                                    </a>
                                
                                    <a class="nav-item" id="collapseitems" href="/bghmccoh">
                                    Chief Of Hospital
                                    </a>

                                    <a class="nav-item" id="collapseitems" href="/bghmcfunction">
                                    Function
                                    </a>
                                    
                                    <a class="nav-item" id="coll apseitems" href="bghmcorgchart">
                                    Organizational Chart
                                    </a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <p>
                                <strong>
                                    <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/intranet">
                                        About Intranet
                                    </a>
                                </strong>
                            </p>
                        </div>

                        <div class="col-md-12">
                            <p>
                                <strong>
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#servicerequestmodal" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="#">
                                        <b>Request For MIS Service</b>
                                    </a>
                                </strong>
                            </p>
                        </div>

                        @if($mydata[0]->role_id == 9)
                            <div class="col-md-12">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/servicelist">
                                            <b>Service Request List</b>
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @endif

                        @if($mydata[0]->role_id == 9)
                            <div class="col-md-12">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/admin/maintenance">
                                            <b>Admin Maintenance Service Request</b>
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @endif

                        <div class="col-md-12">
                            <p>
                                <strong>
                                    <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/myrequests">
                                        <b>My Service Request List</b>
                                    </a>
                                </strong>
                            </p>
                        </div>

                    


                        @if($mydata[0]->division == 1)
                            <div class="col-md-6">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/omcc">
                                            Go to My Division
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @elseif($mydata[0]->division == 2)
                            <div class="col-md-6">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/medical">
                                            Go to My Division
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @elseif($mydata[0]->division == 3)
                            <div class="col-md-6">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/nursing">
                                            Go to My Division
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @elseif($mydata[0]->division == 4)
                            <div class="col-md-6">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/hopss">
                                            Go to My Division
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @elseif($mydata[0]->division == 5)
                            <div class="col-md-6">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/finance">
                                            Go to My Division
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @endif


                        <div class="col-md-6">
                            <p>
                                <strong>
                                    <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Divisions
                                    </a>
                                </strong>
                            </p>
                        </div>

                        <div class="collapse col-md-12" id="collapseExample2">
                            <div class="card card-body" style="background-color:powderblue;">
                                <a class="nav-item" id="collapseitems2" href="/omcc">
                                OMCC <span><b> ( {{$countomcc}} Announcements for today )</b></span>
                                </a>
                            
                                <a class="nav-item" id="collapseitems2" href="/medical">
                                MEDICAL <span><b> ( {{$countmedical}} Announcements for today )</b></span>
                                </a>
                                
                                <a class="nav-item" id="collapseitems2" href="/nursing">
                                NURSING <span><b> ( {{$countnursing}} Announcements for today )</b></span>
                                </a>

                                <a class="nav-item" id="collapseitems2" href="/hopss">
                                HOPSS <span><b> ( {{$counthopss}} Announcements for today )</b></span>
                                </a>

                                <a class="nav-item" id="collapseitems2" href="/finance">
                                FINANCE <span><b> ( {{$countfinance}} Announcements for today )</b></span>
                                </a>
                            </div>
                        </div>

                        @if($mydata[0]->role_id == 3)
                            <div class="col-md-12">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/nurse/dashboard/{{$date2}}">
                                            <b>Nurse Scheduling Dashboard</b>
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @endif

                        @if($mydata[0]->role_id == 9)
                            <div class="col-md-12">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/nurse/dashboard/{{$date2}}">
                                            <b>Nurse Scheduling Dashboard</b>
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @endif

                        <div class="col-md-12">
                            <p>
                                <strong>
                                    <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/ccru">
                                        CCRU <span><b> ( {{$countccru}} Announcements for today )</b></span>
                                    </a>
                                </strong>
                            </p>
                        </div>

                        <div class="col-md-12">
                            <p>
                                <strong>
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#othersystemsmodal" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="#">
                                        <b>Visit Other Systems</b>
                                    </a>
                                </strong>
                            </p>
                        </div>

                        @if($mydata[0]->role_id != 9)
                            <div class="col-md-12">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/messageme">
                                            Any Suggestions? <br>( Message Programmer ) <span><b> ( {{$countsuggestionstoday2}} / {{$countsuggestions2}} )</b></span>
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @endif


                        @if($mydata[0]->role_id == 9)
                            <div class="col-md-12">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/mymessages">
                                            View Suggestions <span><b> ( {{$countsuggestionstoday}} / {{$countsuggestions}} )</b></span>
                                        </a>
                                    </strong>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/monitoring">
                                            Monitoring
                                        </a>
                                    </strong>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p>
                                    <strong>
                                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" aria-expanded="false" href="/servicerequest/reports">
                                            Service Request Reports
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        @endif

                    {{-- END OF ROW --}}
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card" style="width: 100%; height: 650px; overflow: auto;">
                <div class="card-header">Announcements From Your Division</div>
                <div class="card-body" style="background-color: #d6cbd3">
                    <div class="slideshow-container">

                        @foreach ($home_announcements as $item)
                            @foreach ($item->animage as $subitem)
                                <div class="mySlides fade" style="display: block">
                                    <img src="../uploads/announcements/{{$subitem->file}}" style="width:100%">
                                    <div class="text"></div>
                                </div>
                            @endforeach
                        @endforeach


                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-2">
            <marquee style="width:100%;" class="alert-danger">
                <a href="https://forms.gle/SRFDbD912hyHmVF89" target="_blank" class="btn btn-info" style="font-size: 20px">
                    <strong>
                        Kindly answer the survey on Performance Governance System Assessment
                    </strong>
                </a>
            </marquee>
        </div>
    </div>


    {{-- MODAL --}}
    <div class="modal fade" id="servicerequestmodal" tabindex="-1" role="dialog" aria-labelledby="servicerequestmodalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="servicerequestmodalTitle">REQUEST FOR MIS SERVICE</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST" action="/servicerequest/request/save" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Problem') }}</label>

                                <div class="col-md-6">
                                    <input list="category" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" required>
                                    <datalist id="category">
                                        <option value="Computer Installation/relocation">
                                        <option value="Computer Troubleshoot">
                                        <option value="Hardware Technical Assistance">
                                        <option value="HOMIS Installation & update">
                                        <option value="HOMIS Troubleshooting">
                                        <option value="Ink Refill">
                                        <option value="Internet Connection">
                                        <option value="Network Assistance">
                                        <option value="Network Installation">
                                        <option value="Network Troubleshoot">
                                        <option value="Printer Repair">
                                        <option value="Software Technical Assistance">
                                        <option value="Special Request">
                                    </datalist> 
                                    @if ($errors->has('category'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

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
                                <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                                <div class="col-md-6">
                                    <input list="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" required>
                                    <datalist id="location">
                                        @foreach($departments as $department)
                                            <option value="{{$department->department}}">
                                        @endforeach
                                    </datalist> 
                                    @if ($errors->has('location'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('location') }}</strong>
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
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
    </div>



    {{-- MODAL --}}
    <div class="modal fade" id="othersystemsmodal" tabindex="-1" role="dialog" aria-labelledby="othersystemsmodalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="othersystemsmodalTitle">Visit Other Systems</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://bghmc.doh.gov.ph/">
                            BGHMC Officical Webpage
                        </a>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://192.168.7.7/">
                            BGHMC HOMIS REPORTS
                        </a>
                    </div>
                        {{-- @if ($mydata[0]->department == '4')
                            <br>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/billing/dashboard">
                                Billing
                            </a>
                        @elseif ($mydata[0]->role_id == '9')
                            <br>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/billing/dashboard">
                                Billing
                            </a>
                        @endif --}}

                        
                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://192.168.6.39/">
                            BLiSS
                        </a>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://192.168.7.29/">
                            CDOE
                        </a>
                    </div>

                        {{-- @if($mydata[0]->role_id == 9)
                            <br>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="/Consignment/dashboard">
                                Consignment
                            </a>
                        @endif


                        @if($mydata[0]->role_id == 14)
                            <br>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="/Consignment/dashboard">
                                Consignment
                            </a>
                        @endif


                        @if($mydata[0]->role_id == 18)
                            <br>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="/Consignment/ENTdashboard">
                                Consignment
                            </a>
                        @endif


                        @if($mydata[0]->role_id == 19)
                            <br>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="/Consignment/ORTHOdashboard">
                                Consignment
                            </a>
                        @endif


                        @if($mydata[0]->role_id == 20)
                            <br>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="/Consignment/OPHTHAdashboard">
                                Consignment
                            </a>
                        @endif --}}

                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/Module/dashboard">
                            CF4 MONITORING
                        </a>
                    </div>

                    @if(Auth::user()->employeeid == '1610026')
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/Module/dashboard2">
                                CF4 MONITORING2
                            </a>
                        </div>
                    @endif

                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://192.168.7.30/">
                            ER Portal
                        </a>
                    </div>

                    
                    
                    @if($mydata[0]->division == 10)
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="/himo/dashboard">
                                Himo Dashboard
                            </a>
                        </div>
                    @endif

                    @if($mydata[0]->role_id == 9)
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="/himo/dashboard">
                                Himo Dashboard
                            </a>
                        </div>
                    @endif

                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://10.1.2.171/">
                            HRMIS
                        </a>
                    </div>
                        {{-- <br>
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://192.168.6.179:83/">
                            IN - PATIENT'S RECORD CHECKLIST
                        </a> --}}

                        
                    @if($mydata[0]->role_id == 9)
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/foriso/dashboard">
                                ISO System
                            </a>
                        </div>
                    @elseif($mydata[0]->role_id == 15)
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/foriso/dashboard">
                                ISO System
                            </a>
                        </div>
                    @endif

                    @foreach ($linenusers as $user)
                        @if ($user->employeeid == Auth::user()->employeeid)
                            <div class="col-sm-6 mb-3">
                                <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://192.168.6.179:81/">
                                    LINEN IS
                                </a>
                            </div>
                        @endif
                    @endforeach


                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/medicalcert/index">
                            Medical Records
                        </a>
                    </div>
                    
                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="http://192.168.6.123:81/">
                            OPD DENTAL SYSTEM
                        </a>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="http://192.168.6.172/">
                            OPD Web System
                        </a>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/PatChrgs/index">
                            Patient Charge List
                        </a>
                    </div>
                        

                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/PatientCounter/index">
                            Patient Counter
                        </a>
                    </div>
                        

                        {{-- @if($mydata[0]->role_id == 9)
                            <br>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/mmo/dashboard">
                                MMO Supply Monitoring
                            </a>
                        @endif --}}

                        {{-- @if($mydata[0]->role_id == 11)
                            <br>
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/mmo/dashboard">
                                MMO Supply Monitoring
                            </a>
                        @endif --}}
                        
                    @if ($mydata[0]->department == '53')
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/pharmacy/index">
                                Pharmacy
                            </a>
                        </div>
                    @elseif ($mydata[0]->role_id == '9')
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/pharmacy/index">
                                Pharmacy
                            </a>
                        </div>
                    @elseif ($mydata[0]->department == '4')
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/pharmacy/index">
                                Pharmacy
                            </a>
                        </div>
                    @elseif ($mydata[0]->department == '26')
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_self" aria-expanded="false" href="/pharmacy/index">
                                Pharmacy
                            </a>
                        </div>
                    @endif
                        

                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://192.168.7.122/">
                            PLMIS
                        </a>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://192.168.7.31/">
                            PeCMS
                        </a>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://192.168.6.179:82/">
                            PETRO
                        </a>
                    </div>

                    @if ($mydata2 != null)
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="/socialservices">
                                Social Services Apps
                            </a>
                        </div>
                    @elseif ($mydata[0]->role_id == 9)
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="/socialservices">
                                Social Services Apps
                            </a>
                        </div>
                    @elseif ($user_level[0]->user_level == 1)
                        <div class="col-sm-6 mb-3">
                            <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="/socialservices">
                                Social Services Apps
                            </a>
                        </div>
                    @endif


                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="http://192.168.6.172/">
                            UNDER FIVE
                        </a>
                    </div>
                        
                    <div class="col-sm-6 mb-3">
                        <a class="btn btn-primary" style="background-color:#33F3FF; color:black; width:100%;" role="button" target="_blank" aria-expanded="false" href="/watchid/index">
                            WATCHER'S ID MONITORING
                        </a> 
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].hide();
        }
        slides[1].show();
        }
    </script>
@endsection

@section('style')
    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
        right: 0;
        border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
        }
    </style>
@endsection