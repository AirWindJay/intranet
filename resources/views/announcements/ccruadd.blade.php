@extends('layouts.app')

@section('content')
<a href="/home" class="btn btn-danger">Go Back</a>
<h1 align="center" style="font-family:georgia"><b>POST ANNOUCEMENTS<b></h1>
<div class="container">
    <div>
        <div class="col-md-10">
            
            <form method="POST" action="/ccru/save" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="doc_num" class="col-md-4 col-form-label text-md-right">{{ __('Document Number') }}</label>

                    <div class="col-md-6">
                        <input id="doc_num" type="doc_num" class="form-control{{ $errors->has('doc_num') ? ' is-invalid' : '' }}" name="doc_num" value="{{ old('doc_num') }}" required>

                        @if ($errors->has('doc_num'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('doc_num') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="doc_date" class="col-md-4 col-form-label text-md-right">{{ __('Document Date') }}</label>

                    <div class="col-md-6">
                        <input id="doc_date" type="date" class="form-control{{ $errors->has('doc_date') ? ' is-invalid' : '' }}" name="doc_date" value="{{ old('doc_date') }}" required>

                        @if ($errors->has('doc_date'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('doc_date') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

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
                    <label for="type_document" class="col-md-4 col-form-label text-md-right">{{ __('Type of Document') }}</label>

                    <div class="col-md-6">
                        <select id="type_document" type="type_document" class="form-control{{ $errors->has('type_document') ? ' is-invalid' : '' }}" name="type_document" required>
                            <option value="Hospital Perosonnel Order">Hospital Perosonnel Order</option>
                            <option value="Hospital Order">Hospital Order</option>
                            <option value="Hospital Memorandum">Hospital Memorandum</option>
                            <option value="Hospital Personnel Memorandum">Hospital Personnel Memorandum</option>
                            <option value="Office Memorandum">Office Memorandum</option>
                            <option value="Hospital Advisory">Hospital Advisory</option>
                            <option value="Office Personnel Order">Office Personnel Order</option>
                            <option value="Office Personnel Memorandum">Office Personnel Memorandum</option>
                            <option value="Office Order">Office Order</option>
                            <option value="Office Circular">Office Circular</option>
                            
                        </select>
                        @if ($errors->has('type_document'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('type_document') }}</strong>
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
                    <label class="col-md-4 col-form-label text-md-right">{{ __('Concerned Divisions') }}</label>

                    <div class="col-md-6">
                        <input type="checkbox" name="for_omcc" value="1">OMCC<br>
                        <input type="checkbox" name="for_medical" value="1">MEDICAL<br>
                        <input type="checkbox" name="for_nursing" value="1">NURSING<br>
                        <input type="checkbox" name="for_hopss" value="1">HOPSS<br>
                        <input type="checkbox" name="for_finance" value="1">FINANCE<br>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ccrufile" class="col-md-4 col-form-label text-md-right">{{ __('Add Image') }}</label>

                    <div class="col-md-6">
                        <input id="ccrufile" type="file" name="ccrufile">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ccrupdffile" class="col-md-4 col-form-label text-md-right">{{ __('Add PDF') }}</label>

                    <div class="col-md-6">
                        <input id="ccrupdffile" type="file" name="ccrupdffile">
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
