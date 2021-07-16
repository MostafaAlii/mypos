@extends('layouts.dashboard')
@section('title')
{{trans('users.users_page_title')}}
@endsection
@section('content')
<div class="layout-px-spacing">
    <br>
    <div class="col-sm-12">
        <h4 class="mb-0">
            {{trans('users.add_new_user')}}
        </h4>
    </div>
    <br>
    <!-- Start BreadCrumbs -->
    <nav class="breadcrumb-two" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">{{trans('dashboard.dashboard_page_title')}}</a></li>
            <li class="breadcrumb-item">
                <a href="{{route('user.index')}}">
                {{trans('users.members_and_users')}}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a href="{{route('user.create')}}">
                    {{trans('users.add_new_user')}}
                </a>
            </li>
        </ol>
    </nav>
    <!-- End BreadCrumbs -->
    <br>
    @include('dashboard.includes.alerts._errors')
    <!-- Start Create New User Form -->
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <!-- Start Email & Password -->
        <div class="form-row mb-4">
            <div class="form-group col-md-6">
                <label>{{trans('users.first_name')}}</label>
                <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}" placeholder="{{trans('users.enter_first_name')}}">
            </div>
            <div class="form-group col-md-6">
                <label>{{trans('users.last_name')}}</label>
                <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" placeholder="{{trans('users.enter_last_name')}}">
            </div>
        </div>
        <!-- End First Name And Last Name -->
        <!-- Start Email & Password -->
        <div class="form-row mb-4">
            <div class="form-group col-md-6">
                <label class="control-label">{{trans('users.email')}}</label>
                <div class="input-group"> 
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="{{trans('users.enter_your_email')}}" > 
                </div>
            </div>
            <div class="form-group col-md-6"></div>
            <div class="form-group col-md-6">
                <label>{{trans('users.password')}}</label>
                <input type="password" name="password" class="form-control" placeholder="{{trans('users.enter_your_password')}}">
            </div>
            <div class="form-group col-md-6">
                <label>{{trans('users.password_confirmation')}}</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="{{trans('users.enter_your_confirmation_password')}}">
            </div>
        </div>
        <!-- End Email & Password -->
        <button type="submit" class="btn btn-outline-primary btn-rounded mb-2">{{ trans('users.save') }}</button>
    </form>
    <!--End Create New User Form -->
</div>
@endsection