@extends('layouts.modulelayout')

@section('content')
    <div style="width: 100%">
        <div class="row">
            <div class="col-sm-12">
                <h1>CF4 MONITORING</h1>
            </div>
            <div class="col-sm-12">
                <form action="/Module/patients4" method="POST">
                    @csrf
                    <label for="ward_name">SELECT WARD</label>
                    <select name="ward_name" id="ward_name" class="form-control" onchange="disdatedis()">
                        @foreach ($wards as $ward)
                            <option value="{{$ward->wardname}}">{{$ward->wardname}}</option>
                        @endforeach
                    </select>
                    <br>
                    <div id="div_hide" style="display: none">
                        <label for="admdate">ADMISSION DATE</label>
                        <input class="form-control" type="date" id="admdate" name="admdate">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">GENERATE PATIENT LIST</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function disdatedis()
        {
            var ward_name = document.getElementById("ward_name").value;
            var div_hide = document.getElementById("div_hide");
            if (ward_name == 'OPD')
            {
                div_hide.style.display = "";
            } else
            {
                div_hide.style.display = "none";
            }
        }
    </script>
@endsection