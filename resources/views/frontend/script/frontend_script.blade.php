<script>
    //alert('gg');
        $(function (){
            $('#addtocarttbn').on('click', function () {
                var skin = $('#skincare_id').val()-0;
                alert(skin);
                $.ajax({
                    type: 'GET',
                    url: '{{url('addcart')}}' + '/' + skin,
                    success:function (d) {
                    }
                });
            });
            $('#cartbtn').on('click', function () {
                $.ajax({
                    type: 'GET',
                    url: ' {{url('showcart')}}',
                    success: function (d) {
                        $('#cart').html(d);
                    }
                });
            });


            $('.nav-link').on('click',function(){
                var brand = $(this).data('brand');
                alert(brand);
                $.ajax({
                    type: 'GET',
                    url: '{{url('selectbrand')}}' + '/' + brand,
                    success: function(d){
                        $('#list').html(d);
                    }
                });
            });


    });
</script>
i
