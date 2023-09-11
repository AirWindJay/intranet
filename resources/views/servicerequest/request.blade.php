@extends('layouts.app')

@section('content')

<script>
    function goBack() {
        window.history.back();
    }
</script>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<h1 align="center" style="font-family:georgia"><b>Request For Service<b></h1>
<div class="container">

        <form method="POST" action="/servicerequest/request/save" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Problem') }}</label>

                <div class="col-md-6">
                    <input list="category" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" required>
                    <datalist id="category">
                            <option value="Computer Installation/relocation">
                            <option value="Computer Troubleshoot">
                            <option value="Hardware Technical Assistance">
                            <option value="HOMIS Installation & update">
                            <option value="HOMIS Troubleshooting">
                            <option value="Ink Refill">
                            <option value="Internet Connection">
                            <option value="Network Assistance">
                            <option value="Network Installation">
                            <option value="Network Troubleshoot">
                            <option value="Printer Repair">
                            <option value="Software Technical Assistance">
                            <option value="Special Request">
                    </datalist> 
                    @if ($errors->has('category'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="remarks" class="col-md-4 col-form-label text-md-right">{{ __('Remarks') }}</label>

                <div class="col-md-6">
                    <textarea style="height:200px" id="remarks" type="remarks" class="form-control{{ $errors->has('remarks') ? ' is-invalid' : '' }}" name="remarks" value="{{ old('remarks') }}" required></textarea>

                    @if ($errors->has('remarks'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('remarks') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                <div class="col-md-6">
                    <input list="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" required>
                    <datalist id="location">
                        @foreach($departments as $department)
                            <option value="{{$department->department}}">
                        @endforeach
                    </datalist> 
                    @if ($errors->has('location'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


                <hr>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <input type="submit" class="btn btn-primary" value="SUBMIT" name="submit">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
