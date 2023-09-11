@foreach ($out as $item)
    <h1>{{$item->employeeid}}</h1>
    @foreach ($out2 as $subitem)
        @if ($item->employeeid == $subitem->employeeid)
            {{$subitem->lastname}}, {{$subitem->firstname}} {{$subitem->middlename}} 
        @endif
    @endforeach
    <br>
@endforeach