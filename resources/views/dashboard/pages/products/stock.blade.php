@extends('layouts.dashboard')
@section('title')
{{trans('stock.stock_page_title')}}
@endsection
@section('content')
<div class="layout-px-spacing">
    <br>
    <div class="col-sm-12">
        <h4 class="mb-0">
            {{trans('stock.manage_all_stocks')}}
        </h4>
    </div>
    <br>
    <!-- Start BreadCrumbs -->
    <nav class="breadcrumb-two" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">{{trans('dashboard.dashboard_page_title')}}</a></li>
            <li class="breadcrumb-item active">
                <a href="{{route('stock.index')}}">
                {{trans('stock.stocks')}}
                </a>
            </li>
        </ol>
    </nav>
    <!-- End BreadCrumbs -->
    <!-- Start Stock Datatable -->
    <div class="row layout-top-spacing layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <!-- Start Widget -->
                    <form action="{{ route('stock.update') }}" method="post">
                    @csrf
                        <input type="hidden" name="user_email" value="{{ auth()->user()->email }}">
                        <div class="form-row mb-4">
                            <!-- Start Referance Select -->
                            <div class="form-group col-md-3">
                                <label>{{ trans('stock.choose_referance') }}</label>
                                <select name="name" class="form-control  basic">
                                    <optgroup label="{{ trans('stock.please_choose_referance') }}">
                                        @foreach($products as $product)
                                        <option>
                                            {{ $product->referances }}
                                        </option>
                                        @endforeach
                                </select>
                            </div>
                            <!-- End Referance Select -->
                            <!-- Start Product Name Select -->
                            <div class="form-group col-md-3">
                                <label>{{ trans('stock.choose_product_name') }}</label>
                                <input type="hidden" name="id" value="{{ $product->id}}">

                                <select name="name" class="form-control  basic">
                                    <optgroup label="{{ trans('stock.choose_product_name') }}">
                                        @foreach($products as $product)
                                        
                                        <option>
                                            {{ $product->name }}
                                        </option>
                                        
                                        @endforeach
                                </select>
                            </div>
                            <!-- End Product Name Select -->
                            <!-- Start Quantity Select -->
                            <div class="form-group col-md-3">
                                <div class="form-group d-block text-left">
                                    <label for="stockQuantity" class="d-block">{{ trans('stock.change_quantity') }}</label>
                                    <input type="number" name="stock" id="stockQuantity" class=" form-control mt-2" aria-describedby="quantityHelper">
                                    <small id="quantityHelper" class="text-muted">
                                    {{ trans('stock.min_char') }}
                                    </small>
                                </div>
                            </div>
                            <!-- End Quantity Select -->
                        </div>
                        <!-- End Widget -->
                        <button type="submit" class="btn btn-outline-primary btn-rounded mb-2">{{ trans('general.done') }}</button>
                    </form>
                    <!-- Start Table -->
                    <div class="table-responsive">
                        <table id="style-2" class="table style-2 table-hover">
                            <thead>
                                <tr>
                                    <th class="checkbox-column dt-no-sorting">#</th>
                                    <th>{{ trans('product.product_referance') }}</th>
                                    <th>{{ trans('product.product_name') }}</th>
                                    <th>{{ trans('product.product_quantity_in_stock') }}</th>
                                    <th>{{ trans('stock.add_by') }}</th>
                                    <th>{{ trans('general.created_at') }}</th>
                                    <th>{{ trans('general.updated_at') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $index=>$product)
                                <tr>
                                    <td class="checkbox-column">{{ $index + 1 }}</td>
                                    <td>{{ $product->referances }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->user_email }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>
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
    <!-- End Stock Datatable -->
</div>
@endsection