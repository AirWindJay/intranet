@extends('layouts.pharmacylayout')

@section('content')
    <div class="card-body">
        <div class="row">

            <div class="col-lg-12 mb-5">
                <h3>Backlog</h3>
                <table class="table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th>
                                Encounter Type
                            </th>
                            <th>
                                Ward
                            </th>
                            <th>
                                Admission Date
                            </th>
                            <th>
                                Discharge Date
                            </th>
                            <th>
                                Number Of Confinement Days
                            </th>
                            <th>
                                Hospital No.
                            </th>
                            <th>
                                Patient Name
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($backlogs as $backlog)
                            <tr>
                                <td>
                                    {{$backlog->enctype}}
                                </td>
                                <td>
                                    {{$backlog->ward}}
                                </td>
                                <td>
                                    {{date('M d,Y', strtotime($backlog->admdate))}}
                                </td>
                                <td>
                                    {{date('M d,Y', strtotime($backlog->disdate))}}
                                </td>
                                <td>
                                    {{$backlog->num_conf}}
                                </td>
                                <td>
                                    <form method="POST" action="/pharmacy/patient2" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" id="diff" name="diff" value="2" hidden>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <input type="text" id="hos_no" name="hos_no" class="form-control" value="{{$backlog->hpercode}}" hidden>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6">
                                                <input type="submit" class="btn btn-primary" value="{{$backlog->hpercode}}" name="submit">
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    {{$backlog->patlast}}, {{$backlog->patfirst}} {{$backlog->patmiddle}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            
            {{-- <div class="col-lg-6">
                <form method="POST" action="/pharmacy/patient2" enctype="multipart/form-data">
                    @csrf
                    <input type="text" id="diff" name="diff" value="2" hidden>

                    <h3>Hospital Number</h3>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="text" id="hos_no" name="hos_no" class="form-control">
                        </div>
                    </div>
                    

                    <div class="form-group row mb-0">
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary" value="Search..." name="submit">
                        </div>
                    </div>
                </form>
            </div> --}}
        </div>
        


        {{-- <div>
            <hr>
            <h2>PENDING</h2>
            <table class="table-bordered" style="width: 100%" id="myTable">
                <thead>
                    <tr align="center">
                        <th>
                            Patient Name
                        </th>
                        <th>
                            Ward
                        </th>
                        <th>
                            Room
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pends as $pat)
                        <tr>
                            <td>
                                {{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}}
                            </td>
                            <td>
                                {{$pat->getward}}
                            </td>
                            <td>
                                {{$pat->getroom}}
                            </td>
                            <td>
                            <a href="#" class="btnSelect" data-enccode="{{ $pat->enccode }}"><button class="btn btn-info" style="width: 100%">SELECT</button></a>
                               
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}
    </div>

    {{-- <div id="medsModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <form action="/pharmacy/meds/save2" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Patient Meds</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table-bordered" id="medTable">
                            <thead>
                                <tr>
                                    <th>
                                        gendesc
                                    </th>
                                    <th>
                                        qty
                                    </th>
                                    <th>
                                        str
                                    </th>
                                    <th>
                                        freq
                                    </th>
                                    <th>
                                        route
                                    </th>
                                    <th>
                                        totalCost
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </form>
        </div>
    </div> --}}

    
    {{-- <script src="{{ asset('ajax/patsearchenccode.js') }}"></script> --}}
@endsection