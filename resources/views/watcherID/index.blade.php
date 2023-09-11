@extends('layouts.baslayout1')

@section('content')
<h3 style="background-color: black; color:white;"><center>WATCHER'S ID MODULE</center></h3>
    <div class="row">
        @if ($cc == 1)
            <div class="col-md-12">
                <h1 align="center"><sup>SELECT</sup><sub>WARD</sub></h1>
            </div>
            <div class="col-md-12">
                <form action="/watchid/ward" method="POST" enctype="multipart/form-data">
                    @csrf
                    <select name="ward" id="ward" class="form-control">
                        @foreach ($wards as $ward)
                            <option value="{{$ward->ward}}">{{$ward->ward}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary mt-5">SUBMIT</button>
                </form>
            </div>
            <div class="col-md-12 mt-5 mb-5">
                <hr>
            </div>
        @endif
        <div class="col-md-12">
            <h1 align="center"><sup>GENERATE</sup><sub>REPORT</sub></h1>
        </div>
        <div class="col-md-12">
            <form action="/watchid/generate" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="date_from">Date From</label>
                <input type="date" name="date_from" id="date_from" class="form-control">
                <label for="date_to">Date From</label>
                <input type="date" name="date_to" id="date_to" class="form-control">
                <button type="submit" class="btn btn-primary mt-5">Generate List</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function myFunction()
        {
            
        }
    </script>
@endsection