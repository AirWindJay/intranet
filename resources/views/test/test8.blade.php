<!DOCTYPE html>
<html>
<head>
    <style>
        table, td {
            border: 1px solid black;
        }
    </style>
</head>
<body style="width:100%; margin:auto;">
    <table class="table-borde" style="width:100%">
        <thead>
            <tr>
                <th>
                    ENCTYPE
                </th>
                <th>
                    ADM DATE
                </th>
                <th>
                    DIS DATE
                </th>
                <th>
                    HPERCODE
                </th>
                <th>
                    PATIENT NAME
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->enctype}}</td>
                    <td>{{ date('M d, Y', strtotime($item->admdate)) }}</td>
                    <td>{{ date('M d, Y', strtotime($item->disdate)) }}</td>
                    <td>{{$item->hpercode}}</td>
                    <td>{{$item->patlast}}, {{$item->patfirst}} {{$item->patmiddle}}, </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
