@extends('layouts.adminlayout')

@section('content')
    <h1 align="center" style="font-family:georgia"><b>Reminders<b></h1>
    <div class="container">
        <div class="col-md-12 mb-5">
            <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#myModal">ADD REMINDER</button>
                {{ $reminders->links() }}
            <table class="table-dark" style="width: 100%">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            REMINDERS
                        </th>
                        <th>
                            STAT
                        </th>
                        <th>
                            CREATED AT
                        </th>
                        <th>
                            ACTION
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reminders as $reminder)
                        <tr>
                            <td>
                                {{$reminder->id}}
                            </td>
                            <td>
                                {{$reminder->reminders}}
                            </td>
                            <td>
                                {{$reminder->stat}}
                            </td>
                            <td>
                                {{$reminder->Created_at}}
                            </td>
                            <td>
                                <form action="/webmaster/chagestat" method="POST">
                                @csrf
                                <input type="text" id="rem_id" name="rem_id" value="{{$reminder->id}}" hidden>
                                <button type="submit" class="btn btn-info">Change Status</button>
                                </form>
                                <a href="/webmaster/editreminders/{{$reminder->id}}"><button type="submit" class="btn btn-success">Edit Reminders</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="/webmaster/addreminders" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h4 style="color:black">ADD REMINDER</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <textarea type="text" id="reminder" name="reminder" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('style')
    
@endsection

@section('script')
    
@endsection