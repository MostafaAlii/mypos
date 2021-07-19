@extends('layouts.dashboard')
@section('title')
{{trans('product.product_page_title')}}
@endsection
@section('content')
<div class="layout-px-spacing">
    <br>
    <div class="col-sm-12">
        <h4 class="mb-0">
            {{trans('product.edit_product')}}
        </h4>
    </div>
    <br>
    <!-- Start BreadCrumbs -->
    <nav class="breadcrumb-two" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">{{trans('dashboard.dashboard_page_title')}}</a></li>
            <li class="breadcrumb-item">
                <a href="{{route('product.index')}}">
                {{trans('product.products')}}
                </a>
            </li>
            <li class="breadcrumb-item active">
                <a href="#">
                {{trans('product.edit_product')}}
                </a>
            </li>
        </ol>
    </nav>
    <!-- End BreadCrumbs -->
    <br>
    @include('dashboard.includes.alerts._errors')
    <!-- Start Create Category Form -->
    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_email" value="{{ auth()->user()->email }}">
        <div class="statbox widget box box-shadow">
            <!-- Start Category Select Box & Product Referance -->
            <div class="form-row mb-4">
                <!-- Start Category Select -->
                <div class="form-group col-md-6">
                    <label>{{ trans('product.choose_category') }}</label>
                    <select name="category_id" class="form-control  basic">
                        <optgroup label="{{ trans('product.please_choose_category') }}">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}"{{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                    </select>
                </div>
                <!-- End Category Select -->
                <!-- Start Product Referance -->
                <div class="form-group col-md-6">
                    <label>{{trans('product.product_referance')}}</label>
                    <input type="text" name="referances" value="{{ $product->referances }}" class="form-control" value="{{ old('referance') }}" placeholder="{{trans('product.enter_referance')}}">
                </div>
                <!-- End Product Referance -->
            </div>
            <!-- End Category Select Box & Product Referance -->
            <!-- Start Product Name & Description -->
            <div class="form-row mb-4">
                @foreach(config('translatable.locales') as $locale)
                <div class="form-group col-md-6">
                    <label>{{trans('product.' .$locale. '.product_name')}}</label>
                    <input type="text" name="{{$locale}}[name]" class="form-control" value="{{$product->translate($locale)->name}}" placeholder="{{trans('product.' .$locale. '.enter_product_name')}}">
                </div>
                @endforeach
                @foreach(config('translatable.locales') as $locale)
                <div class="form-group col-md-6">
                    <label>{{trans('product.' .$locale. '.product_description')}}</label>
                    <textarea type="text" name="{{$locale}}[description]" class="form-control ckeditor">
                        {{$product->translate($locale)->description}}
                    </textarea>
                </div>
                @endforeach
            </div>
            <!-- End Product Name & Description -->
        </div>
        <br>
        <!-- Start Purchase Price and Sales Price & Stock -->
        <div class="statbox widget box box-shadow">
            <div class="form-row mb-4">
                <!-- Start Purches Price -->
                <div class="form-group col-md-6">
                    <!-- Start widget-header -->
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>{{ trans('product.product_purchase_price')}}</h4>
                            </div>                          
                        </div>
                    </div>
                    <!-- End widget-header -->
                    <!-- Start widget-content -->
                    <div class="widget-content widget-content-area">
                        <label for="purches_price">$999,9999,999.99</label>
                        <input type="number" value="{{ $product->purchase_price }}" name="purchase_price" class="form-control mb-4" id="purches_price">
                    </div>
                    <!-- End widget-content -->
                </div>
                <!-- End Purchase Price -->
                <!-- Start Sales Price -->
                <div class="form-group col-md-6">
                    <!-- Start widget-header -->
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>{{ trans('product.product_sale_price')}}</h4>
                            </div>                          
                        </div>
                    </div>
                    <!-- End widget-header -->
                    <!-- Start widget-content -->
                    <div class="widget-content widget-content-area">
                        <label for="sale_price">$999,9999,999.99</label>
                        <input type="number" value="{{ $product->sale_price }}" name="sale_price" class="form-control mb-4" id="sale_price">
                    </div>
                    <!-- End widget-content -->
                </div>
                <!-- End Sales Price -->
            </div>
            <!-- Start Stock -->
            <div class="form-row mb-4">
                <div class="form-group col-md-6">
                    <!-- Start widget-header -->
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>{{ trans('product.product_stock')}}</h4>
                            </div>                          
                        </div>
                    </div>
                    <!-- End widget-header -->
                    <!-- Start widget-content -->
                    <div class="widget-content widget-content-area">
                        <input type="number" name="stock" value="{{ $product->stock }}" class="form-control mb-4" id="stock">
                    </div>
                    <!-- End widget-content -->
                </div>
            </div>
            <!-- End Stock -->
        </div>
        <!-- End Purchase Price and Sales Price & Stock -->
        <br>
        <!-- Start Product Image -->
        <div class="statbox widget box box-shadow">
            <!-- Start Widget Header -->
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>{{trans('product.upload_product_image')}}</h4>
                    </div>      
                </div>
            </div>
            <!-- End Widget Header -->
            <!-- Start Widget Content -->
            <div class="widget-content widget-content-area">
                <!-- Start Single Custom File Uploader -->
                <div class="custom-file-container" data-upload-id="myFirstImage">
                <label>{{trans('users.not_want_image')}} <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                    <label class="custom-file-container__custom-file" >
                        <input type="file" name="image" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                        <input type="hidden" name="" value="" />
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="custom-file-container__image-preview">
                        <img src="{{ $product->image_path }}" style="width:200px;heigt:200px;border-radius:50%;border: 6px solid rgba(68, 94, 222, 0.24);" class="img-thumbnail image-preview">
                    </div>
                </div>
                <!-- End Single Custom File Uploader -->
            </div>
            <!-- End Widget Content -->
        </div>
        <!-- End Product Image -->
        <br>
        <!-- Start product Status -->
        <div class="statbox widget box box-shadow">
            <!-- Start Widget Header -->
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-2 col-md-2 col-sm-2 col-2">
                        <h4>{{trans('product.product_status')}}</h4>
                    </div> 
                    <label class="switch s-icons s-outline s-outline-success mr-2">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>     
                </div>
            </div>
            <!-- End Widget Header -->
        </div>
        <!-- End product Status -->
        <br>
        <button type="submit" class="btn btn-outline-primary btn-rounded mb-2">{{ trans('general.update') }}</button>
    </form>
</div>
@endsection