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
                                Item Qty
                            </th>
                            <th>
                                Item Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>
                                    {{$item->items->description}}
                                </td>
                                <td>
                                    {{$item->item_id}}
                                </td>
                                <td>
                                    @foreach ($item->price_balances as $subitem)
                                        {{$subitem->balance}}<br><br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->price_balances as $subitem)
                                        P{{$subitem->price}}
                                        <a href="#" class="btnADDQTY" data-per_price_id="{{$subitem->id}}" style="margin-left: 20px;">
                                            <button class="btn btn-info" style="width: 50%">Edit</button>
                                        </a>
                                        <br><br>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">
                                {{ $items->links() }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div id="EditModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <form action="/addget/save" method="POST" enctype="multipart/form-data">
                @csrf
                    
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Qty</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container" id="appendDIV">
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </form>
        </div>
    </div>


    <script src="{{ asset('ajax/tablesearch.js') }}"></script>
@endsection

@section('script')

<script>
    $(function (){
        
        // medsedit();
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.btnADDQTY', function(){
        var per_price_id = $(this).attr('data-per_price_id');
        
        var template = '';
        var index = 0;
        $.ajax({
            type: "POST",
            url: '/addget',
            data: {per_price_id : per_price_id},
            dataType: 'json',
            success: function(data)
            {
                console.log(per_price_id);
                $('#appendDIV').empty();
                template += '<h1>'+ data.description +'</h1>' +
                        '<input type="number" id="itemQTY" name="itemQTY" class="form-control" value="'+ data.balance +'">' +
                        '<input type="number" id="itemprice" name="itemprice" class="form-control" value="'+ data.price +'">' +
                        '<input type="text" id="per_price_id" name="per_price_id" class="form-control" value="'+ data.per_price_id +'" hidden>';
                 $('#appendDIV').append(template);
                 $('#EditModal').modal('show');
            },
        });
    })
</script>
@endsection
{{-- 
select *, tb2.id as per_item_id from dbo.end_user_item as tb1
	left join price_balances as tb2
	on tb1.id = tb2.end_user_item_id
	where end_user_id = '1' --}}