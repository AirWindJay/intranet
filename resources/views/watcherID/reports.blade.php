@extends('layouts.baslayout1')

@section('content')
<a href="/watchid/index" class="btn btn-danger mt-5">GO BACK</a>
    <div class="row">
        <div class="col-md-12">
            <h1 align="center">Reports</h1>
        </div>
        <div class="col-md-12">
            <table class="table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th>
                            Patient Name
                        </th>
                        <th>
                            Ward
                        </th>
                        <th>
                            Admission Date
                        </th>
                        <th>
                            WATCHER'S ID/s
                        </th>
                        <th>
                            ID Date Issued
                        </th>
                        <th>
                            ID Date Returned
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pats as $pat)
                        <tr>
                            <td>
                                {{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}}
                            </td>
                            <td>
                                {{$pat->ward}}
                            </td>
                            <td>
                                {{date('M-d-Y', strtotime($pat->admdate))}}
                            </td>
                            <td>
                                {{$pat->watchid}}<hr>
                                {{$pat->watchid1}}
                            </td>
                            <td>
                                {{date('M-d-Y', strtotime($pat->iddate))}}
                            </td>
                            <td>
                                @if ($pat->date_returned != NULL)
                                    {{date('M-d-Y', strtotime($pat->date_returned))}}
                                @else
                                    Not Returned
                                @endif
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('style')
    <style>
        td
        {
            border: 1px solid black !important
        }
    </style>
@endsection

@section('scripts')
    <script>
        function myFunction()
        {
            
        }
    </script>
@endsection