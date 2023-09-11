@extends('layouts.medcertlayout')

@section('content')
    <div class="card-body">
        <button onclick="window.history.back();">Go Back</button>

        <h1>Search Patient</h1>
        <div>
            <table>
                <thead>
                    <tr align="center">
                        <th>
                            Hospital No.
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th>
                            First Name
                        </th>
                        <th>
                            Middle Name
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $pat)
                        <tr>
                            <td>
                                <a href="/medicalcert/generateenctr/{{$pat->hpercode}}" class="btn btn-info" style="width: 100%">{{$pat->hpercode}}</a>
                            </td>
                            <td>
                                {{$pat->patlast}}
                            </td>
                            <td>
                                {{$pat->patfirst}}
                            </td>
                            <td>
                                {{$pat->patmiddle}}
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