@extends('layouts.modulelayout')

@section('content')
        @if ($determiner == '2')
            <div class="" style="font-size: 10px; width: 100%">
                <table>
                    <thead>
                        <tr>
                            @foreach ($numpats as $num)
                                <td>{{$num->ward}}</td>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($numpats as $num)
                                <td>{{$num->counter}}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        @endif
    <div class="d-print-none">
        <a href="#" onclick="window.print();return false;" class="btn btn-info d-print-none mb-2">PRINT</a>
        @if ($determiner == '5')
            <a href="/Module/dashboard2" class="btn btn-danger d-print-none mb-2">Go Back!</a>
        @else
            <a href="/Module/dashboard" class="btn btn-danger d-print-none mb-2">Go Back!</a>
        @endif
        <div style="margin-bottom: 20px">
            @if($determiner == '1')
                <h3>NUMBER OF PATIENTS: {{$count[0]->counter}}</h3>
            @elseif($determiner == '3')
                <h3>{{$ward}} NUMBER OF PATIENTS: {{$count[0]->counter}}</h3>
            @elseif($determiner == '4')
                <h3>{{$dept}} NUMBER OF PATIENTS: {{$count[0]->counter}}</h3>
            @endif
                
                
            
            @if($determiner == '1')
                <hr>

                <select name="FilterPat" id="FilterPat" onchange="FilterPat()" class="btn btn-info form-control">
                    <option value=""></option>
                    @foreach ($wards as $ward)
                        <option value="{{$ward->ward}}">{{$ward->ward}}</option>
                    @endforeach
                </select>
            @elseif($determiner == '10')
                <hr>

                <select name="FilterPatdepartment" id="FilterPatdepartment" onchange="FilterPatdepartment()" class="btn btn-info form-control">
                    <option value=""></option>
                    <option value="DENTAL">DENTAL</option>
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
                    <option value="SURGERY">SURGERY</option>
                </select>
            @elseif($determiner == '5')
                <form action="/Module/patients4_5" method="POST">
                    @csrf
                    <input type="text" name="ward_name" id="ward_name" value="{{$ward_name}}" hidden>
                    @if($ward_name = 'OPD')
                        <input type="text" name="admdate" id="admdate" value="{{$dd}}" hidden>
                    @endif
                    <label for="cf4_type">ALL | COMPLETE CF4 | INCOMPLETE CF4</label>
                    <select name="cf4_type" id="cf4_type" class="form-control">
                        <option value="A">ALL</option>
                        <option value="C">COMPLETE CF4</option>
                        <option value="I">INCOMPLETE CF4</option>
                    </select>

                    <label for="not_discharge">NOT DISCHARGE</label>
                    <input type="checkbox" name="not_discharge" id="not_discharge" onchange="disdatedis()" value="1">
                    <br>
                    <div id="div_hide">
                        <label for="disdate">DISCHARGE DATE</label>
                        <input type="date" name="disdate" id="disdate" class="form-control">
                    </div>


                    
                    <button type="submit" class="btn btn-success">FILTER</button>
                </form>
            @endif
            <hr>

            <input type="text" id="SearchDoc" class="form-control" onkeyup="SearchDoc()" placeholder="Doctor's Lastname" title="Search Doctor">
            <input type="text" id="SearchPat" class="form-control" onkeyup="SearchPat()" placeholder="Patient's Lastname" title="Search Patient">
        </div>
    </div>
        <table style="width: 100%" id="myTable" class="table-sm">
            <thead>
                <tr align="center">
                    <th>
                        HPERCODE
                    </th>
                    <th>
                        FULL NAME
                    </th>
                    <th>
                        ADMIT DATE
                    </th>
                    <th>
                        DISCHARGE DATE
                    </th>
                    <th>
                        WARD
                    </th>
                    <th>
                        DEPARTMENT
                    </th>
                    <th>
                        PHYSICIAN/ADMITTING DOCTOR/ATTENDING DOCTOR/CONSULTING DOCTOR
                    </th>
                    <th>
                        Case Rate
                    </th>
                    <th>
                        # Of CIW Entries
                    </th>
                    <th style="width: 45px">
                        CC
                    </th>
                    <th style="width: 45px">
                        HPI
                    </th>
                    <th style="width: 45px">
                        PPMH/OB_GYN
                    </th>
                    <th style="width: 45px">
                        CIW
                    </th>
                    <th style="width: 45px">
                        PSSA
                    </th>
                    <th style="width: 45px">
                        PEA
                    </th>
                </tr>
            </thead>
            <tbody>
                    @php
                        $countcomplete = 1;
                        $countincomplete = 1;
                    @endphp
                @foreach ($pats as $pat)
                    @if ($pat->iscomplete == '5' && $pat->pea_gs == '9' && ($pat->ob_gyn == '1' || $pat->patsex == 'M'))
                        <tr bgcolor="#BAFFC3">
                        @php
                            $countcomplete = $countcomplete + 1;
                        @endphp
                    @else
                        <tr>
                        @php
                            $countincomplete = $countincomplete + 1;
                        @endphp
                    @endif
                        <td>
                            <a href="#" class="btnSelect" data-hpercode="{{ $pat->hpercode }}">{{$pat->hpercode}}</a>
                        </td>
                        <td>
                            {{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}} 
                        </td>
                        <td>
                            {{date('m-d-Y h:iA', strtotime($pat->admdate))}}
                        </td>
                        <td>
                            @if ($pat->disdate != null)
                                {{date('m-d-Y h:iA', strtotime($pat->disdate))}}
                            @endif
                        </td>
                        <td>
                            {{$pat->ward}}
                        </td>
                        <td>
                            {{$pat->dept}}
                        </td>
                        <td>
                            {{$pat->phys}}{{$pat->adlic1}}{{$pat->adlic2}}{{$pat->adlic3}}
                        </td>
                        <th>
                            Firstcase: {{$pat->caserate1}}<hr>Secondcase: {{$pat->caserate2}}
                        </th>
                        <td align="center">
                            ({{$pat->ciwcount}}) Entries
                        </td>
                        <td align="center">
                            @if ($pat->cc == 1)
                                <div class="tooltip1">
                                    <a href="#" class="btn CHECKCC" data-enccode="{{ $pat->enccode }}"><input type="checkbox" checked></a>
                                    <span class="tooltiptext1">CC: Chief Complaint</span>
                                </div>
                            @else
                                <div class="tooltip1">
                                    <a href="#" class="btn CHECKCC" data-enccode="{{ $pat->enccode }}"><input type="checkbox"></a>
                                    <span class="tooltiptext1">CC: Chief Complaint</span>
                                </div>
                            @endif
                        </td>
                        <td align="center">
                            @if ($pat->hpi == 1)
                                <div class="tooltip2">
                                    <a href="#" class="btn CHECKHPI" data-enccode="{{ $pat->enccode }}"><input type="checkbox" checked></a>
                                    <span class="tooltiptext2">HPI: History of Present Illness</span>
                                </div>
                            @else
                                <div class="tooltip2">
                                    <a href="#" class="btn CHECKHPI" data-enccode="{{ $pat->enccode }}"><input type="checkbox"></a>
                                    <span class="tooltiptext2">HPI: History of Present Illness</span>
                                </div>
                            @endif
                        </td>
                        <td align="center">
                            @if ($pat->ppmh == 1)
                                <div class="tooltip3">
                                    <a href="#" class="btn CHECKPPMH" data-enccode="{{ $pat->enccode }}"><input type="checkbox" checked></a>
                                    <span class="tooltiptext3">PPMH: Past Pertinent Medical History</span>
                                </div>
                            @else
                                <div class="tooltip3">
                                    <a href="#" class="btn CHECKPPMH" data-enccode="{{ $pat->enccode }}"><input type="checkbox"></a>
                                    <span class="tooltiptext3">PPMH: Past Pertinent Medical History</span>
                                </div>
                            @endif
                            @if ( $pat->ob_gyn == 1 OR $pat->patsex == 'M')
                                <div class="tooltip3_5">
                                    <a href="#" class="btn CHECKOBGYN" data-enccode="{{ $pat->enccode }}"><input type="checkbox" checked></a>
                                    <span class="tooltiptext3_5">OB_GYN</span>
                                </div>
                            @else
                                <div class="tooltip3_5">
                                    <a href="#" class="btn CHECKOBGYN" data-enccode="{{ $pat->enccode }}"><input type="checkbox"></a>
                                    <span class="tooltiptext3_5">OB_GYN</span>
                                </div>
                            @endif
                            
                        </td>
                        <td align="center">
                            @if ($pat->ciw == 1)
                                <div class="tooltip4">
                                    <a href="#" class="btn CHECKCIW" data-enccode="{{ $pat->enccode }}"><input type="checkbox" checked></a>
                                    <span class="tooltiptext4">CIW: Course in the Ward</span>
                                </div>
                            @else
                                <div class="tooltip4">
                                    <a href="#" class="btn CHECKCIW" data-enccode="{{ $pat->enccode }}"><input type="checkbox"></a>
                                    <span class="tooltiptext4">CIW: Course in the Ward</span>
                                </div>
                            @endif 
                        </td>
                        <td align="center">
                            @if ($pat->pssa == 1)
                                <div class="tooltip5">
                                    <a href="#" class="btn CHECKPSSA" data-enccode="{{ $pat->enccode }}"><input type="checkbox" checked></a>
                                    <span class="tooltiptext5">PSSA: Pertinent Signs and Symptoms on Admission</span>
                                </div>
                            @else
                                <div class="tooltip5">
                                    <a href="#" class="btn CHECKPSSA" data-enccode="{{ $pat->enccode }}"><input type="checkbox"></a>
                                    <span class="tooltiptext5">PSSA: Pertinent Signs and Symptoms on Admission</span>
                                </div>
                            @endif 
                        </td>
                        <td align="center">
                            @if ($pat->pea_gs == 9)
                                <div class="tooltip6">
                                    <a href="#" class="btn CHECKPEA" data-enccode="{{ $pat->enccode }}"><input type="checkbox" checked></a>
                                    <span class="tooltiptext6">PEA = Physical Examination on Admission</span>
                                </div>
                            @else
                                <div class="tooltip6">
                                    <a href="#" class="btn CHECKPEA" data-enccode="{{ $pat->enccode }}"><input type="checkbox"></a>
                                    <span class="tooltiptext6">PEA = Physical Examination on Admission</span>
                                </div>
                            @endif 
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr align="center">
                    <th colspan="2">
                        CC: Chief Complaint
                    </th>
                    <th>
                        HPI: History of Present Illness
                    </th>
                    <th colspan="2">
                        PPHM: Past Pertinent Medical History
                    </th>
                    <th>
                        CIW: Course in the Ward
                    </th>
                    <th>
                        PSSA: Pertinent Signs and Symptoms on Admission
                    </th>
                    <th colspan="7">
                        PEA = Physical Examination on Admission
                    </th>
                </tr>
                <tr>
                    <th colspan="7">
                        @php
                            $percomplete = ($countcomplete/($countcomplete + $countincomplete)) * 100;
                        @endphp
                        {{$percomplete}}% are Complete
                    </th>
                    <th colspan="7">
                        @php
                            $perincomplete = ($countincomplete/($countcomplete + $countincomplete)) * 100;
                        @endphp
                        {{$perincomplete}}% are Incomplete
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>

    <div id="ListModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="refresh">
                    <table class="table-bordered" style="width: 95%" id="listTable">
                        <thead>
                            <tr>
                                <th>
                                    FULL NAME
                                </th>
                                <th>
                                    ADMIT DATE
                                </th>
                                <th>
                                    DISCHARGE DATE
                                </th>
                                <th>
                                    WARD
                                </th>
                                <th>
                                    PHYSICIAN
                                </th>
                                <th style="width: 45px">
                                    CC
                                </th>
                                <th style="width: 45px">
                                    HPI
                                </th>
                                <th style="width: 45px">
                                    PPMH
                                </th>
                                <th style="width: 45px">
                                    CIW
                                </th>
                                <th style="width: 45px">
                                    PSSA
                                </th>
                                <th style="width: 45px">
                                    PEA
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="CHECKENC" class="modal fade" role="dialog">
        <div class="modal-dialog modal-xsm" style="background-color: #85C1E9">
            <!-- Modal content-->
            <div class="modal-content" style="background-color: #85C1E9">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalID"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="refreshCF4">
                    <h1>CONTENT</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function SearchPat() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("SearchPat");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    }
                    else
                    {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }

        function SearchDoc() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("SearchDoc");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[6];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    }
                    else
                    {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }

        function FilterPat() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("FilterPat");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    }
                    else
                    {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }

        function FilterPatdepartment() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("FilterPatdepartment");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[5];
                if (td) {
                    txtValue = td.textContent;
                    if (txtValue.toUpperCase() == input.value.toUpperCase()) {
                        tr[i].style.display = "";
                    }
                    else
                    {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }

        function disdatedis()
        {
            var checkBox = document.getElementById("not_discharge");
            var div_hide = document.getElementById("div_hide");
            if (checkBox.checked == true)
            {
                div_hide.style.display = "none";
            } else
            {
                div_hide.style.display = "";
            }
        }


        function reload()
        {

        }


        $(document).on('click', '.CHECKCC', function(){
            var enccode = $(this).attr('data-enccode');
            $('#refreshCF4').empty();
            document.getElementById("modalID").innerHTML  = 'CHIEF COMPLAINT';
            console.log(enccode);
            var template = '';
            $.ajax({
                type: "POST",
                url: '/JSgetdataCC',
                data: {enccode : enccode},
                dataType: 'json',
                success: function(data)
                {
                    console.log(data);
                    template += ''+ data.chief_complaint +'';
                    $('#refreshCF4').append(template);
                },
            });
            $('#CHECKENC').modal('show');
        })

        $(document).on('click', '.CHECKHPI', function(){
            var enccode = $(this).attr('data-enccode');
            $('#refreshCF4').empty();
            document.getElementById("modalID").innerHTML  = 'HISTORY OF PRESENT ILLNESS';
            console.log(enccode);
            var template = '';
            $.ajax({
                type: "POST",
                url: '/JSgetdataHPI',
                data: {enccode : enccode},
                dataType: 'json',
                success: function(data)
                {
                    console.log(data);
                    template += ''+ data.history_present_ill +'';
                    $('#refreshCF4').append(template);
                },
            });
            $('#CHECKENC').modal('show');
        })

        $(document).on('click', '.CHECKPPMH', function(){
            var enccode = $(this).attr('data-enccode');
            $('#refreshCF4').empty();
            document.getElementById("modalID").innerHTML  = 'PAST PERTINENT MEDICAL HISTORY';
            console.log(enccode);
            var template = '';
            $.ajax({
                type: "POST",
                url: '/JSgetdataPPMH',
                data: {enccode : enccode},
                dataType: 'json',
                success: function(data)
                {
                    if(data != null)
                    {
                        console.log(data);
                        if(data.pert_past_med_history == '')
                        {
                            template += 'N/A';
                        }
                        else
                        {
                            template += ''+ data.pert_past_med_history +'';
                        }
                        $('#refreshCF4').append(template);
                    }
                    else
                    {
                        template += 'INCOMPLETE';
                        $('#refreshCF4').append(template);
                    }
                },
            });
            $('#CHECKENC').modal('show');
        })
        
        $(document).on('click', '.CHECKOBGYN', function(){
            var enccode = $(this).attr('data-enccode');
            $('#refreshCF4').empty();
            document.getElementById("modalID").innerHTML  = 'OB GYN';
            console.log(enccode);
            var template = '';
            // $.ajax({
            //     type: "POST",
            //     url: '/JSgetdataOBGYN',
            //     data: {enccode : enccode},
            //     dataType: 'json',
            //     success: function(data)
            //     {
            //         if(data != null)
            //         {
            //             console.log(data);
            //             template += 'COMPLETE';
            //         }
            //         else
            //         {
            //             template += 'INCOMPLETE';
            //             $('#refreshCF4').append(template);
            //         }
            //     },
            // });
            // $('#CHECKENC').modal('show');
        })

        $(document).on('click', '.CHECKCIW', function(){
            var enccode = $(this).attr('data-enccode');
            $('#refreshCF4').empty();
            document.getElementById("modalID").innerHTML  = 'COURSE IN THE WARD';
            console.log(enccode);
            var template = '';
            $.ajax({
                type: "POST",
                url: '/JSgetdataCIW',
                data: {enccode : enccode},
                dataType: 'json',
                success: function(data)
                {
                    console.log(data);
                    if(data != null)
                    {
                        template += '<table class="table-bordered" style="width:100%">';
                        template += '<thead><tr><th>PERTINENT</th><th>COURSE IN THE WARD</th><th>DATE</th></tr></thead><tbody>';
                        data.forEach(element =>
                        {
                            template += '<tr>' +
                            '<td>'+ element.pertinent +'</td>' +
                            '<td>'+ element.course_ward +'</td>' +
                            '<td style="width:20%">'+ element.date_cw +'</td></tr>';

                        });
                        template += '</tbody></table>';
                        $('#refreshCF4').append(template);
                    }
                },
            });
            $('#CHECKENC').modal('show');
        })

        $(document).on('click', '.CHECKPSSA', function(){
            var enccode = $(this).attr('data-enccode');
            $('#refreshCF4').empty();
            document.getElementById("modalID").innerHTML  = 'PERTINENT SIGNS AND SYMPTOMS ON ADMISSION';
            console.log(enccode);
            var template = '';
            $.ajax({
                type: "POST",
                url: '/JSgetdataPSSA',
                data: {enccode : enccode},
                dataType: 'json',
                success: function(data)
                {
                    console.log(data);
                    if(data.detail != null)
                    {
                        template += ''+ data.detail +'';
                    }
                    else if(data.opt_title != null)
                    {
                        template += ''+ data.opt_title +'';
                    }
                    else
                    {
                        template += '<div class="alert">NO DATA / INCOMPLETE</div>';
                    }
                    $('#refreshCF4').append(template);
                },
            });
            $('#CHECKENC').modal('show');
        })

        $(document).on('click', '.CHECKPEA', function(){
            var enccode = $(this).attr('data-enccode');
            $('#refreshCF4').empty();
            document.getElementById("modalID").innerHTML  = 'PHYSICAL EXAMINATION ON ADMISSION';
            console.log(enccode);
            var template = '';
            $.ajax({
                type: "POST",
                url: '/JSgetdataPEA',
                data: {enccode : enccode},
                dataType: 'json',
                success: function(data)
                {
                    console.log(data);
                    if(data != 'nodata')
                    {
                        template += '<table class="table-bordered" style="width:100%">';
                        template += '<tbody>';
                        template += '<tr><th colspan="4">VITAL SIGNS</th></tr>'
                        template += '<tr><th>BP</th><th>HR</th><th>RR</th><th>TEMP</th></tr><tr>'
                        if(data[0].vsbp == null || data[0].vsbp == '')
                        {
                            template += '<td></td>';
                        }
                        else
                        {
                            template += '<td>'+ data[0].vsbp +'</td>';
                        }
                        if(data[0].vspulse == null || data[0].vspulse == '')
                        {
                            template += '<td></td>';
                        }
                        else
                        {
                            template += '<td>'+ data[0].vspulse +'</td>';
                        }
                        if(data[0].vsresp == null || data[0].vsresp == '')
                        {
                            template += '<td></td>';
                        }
                        else
                        {
                            template += '<td>'+ data[0].vsresp +'</td>';
                        }
                        if(data[0].vstemp == null || data[0].vstemp == '')
                        {
                            template += '<td></td>';
                        }
                        else
                        {
                            template += '<td>'+ data[0].vstemp +'</td>';
                        }
                        template += '</tr>';
                        template += '</tbody></table><hr>';


                        template += '<table class="table-bordered" style="width:100%">';
                        template += '<tbody>';
                        data.forEach(element =>
                        {
                            template += '<tr>' +
                            '<td>'+ element.grp +'</td>';
                            if(element.detail != null)
                            {
                                template += '<td>'+ element.detail +'</td>';
                            }
                            else if(element.opt_title != null)
                            {
                                template += '<td>'+ element.opt_title +'</td>';
                            }
                            else
                            {
                                template += '<td>NO DATA/INCOMPLETE</td>';
                            }
                            template += '</tr>';
                        });
                        template += '</tbody></table>';
                        
                        template += "PLEASE CHECK FOR THE FOLLOWING IF COMPLETED: \n VITAL SIGNS, GS,  HEENT,  CL,  CVS,  GU,  SKIN,  ABD,  NEURO";

                        $('#refreshCF4').append(template);
                        $('#CHECKENC').modal('show');
                    }
                    else
                    {
                        template += 'NODATA TO BE DISPLAYED/INCOMPLETE';
                        
                        $('#refreshCF4').append(template);
                        $('#CHECKENC').modal('show');
                    }
                },
            });
        })

        function printpage()
        {
            window.print();
        }

        $(document).on('click', '.btnSelect', function(){
            var hpercode = $(this).attr('data-hpercode');
            
            var template = '';
            $.ajax({
                type: "POST",
                url: '/CF4Patient',
                data: {hpercode : hpercode},
                dataType: 'json',
                success: function(data)
                {
                    console.log(hpercode);
                    if(data != null)
                    {
                        $('#listTable tbody').empty();
                        data.forEach(element =>
                        {
                            
                        template += '<tr>' +
                                '<td>'+ element.patlast +',' +element.patfirst+ ' '+element.patmiddle+'</td>' +
                                '<td>'+ element.admdate +'</td>' +
                                '<td>'+ element.disdate +'</td>' +
                                '<td>'+ element.ward +'</td>' +
                                '<td>'+ element.phys +'</td>';
                            if (element.cc == '1')
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKCC" data-enccode="'+ element.enccode +'"><input disabled type="checkbox" checked></a></td>';
                            }
                            else
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKCC" data-enccode="'+ element.enccode +'"><input disabled type="checkbox"></a></td>';
                            }
                            if (element.hpi == '1')
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKHPI" data-enccode="'+ element.enccode +'"><input disabled type="checkbox" checked></a></td>';
                            }
                            else
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKHPI" data-enccode="'+ element.enccode +'"><input disabled type="checkbox"></a></td>';
                            }
                            if (element.ppmh == '1')
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKPPMH" data-enccode="'+ element.enccode +'"><input disabled type="checkbox" checked></a></td>';
                            }
                            else
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKPPMH" data-enccode="'+ element.enccode +'"><input disabled type="checkbox"></a></td>';
                            }
                            if (element.ciw == '1')
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKCIW" data-enccode="'+ element.enccode +'"><input disabled type="checkbox" checked></a></td>';
                            }
                            else
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKCIW" data-enccode="'+ element.enccode +'"><input disabled type="checkbox"></a></td>';
                            }
                            if (element.pssa == '1')
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKPSSA" data-enccode="'+ element.enccode +'")"><input disabled type="checkbox" checked></a></td>';
                            }
                            else
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKPSSA" data-enccode="'+ element.enccode +'")"><input disabled type="checkbox"></a></td>';
                            }
                            if (element.pea_gs == '9')
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKPEA" data-enccode="'+ element.enccode +'"><input disabled type="checkbox" checked></a></td>';
                            }
                            else
                            {
                                template += '<td align="center"><a href="#" class="btn CHECKPEA" data-enccode="'+ element.enccode +'"><input disabled type="checkbox"></a></td>';
                            }
                        });
                        $('#listTable tbody').append(template);
                        $('#ListModal').modal('show');
                    }
                },
            });
        })
    </script>
