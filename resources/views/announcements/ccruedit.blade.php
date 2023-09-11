@extends('layouts.app')

@section('content')
<a href="/ccru" class="btn btn-danger">Go Back</a>
<h1 align="center" style="font-family:georgia"><b>POST ANNOUCEMENTS<b></h1>
<div class="container">
    <div>
        <div class="col-md-10">
            @foreach ($announcements as $announcement)
                <form method="POST" action="/ccru/edit/save" enctype="multipart/form-data">
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
                        <label for="doc_date" class="col-md-4 col-form-label text-md-right">{{ __('Document Date') }}</label>

                        <div class="col-md-6">
                            <input id="doc_date" type="date" class="form-control{{ $errors->has('doc_date') ? ' is-invalid' : '' }}" name="doc_date" required>

                            @if ($errors->has('doc_date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('doc_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type_document" class="col-md-4 col-form-label text-md-right">{{ __('Type of Document') }}</label>

                        <div class="col-md-6">

                        @if($announcement->type_document == "Hospital Perosonnel Order")
                            <select id="type_document" type="type_document" class="form-control{{ $errors->has('type_document') ? ' is-invalid' : '' }}" name="type_document" required>
                                <option value="Hospital Perosonnel Order" selected>Hospital Perosonnel Order</option>
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
                        @elseif($announcement->type_document == "Hospital Order")
                            <select id="type_document" type="type_document" class="form-control{{ $errors->has('type_document') ? ' is-invalid' : '' }}" name="type_document" required>
                                <option value="Hospital Perosonnel Order">Hospital Perosonnel Order</option>
                                <option value="Hospital Order"selected>Hospital Order</option>
                                <option value="Hospital Memorandum">Hospital Memorandum</option>
                                <option value="Hospital Personnel Memorandum">Hospital Personnel Memorandum</option>
                                <option value="Office Memorandum">Office Memorandum</option>
                                <option value="Hospital Advisory">Hospital Advisory</option>
                                <option value="Office Personnel Order">Office Personnel Order</option>
                                <option value="Office Personnel Memorandum">Office Personnel Memorandum</option>
                                <option value="Office Order">Office Order</option>
                                <option value="Office Circular">Office Circular</option>
                            </select>
                        @elseif($announcement->type_document == "Hospital Memorandum")
                            <select id="type_document" type="type_document" class="form-control{{ $errors->has('type_document') ? ' is-invalid' : '' }}" name="type_document" required>
                                <option value="Hospital Perosonnel Order" >Hospital Perosonnel Order</option>
                                <option value="Hospital Order">Hospital Order</option>
                                <option value="Hospital Memorandum"selected>Hospital Memorandum</option>
                                <option value="Hospital Personnel Memorandum">Hospital Personnel Memorandum</option>
                                <option value="Office Memorandum">Office Memorandum</option>
                                <option value="Hospital Advisory">Hospital Advisory</option>
                                <option value="Office Personnel Order">Office Personnel Order</option>
                                <option value="Office Personnel Memorandum">Office Personnel Memorandum</option>
                                <option value="Office Order">Office Order</option>
                                <option value="Office Circular">Office Circular</option>
                            </select>
                        @elseif($announcement->type_document == "Hospital Personnel Memorandum")
                            <select id="type_document" type="type_document" class="form-control{{ $errors->has('type_document') ? ' is-invalid' : '' }}" name="type_document" required>
                                <option value="Hospital Perosonnel Order" >Hospital Perosonnel Order</option>
                                <option value="Hospital Order">Hospital Order</option>
                                <option value="Hospital Memorandum">Hospital Memorandum</option>
                                <option value="Hospital Personnel Memorandum"selected>Hospital Personnel Memorandum</option>
                                <option value="Office Memorandum">Office Memorandum</option>
                                <option value="Hospital Advisory">Hospital Advisory</option>
                                <option value="Office Personnel Order">Office Personnel Order</option>
                                <option value="Office Personnel Memorandum">Office Personnel Memorandum</option>
                                <option value="Office Order">Office Order</option>
                                <option value="Office Circular">Office Circular</option>
                            </select>
                        @elseif($announcement->type_document == "Office Memorandum")
                            <select id="type_document" type="type_document" class="form-control{{ $errors->has('type_document') ? ' is-invalid' : '' }}" name="type_document" required>
                                <option value="Hospital Perosonnel Order" >Hospital Perosonnel Order</option>
                                <option value="Hospital Order">Hospital Order</option>
                                <option value="Hospital Memorandum">Hospital Memorandum</option>
                                <option value="Hospital Personnel Memorandum">Hospital Personnel Memorandum</option>
                                <option value="Office Memorandum"selected>Office Memorandum</option>
                                <option value="Hospital Advisory">Hospital Advisory</option>
                                <option value="Office Personnel Order">Office Personnel Order</option>
                                <option value="Office Personnel Memorandum">Office Personnel Memorandum</option>
                                <option value="Office Order">Office Order</option>
                                <option value="Office Circular">Office Circular</option>
                            </select>
                        @elseif($announcement->type_document == "Hospital Advisory")
                            <select id="type_document" type="type_document" class="form-control{{ $errors->has('type_document') ? ' is-invalid' : '' }}" name="type_document" required>
                                <option value="Hospital Perosonnel Order" >Hospital Perosonnel Order</option>
                                <option value="Hospital Order">Hospital Order</option>
                                <option value="Hospital Memorandum">Hospital Memorandum</option>
                                <option value="Hospital Personnel Memorandum">Hospital Personnel Memorandum</option>
                                <option value="Office Memorandum">Office Memorandum</option>
                                <option value="Hospital Advisory"selected>Hospital Advisory</option>
                                <option value="Office Personnel Order">Office Personnel Order</option>
                                <option value="Office Personnel Memorandum">Office Personnel Memorandum</option>
                                <option value="Office Order">Office Order</option>
                                <option value="Office Circular">Office Circular</option>
                            </select>
                        @elseif($announcement->type_document == "Office Personnel Order")
                            <select id="type_document" type="type_document" class="form-control{{ $errors->has('type_document') ? ' is-invalid' : '' }}" name="type_document" required>
                                <option value="Hospital Perosonnel Order" >Hospital Perosonnel Order</option>
                                <option value="Hospital Order">Hospital Order</option>
                                <option value="Hospital Memorandum">Hospital Memorandum</option>
                                <option value="Hospital Personnel Memorandum">Hospital Personnel Memorandum</option>
                                <option value="Office Memorandum">Office Memorandum</option>
                                <option value="Hospital Advisory">Hospital Advisory</option>
                                <option value="Office Personnel Order"selected>Office Personnel Order</option>
                                <option value="Office Personnel Memorandum">Office Personnel Memorandum</option>
                                <option value="Office Order">Office Order</option>
                                <option value="Office Circular">Office Circular</option>
                            </select>
                        @elseif($announcement->type_document == "Office Personnel Memorandum")
                            <select id="type_document" type="type_document" class="form-control{{ $errors->has('type_document') ? ' is-invalid' : '' }}" name="type_document" required>
                                <option value="Hospital Perosonnel Order" >Hospital Perosonnel Order</option>
                                <option value="Hospital Order">Hospital Order</option>
                                <option value="Hospital Memorandum">Hospital Memorandum</option>
                                <option value="Hospital Personnel Memorandum">Hospital Personnel Memorandum</option>
                                <option value="Office Memorandum">Office Memorandum</option>
                                <option value="Hospital Advisory">Hospital Advisory</option>
                                <option value="Office Personnel Order">Office Personnel Order</option>
                                <option value="Office Personnel Memorandum"selected>Office Personnel Memorandum</option>
                                <option value="Office Order">Office Order</option>
                                <option value="Office Circular">Office Circular</option>
                            </select>
                        @elseif($announcement->type_document == "Office Order")
                            <select id="type_document" type="type_document" class="form-control{{ $errors->has('type_document') ? ' is-invalid' : '' }}" name="type_document" required>
                                <option value="Hospital Perosonnel Order" >Hospital Perosonnel Order</option>
                                <option value="Hospital Order">Hospital Order</option>
                                <option value="Hospital Memorandum">Hospital Memorandum</option>
                                <option value="Hospital Personnel Memorandum">Hospital Personnel Memorandum</option>
                                <option value="Office Memorandum">Office Memorandum</option>
                                <option value="Hospital Advisory">Hospital Advisory</option>
                                <option value="Office Personnel Order">Office Personnel Order</option>
                                <option value="Office Personnel Memorandum">Office Personnel Memorandum</option>
                                <option value="Office Order"selected>Office Order</option>
                                <option value="Office Circular">Office Circular</option>
                            </select>
                        @elseif($announcement->type_document == "Office Circular")
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
                                <option value="Office Circular"selected>Office Circular</option>
                            </select>
                        @endif
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
                            <textarea style="height:250px" id="detail" type="detail" class="form-control{{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail" required>{{$announcement->detail}}</textarea>

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
                            @if($announcement->for_omcc == 1)
                                <input type="checkbox" name="for_omcc" value="1" checked>OMCC<br>
                            @else
                                <input type="checkbox" name="for_omcc" value="1">OMCC<br>
                            @endif
                            @if($announcement->for_medical == 1)
                                <input type="checkbox" name="for_medical" value="1" checked>MEDICAL<br>
                            @else
                                <input type="checkbox" name="for_medical" value="1">MEDICAL<br>
                            @endif
                            @if($announcement->for_nursing == 1)
                                <input type="checkbox" name="for_nursing" value="1" checked>NURSING<br>
                            @else
                                <input type="checkbox" name="for_nursing" value="1">NURSING<br>
                            @endif
                            @if($announcement->for_hopss == 1)
                                <input type="checkbox" name="for_hopss" value="1" checked>HOPSS<br>
                            @else
                                <input type="checkbox" name="for_hopss" value="1">HOPSS<br>
                            @endif
                            @if($announcement->for_finance == 1)
                                <input type="checkbox" name="for_finance" value="1" checked>FINANCE<br>
                            @else
                                <input type="checkbox" name="for_finance" value="1">FINANCE<br>
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
            @endforeach
        </div>
    </div>
</div>
@endsection
