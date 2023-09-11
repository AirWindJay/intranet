@extends('layouts.modulelayout')

@section('content')
    <div style="width: 100%; height: 800px; overflow: auto;">
        

        @if($hpersonal[0]->role_id == 9)
            <a href="/Consignment/ENTdashboard" class="btn btn-info">ENT</a>
            <a href="/Consignment/ORTHOdashboard" class="btn btn-success">ORTHO</a>
            <a href="/Consignment/OPHTHAdashboard" class="btn btn-danger">OPHTHA</a>
        @else
        <form action="/Consignment/updateaccount" method="POST" enctype="multipart/form-data">
            @csrf
            <select name="role_id" id="role_id" class="form-control">
                <option value="18">ENT</option>
                <option value="19">ORTHO</option>
                <option value="20">OPHTHA</option>
            </select>
            <button type="submit" class="btn btn-info">Save</button>
        </form>
        @endif
    </div>
@endsection