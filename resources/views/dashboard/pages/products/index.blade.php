@extends('layouts.dashboard')
@section('title')
{{trans('product.product_page_title')}}
@endsection
@section('content')
<div class="layout-px-spacing">
    <br>
    <div class="col-sm-12">
        <h4 class="mb-0">
            {{trans('product.manage_all_products')}}
        </h4>
    </div>
    <br>
    <!-- Start BreadCrumbs -->
    <nav class="breadcrumb-two" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">{{trans('dashboard.dashboard_page_title')}}</a></li>
            <li class="breadcrumb-item active">
                <a href="{{route('product.index')}}">
                {{trans('product.products')}}
                </a>
            </li>
        </ol>
    </nav>
    <!-- End BreadCrumbs -->
    <!-- Start Product Datatable -->
    <div class="row layout-top-spacing layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <!-- Start Btn -->
                    <a href="{{route('product.create')}}" class="btn btn-primary rounded bs-popover mb-3">
                        <img src="https://img.icons8.com/ultraviolet/32/000000/plus.png"/>
                        {{ trans('product.add_products')}}
                    </a>
                    <!-- End Btn -->
                    <!-- Start Table -->
                    <div class="table-responsive">
                        <table id="style-2" class="table style-2 table-hover">
                            <thead>
                                <tr>
                                    <th class="checkbox-column dt-no-sorting">#</th>
                                    <td>{{ trans('product.parent_category') }}</td>
                                    <th>{{ trans('product.product_referance') }}</th>
                                    <th>{{ trans('product.product_name') }}</th>
                                    <th>{{ trans('product.product_description') }}</th>
                                    <th class="text-center">{{ trans('product.product_image') }}</th>
                                    <th>{{ trans('product.product_status') }}</th>
                                    <th>{{ trans('product.product_quantity_in_stock') }}</th>
                                    <th>{{ trans('product.product_purchase_price') }}</th>
                                    <th>{{ trans('product.product_sale_price') }}</th>
                                    <th>{{ trans('product.profit_precent') }} %</th>
                                    <th>{{ trans('general.created_at') }}</th>
                                    <th>{{ trans('general.updated_at') }}</th>
                                    <th class="text-center dt-no-sorting">{{ trans('general.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $index=>$product)
                                <tr>
                                    <td class="checkbox-column">{{ $index + 1 }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->referances }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{!! $product->description !!}</td>
                                    <td class="text-center">
                                        <span>
                                            <img src="{{$product->image_path}}" class="rounded-circle profile-img">
                                        </span>
                                    </td>
                                    <td>{{ $product->getStatus() }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->purchase_price }}</td>
                                    <td>{{ $product->sale_price }}</td>
                                    <td>{{ $product->profit_precent }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td class="text-center">
                                        <!-- Start Edit Btn -->
                                        @if(auth()->user()->hasPermission('products_update'))
                                        <a href="{{route('product.edit', $product->id)}}" class="bs-tooltip disabled" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                        </a>
                                        @endif
                                        <!-- End Edit Btn -->
                                        @if(auth()->user()->hasPermission('categories_delete'))
                                        <!-- Start Delete Btn -->
                                        <a href="{{route('product.delete', $product->id)}}" class="bs-tooltip disabled" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel">
                                                <circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line>
                                                <line x1="9" y1="9" x2="15" y2="15"></line>
                                            </svg>
                                        </a>
                                        @endif
                                        <!-- End Delete Btn -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        <table>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Datatable -->
</div>
@endsection