@extends('layouts.billinglayout')

@section('content')
    <a href="/billing/dashboard" class="btn btn-info d-print-none">Go Back!</a>
    <div class="d-print-none">
        <select id="allpatlistselect" name="allpatlistselect" onchange="reload()">
            <option value="HEMO">HEMO</option>
            <option value="ADM">ADM</option>
            <option value="OPD/ER">OPD/ER</option>
        </select>
    </div>
    <div class="table-responsive">
        <table style="width: 100%" id="myTable">
            <thead>
                <tr align="center">
                    <th colspan="12">
                        <b>ALL INCOMPLETE FOR : {{date('M-d-Y', strtotime($daily2))}}</b>
                    </th>
                </tr>
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
                @foreach ($pats as $pat)
                    <tr>
                        <td>
                            <a href="#" class="btnSelect" data-hpercode="{{ $pat->hpercode }}">{{$pat->hpercode}}</a>
                        </td>
                        <td>
                            {{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}} 
                        </td>
                        <td>
                            {{date('m-d-Y', strtotime($pat->admdate))}}
                        </td>
                        <td>
                            {{date('m-d-Y', strtotime($pat->disdate))}}
                        </td>
                        <td>
                            {{$pat->ward}}
                        </td>
                        <td>
                            {{$pat->phys}}
                        </td>
                        <td align="center">
                            @if ($pat->cc == 1)
                                <input disabled type="checkbox" checked>
                            @else
                                <input disabled type="checkbox">
                            @endif
                        </td>
                        <td align="center">
                            @if ($pat->hpi == 1)
                                <input disabled type="checkbox" checked>
                            @else
                                <input disabled type="checkbox">
                            @endif
                        </td>
                        <td align="center">
                            @if ($pat->ppmh == 1)
                                <input disabled type="checkbox" checked>
                            @else
                                <input disabled type="checkbox">
                            @endif
                        </td>
                        <td align="center">
                            @if ($pat->ciw == 1)
                                <input disabled type="checkbox" checked>
                            @else
                                <input disabled type="checkbox">
                            @endif 
                        </td>
                        <td align="center">
                            @if ($pat->pssa == 1)
                                <input disabled type="checkbox" checked>
                            @else
                                <input disabled type="checkbox">
                            @endif 
                        </td>
                        <td align="center">
                            @if ($pat->pea == 1)
                                <input disabled type="checkbox" checked>
                            @else
                                <input disabled type="checkbox">
                            @endif 
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr align="center">
                    <td colspan="2">
                        CC: Chief Complaint
                    </td>
                    <td>
                        HPI: History of Present Illness
                    </td>
                    <td>
                        PPHM: Past Pertinent Medical History
                    </td>
                    <td>
                        CIW: Course in the Ward
                    </td>
                    <td>
                        PSSA: Pertinent Signs and Symptoms on Admission
                    </td>
                    <td colspan="6">
                        PEA = Physical Examination on Admission
                    </td>
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
    <script type="text/javascript">
        function reload()
        {

        }
        function printpage()
        {
            window.print();
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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
                                template += '<td align="center"><input disabled type="checkbox" checked></td>';
                            }
                            else
                            {
                                template += '<td align="center"><input disabled type="checkbox"></td>';
                            }
                            if (element.hpi == '1')
                            {
                                template += '<td align="center"><input disabled type="checkbox" checked></td>';
                            }
                            else
                            {
                                template += '<td align="center"><input disabled type="checkbox"></td>';
                            }
                            if (element.ppmh == '1')
                            {
                                template += '<td align="center"><input disabled type="checkbox" checked></td>';
                            }
                            else
                            {
                                template += '<td align="center"><input disabled type="checkbox"></td>';
                            }
                            if (element.ciw == '1')
                            {
                                template += '<td align="center"><input disabled type="checkbox" checked></td>';
                            }
                            else
                            {
                                template += '<td align="center"><input disabled type="checkbox"></td>';
                            }
                            if (element.pssa == '1')
                            {
                                template += '<td align="center"><input disabled type="checkbox" checked></td>';
                            }
                            else
                            {
                                template += '<td align="center"><input disabled type="checkbox"></td>';
                            }
                            if (element.pea == '1')
                            {
                                template += '<td align="center"><input disabled type="checkbox" checked></td></tr>';
                            }
                            else
                            {
                                template += '<td align="center"><input disabled type="checkbox"></td></tr>';
                            }
                        });
                        $('#listTable tbody').append(template);
                        $('#ListModal').modal('show');
                    }
                },
            });
        })
    </script>
    <style>
        input[type="checkbox"]
        {
            width: 20px; /*Desired width*/
            height: 20px; /*Desired height*/
        }
        table, td, tr, th
        {
            border: 2px solid black;
        }
    </style>
@endsection