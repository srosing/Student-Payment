@if($result != null)
    @foreach($result as $item)
        <tr>
            <td>{{$item->name}}</td>
        </tr>
    @endforeach
{{--@else--}}
{{--    <tr>--}}
{{--        <td></td>--}}
{{--    </tr>--}}
@endif
