@extends('layouts.pharmacylayout')

@section('content')

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="Search">
<form action="/pharmacy/index/sorted" method="POST" enctype="multipart/form-data">
@csrf
<div class="row mb-2">
    <div class="col-sm-1">
        <label for="sortby">SORT BY:</label>
    </div>
    <div class="col-sm-2">
        <select name="sortby" id="sortby" class="form-control">
            <option value="Main_Pharmacy">MAIN PHARMACY</option>
            <option value="OPD_Pharmacy">OPD PHARMACY</option>
            <option value="OR_Pharmacy">OR PHARMACY</option>
            <option value="Poison_Control">POISON CONTROL</option>
            <option value="TOTAL_QTY">TOTAL QTY</option>
        </select>
    </div>
    <div class="col-sm-2">
        <select name="sortfrom" id="sortfrom" class="form-control">
            <option value="ASC">ASCENDING</option>
            <option value="DESC">DESCENDING</option>
        </select>
    </div>
    <div class="col-sm-7">
        <button type="submit" class="btn btn-success">SORT</button>
    </div>
</div>
</form>
    <div style="width: 100%; height: 650px; overflow: auto;" class="mb-5">
        <table class="table-bordered" id="myTable">
            <thead>
                <tr>
                    <th style="width: 30%">
                        GENERIC NAME
                    </th>
                    <th>
                        FORM DESC.
                    </th>
                    <th>
                        DMDNOST
                    </th>
                    <th>
                        STRECODE
                    </th>
                    <th>
                        FORMCODE
                    </th>
                    <th>
                        RTECODE
                    </th>
                    <th>
                        MOT
                    </th>
                    <th>
                        MAIN PHARMACY
                    </th>
                    <th>
                        OPD PHARMACY
                    </th>
                    <th>
                        OR PHARMACY
                    </th>
                    <th>
                        POISON CONTROL
                    </th>
                    <th>
                        TOTAL QTY
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($bals as $bal)
                    <tr>
                        <td>
                            {{$bal->gendesc}}
                        </td>
                        <td>
                            {{$bal->formdesc}}
                        </td>
                        <td>
                            {{$bal->dmdnost}}
                        </td>
                        <td>
                            {{$bal->strecode}}
                        </td>
                        <td>
                            {{$bal->formcode}}
                        </td>
                        <td>
                            {{$bal->rtecode}}
                        </td>
                        <td>
                            {{$bal->brandname}}
                        </td>
                        <td>
                            {{$bal->Main_Pharmacy}}
                        </td>
                        <td>
                            {{$bal->OPD_Pharmacy}}
                        </td>
                        <td>
                            {{$bal->OR_Pharmacy}}
                        </td>
                        <td>
                            {{$bal->Poison_Control}}
                        </td>
                        <td>
                            {{$bal->TOTAL_QTY}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <script src="{{ asset('ajax/tablesearch.js') }}"></script>
    

    {{-- <script src="{{ asset('ajax/tablesortable.js') }}"></script> --}}
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
    </style>
@endsection