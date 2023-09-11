@extends('layouts.app')

@section('content')

<script>
    function goBack() {
        window.history.back();
    }
</script>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:#33F3FF; font-size:25px;">Organizational Chart</div>
                <div class="card-body">
                    <div align="center">
                        <img style="width:100%;" src="../history/org-chart.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
