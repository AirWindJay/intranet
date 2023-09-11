@extends('layouts.pharmacylayout')

@section('content')

{{-- <input class="d-print-none" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="Search"> --}}
{{-- <button class="btn btn-info d-print-none" onclick="printpage()" style="width: 100%;">PRINT</button> --}}
        {{-- <div id="checkbox_div" class="d-print-none">
            <p>Hide Column</p>
            <ul>
                <li><input type="checkbox" value="hide" id="main_col" onchange="hide_show_table(this.id);">MAIN</li>
                <li><input type="checkbox" value="hide" id="opd_col" onchange="hide_show_table(this.id);">OPD</li>
                <li><input type="checkbox" value="hide" id="or_col" onchange="hide_show_table(this.id);">OR</li>
                <li><input type="checkbox" value="hide" id="pc_col" onchange="hide_show_table(this.id);">PC</li>
            </ul>
        </div> --}}
    <div style="width: 100%;" class="mt-5">
        <a href="/pharmacy/index2/main" class="btn btn-info">MAIN PHARMACY</a><hr>
        <a href="/pharmacy/index2/or" class="btn btn-success">OR PHARMACY</a><hr>
        <a href="/pharmacy/index2/opd" class="btn btn-primary">OPD PHARMACY</a>
        {{-- <h5><b>* Prices, Availability Of Medicine And Medical Supplies Are Subject To Change Without Prior Notice</b></h5> --}}
    </div>
    
    <script src="{{ asset('ajax/tablesearch.js') }}"></script>
  
@endsection