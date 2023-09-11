@extends('layouts.baslayout1')

@section('content')
<a href="/watchid/index" class="btn btn-danger mt-5">GO BACK</a>
    <div class="row">
        <div class="col-md-12">
            <h1 align="center">{{$ward}}</h1>
        </div>
        <div class="col-md-12">
            <table class="table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th>
                            Patient Name
                        </th>
                        <th>
                            Admission Date
                        </th>
                        <th>
                            WATCHER'S ID/s
                        </th>
                        <th>
                            ACTION
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pats as $pat)
                        @if ($pat->idstat == 0 AND $pat->watchid != NULL)
                            <tr bgcolor="#F95656" style="color:white">
                                <td>
                                    {{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}}
                                </td>
                                <td>
                                    {{date('M-d-Y', strtotime($pat->admdate))}}
                                </td>
                                <td>
                                    {{$pat->watchid}}<hr>
                                    {{$pat->watchid1}}
                                </td>
                                <td>
                                    @if ($pat->watchid != NULL)
                                        <form action="/watchid/returned" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" name="ward" id="ward" value="{{$pat->ward}}" hidden>
                                            <input type="text" name="enccode" id="enccode" value="{{$pat->enccode}}" hidden>
                                            <button type="submit" class="btn btn-secondary">RETURN WATCHER'S ID</button>
                                        </form>
                                    @elseif($pat->idstat == '1')
                                        WATCHER'S ID RETURNED
                                    @else
                                        No Watchers ID
                                    @endif
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td>
                                    {{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}}
                                </td>
                                <td>
                                    {{date('M-d-Y', strtotime($pat->admdate))}}
                                </td>
                                <td>
                                    {{$pat->watchid}}<hr>
                                    {{$pat->watchid1}}
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        @endif
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