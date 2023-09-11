var index_involved = 1;
function addfield(){
    var item_id = $('.item_id').html();
    var tr = '<tr> <td> <select type="text" name="item_id[' + index_involved + ']" id="item_id[' + index_involved + ']" class="form-control" > @foreach($itemscats as $itemscat) <optgroup label=" {{$itemscat->mds_cat_desc}} "> @foreach($items as $item) @if($itemscat->mds_cat_id == $item->mds_cat_id) <option value=" {{$item->item_id}} "> {{$item->mds_desc}} </option> @endif @endforeach </optgroup> @endforeach </select> </td> <td> <input type="number" name="item_qty[' + index_involved + ']" id="item_qty[' + index_involved + ']" class="form-control"> </td> <td><input type="button" class="btn btn-danger delete" onclick="deletefield()" value="X"></td></tr>';

        
    index_involved++;
    console.log('Add Item : ' + index_involved);
    $('.additems').append(tr);
}

function deletefield(){
$('.additems').delegate('.delete', 'click', function(){
    $(this).parent().parent().remove();
});
}

