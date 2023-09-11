@extends('layouts.baslayout1')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Patient Charge List</h1>
        </div>
        <div class="col-sm-12">
            <a href="#" data-toggle="modal" class="btn btn-info d-print-none" data-target="#patsearchmodal"><i class="fa fa-user"></i><i class="fa fa-search"></i><span>Search Patient</span></a>
        </div>
        <div class="col-sm-12">
            <table style="width: 100%; border-color: black">
                <tr>
                    <td style="width: 10%;">
                        Patient Name : 
                    </td>
                    <td>
                        <input type="text" id="toppatientname" class="form-control" disabled="disabled">
                    </td>
                    <td style="width: 10%;">
                        TOTAL :  
                    </td>
                    <td>
                        <input type="text" id="toptotal" class="form-control" disabled="disabled">
                    </td>
                </tr>
                <tr>
                    <td>
                        HOSPITAL NO. : 
                    </td>
                    <td colspan="3">
                        <input type="text" id="tophosno" class="form-control" disabled="disabled">
                    </td>
                </tr>
            </table>
            <button Class="btn btn-info d-print-none" id="copybutton" onclick="COPYFUNCTION()" style="display: none">Copy PCCHRGCOD</button>
            <div class="table-responsive">
                <div>
                    <table style="width: 100%" id="tablelist" class="fixed_headers">
                        <thead>
                            <tr bgcolor="black" style="color:white">
                                <th>
                                    INDEX
                                </th>
                                <th>
                                    PCCHRGCOD
                                </th>
                                <th>
                                    PCCHRGDTE
                                </th>
                                <th>
                                    CHRGDESC
                                </th>
                                <th>
                                    ITEMDESC
                                </th>
                                <th>
                                    PCHRGQTY
                                </th>
                                <th>
                                    PCHRGUP
                                </th>
                                <th>
                                    PCCHRGAMT
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <textarea id="myTextarea" class="mt-5 d-print-none" style="display: none"></textarea>

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

@section('scripts')
    <script>
        $.ajaxSetup({
            headers:
            {
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
                                    '<td><a href="#" class="btn btn-info" id="submitenc" data-enccode="'+ element.enccode +'">Latest Encounter</a></td>' +
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
                                    '<td><a href="#" id="submitenc" class="btn btn-info" data-enccode="'+ element.enccode +'">SUBMIT</a></td>' +
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

        $(document).on('click', '#submitenc', function(){
            var enccode = $(this).attr('data-enccode');
            console.log(enccode);
            var copybutton = document.getElementById("copybutton");
            var myTextarea = document.getElementById("myTextarea");
            
            var template = '';
            var templatefortextarea = '';
            toppatientname.value = '';
            $.ajax({
                type: "POST",
                url: '/JS/submitenccode',
                data: {enccode : enccode},
                dataType: 'json',
                success: function(data)
                {
                    console.log(data);
                    if(data.length > 0)
                    {
                     var toppatientname = document.getElementById("toppatientname");
                     var topencountertype = document.getElementById("topencountertype");
                     var tophosno = document.getElementById("tophosno");
                     toppatientname.value = data[0].patlast + ', ' + data[0].patfirst + ' ' + data[0].patmiddle;
                     tophosno.value = data[0].hpercode+ '';
                     $('#tablelist tbody').empty();
                     var counter = 1;
                     var total = parseFloat(0);
                        data.forEach(element =>
                        {
                            template += '<tr>' +
                                    '<td>'+ counter +'</td>' +
                                    '<td>'+ element.pcchrgcod +'</td>' +
                                    '<td>'+ element.pcchrgdte +'</td>' +
                                    '<td>'+ element.chrgdesc +'</td>' +
                                    '<td>'+ element.itemdesc +'</td>' +
                                    '<td>'+ element.pchrgqty +'</td>' +
                                    '<td>'+ element.pchrgup +'</td>' +
                                    '<td>'+ element.pcchrgamt +'</td>' +
                                    '</tr>';
                                    counter++;
                            templatefortextarea += element.pcchrgcod + '\n';
                            total = total + parseFloat(element.pcchrgamt);
                        });
                        toptotal.value = total;
                        document.getElementById("myTextarea").value = templatefortextarea;
                        copybutton.style.display = "block";
                        myTextarea.style.display = "block";
                        $('#tablelist tbody').append(template);
                        $('#patsearchmodal').modal('hide');
                    }
                    else
                    {
                        alert("NO CHARGES");
                    }
                },
            });
        })
        function myFunction()
        {

        }
        function COPYFUNCTION()
        {
              /* Get the text field */
            var copyText = document.getElementById("myTextarea");

            /* Select the text field */
            copyText.select();

            /* Copy the text inside the text field */
            document.execCommand("copy");

            /* Copied Alert*/
            alert("PCCHRGCOD COPIED");
        }
    </script>
@endsection

@section('style')
    <style>
    </style>
@endsection