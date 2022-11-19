
<?php
//$item = isset($item) ? $item : null;
$rand_id = rand(1, 1000) . time() . rand(1, 1000);


?>

<tr id="a_{{$rand_id}}">
    <td>
        {{optional($item)->name}}
        <input type="hidden" name="product_id_[{{$rand_id}}]"  class="form-control" value="{{$item->id ?? 0}}">
    </td>
    <td><input name="price_[{{$rand_id}}]" class="price" value="{{$item->price  ?? 0}}" data-row_id ="{{$rand_id}}"></td>
    <td><input name="qty_[{{$rand_id}}]" class="qty" value="{{$item->qty ?? 0}}" data-row_id ="{{$rand_id}}"></td>
    <td><input name="lineamt_[{{$rand_id}}]" class="lineamt" value="{{$item->lineamt}}" data-row_id ="{{$rand_id}}"></td>

    <td>
        <a class="btn btn-danger btn-sm remove_detail"
           data-button-type="delete"
           data-id="{{optional($item)->id ?? 0}}"
           data-row_id ="{{$rand_id}}"
        >Delete</a>
    </td>
</tr>

