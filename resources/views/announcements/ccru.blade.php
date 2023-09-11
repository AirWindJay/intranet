@extends('layouts.app')

@section('content')
<a href="/home" class="btn btn-danger mb-2">Go Back</a>
    <div class="row">
        <div class="col-md-12">
            @if($hpersonal[0]->role_id == 7 || $hpersonal[0]->role_id == 9)
                {{-- <a class="btn btn-primary" style="margin-bottom:10px;" href="/ccru/add">Post New Announcement</a> --}}
                <a class="btn btn-primary" data-toggle="modal" data-target="#newpost" style="margin-bottom:10px;"  role="button" aria-expanded="false" href="#">
                    Post New Announcement
                </a>
            @endif
        </div>
        <div class="col-md-4">
            <form action="/ccru/search" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="table-sm" style="width: 100%;">
                    <tr>
                        <td colspan="2" bgcolor="#282828" style="border-radius: 5px; color:white">
                            Search Documents
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group row">
                                <label for="type_document" class="col-md-4 col-form-label text-md-right">{{ __('Type of Document') }}</label>

                                <div class="col-md-6">
                                    <select id="type_document" type="text" class="form-control{{ $errors->has('type_document') ? ' is-invalid' : '' }}" name="type_document">
                                        <option value="1">ALL</option>
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
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group row">
                                <label for="date_from" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                                <div class="col-md-6">
                                    <input id="date_from" type="date" class="form-control{{ $errors->has('date_from') ? ' is-invalid' : '' }}" name="date_from" value="{{ old('date_from') }}">

                                    @if ($errors->has('date_from'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_from') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%">
                        </td>
                        <td>
                            TO
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group row">
                                <label for="date_to" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                                <div class="col-md-6">
                                    <input id="date_to" type="date" class="form-control{{ $errors->has('date_to') ? ' is-invalid' : '' }}" name="date_to" value="{{ old('date_to') }}">

                                    @if ($errors->has('date_to'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_to') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button style="width: 49%" type="submit" class="btn btn-success"><i class="fa fa-search"></i> Search</button>
                            <button style="width: 49%" type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> Clear</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-md-8 mb-5">
            <input type="text" class="form-control" placeholder="Search Document Number">
            <input type="text" class="form-control" placeholder="Search Title/Details">
            <table class="table table-sm table-bordered" style="width: 100%;" id="myTable">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            Document Number
                        </th>
                        <th>
                            For Division/s
                        </th>
                        <th>
                            <sup>Title</sup><sub>Details</sub>
                        </th>
                        <th>
                            Document Date
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody style="font-size: 12px">
                    @foreach ($ccru as $ann)
                        <tr>
                            <td>
                                {{$ann->yearnnumber}}
                            </td>
                            <td>
                                @if ($ann->for_omcc == 1)
                                    OMCC;
                                @endif
                                @if ($ann->for_medical == 1)
                                    MEDICAL;
                                @endif
                                @if ($ann->for_nursing == 1)
                                    NURSING;
                                @endif
                                @if ($ann->for_hopss == 1)
                                    HOPSS;
                                @endif
                                @if ($ann->for_finance == 1)
                                    FINANCE;
                                @endif
                            </td>
                            <td>
                                {{$ann->title}}
                                @foreach ($ann->image as $ccruimage)
                                    @if ($ccruimage->extension == 'pdf')
                                        <a href="../uploads/pdf/ccru/{{$ccruimage->file}}" target="_blank" class="btn btn-secondary">View PDF</a>
                                    @elseif ($ccruimage->extension == 'PDF')
                                        <a href="../uploads/pdf/ccru/{{$ccruimage->file}}" target="_blank" class="btn btn-secondary">View PDF</a>
                                    @endif
                                @endforeach
                                <hr style="border: 0.5px solid black; border-radius: 5px;">
                                {{$ann->detail}}
                            </td>
                            <td>
                                {{date('m-d-Y', strtotime($ann->doc_date))}}
                            </td>
                            <td>
                                <a href="/ccrudetails/{{$ann->id}}" class="btn btn-primary">View Complete Details</a><br><br>
                                @if($mydata[0]->role_id == 9 || $mydata[0]->role_id == 7)
                                    <a class="btn btn-success" href="/ccru/edit/{{$ann->id}}">Edit</a>
                                    <form method="POST" action="/ccru/delete">
                                        @csrf
                                        
                                        <div class="form-group row">
                                                <div class="col-md-6">
                                                    <input id="id" hidden type="id" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{$ann->id}}" required>
                            
                                                    @if ($errors->has('id'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
    
    
                                        <button type="submit" onclick="return confirm('Delete Post?');" class="btn btn-danger">
                                            {{ __('Delete') }}
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $ccru->links() }}
        </div>
    </div>




    {{-- MODAL --}}
    <div class="modal fade" id="newpost" tabindex="-1" role="dialog" aria-labelledby="newpostTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="newpostTitle">New Post</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
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
            <div class="modal-footer">
            </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <style>
        
    </style>
@endsection

@section('script')
    <script>
    
    </script>
@endsection