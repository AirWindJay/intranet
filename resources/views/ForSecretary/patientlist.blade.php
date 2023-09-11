@extends('layouts.modulelayout')

@section('content')
    <div style="width: 100%; height: 800px; overflow: auto;">
        <h1>Search For Patient</h1>
        <form action="/Consignment/patientlist" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" id="dept" name="dept" value="{{$dept}}" hidden>
            <label for="hospnumber">HOSP NUMBER</label>
            <input type="text" id="hospnumber" name="hospnumber" class="form-control">
            <label for="patlast">LAST NAME:</label>
            <input type="text" id="patlast" name="patlast" class="form-control">
            <label for="patfirst">FIRST NAME:</label>
            <input type="text" id="patfirst" name="patfirst" class="form-control">
            <label for="patmiddle">MIDDLE NAME:</label>
            <input type="text" id="patmiddle" name="patmiddle" class="form-control">
            <button type="submit" class="btn btn-success mt-2">Search</button>
        </form>
        <hr>
        <h1>Patient List</h1>
        <table class="table-bordered" style="width: 95%; margin: auto">
            <thead class="thead-dark">
                <tr>
                    <th>
                        HOSP NUMBER
                    </th>
                    <th>
                        LAST NAME
                    </th>
                    <th>
                        FIRST NAME
                    </th>
                    <th>
                        MIDDLE NAME
                    </th>
                    <th>
                        BIRTH DATE
                    </th>
                    <th>
                        BIRTHPLACE
                    </th>
                    <th>
                        SEX
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patlist as $pat)
                    <tr>
                        <td>
                            <form action="/Consignment/getencctrs" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="text" id="dept" name="dept" value="{{$dept}}" hidden>
                                <input type="text" id="hpercode" name="hpercode" value="{{$pat->hpercode}}" hidden>
                                <button class="btn btn-info" type="submit">{{$pat->hpercode}}</button>
                            </form>
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
                        <td>
                            {{$pat->patbdate}}
                        </td>
                        <td>
                            {{$pat->patbplace}}
                        </td>
                        <td>
                            {{$pat->patsex}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection