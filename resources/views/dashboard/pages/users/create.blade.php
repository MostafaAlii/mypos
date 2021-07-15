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
    <!-- Start Create New User Form -->
    <form>
        <!-- Start Email & Password -->
        <div class="form-row mb-4">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <!-- End Email & Password -->
        
    </form>
    <!--End Create New User Form -->
</div>
@endsection