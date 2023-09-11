@extends('layouts.modulelayout')

@section('content')
    <div style="width: 95%; height: 800px; overflow: auto; margin: auto;">
        <div class="row">
            <div class="col-md-4">
                <a href="#" data-toggle="modal" class="btn btn-primary d-print-none" data-target="#patsearchmodal" style="width: 300px; margin:auto"><i class="fa fa-user"></i><i class="fa fa-search"></i><span>Search Patient</span></a>
            </div>
            <div class="col-md-8">
                <label for="patname">Patient Name:</label>
                <input type="text" id="patname" name="patname" class="form-control" value="{{$patname}}" disabled>
                <label for="hosnum">Hospital Number:</label>
                <input type="text" id="hosnum" name="hosnum" class="form-control" value="{{$hosnum}}" disabled>
            </div>
            <div class="col-md-12">
                <hr>
                <button class="btn btn-primary" onclick="addGL()" style="width: 300px">+ Add Guarantee Letter</button>
                <table class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>
                                GL #
                            </th>
                            <th>
                                Control #
                            </th>
                            <th>
                                Fund Source
                            </th>
                            <th>
                                refdate
                            </th>
                            {{-- <th>
                                Expiration Date
                            </th> --}}
                            <th>
                                Amount
                            </th>
                            <th>
                                Purpose
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($GLs as $GL)
                            <tr>
                                <td>
                                    <a href="#" class="glnumberbtn btn btn-primary" data-glnumber="{{$GL->glnumber}}"  style="width: 60%">{{$GL->glnumber}}</a>
                                </td>
                                <td>
                                    {{$GL->ctrlno}}
                                </td>
                                <td>
                                    {{$GL->funddesc}}
                                </td>
                                <td>
                                    {{date('M d, Y', strtotime($GL->refdate))}}
                                </td>
                                {{-- <td>
                                    @if ($GL->expdate == NULL)
                                    @else
                                        {{date('M d, Y', strtotime($GL->expdate))}}
                                    @endif
                                </td> --}}
                                <td>
                                    P{{$GL->amount}}
                                </td>
                                <td>
                                    {{$GL->pps}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    


    {{-- MODAL PATIENT SEARCH MODAL --}}
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
                    <div class="col-sm-12">
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
                    <div class="col-sm-12 mt-2" style="height: 300px; overflow: auto;">
                        <table class="table table-striped" style="width: 100%;" id="modalpatlist">
                            <thead>
                                <tr style="color:white" bgcolor="black">
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
                                        ACTION
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


    
    {{-- MODAL ADD GUARANTEE LETTER MODAL --}}
    <div class="modal fade" id="addguaranteeletter" tabindex="-1" role="dialog" aria-labelledby="addguaranteeletterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form action="/guaranteeletter/glsave" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="modal-title" id="addguaranteeletterTitle">Add Guarantee Letter</h2>
                            </div>
                            <div class="col-sm-12">
                                <label for="hospnumber">Hospital Number: </label>
                                <input type="text" id="" name="" value="{{$hosnum}}" class="form-control" disabled>
                                <input type="text" id="hospnumber" name="hospnumber" value="{{$hosnum}}" class="form-control" hidden>
                                <input type="text" id="lastestenct" name="lastestenct" value="{{$lastestenct}}" class="form-control" hidden>
                                <input type="text" id="mode" name="mode" value="O" class="form-control" hidden>
                                <input type="text" id="glstat" name="glstat" value="A" class="form-control" hidden>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                GL #
                                            </th>
                                            <th>
                                                Control #
                                            </th>
                                            <th>
                                                Fund Source
                                            </th>
                                            <th>
                                                RefDate
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                Purpose
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="glnumber" name="glnumber" disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="ctrlno" name="ctrlno" disabled>
                                            </td>
                                            <td>
                                                <select name="fundcode" id="fundcode" class="form-control">
                                                    <option value="M">Malasakit Fund</option>
                                                    @foreach ($fundsrcs as $fundsrc)
                                                        <option value="{{$fundsrc->fundcode}}">{{$fundsrc->funddesc}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" id="refdate" name="refdate" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="amount" name="amount" required>
                                            </td>
                                            <td style="width: 15%">
                                                <input type="checkbox" id="pp1" name="pp1" value="1">2D ECHO<br>
                                                <input type="checkbox" id="pp2" name="pp2" value="1">CT Scan<br>
                                                <input type="checkbox" id="pp3" name="pp3" value="1">Drugs and Medicine<br>
                                                <input type="checkbox" id="pp4" name="pp4" value="1">ECG<br>
                                                <input type="checkbox" id="pp5" name="pp5" value="1">EEG<br>
                                                <input type="checkbox" id="pp6" name="pp6" value="1">Emergency Room Bills<br>
                                                <input type="checkbox" id="pp7" name="pp7" value="1">Hemodialysis FMC<br>
                                                <input type="checkbox" id="pp8" name="pp8" value="1">IMRT Treatment LINAC<br>
                                                <input type="checkbox" id="pp9" name="pp9" value="1">Laboratory<br>
                                                <input type="checkbox" id="pp10" name="pp10" value="1">MRI<br>
                                                <input type="checkbox" id="pp11" name="pp11" value="1">PT Treatment<br>
                                                <input type="checkbox" id="pp12" name="pp12" value="1">Ultrasound<br>
                                                <input type="checkbox" id="pp13" name="pp13" value="1">X-Ray<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- GLDETAILS MODAL --}}
    <div id="glDetailsModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <form action="/guaranteeletter/savenewpcchrgcod" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Guarantee Letter Details: &nbsp;&nbsp;&nbsp;</h4>
                        <h4 class="modal-title" id="myText"></h4>
                        <input type="text" name="glid" id="glid" hidden>
                        <input type="text" name="hpercode1" id="hpercode1" value="{{$hosnum}}" hidden>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm" id="gltable">
                                <thead>
                                    <tr>
                                        <th>
                                            PC CHARGE CODE
                                        </th>
                                        <th>
                                            AMOUNT
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">
                                            <h2>ADD NEW MAP DETAILS</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" id="pcchrgcod[0]" name="pcchrgcod[0]" placeholder="PC Charge Code" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="amount[0]" name="amount[0]" placeholder="Amount" required>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <a class="btn btn-success" href="#" onclick="addcolumnGLdetails()" >Add</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
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
        counter = 1;
        addcolumntemplate = '';
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
                                    '<td>'+ element.hpercode +'</td>' +
                                    '<td>'+ element.patlast +'</td>' +
                                    '<td>'+ element.patfirst +'</td>' +
                                    '<td>'+ element.patmiddle +'</td>' +
                                    '<td>'+ element.patbdate +'</td>' +
                                    '<td>'+ element.patbplace +'</td>' +
                                    '<td>'+ element.patsex +'</td>' +
                                    '<td>' +
                                    '<form action="/guaranteeletter/selectpatient" method="POST" enctype="multipart/form-data">' +
                                    '@csrf' +
                                    '<input type="text" name="hpercode" id="hpercode" value="'+ element.hpercode +'" hidden>' +
                                    '<button type="submit" class="btn btn-info">SELECT</button>' +
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


        function addGL()
        {
            var hosnum = document.getElementById("hosnum").value;
            console.log(hosnum);
            if(hosnum == '')
            {
                alert("Search For Patient First");
                $("#patsearchmodal").modal("show");
            }
            else
            {
                $("#addguaranteeletter").modal("show");
            }
            
        }


        $(document).on('click', '.glnumberbtn', function(){
            var glnumber = $(this).attr('data-glnumber');
            var hpercode = $(this).attr('data-hpercode');
            document.getElementById("myText").innerHTML = glnumber;
            document.getElementById("glid").value = glnumber;
            console.log(glnumber);
            var template = '';
            var index = 0;

            $.ajax({
                type: "POST",
                url: '/AJAX/guaranteeletter/mapdetails',
                data: {glnumber : glnumber},
                dataType: 'json',
                success: function(data)
                {
                    console.log(data);
                    if(data != null)
                    {
                        $('#gltable tbody').empty();
                        data.forEach(element =>
                        {
                            template += '<tr>' +
                                    '<td>'+ element.pcchrgcod +'</td>' +
                                    '<td>'+ element.amount +'</td>' +
                                    '</tr>'
                            index ++;
                        });
                        $('#gltable tbody').append(template);
                        $('#glDetailsModal').modal('show');
                    }
                },
            });
        })

        function addcolumnGLdetails()
        {
            addcolumntemplate = '<tr>' +
                                '<td>' +
                                '<input type="text" class="form-control" id="pcchrgcod['+counter+']" name="pcchrgcod['+counter+']" placeholder="PC Charge Code" required>' +
                                '</td>' +
                                '<td>' +
                                '<input type="number" class="form-control" id="amount['+counter+']" name="amount['+counter+']" placeholder="Amount" required>' +
                                '</td>' +
                                '</tr>';
            counter++;
            $('#gltable tfoot').append(addcolumntemplate);
        }
    </script>
@endsection