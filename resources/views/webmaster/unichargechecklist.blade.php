@extends('layouts.adminlayout')

@section('content')
    <h1 align="center" style="font-family:georgia"><b>UNIVERSAL CHARGING LIST<b></h1>
    <div class="container">
        <div class="col-md-12 mb-5">
            <form action="/webmaster/unichargechecker/checksave" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" id="chrgtable" name="chrgtable" value="{{$chrgtable}}" hidden>
                <div class="card" style="color:black">
                    <div class="card-header">
                        <h3>chrgtable</h3>
                    </div>
                    <div class="card-body">
                        @php
                            $p = 0; 
                        @endphp
                        <table class="table" id="chargetable">
                            <thead>
                                <tr>
                                    <th>
                                        CHRGCODE
                                    </th>
                                    <th>
                                        CHRGDESC
                                    </th>
                                    <th>
                                        CHRGSTAT
                                    </th>
                                    <th>
                                        CHRGLOCK
                                    </th>
                                    <th>
                                        BENTYPCOD
                                    </th>
                                    <th>
                                        CHRGTABLE
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chargelist as $item)
                                    <tr>
                                        <td>
                                            {{$item->chrgcode}}
                                        </td>
                                        <td>
                                            {{$item->chrgdesc}}
                                        </td>
                                        <td>
                                            {{$item->chrgstat}}
                                        </td>
                                        <td>
                                            {{$item->chrglock}}
                                        </td>
                                        <td>
                                            {{$item->bentypcod}}
                                        </td>
                                        <td>
                                            {{$item->chrgtable}}
                                        </td>
                                        @php
                                            $p++;
                                        @endphp
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <input type="text" id="item[0]" name="item[0]" class="form-control">
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <a class="btn btn-default" href="#" onclick="addcolumn()">Add</a>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('style')
    
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        counter = 1;
        addcolumntemplate = '';

        function addcolumn()
        {
            addcolumntemplate = '<tr>' +
                                    '<td colspan="7">' +
                                        '<input type="text" id="item['+counter+']" name="item['+counter+']" class="form-control">' +
                                    '</td>' +
                                '</tr>';
            counter++;
            $('#chargetable tfoot').append(addcolumntemplate);
        }
    </script>
@endsection