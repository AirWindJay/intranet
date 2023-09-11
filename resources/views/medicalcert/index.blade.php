@extends('layouts.medcertlayout')

@section('content')
    <div class="card-body">
        <h1>Search Patient</h1>
        <div>
            <form method="POST" action="/medicalcert/patient" enctype="multipart/form-data">
                @csrf

                <h3>HOSPITAL NO.</h3>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <input id="hos_no" type="text" class="form-control" name="hos_no" placeholder="HOSPITAL NO.">
                        </div>
                    </div>

                <h3>LASTNAME</h3>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <input id="lastname" type="text" class="form-control" name="lastname" placeholder="LASTNAME">
                        </div>
                    </div>
    
                <h3>FIRSTNAME</h3>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <input id="firstname" type="text" class="form-control" name="firstname" placeholder="FIRSTNAME">
                        </div>
                    </div>
    
    
                <div class="form-group row mb-0">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Search..." name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
