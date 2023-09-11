@extends('layouts.modulelayout')

@section('content')
    <div style="width: 100%; height: 800px; overflow: auto;">
        <h1>Search For Patient</h1>
        <form action="/Consignment/patientlist" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" id="dept" name="dept" value="{{$dept}}" hidden>
            <label for="hospnumber">HOSP NUMBER</label>
            <input type="text" id="hospnumber" name="hospnumber" class="form-control">
            <label for="patlast">LAST NAME:</label>
            <input type="text" id="patlast" name="patlast" class="form-control">
            <label for="patfirst">FIRST NAME:</label>
            <input type="text" id="patfirst" name="patfirst" class="form-control">
            <label for="patmiddle">MIDDLE NAME:</label>
            <input type="text" id="patmiddle" name="patmiddle" class="form-control">
            <button type="submit" class="btn btn-success mt-2">Search</button>
        </form>
    </div>
@endsection