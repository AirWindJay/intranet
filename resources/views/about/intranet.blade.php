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
                <div class="card-header" style="background-color:#33F3FF; font-size:25px;">INTRANET</div>
                <div class="card-body">
                    <div align="center">
                        <p>An intranet is a private network that is contained within an enterprise.</p>
                        <p>The main purpose of an intranet is to share company information and computing resources among employees.</p>
                        <p>More functions can be added to the system but can only be used by the enterprise members</p>
                        <hr>
                        <h3>Use Of Intranet BGHMC</h3>
                        <p>To look for up and coming events</p>
                        <p>For each division of BGHMC to post announcements</p>
                        <p>For CCRU to post documents</p>
                        <p>For employees to easily see CCRU announcements</p>
                        <p>Request for MIS services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
