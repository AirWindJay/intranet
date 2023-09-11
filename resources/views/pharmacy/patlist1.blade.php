@extends('layouts.pharmacylayout')

@section('content')
    <div class="card-body">
        <button onclick="window.history.back();">Go Back</button>

        <div class="row">
            <div class="col-sm-6">
                    <h1>Patient List {{date('F d Y', strtotime($dd))}}</h1> 
                
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Last Name" title="Type in a name" style="width: 80%">
            </div>
            <div class="col-sm-6">
                <form method="POST" action="/pharmacy/patient2" enctype="multipart/form-data">
                    @csrf
                    <input type="text" id="diff" name="diff" value="2" hidden>

                    <h3>Hospital Number</h3>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="text" id="hos_no" name="hos_no" class="form-control">
                        </div>
                    </div>
                    

                    {{-- <h3>Last Name</h3>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="text" id="hos_no" name="hos_no" class="form-control">
                        </div>
                    </div>

                    <h3>First Name</h3>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="text" id="hos_no" name="hos_no" class="form-control">
                        </div>
                    </div> --}}

                    <div class="form-group row mb-0">
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary" value="Search..." name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div style="width: 100%; height: 600px; overflow: auto; margin: auto;">
            <table class="table-bordered" style="width: 100%" id="myTable">
                <thead>
                    <tr align="center">
                        <th>
                            Patient Name
                        </th>
                        <th>
                            Admit Date
                        </th>
                        <th>
                            Discharge Date
                        </th>
                        <th>
                            Type
                        </th>
                        <th>
                            Ward
                        </th>
                        <th>
                            Room
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pats as $pat)
                        @if ($pat->jhaystat1 == 0 AND $pat->jhaystat2 == 0)
                            {{-- <tr>
                                <td>
                                    {{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}}
                                </td>
                                <td>
                                    {{date('F d Y', strtotime($pat->admdate))}}
                                </td>
                                <td>
                                    {{date('F d Y', strtotime($pat->disdate))}}
                                </td>
                                <td>
                                    {{$pat->enctype}}
                                </td>
                                <td>
                                    {{$pat->getward}}
                                </td>
                                <td>
                                    {{$pat->getroom}}
                                </td>
                                <td>
                                    <a href="#" class="btnSelect" data-patname="{{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}}" data-enccode="{{ $pat->enccode }}"><button class="btn btn-info" style="width: 100%">SELECT</button></a>
                                </td>
                            </tr> --}}
                        @else
                            <tr>
                                <td>
                                    {{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}}
                                </td>
                                <td>
                                    {{date('F d Y', strtotime($pat->admdate))}}
                                </td>
                                <td>
                                    @if ($pat->disdate != null)
                                        {{date('F d Y', strtotime($pat->disdate))}}
                                    @endif
                                </td>
                                <td>
                                    {{$pat->enctype}}
                                </td>
                                <td>
                                    {{$pat->getward}}
                                </td>
                                <td>
                                    {{$pat->getroom}}
                                </td>
                                <td>
                                    <a href="#" class="btnSelect" data-patname="{{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}}" data-enccode="{{ $pat->enccode }}"><button class="btn btn-info" style="width: 100%">SELECT</button></a>
                                    
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div id="medsModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <form action="/pharmacy/meds/save1" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="text" id="disdate" name="disdate" value="{{$dd}}" hidden>
                    <input type="text" id="typeatm" name="typeatm" value="{{$typeatm}}" hidden>
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Patient Meds: </h4>
                    <h4 class="modal-title" id="myText">Patient Meds</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="medTable">
                            <thead>
                                <tr>
                                    <th>
                                        gendesc
                                    </th>
                                    <th>
                                        qty
                                    </th>
                                    <th>
                                        str
                                    </th>
                                    <th>
                                        Qty Intake
                                    </th>
                                    <th>
                                        Unit Desc
                                    </th>
                                    <th>
                                        Unit Frequency
                                    </th>
                                    <th>
                                        Time Frequency
                                    </th>
                                    <th>
                                        route
                                    </th>
                                    <th>
                                        totalCost
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
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
    

    <script src="{{ asset('ajax/tablesearch.js') }}"></script>
@endsection

@section('style')
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }
        th {
            cursor: pointer;
        }
        .modal-lg {
            max-width: 95% !important;
        }
    </style>
@endsection

@section('script')

