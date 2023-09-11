@extends('layouts.mmolayout')

@section('content')
    <div class="card-body">

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search For Item" title="Type in an item">

        <div style="height:600px; overflow:auto;">
            <div class="table-responsive">
                <table id="myTable" style="width: 100%" class="table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>
                                Item Name
                            </th>
                            <th>
                                Item Code
                            </th>
                            <th>
                                Item Unit
                            </th>
                            <th>
                                Item Qty
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>
                                    {{$item->mds_desc}}
                                </td>
                                <td>
                                    {{$item->item_id}}
                                </td>
                                <td>
                                    {{$item->unit_desc}}
                                </td>
                                <td>
                                    {{$item->stocks}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('ajax/tablesearch.js') }}"></script>
@endsection
