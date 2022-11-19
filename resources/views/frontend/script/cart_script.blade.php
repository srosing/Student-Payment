<script>
    $(function () {
        // alert('kk');
        $('.minus').on('click', function () {
            var row = $(this).data('row_id');
            var tr = $('#p_'+row);

            var qty = tr.find('.qty').val()-0;
            var id = tr.find('.id').val() - 0;
            if(qty >1)
            {
                $.ajax({
                    type: 'GET',
                    url: ' {{url('minusqty')}}' + '/' + id,
                    success: function (d) {
                        $('#cart').html(d);
                    }
                });
            }
        });


        $('.plus').on('click',function () {
            var row = $(this).data('row_id');
            var tr = $('#p_'+row);
            var id = tr.find('.id').val()-0;
            //alert('dd');
                $.ajax({
                    type: 'GET',
                    url: '{{url('plusqty')}}' + '/' + id,
                    success: function(d){
                        $('#cart').html(d);
                    }
                });
        });

        $('.remove').on('click',function () {
            var row = $(this).data('row_id');
            var tr = $('#p_'+row);
            var id = tr.find('.id').val()-0;
            $.ajax({
                type:'GET',
                url: '{{url('remove')}}' + '/' + id,
                success: function (d) {
                    $('#cart').html(d);
                }
            });
        });

        {{--$('.remove').on('click', function () {--}}

        {{--    var row = $(this).data('row_id');--}}
        {{--    var tr = $('#p_' + row);--}}

        {{--    var id = tr.find('.id').val() - 0;--}}
        {{--    $.ajax({--}}
        {{--        type: 'GET',--}}
        {{--        url: ' {{url('removecart')}}' + '/' + id,--}}
        {{--        success: function (d) {--}}
        {{--            $('#cart').html(d);--}}
        {{--        }--}}
        {{--    });--}}
        {{--});--}}
    });
</script>
