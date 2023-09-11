@extends('layouts.pharmacylayout')

@section('content')

{{-- <input class="d-print-none" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="Search"> --}}
<button class="btn btn-info d-print-none" onclick="printpage()" style="width: 100%;">PRINT</button>
    <div style="width: 100%;">
    <center><h5 style="color: red"><b>LIST OF AVAILABLE MEDICINE</b></h5></center>
        <table class="table-borderless" id="myTable" style="width: 100%">
            <thead>
                <tr>
                    <th style="width: 70%">
                        MEDICINE
                    </th>
                    <th>
                        MAIN
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($bals as $bal)
                    <tr>
                        <td>
                            {{$bal->item}}
                        </td>
                        <td>
                            P{{$bal->Main_Pharmacy}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h5 style="color: red"><b>* Prices, Availability Of Medicine And Medical Supplies Are Subject To Change Without Prior Notice</b></h5>
    </div>
    <script type="text/javascript">
        function printpage()
        {
            window.print();
            location.reload();
        }
    </script>
    
@endsection