@endsection

@section('style')
    <style>
        @media print{@page {size: landscape}}
        table, td, tr, th
        {
            border: 2px solid black;
        }
        .tooltip1 {
            position: relative;
            display: inline-block;
        }

        .tooltip1 .tooltiptext1 {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

        /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip1:hover .tooltiptext1 {
            visibility: visible;
        }
        
        .tooltip2 {
            position: relative;
            display: inline-block;
        }

        .tooltip2 .tooltiptext2 {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

        /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip2:hover .tooltiptext2 {
            visibility: visible;
        }
        
        .tooltip3 {
            position: relative;
            display: inline-block;
        }

        .tooltip3 .tooltiptext3 {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

        /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip3:hover .tooltiptext3 {
            visibility: visible;
        }
        
        .tooltip3_5 {
            position: relative;
            display: inline-block;
        }

        .tooltip3_5 .tooltiptext3_5 {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

        /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip3_5:hover .tooltiptext3_5 {
            visibility: visible;
        }
        
        .tooltip4 {
            position: relative;
            display: inline-block;
        }

        .tooltip4 .tooltiptext4 {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

        /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip4:hover .tooltiptext4 {
            visibility: visible;
        }
        
        .tooltip5 {
            position: relative;
            display: inline-block;
        }

        .tooltip5 .tooltiptext5 {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

        /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip5:hover .tooltiptext5 {
            visibility: visible;
        }
        
        .tooltip6 {
            position: relative;
            display: inline-block;
        }

        .tooltip6 .tooltiptext6 {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

        /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip6:hover .tooltiptext6 {
            visibility: visible;
        }
        input[type="checkbox"]
        {
            width: 30px; /*Desired width*/
            height: 30px; /*Desired height*/
            pointer-events: none;
        }

        .modal-xsm
        {
            width: 1000px;
        }
        .modal-open
        {
            padding-right: 0px !important;
        }
        body.modal-open
        {
            overflow: hidden;
        }
    </style>
@endsection