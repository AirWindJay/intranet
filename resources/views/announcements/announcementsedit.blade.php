@extends('layouts.app')

@section('content')

<script>
    function goBack() {
        window.history.back();
    }
</script>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<h1 align="center" style="font-family:georgia"><b>Edit ANNOUCEMENTS<b></h1>
<div class="container">
    <div>
        <div class="col-md-10">
            @foreach ($announcements as $announcement)
                <form method="POST" action="/announcement/edit/save">
                    @csrf

                    <div class="form-group row">
                        <div class="col-md-6">
                        <input hidden id="id" type="id" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{$announcement->id}}" required>

                            @if ($errors->has('id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                        <div class="col-md-6">
                        <input id="title" type="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{$announcement->title}}" required>

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
                            <textarea style="height:250px" id="detail" type="detail" class="form-control{{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail" required>{{$announcement->detail}}</textarea>

                            @if ($errors->has('detail'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('detail') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                        <hr>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
