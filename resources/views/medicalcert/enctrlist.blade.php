@extends('layouts.medcertlayout')

@section('content')
    <div class="card-body">
        <button onclick="window.history.back();">Go Back</button>

        <h1>SELECT ENCOUNTER: <sup>{{$pat->patlast}}, {{$pat->patfirst}}</sup></h1>
        <div>
            <table>
                <thead>
                    <tr align="center">
                        <th>
                            Date Admitted
                        </th>
                        <th>
                            Time Admitted
                        </th>
                        <th>
                            Date Discharged
                        </th>
                        <th>
                            Time Discharged
                        </th>
                        <th>
                            Type Of Encounter
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($encounters as $enc)
                        <tr>
                            <td>
                                
                                <form method="POST" action="/medicalcert/print" enctype="multipart/form-data">
                                    @csrf
                                    <input id="enccode" type="text" class="form-control" name="enccode" value="{{$enc->enccode}}" hidden>
                                    <input id="hpercode" type="text" class="form-control" name="hpercode" value="{{$enc->hpercode}}" hidden>
                                    <input type="submit" class="btn" value="{{date('F d, Y', strtotime($enc->admdate))}}" name="submit" style="width: 100%">
                                </form>
                            </td>
                            <td>
                                
                                <form method="POST" action="/medicalcert/print" enctype="multipart/form-data">
                                    @csrf
                                    <input id="enccode" type="text" class="form-control" name="enccode" value="{{$enc->enccode}}" hidden>
                                    <input id="hpercode" type="text" class="form-control" name="hpercode" value="{{$enc->hpercode}}" hidden>
                                    <input type="submit" class="btn" value="{{date('H:i:s', strtotime($enc->admdate))}}" name="submit" style="width: 100%">
                                </form>
                            </td>
                            <td>
                                
                                <form method="POST" action="/medicalcert/print" enctype="multipart/form-data">
                                    @csrf
                                    <input id="enccode" type="text" class="form-control" name="enccode" value="{{$enc->enccode}}" hidden>
                                    <input id="hpercode" type="text" class="form-control" name="hpercode" value="{{$enc->hpercode}}" hidden>
                                    <input type="submit" class="btn" value="{{date('F d, Y', strtotime($enc->disdate))}}" name="submit" style="width: 100%">
                                </form>
                            </td>
                            <td>
                                
                                <form method="POST" action="/medicalcert/print" enctype="multipart/form-data">
                                    @csrf
                                    <input id="enccode" type="text" class="form-control" name="enccode" value="{{$enc->enccode}}" hidden>
                                    <input id="hpercode" type="text" class="form-control" name="hpercode" value="{{$enc->hpercode}}" hidden>
                                    <input type="submit" class="btn" value="{{date('H:i:s', strtotime($enc->disdate))}}" name="submit" style="width: 100%">
                                </form>
                            </td>
                            <td>
                                
                                <form method="POST" action="/medicalcert/print" enctype="multipart/form-data">
                                    @csrf
                                    <input id="enccode" type="text" class="form-control" name="enccode" value="{{$enc->enccode}}" hidden>
                                    <input id="hpercode" type="text" class="form-control" name="hpercode" value="{{$enc->hpercode}}" hidden>
                                    <input type="submit" class="btn" value="{{$enc->toecode}} / {{$enc->tscode}}" name="submit" style="width: 100%">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    
@endsection

@section('style')
    <style>
        table
        {
            border: 2px solid black;
            width: 95%;
            margin: auto;
        }
        tr, th, td
        {
            border: 1px solid black;
        }
    </style>
@endsection