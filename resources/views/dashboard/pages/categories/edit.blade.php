@extends('layouts.dashboard')
@section('title')
{{trans('category.category_page_title')}}
@endsection
@section('content')
<div class="layout-px-spacing">
    <br>
    <div class="col-sm-12">
        <h4 class="mb-0">
            {{trans('category.edit_category')}}
        </h4>
    </div>
    <br>
    <!-- Start BreadCrumbs -->
    <nav class="breadcrumb-two" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">{{trans('dashboard.dashboard_page_title')}}</a></li>
            <li class="breadcrumb-item">
                <a href="{{route('category.index')}}">
                {{trans('category.categories')}}
                </a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{route('category.edit', $category->id)}}">
                {{trans('category.edit_category')}}
                </a>
            </li>
        </ol>
    </nav>
    <!-- End BreadCrumbs -->
    <br>
    @include('dashboard.includes.alerts._errors')
    <!-- Start Update Category Form -->
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        <!-- Start Category Name -->
        <div class="statbox widget box box-shadow">
            <div class="form-row mb-4">
                <div class="form-group col-md-6">
                    <label>{{trans('category.category_name')}}</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}" placeholder="{{trans('category.enter_category_name')}}">
                </div>
            </div>
            
            <button type="submit" class="btn btn-outline-primary btn-rounded mb-2">{{ trans('general.update') }}</button>
        </div>
        <!-- End Category Name -->
    </form>
    <!-- End Update Category Form -->
</div>
@endsection