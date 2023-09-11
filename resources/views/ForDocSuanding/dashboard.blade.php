@extends('layouts.modulelayout')

@section('content')
    <div style="width: 100%; height: 800px; overflow: auto;">
        <div class="row">
            @if ($hpersonal[0]->user_level != '')
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Generate List of Patients With CF4</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/Module/patients" enctype="multipart/form-data">
                                @csrf
                                {{-- <label for="generate_type">SELECT ALL/IN-PATIENT/EMERGENCY ROOM/OUT-PATIENT DEPARTMENT</label>
                                <select name="generate_type" id="generate_type" class="form-control mt-2 mb-2">
                                    <option value="1">All</option>
                                    <option value="ADM">IN-PATIENT</option>
                                    <option value="ER">EMERGENCY ROOM</option>
                                    <option value="OPD">OUT-PATIENT DEPARTMENT</option>
                                </select> --}}

                                <label for="ward_name">SELECT WARD</label>
                                <select name="ward_name" id="ward_name" class="form-control mt-2 mb-2">
                                    <optgroup label="OPD">
                                        <option value="OUT PATIENT DEPARTMENT">OUT PATIENT DEPARTMENT</option>
                                    </optgroup>
                                    <optgroup label="ER">
                                        <option value="EMERGENCY ROOM">EMERGENCY ROOM</option>
                                    </optgroup>
                                    <optgroup label="ADM">
                                        @foreach ($wards as $ward)
                                            <option value="{{$ward->ward}}">{{$ward->ward}}</option>
                                        @endforeach
                                    </optgroup>
                                        
                                        
                                </select>

                                <label for="stat_type">SELECT ALL/CURRENTLY ADMITTED/DISCHARGED</label>
                                <select name="stat_type" id="stat_type" class="form-control mt-2 mb-2">
                                    <option value="ALL">All</option>
                                    <option value="A">CURRENTLY ADMITTED</option>
                                    <option value="I">DISCHARGED</option>
                                </select>

                                <label for="iscomplete">SELECT ALL/INCOMPLETE CF4/COMPLETE CF4</label>
                                <select name="iscomplete" id="iscomplete" class="form-control mt-2 mb-2">
                                    <option value="ALL">ALL</option>
                                    <option value="incom">SHOW INCOMPLETE CF4</option>
                                    <option value="com">SHOW COMPLETE CF4</option>
                                </select>

                                
                                
                                <div class="form-group row mb-0">
                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-primary" value="Generate List" name="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Note</h3>
                    </div>
                    <div class="card-body">
                        <h5>All Patients to be included in the list are March 1, 2019 - Present Admissions only</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                
            <hr>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Generate List Of Patients With Incomplete CF4 via Discharge Date</h3>
                    </div>
                    <div class="card-body">
                        
                        <form method="POST" action="/Module/patients2" enctype="multipart/form-data">
                            @csrf
                            <h5>Select Discharge Date</h5>
                            <label for="datefrom">DATE FROM:</label>
                            <input class="form-control" type="date" id="datefrom" name="datefrom">
                            
                            <label for="dateto">DATE TO:</label>
                            <input class="form-control" type="date" id="dateto" name="dateto">
                            <br>
                            <label for="iscomplete">SELECT ALL/INCOMPLETE CF4/COMPLETE CF4</label>
                            <select name="iscomplete" id="iscomplete" class="form-control mt-2 mb-2">
                                <option value="ALL">ALL</option>
                                <option value="incom">SHOW INCOMPLETE CF4</option>
                                <option value="com">SHOW COMPLETE CF4</option>
                            </select>
                            <br>
                            <label for="dept">SELECT DEPARTMENT</label>
                            <select name="dept" id="dept" class="form-control mt-2 mb-2">
                                <option value="1">ALL</option>
                                {{-- @foreach ($depts as $dept)
                                    <option value="{{$dept->tsdesc2}}">{{$dept->tsdesc2}}</option>
                                @endforeach --}}
                                {{-- <option value="DENTAL">DENTAL</option>
                                <option value="ENT-HNS">ENT-HNS</option>
                                <option value="HEMODIALYSIS">HEMODIALYSIS</option>
                                <option value="MEDICINE">MEDICINE</option>
                                <option value="OBSTETRICS AND GYNECOLOGY">OBSTETRICS AND GYNECOLOGY</option>
                                <option value="OPHTHALMOLOGY">OPHTHALMOLOGY</option>
                                <option value="ORTHOPEDICS">ORTHOPEDICS</option>
                                <option value="PEDIATRICS">PEDIATRICS</option>
                                <option value="PSYCHIATRY">PSYCHIATRY</option>
                                <option value="RADIOLOGY">RADIOLOGY</option>
                                <option value="RADIOLOGY ONCOLOGY">RADIOLOGY ONCOLOGY</option>
                                <option value="SURGERY">SURGERY</option> --}}

                                <option value="ABTC">ABTC</option>
                                <option value="ADVISORY BOARD">ADVISORY BOARD</option>
                                <option value="AMBULATORY CARE">AMBULATORY CARE</option>
                                <option value="CHEMOTHERAPY">CHEMOTHERAPY</option>
                                <option value="DENTAL">DENTAL</option>
                                <option value="DIAGNOSTIC CENTER">DIAGNOSTIC CENTER</option>
                                <option value="DRUG REHAB">DRUG REHAB</option>
                                <option value="DSWD">DSWD</option>
                                <option value="ED-CORNEA">ED-CORNEA</option>
                                <option value="EMPLOYEE HEALTH SERVICE">EMPLOYEE HEALTH SERVICE</option>
                                <option value="ENT ENDOSCOPY">ENT ENDOSCOPY</option>
                                <option value="ENT ONCO">ENT ONCO</option>
                                <option value="ENT PAY">ENT PAY</option>
                                <option value="ENT PEDIATRIC">ENT PEDIATRIC</option>
                                <option value="ENT-HNS">ENT-HNS</option>
                                <option value="FAMILY MEDICINE">FAMILY MEDICINE</option>
                                <option value="FAMILY PLANNING">FAMILY PLANNING</option>
                                <option value="GLAUCOMA">GLAUCOMA</option>
                                <option value="GYNE ONCO">GYNE ONCO</option>
                                <option value="GYNECOLOGY">GYNECOLOGY</option>
                                <option value="HEAD, NECK SURGERY">HEAD, NECK SURGERY</option>
                                <option value="HEMODIALYSIS">HEMODIALYSIS</option>
                                <option value="INDUSTRIAL CLINIC">INDUSTRIAL CLINIC</option>
                                <option value="INTEGRATIVE CLINIC">INTEGRATIVE CLINIC</option>
                                <option value="LARYNGOLOGY BRONCHOESOPHALOGY">LARYNGOLOGY BRONCHOESOPHALOGY</option>
                                <option value="MAIP">MAIP</option>
                                <option value="MALASAKIT CENTER">MALASAKIT CENTER</option>
                                <option value="MAXILLOFACIAL PLASTICS & RECON">MAXILLOFACIAL PLASTICS & RECON</option>
                                <option value="MED. SENIOR">MED. SENIOR</option>
                                <option value="MEDICAL ASSISTANCE PROGRAM">MEDICAL ASSISTANCE PROGRAM</option>
                                <option value="MEDICAL SOCIAL WORKER OFFICE">MEDICAL SOCIAL WORKER OFFICE</option>
                                <option value="MEDICINE">MEDICINE</option>
                                <option value="MEDICINE - CARDIO">MEDICINE - CARDIO</option>
                                <option value="MEDICINE - CONTINUITY">MEDICINE - CONTINUITY</option>
                                <option value="MEDICINE - DIABETOLOGY">MEDICINE - DIABETOLOGY</option>
                                <option value="MEDICINE - GASTROENTEROLOGY">MEDICINE - GASTROENTEROLOGY</option>
                                <option value="MEDICINE - HEMA ONCO">MEDICINE - HEMA ONCO</option>
                                <option value="MEDICINE - IDS">MEDICINE - IDS</option>
                                <option value="MEDICINE - NEPHRO">MEDICINE - NEPHRO</option>
                                <option value="MEDICINE - PULMO">MEDICINE - PULMO</option>
                                <option value="MEDICINE - RHUMA">MEDICINE - RHUMA</option>
                                <option value="MEDICINE - NEUROSCIENCE">NEUROSCIENCE</option>
                                <option value="OB HIGH RISK">OB HIGH RISK</option>
                                <option value="OB ONCO">OB ONCO</option>
                                <option value="OB REI">OB REI</option>
                                <option value="OBSTETRICS">OBSTETRICS</option>
                                <option value="OCCUPATIONAL THERAPY">OCCUPATIONAL THERAPY</option>
                                <option value="OPHTHALMOLOGY">OPHTHALMOLOGY</option>
                                <option value="OPTHA PEDIATRIC">OPTHA PEDIATRIC</option>
                                <option value="ORBIT/PLASTIC">ORBIT/PLASTIC</option>
                                <option value="ORTHO ADULT">ORTHO ADULT</option>
                                <option value="ORTHO HAND">ORTHO HAND</option>
                                <option value="ORTHO ONCO">ORTHO ONCO</option>
                                <option value="ORTHO PEDIA">ORTHO PEDIA</option>
                                <option value="ORTHO SPINE">ORTHO SPINE</option>
                                <option value="ORTHO TRAUMA">ORTHO TRAUMA</option>
                                <option value="ORTHOPEDICS">ORTHOPEDICS</option>
                                <option value="ORTHOPEDICS PAY">ORTHOPEDICS PAY</option>
                                <option value="OTOLOGY, AUDIOLOGY,NEUROTOLOGY">OTOLOGY, AUDIOLOGY,NEUROTOLOGY</option>
                                <option value="PAIN CLINIC/ANESTHESIA">PAIN CLINIC/ANESTHESIA</option>
                                <option value="PCSO">PCSO</option>
                                <option value="PED NEPHRO">PED NEPHRO</option>
                                <option value="PED SURGERY">PED SURGERY</option>
                                <option value="PEDIA - ADOLESCENT">PEDIA - ADOLESCENT</option>
                                <option value="PEDIA - ALLERGOLOGY">PEDIA - ALLERGOLOGY</option>
                                <option value="PEDIA - CARDIO">PEDIA - CARDIO</option>
                                <option value="PEDIA - DEVELOPMENTAL">PEDIA - DEVELOPMENTAL</option>
                                <option value="PEDIA - ENDO">PEDIA - ENDO</option>
                                <option value="PEDIA - GASTRO">PEDIA - GASTRO</option>
                                <option value="PEDIA - NEUROLOGY">PEDIA - NEUROLOGY</option>
                                <option value="PEDIA - PNCU">PEDIA - PNCU</option>
                                <option value="PEDIA - PULMONOLOGY">PEDIA - PULMONOLOGY</option>
                                <option value="PEDIA - RHEUMATOLOGY">PEDIA - RHEUMATOLOGY</option>
                                <option value="PEDIA HEMA ONCO">PEDIA HEMA ONCO</option>
                                <option value="PEDIATRICS">PEDIATRICS</option>
                                <option value="PHILHEALTH">PHILHEALTH</option>
                                <option value="PHYSICAL THERAPY">PHYSICAL THERAPY</option>
                                <option value="PHYSICAL THERAPY CHECK-UP">PHYSICAL THERAPY CHECK-UP</option>
                                <option value="PLASTIC SURGERY">PLASTIC SURGERY</option>
                                <option value="PSYCHIATRY">PSYCHIATRY</option>
                                <option value="RADIOLOGY">RADIOLOGY</option>
                                <option value="RADIOLOGY ONCO">RADIOLOGY ONCO</option>
                                <option value="RADIOTHERAPY">RADIOTHERAPY</option>
                                <option value="RETINA">RETINA</option>
                                <option value="RHINOLOGY, ALLERGY & SLEEP">RHINOLOGY, ALLERGY & SLEEP</option>
                                <option value="SURGERY">SURGERY</option>
                                <option value="SURGERY - NEURO">SURGERY - NEURO</option>
                                <option value="SURGERY ONCO">SURGERY ONCO</option>
                                <option value="TB DOTS">TB DOTS</option>
                                <option value="TCVS">TCVS</option>
                                <option value="TEEN PARENT CLINIC">TEEN PARENT CLINIC</option>
                                <option value="TREATMENT ROOM">TREATMENT ROOM"</option>
                                <option value="UNDER FIVE - S">UNDER FIVE - S</option>
                                <option value="UNDER FIVE - W">UNDER FIVE - W</option>
                                <option value="URO SURGERY">URO SURGERY</option>
                                <option value="VASCULAR">VASCULAR</option>
                                <option value="WCPU">WCPU</option>
                                <option value="WELL BABY">WELL BABY</option>
                            </select>
        
                            <input type="submit" class="btn btn-primary" value="Generate List" name="submit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                Search Patient Details:
                <a href="#" data-toggle="modal" class="btn btn-info d-print-none" data-target="#patsearchmodal"><i class="fa fa-user"></i><i class="fa fa-search"></i><span>Search Patient</span></a>
                
                <hr class="mt-5 mb-5">
                
                <form action="/Module/patients5" method="POST">
                    @csrf
                    <label for="ward_name">OPD</label>
                    <br>
                    <div id="div_hide">
                        <label for="admdate">ADMISSION DATE</label>
                        <input class="form-control" type="date" id="admdate" name="admdate">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">GENERATE PATIENT LIST</button>
                </form>

                <hr class="mt-5 mb-5">

                <form action="/Module/patientsforced" method="POST">
                    @csrf
                    <br>
                    <div id="div_hide">
                        <label for="hos_no">HOSPITAL NUMBER</label>
                        <input class="form-control" type="text" id="hos_no" name="hos_no">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    


    {{-- MODAL --}}
    <div class="modal fade" id="patsearchmodal" tabindex="-1" role="dialog" aria-labelledby="patsearchmodalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="patsearchmodalTitle">Search Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="hospnumber">HOSP NUMBER</label>
                        <input type="text" id="hospnumber" name="hospnumber" class="form-control">
                        <label for="patlast">LAST NAME:</label>
                        <input type="text" id="patlast" name="patlast" class="form-control">
                        <label for="patfirst">FIRST NAME:</label>
                        <input type="text" id="patfirst" name="patfirst" class="form-control">
                        <label for="patmiddle">MIDDLE NAME:</label>
                        <input type="text" id="patmiddle" name="patmiddle" class="form-control">
                        <button class="btn btn-info" style="margin-top: 5px" onclick="genpatlist()">Retrieve</button>
                    </div>
                    <div class="col-sm-6" style="height: 300px; overflow: auto;">
                        <table class="table table-bordered" style="width: 100%" id="modalenclist">
                            <thead class="thead-dark">
                                <tr style="color:white" bgcolor="black">
                                    <th style="width: 20%">
                                        DATE/TIME
                                    </th>
                                    <th style="width: 20%">
                                        TYPE
                                    </th>
                                    <th style="width: 50%">
                                        FINAL DIAGNOSIS
                                    </th>
                                    <th style="width: 10%">
                                        ACTION
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-12 mt-2" style="height: 300px; overflow: auto;">
                        <table class="table table-striped" style="width: 100%;" id="modalpatlist">
                            <thead>
                                <tr style="color:white" bgcolor="black">
                                    <th>
                                        ACTION
                                    </th>
                                    <th>
                                        HOSP NUMBER
                                    </th>
                                    <th>
                                        LAST NAME
                                    </th>
                                    <th>
                                        FIRST NAME
                                    </th>
                                    <th>
                                        MIDDLE NAME
                                    </th>
                                    <th>
                                        BIRTH DATE
                                    </th>
                                    <th>
                                        BIRTHPLACE
                                    </th>
                                    <th>
                                        SEX
                                    </th>
                                    <th>
                                        GET LATEST ENCTR
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
            
                            </tbody>
                        </table>
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function genpatlist()
        {
            var hospnumber = $("#hospnumber").val();
            var patlast = $("#patlast").val();
            var patfirst = $("#patfirst").val();
            var patmiddle = $("#patmiddle").val();

            console.log(hospnumber);
            console.log(patlast);
            console.log(patfirst);
            console.log(patmiddle);

            var template = '';
            $.ajax({
                type: "POST",
                url: '/JS/genpatientlist',
                data: { hospnumber: hospnumber, patlast: patlast, patfirst: patfirst, patmiddle: patmiddle },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if(data.length > 0)
                    {
                        $('#modalpatlist tbody').empty();
                        $('#modalenclist tbody').empty();
                        data.forEach(element =>
                        {
                            template += '<tr>' +
                                    '<td><a href="#" id="btnSelect" class="btn btn-info" data-hpercode="'+ element.hpercode +'">Encounter History</a></td>' +
                                    '<td>'+ element.hpercode +'</td>' +
                                    '<td>'+ element.patlast +'</td>' +
                                    '<td>'+ element.patfirst +'</td>' +
                                    '<td>'+ element.patmiddle +'</td>' +
                                    '<td>'+ element.patbdate +'</td>' +
                                    '<td>'+ element.patbplace +'</td>' +
                                    '<td>'+ element.patsex +'</td>' +
                                    '<td>' +
                                    '<form action="/Module/patientdetails" method="POST" enctype="multipart/form-data">' +
                                    '@csrf' +
                                    '<input type="text" name="enccode" id="enccode" value="'+ element.enccode +'" hidden>' +
                                    '<button type="submit" class="btn btn-info">LATEST ENCOUNTER</button>' +
                                    '</form>' +
                                    '</td>' +
                                    '</tr>';
                        });
                        $('#modalpatlist tbody').append(template);
                    }
                    else
                    {
                        alert("NO PATIENT FOUND");
                    }
                }
            });
        };
        
        $(document).on('click', '#btnSelect', function(){
            var hpercode = $(this).attr('data-hpercode');
            var template = '';
            $.ajax({
                type: "POST",
                url: '/JS/genenclist',
                data: {hpercode : hpercode},
                dataType: 'json',
                success: function(data)
                {
                    console.log(data);
                    if(data.length > 0)
                    {
                        $('#modalenclist tbody').empty();
                        data.forEach(element =>
                        {
                            template += '<tr>' +
                                    '<td>'+ element.admdate +'</td>' +
                                    '<td>'+ element.toecode +'</td>' +
                                    '<td>'+ element.findx +'</td>' +
                                    '<td>' +
                                    '<form action="/Module/patientdetails" method="POST" enctype="multipart/form-data">' +
                                    '@csrf' +
                                    '<input type="text" name="enccode" id="enccode" value="'+ element.enccode +'" hidden>' +
                                    '<button type="submit" class="btn btn-info">SELECT</button>' +
                                    '</form>' +
                                    '</td>' +
                                    '</tr>';
                        });
                        $('#modalenclist tbody').append(template);
                    }
                    else
                    {
                        alert("NO ENCOUTER FOUND");
                    }
                    
                },
            });
        })
    </script>
@endsection