@extends('layouts.app')

@section('content')

<script>
    function goBack() {
        window.history.back();
    }
</script>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<h1 align="center" style="font-family:georgia"><b>POST ANNOUCEMENTS<b></h1>
<div class="container">
    <div>
        <div class="col-md-10">
            
            <form method="POST" action="/webmaster/addpost/post" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required>

                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>

                    <div class="col-md-6">
                        <textarea style="height:250px" id="detail" type="detail" class="form-control{{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail" value="{{ old('detail') }}" required></textarea>

                        @if ($errors->has('detail'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('detail') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Add Image') }}</label>

                    <div class="col-md-6">
                        <input id="file" type="file" name="file">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pdffile" class="col-md-4 col-form-label text-md-right">{{ __('Add PDF') }}</label>

                    <div class="col-md-6">
                        <input id="pdffile" type="file" name="pdffile">
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
</div>
@endsection
