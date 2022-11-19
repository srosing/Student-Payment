<?php
$id = isset($id) ? $id : 0;
$productcc = \App\Models\Saledetail::where('sale_id', $id)->get();

?>
{{--<h7><strong>Output</strong></h7>--}}
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>QTY</th>
        <th>LineAmt</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody class="productt">
    @if($productcc != null)
        @foreach($productcc as $item)
            @include('editprod',$item)
        @endforeach
    @endif
    </tbody>
</table>


@push('crud_fields_scripts')
    <script>
        $(function (){
            // select product
            $('body').on('change', '[name="product_id"]', function (){
                var product_id = $(this).val()-0;
                //alert(8);
                $.ajax({
                    type: 'GET',
                    url: ' {{url('admin/productttts')}}' + '/' + product_id,
                    success: function(d){

                        $('.productt').append(d);
                        total_();

                    },
                    error: function (d){
                        // alert('Error')
                    }
                })
            });

        });

        // remove row product in table
        $('body').on('click', '.remove_detail', function (){
            var row_id =$(this).data('row_id');
            var tr = ($('#a_'+row_id));

            tr.remove();
            total_();
        });
        // edit qty product row
        $('body').on('keyup', '.qty', function (){
            var r_id = $(this).data('row_id');
            var tr = $('#a_'+r_id);

            cal_lineamt(tr);
        });

        //edit price product row
        $('body').on('keyup', '.price', function (){
            var r_id = $(this).data('row_id');
            var tr = $('#a_'+r_id);

            cal_lineamt(tr);
        });

        // oy jenh value in lineamt
        function cal_lineamt(tablerow){
            var qty = tablerow.find('.qty').val();
            var price = tablerow.find('.price').val();
            var lineamt = price * qty;

            tablerow.find('.lineamt').val(lineamt);
            total_();
        }


        function total_(){
            var total_lineamt = 0;
            var total_qty = 0;

            $('.lineamt').each(function (){
                var lineamt = $(this).val()-0

                if(lineamt>0){
                    total_lineamt += lineamt;
                }
            })

            $('.qty').each(function (){
                var qty = $(this).val()-0

                if(qty>0){
                    total_qty += qty;
                }
            })

            $('[name="total_price"]').val(total_lineamt);
            $('[name="total_qty"]').val(total_qty);
        }

    </script>
@endpush
