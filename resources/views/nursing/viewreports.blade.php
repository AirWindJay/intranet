@extends('layouts.nursinglayout')

@section('content')
    <h3 hidden id="currentmonth"></h3>
    <div class="table-responsive">
        <table class="table-bordered" style="width: 140%">
            <thead align="center">
                <tr>
                    <td>
                        <h3>DATE</h3>
                    </td>
                    <td>
                        <h3>EMPLOYEE</h3>
                    </td>
                    <td>
                        <h3>Type</h3>
                    </td>
                    <td>
                        <h3>Validity</h3>
                    </td>
                    <td>
                        <h3>Notification</h3>
                    </td>
                    <td>
                        <h3>remarks</h3>
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr>
                        <td>
                            {{date('F d Y', strtotime($report->for_date))}}
                        </td>
                        <td>
                            {{$report->lastname}}, {{$report->firstname}} {{$report->middlename}}
                        </td>
                        <td>
                            @if($report->for_absent == '1')
                                ABSENT;
                            @endif
                            @if($report->for_late == '1')
                                LATE;
                            @endif
                            @if($report->for_undertime == '1')
                                UNDERTIME;
                            @endif
                            @if($report->for_reentry == '1')
                                RE-ENTRY / REPORTED FOR DUTY;
                            @endif
                        </td>
                        <td>
                            @if ($report->for_valid == '1')
                                VALID
                            @elseif($report->for_invalid == '1')
                                INVALID
                            @endif
                        </td>
                        <td>
                            @if ($report->for_notified == '1')
                                NOTIFIED
                            @elseif($report->for_notnotified == '1')
                                NOT NOTIFIED
                            @endif
                        </td>
                        <td>
                            {{$report->remarks}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection