@extends('layouts.modulelayout')

@section('content')
    <div style="width: 95%; height: 800px; overflow: auto; margin: auto;">
        <div class="row">
            <div class="col-md-4">
                <a href="#" data-toggle="modal" class="btn btn-primary d-print-none" data-target="#patsearchmodal" style="width: 300px; margin:auto"><i class="fa fa-user"></i><i class="fa fa-search"></i><span>Search Patient</span></a>
            </div>
            <div class="col-md-4">
                <label for="patname">Patient Name:</label>
                <input type="text" id="patname" name="patname" class="form-control" value="{{$patname}}" disabled>
                <label for="hosnum">Hospital Number:</label>
                <input type="text" id="hosnum" name="hosnum" class="form-control" value="{{$hosnum}}" disabled>
            </div>
            <div class="com-md-4">
                <label for="patname">Details:</label>
                <input type="text" id="patname" name="patname" class="form-control" value="{{$details}}" disabled>
            </div>
            <div class="col-md-12">
                <hr>
                <table class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>
                                Charge Slip #
                            </th>
                            <th>
                                Date Of Order
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Qty Issued
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chrgs as $chrg)
                            <tr>
                                <td>
                                    {{$chrg->csnum}}
                                </td>
                                <td>
                                    {{date('M d, Y h:i:s A', strtotime($chrg->dateoforder))}}
                                </td>
                                <td>
                                    {{$chrg->descript}}
                                </td>
                                <td>
                                    {{$chrg->qty}}
                                </td>
                                <td>
                                    P{{$chrg->price}}
                                </td>
                                <td>
                                    P{{$chrg->totalchrg}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    </tfoot>
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
                                    '<form action="/medicalsupplies/selectpatient" method="POST" enctype="multipart/form-data">' +
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
    </script>
@endsection