@extends('layouts.modulelayout')

@section('content')
    <div class="d-print-none">
        <a href="/Module/dashboard" class="btn btn-danger d-print-none mb-2">Go Back!</a>
    </div>
    <div class="d-print-none">
        <table style="width: 100%" id="myTable" class="table-sm">
            <thead>
                <tr align="center">
                    <th>
                        WELLBDETAILS
                    </th>
                    <th>
                        ADDATEDETAILS
                    </th>
                    <th>
                        PHILHEALTHDETAILS
                    </th>
                    <th>
                        ZDETAILS
                    </th>
                    <th>
                        WITH58600
                    </th>
                    <th>
                        WITH PHILHEALTH ON DISCHARGED
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patdata as $pat)
                    <tr>
                        @if ($pat->WELLBDETAILS == 'WELL BABY')
                            <td bgcolor="red" style="color:white">
                                {{$pat->WELLBDETAILS}}
                            </td>
                        @else
                            <td bgcolor="#BAFFC3">
                                {{$pat->WELLBDETAILS}}
                            </td>
                        @endif
                        @if ($pat->ADDATEDETAILS == 'ADMISSION DATE IS BEFORE MARCH 1')
                            <td bgcolor="red" style="color:white">
                                {{$pat->ADDATEDETAILS}}
                            </td>
                        @else
                            <td bgcolor="#BAFFC3">
                                {{$pat->ADDATEDETAILS}}
                            </td>
                        @endif
                        @if ($pat->PHILHEALTHDETAILS == 'NO PHILHEALTH')
                            <td bgcolor="red" style="color:white">
                                {{$pat->PHILHEALTHDETAILS}}
                            </td>
                        @else
                            <td bgcolor="#BAFFC3">
                                {{$pat->PHILHEALTHDETAILS}}
                            </td>
                        @endif
                        @if ($pat->ZDETAILS == 'IS Z-PACKAGE')
                            <td bgcolor="red" style="color:white">
                                {{$pat->ZDETAILS}}
                            </td>
                        @else
                            <td bgcolor="#BAFFC3">
                                {{$pat->ZDETAILS}}
                            </td>
                        @endif
                        @if ($pat->WITH58600 == 'WITHOUT CASE RATE: 58600' && $pat->ZDETAILS == 'IS Z-PACKAGE')
                            <td bgcolor="red" style="color:white">
                                {{$pat->WITH58600}}
                            </td>
                        @else
                            <td bgcolor="#BAFFC3">
                                {{$pat->WITH58600}}
                            </td>
                        @endif
                        @if ($pat->DISCHARGEDWITHNOPHILHEALTH == 'DISCHARGED WITH NO PHILHEALTH')
                            <td bgcolor="red" style="color:white">
                                {{$pat->DISCHARGEDWITHNOPHILHEALTH}}
                            </td>
                        @else
                            <td bgcolor="#BAFFC3">
                                {{$pat->DISCHARGEDWITHNOPHILHEALTH}}
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        @foreach ($patstatus as $item)
            RTH STATUS: {{$item->pStatus}}
        @endforeach
    </div>
    @if ($hpersonal[0]->role_id == '9')
        <hr class="mb-5 mt-5">
        {{$enc}}
        <div class="row">
            <div class="col-md-12">
                <h3>Chief Complaint</h3>
            </div>
            <div class="col-md-12">
                <table class="table" style="width: 100%">
                    @foreach ($ccs as $cc)
                        <tr>
                            <td>
                                {{$cc->chief_complaint}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-12">
                <h3>History Of Present Illness</h3>
            </div>
            <div class="col-md-12">
                <table class="table" style="width: 100%">
                    @foreach ($hpis as $hpi)
                        <tr>
                            <td>
                                {{$hpi->history_present_ill}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-12">
                <h3>Past Pertinent Medical History</h3>
            </div>
            <div class="col-md-12">
                <table class="table" style="width: 100%">
                    @foreach ($ppmhs as $ppmh)
                        <tr>
                            <td>
                                {{$ppmh->pert_past_med_history}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-12">
                <h3>COURSE IN THE WARD</h3>
            </div>
            <div class="col-md-12">
                <table class="table" style="width: 95%">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                COURSE WARD
                            </th>
                            <th>
                                ADMDATE
                            </th>
                            <th>
                                DISDATE
                            </th>
                            <th>
                                DATE_CW
                            </th>
                            <th>
                                ENTRY BY
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ciws as $cw)
                            @if ($cw->checker == 1)
                                <tr bgcolor="#BAFFC3">
                            @else
                                <tr>
                            @endif 
                                <td>{{$cw->id}}</td>
                                <td>{{$cw->course_ward}}</td>
                                <td>{{$cw->admdate}}</td>
                                <td>{{$cw->disdate}}</td>
                                <td>{{$cw->date_cw}}</td>
                                <td>{{$cw->entry_by}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <h3>FMI</h3>
            </div>
            <div class="col-md-12">
                <table class="table" style="width: 100%">
                    <tr>
                        <th colspan="2">
                            HRXO ({{$hrxocount[0]->hrxocount}}) | HRXOISSUE ({{$hrxoissuecount[0]->hrxoissuecount}})
                        </th>
                    </tr>
                    @foreach ($hrxos as $hrxo)
                        <tr>
                            <td>
                                {{$hrxo->docointkey}}
                            </td>
                            <td>
                                {{$hrxo->enccode}}
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="2">
                            
                        </th>
                    </tr>
                    @foreach ($hrxoissues as $hrxoissue)
                        <tr>
                            <td>
                                {{$hrxoissue->docointkey}}
                            </td>
                            <td>
                                {{$hrxoissue->enccode}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endif
@endsection

@section('script')
    <script type="text/javascript">
    </script>
@endsection

@section('style')
    <style type="text/css">
    </style>
@endsection