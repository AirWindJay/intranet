@extends('layouts.app')

@section('content')

<h1 align="center" style="font-family:georgia"><b>ISO <sup>DASHBOARD </sup><b></h1>
<div class="container">
    <div>
        @if ( $errors->has('username'))
            <h1 class="text-success">SAVED!</h1>
        @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Create CSAT</h1>
                </div>
                <div class="card-body">
                    <a href="/foriso/form" class="btn btn-success">CREATE</a>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-header">
                    <h1>GENERATE REPORT</h1>
                    @if ( $errors->has('err'))
                        <h1 class="text-danger">NO DATA RECORD FOUND!</h1>
                    @endif
                </div>
                <div class="card-body">
                    <form method="POST" action="/foriso/reports" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>
                                                SELECT MONTH
                                            </td>
                                            <td>
                                                SELECT YEAR
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select id="month" type="text" class="form-control" name="month">
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select id="year" type="text" class="form-control" name="year">
                                                    <option value="2019">2019</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <label for="unit">SELECT UNIT</label>
                                <select name="unit" id="unit" class="form-control">
                                    @foreach ($units as $unit)
                                        <option value="{{$unit->id}}">{{$unit->ward}}</option>
                                    @endforeach
                                </select>
                            </div>
        
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary mt-2" value="GENARATE REPORT" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-5 mb-5">
                <div class="card-header">
                    <h1>Summary Rating</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="/foriso/ratings" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>
                                                SELECT MONTH
                                            </td>
                                            <td>
                                                SELECT YEAR
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select id="month" type="text" class="form-control" name="month">
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select id="year" type="text" class="form-control" name="year">
                                                    <option value="2019">2019</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-info mt-2" value="GENARATE SUMMARY RATING" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
