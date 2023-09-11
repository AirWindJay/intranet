@extends('layouts.billinglayout')

@section('content')
    <div style="width: 100%; height: 800px; overflow: auto;">
        <form method="POST" action="/billing/patients" enctype="multipart/form-data">
            @csrf
            

            <h3>DISCHARGE DATE</h3>

            <label for="datefrom">DATE FROM:</label>
            <input type="date" id="datefrom" name="datefrom">
            
            <label for="dateto">DATE TO:</label>
            <input type="date" id="dateto" name="dateto">
            
            {{-- <input id="disdate" type="date" class="form-control" name="disdate"> --}}

            <select name="toecode" id="toecode" class="form-control">
                <option value="ADM">ADM</option>
                <option value="ER">ER</option>
                <option value="OPD">OPD</option>
            </select>

            <select name="dept" id="dept" class="form-control">
                @foreach ($depts as $dept)
                    <option value="{{$dept->tsdesc}}">{{$dept->tsdesc}}</option>
                @endforeach
            </select>
            

            <div class="form-group row mb-0">
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary" value="Search..." name="submit">
                </div>
            </div>
        </form>

        <hr>

        <form method="POST" action="/billing/allpatients" enctype="multipart/form-data">
            @csrf
            
            <h3>ALL PATIENTS LIST</h3>

            <label for="datefrom">DATE</label>
            <input type="date" id="daily" name="daily">
            
            
            <div class="form-group row mb-0">
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary" value="Search..." name="submit">
                </div>
            </div>
        </form>
    </div>
    
    <style>
        input[type="checkbox"]
        {
            width: 20px; /*Desired width*/
            height: 20px; /*Desired height*/
        }
    </style>
@endsection