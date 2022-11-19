@extends(backpack_view('blank'))

@php
    $defaultBreadcrumbs = [
      trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
      $crud->entity_name_plural => url($crud->route),
      trans('backpack::crud.preview') => false,
    ];

    // if breadcrumbs aren't defined in the CrudController, use the default breadcrumbs
    $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
@endphp

@section('header')
    <section class="container-fluid d-print-none">
        <a href="javascript: window.print();" class="btn float-right"><i class="la la-print"></i></a>
        <h2>
            <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
            <small>{!! $crud->getSubheading() ?? mb_ucfirst(trans('backpack::crud.preview')).' '.$crud->entity_name !!}.</small>
            @if ($crud->hasAccess('list'))
                <small class=""><a href="{{ url($crud->route) }}" class="font-sm"><i class="la la-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a></small>
            @endif
        </h2>
    </section>
@endsection
<?php
$customer = \App\Models\Customer::find($entry->customer_id);
$sale_detail = \App\Models\Saledetail::where('sale_id',$entry->id)->get();

?>

@section('content')
    <div class="row">
        <div class="{{ $crud->getShowContentClass() }}">

            <!-- Default box -->
            <div class="">

                <div class="card no-padding no-border">
                    <table class="table table-striped mb-0">
                        <tbody>

                        <tr>
                            <td>
                                <strong>Customer:</strong>
                            </td>
                            <td>
                                {{optional($customer)->name}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Product Date:</strong>
                            </td>
                            <td>
                                {{$entry->p_date}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Description:</strong>
                            </td>
                            <td>
                                {{$entry->description}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Total Price:</strong>
                            </td>
                            <td>
                                ${{$entry->total_price}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Total Qty:</strong>
                            </td>
                            <td>
                                {{$entry->total_qty}}
                            </td>
                        </tr>
                        <tr>
                            <table class="table table-striped">
                                <thead>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Amount</th>
                                </thead>
                                <tbody>
                                @foreach($sale_detail as $item)
                                    <tr>
                                        <?php $producttt = \App\Models\Product::find($item->product_id); ?>
                                        <td>{{optional($producttt)->name}}</td>
                                        <td>${{$item->price}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>${{$item->qty * $item->price}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </tr>
                        </tbody>
                        <tfoot>
                        <td>
                            @include('crud::inc.button_stack', ['stack' => 'line'])
                        </td>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div>
    </div>
@endsection


@section('after_styles')
    <link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css').'?v='.config('backpack.base.cachebusting_string') }}">
    <link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/show.css').'?v='.config('backpack.base.cachebusting_string') }}">
@endsection

@section('after_scripts')
    <script src="{{ asset('packages/backpack/crud/js/crud.js').'?v='.config('backpack.base.cachebusting_string') }}"></script>
    <script src="{{ asset('packages/backpack/crud/js/show.js').'?v='.config('backpack.base.cachebusting_string') }}"></script>
@endsection

