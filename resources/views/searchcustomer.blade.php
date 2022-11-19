<table class="table table-striped">
    <thead>
    <th>Name</th>
    </thead>
    <tbody id="addcus">

    </tbody>
</table>
@push('crud_fields_scripts')
    <script>
        $(function (){
            // select product
            $('body').on('keyup','[name="customersearch"]', function(){
                var word = $(this).val();
                //console.log(word);
                $.ajax({
                    type: 'GET',
                    data: { word:word },
                    url: ' {{url('admin/cusshoww')}}',
                    success: function(d){
                        $('#addcus').html(d);

                    },
                    error: function (d){
                        // alert('Error')
                    }
                })
            });
        });
    </script>
@endpush
