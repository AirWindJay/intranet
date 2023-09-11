@extends('layouts.adminlayout')

@section('content')
    <h1 align="center" style="font-family:georgia"><b>Activity Log<b></h1>
    <div class="container">
        <div class="col-md-12 mb-5">
                {{ $actlogs->links() }}
            <table class="table-dark" style="width: 100%">
                <thead>
                    <tr align="center">
                        <th>
                            Employee Name
                        </th>
                        <th>
                            Activity Details
                        </th>
                        <th>
                            Date
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actlogs as $actlog)
                        <tr>
                            <td>
                                {{$actlog->lastname}}, {{$actlog->firstname}} {{$actlog->middlename}}
                            </td>
                            <td>
                                {{$actlog->act_details}}
                            </td>
                            <td>
                                {{date('F d Y H:i:s', strtotime($actlog->created_at))}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">
                            
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection



@section('style')
    
@endsection

@section('script')
    
@endsection