<script>
    $(function (){
        
        // medsedit();
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.btnSelect', function(){
        var enccode = $(this).attr('data-enccode');
        var patname = $(this).attr('data-patname');
        
        console.log(patname);
        document.getElementById("myText").innerHTML = patname;
        var template = '';
        var index = 0;
        $.ajax({
            type: "POST",
            url: '/pharmacy/enccode',
            data: {enccode : enccode},
            dataType: 'json',
            success: function(data)
            {
                console.log(enccode);
                if(data != null)
                {
                    $('#medTable tbody').empty();
                    data.forEach(element =>
                    {
                        template += '<tr>' +
                                '<td>'+ element.gendesc +'</td>' +
                                '<td>'+ element.qty +'</td>' +
                                '<td>'+ element.str +'</td>';
                        if(element.qtyintake < 1)
                        {
                            template += '<td><input id="qtyintake['+index+']" name="qtyintake['+index+']" min="1" type="number" value="'+ element.qtyintake +'" required style="background-color: red; color: white;">';
                        }
                        else
                        {
                            template += '<td><input id="qtyintake['+index+']" name="qtyintake['+index+']" min="1" type="number" value="'+ element.qtyintake +'" required>';
                        }
                        template += '<input id="dmdcomb['+index+']" name="dmdcomb['+index+']" type="text" value="'+ element.dmdcomb +'" hidden>' +
                                '<input id="dmdctr['+index+']" name="dmdctr['+index+']" type="number" value="'+ element.dmdctr +'" hidden>' +
                                '<input id="tbl['+index+']" name="tbl['+index+']" type="text" value="'+ element.tbl +'" hidden>' +
                                '<input id="uomintake['+index+']" name="uomintake['+index+']" type="text" value="'+ element.uomintake +'" hidden>' +
                                '<input id="enccode[0]" name="enccode[0]" type="text" value="'+ enccode +'" hidden></td>' +
                                '<td> <input id="unitdesc['+index+']" name="unitdesc['+index+']" type="text" value="'+ element.unitdesc +'" hidden>'+
                                '<input id="unitdesc['+index+']" name="unitdesc['+index+']" type="text" value="'+ element.unitdesc +'" disabled></td>';
                        if(element.time_frequency < 1)
                        {
                            template += '<td><input id="time_frequency['+index+']" name="time_frequency['+index+']" min="1" type="number" value="'+ element.time_frequency +'" required style="background-color: red; color: white;"></td>';
                        }
                        else
                        {
                            template += '<td><input id="time_frequency['+index+']" name="time_frequency['+index+']" min="1" type="number" value="'+ element.time_frequency +'" required></td>';
                        }
                        template += '<td>';
                        
                    if (element.unit_frequency == 'HOU')
                    {
                       template += '<select id="unit_frequency['+index+']" name="unit_frequency['+index+']" type="text" required>'+
                                        '<option value="HOU" selected>Hour/s</option>'+
                                        '<option value="DAY">Day/s</option>'+
                                        '<option value="WEK">Week/s</option>'+
                                        '<option value="MON">Months/s</option>'+
                                        '<option value="YER">Year/s</option>'+
                                        '<option value="MIN">Minute/s</option>'+
                                    '</select>';
                    }
                    else if (element.unit_frequency == 'DAY')
                    {   
                        template += '<select id="unit_frequency['+index+']" name="unit_frequency['+index+']" type="text" required>'+
                                        '<option value="HOU">Hour/s</option>'+
                                        '<option value="DAY" selected>Day/s</option>'+
                                        '<option value="WEK">Week/s</option>'+
                                        '<option value="MON">Months/s</option>'+
                                        '<option value="YER">Year/s</option>'+
                                        '<option value="MIN">Minute/s</option>'+
                                    '</select>';
                    }
                    else if (element.unit_frequency == 'WEK')
                    {
                        template += '<select id="unit_frequency['+index+']" name="unit_frequency['+index+']" type="text" required>'+
                                        '<option value="HOU" >Hour/s</option>'+
                                        '<option value="DAY" >Day/s</option>'+
                                        '<option value="WEK" selected>Week/s</option>'+
                                        '<option value="MON">Months/s</option>'+
                                        '<option value="YER">Year/s</option>'+
                                        '<option value="MIN">Minute/s</option>'+
                                    '</select>';
                    }
                    else if (element.unit_frequency == 'MON')
                    {
                        template += '<select id="unit_frequency['+index+']" name="unit_frequency['+index+']" type="text" required>'+
                                        '<option value="HOU" >Hour/s</option>'+
                                        '<option value="DAY" >Day/s</option>'+
                                        '<option value="WEK">Week/s</option>'+
                                        '<option value="MON" selected>Months/s</option>'+
                                        '<option value="YER">Year/s</option>'+
                                        '<option value="MIN">Minute/s</option>'+
                                    '</select>';
                    }
                    else if (element.unit_frequency == 'YER')
                    {
                        template += '<select id="unit_frequency['+index+']" name="unit_frequency['+index+']" type="text" required>'+
                                        '<option value="HOU" >Hour/s</option>'+
                                        '<option value="DAY" >Day/s</option>'+
                                        '<option value="WEK">Week/s</option>'+
                                        '<option value="MON">Months/s</option>'+
                                        '<option value="YER" selected>Year/s</option>'+
                                        '<option value="MIN">Minute/s</option>'+
                                    '</select>';
                    }
                    else if (element.unit_frequency == 'MIN')
                    {
                        template += '<select id="unit_frequency['+index+']" name="unit_frequency['+index+']" type="text" required>'+
                                        '<option value="HOU" >Hour/s</option>'+
                                        '<option value="DAY" >Day/s</option>'+
                                        '<option value="WEK">Week/s</option>'+
                                        '<option value="MON">Months/s</option>'+
                                        '<option value="YER" >Year/s</option>'+
                                        '<option value="MIN" selected>Minute/s</option>'+
                                    '</select>';
                    }
                    else
                    {
                        template += '<select id="unit_frequency['+index+']" name="unit_frequency['+index+']" type="text" required>'+
                                        '<option value="HOU" >Hour/s</option>'+
                                        '<option value="DAY" selected>Day/s</option>'+
                                        '<option value="WEK">Week/s</option>'+
                                        '<option value="MON">Months/s</option>'+
                                        '<option value="YER">Year/s</option>'+
                                        '<option value="MIN">Minute/s</option>'+
                                    '</select>';
                    }
                        template += '</td>'+
                                '<td>'+ element.route +'</td>' +
                                '<td>'+ element.totalCost +'</td>' +
                            '</tr>';
                        index ++;
                    });
                    $('#medTable tbody').append(template);
                    $('#medsModal').modal('show');
                }
            },
        });
    })
</script>
@endsection