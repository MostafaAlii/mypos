@extends('layouts.dashboard')
@section('title')
{{trans('users.users_page_title')}}
@endsection
@section('content')
<div class="layout-px-spacing">
    <br>
    <div class="col-sm-12">
        <h4 class="mb-0">
            {{trans('users.edit_user')}}
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
                <a href="#">
                    {{trans('users.edit_user')}}
                </a>
            </li>
        </ol>
    </nav>
    <!-- End BreadCrumbs -->
    <br>
    @include('dashboard.includes.alerts._errors')
    <!-- Start Create New User Form -->
    <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <!-- Start First Name And Last Name -->
        <div class="form-row mb-4">
            <div class="form-group col-md-6">
                <label>{{trans('users.first_name')}}</label>
                <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" placeholder="{{trans('users.enter_first_name')}}">
            </div>
            <div class="form-group col-md-6">
                <label>{{trans('users.last_name')}}</label>
                <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}" placeholder="{{trans('users.enter_last_name')}}">
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
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" placeholder="{{trans('users.enter_your_email')}}" > 
                </div>
            </div>
        </div>
        <!-- End Email & Password -->
        <!-- Start Image Uploader With Privew -->
        <div class="statbox widget box box-shadow">
            <!-- Start Widget Header -->
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>{{trans('users.upload_your_image')}}</h4>
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
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="custom-file-container__image-preview"></div>
                </div>
                <!-- End Single Custom File Uploader -->
            </div>
            <!-- End Widget Content -->
        </div>
        <!-- End Image Uploader With Privew -->
        <br>
        <!-- Start Permission Tabs -->
        <div class="statbox widget box box-shadow">
            <!-- Start Widget Header -->
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>{{ trans('general.permissions_and_roles') }}</h4>
                    </div>
                </div>
            </div>
            <!-- End Widget Header -->
            <!-- Start Widget Content -->
            <div class="widget-content widget-content-area rounded-pills-icon">
                <!-- Start UL Widget -->
                <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                    <li class="nav-item ml-2 mr-2">
                        <a class="nav-link mb-2 active text-center" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                <i data-feather="users"></i>
                            </svg>
                            {{ trans('users.users')}}
                        </a>
                    </li>
                    <li class="nav-item ml-2 mr-2">
                        <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                <i data-feather="shopping-bag"></i>
                            </svg>
                            {{trans('general.products')}}
                        </a>
                    </li>
                    <li class="nav-item ml-2 mr-2">
                        <a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab" data-toggle="pill" href="#rounded-pills-icon-contact" role="tab" aria-controls="rounded-pills-icon-contact" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                <i data-feather="box"></i>
                            </svg>
                            {{trans('general.category')}}
                        </a>
                    </li>

                    <li class="nav-item ml-2 mr-2">
                        <a class="nav-link mb-2 text-center" id="rounded-pills-icon-settings-tab" data-toggle="pill" href="#rounded-pills-icon-settings" role="tab" aria-controls="rounded-pills-icon-settings" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                <i data-feather="layers"></i>
                            </svg>
                            {{trans('general.stock')}}
                        </a>
                    </li>
                </ul>
                <!-- End UL Widget -->
                <!-- Start Tab Content -->
                <div class="tab-content" id="rounded-pills-icon-tabContent">
                    <!-- Start Content For First Tab (Users) -->
                    <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                        <blockquote class="blockquote">
                            <div class="n-chk">    
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="create_users" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.create')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="read_users" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.read')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="update_users" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.update')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="delete_users" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.delete')}}</span>
                                </label>
                            </div>
                        </blockquote>      
                    </div>
                    <!-- End Content For First Tab (Users) -->
                    <!-- Start Content For Second Tab (Products) -->
                    <div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                        <blockquote class="blockquote">
                            <div class="n-chk">    
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="create_products" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.create')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="read_products" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.read')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="update_products" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.update')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="delete_products" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.delete')}}</span>
                                </label>
                            </div>
                        </blockquote>
                    </div>
                    <!-- End Content For Second Tab (Products) -->
                    <!-- Start Content For Third Tab (Category) -->
                    <div class="tab-pane fade" id="rounded-pills-icon-contact" role="tabpanel" aria-labelledby="rounded-pills-icon-contact-tab">    
                        <blockquote class="blockquote">
                            <div class="n-chk">    
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="create_categories" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.create')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="read_categories" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.read')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="update_categories" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.update')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="delete_categories" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.delete')}}</span>
                                </label>
                            </div>
                        </blockquote>                        
                    </div>
                    <!-- End Content For Third Tab (Category) -->
                    <!-- Start Content For Fourth Tab (Stocks) -->
                    <div class="tab-pane fade" id="rounded-pills-icon-settings" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                        <blockquote class="blockquote">
                            <div class="n-chk">    
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="create_stocks" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.create')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="read_stocks" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.read')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="update_stocks" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.update')}}</span>
                                </label>
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                    <input type="checkbox" name="permissions[]" value="delete_stocks" class="new-control-input">
                                    <span class="new-control-indicator"></span>
                                    <span class="new-chk-content">{{trans('general.delete')}}</span>
                                </label>
                            </div>
                        </blockquote>
                    </div>
                    <!-- End Content For Fourth Tab (Stocks) -->
                </div>
                <!-- End Tab Content -->
            </div>
            <!-- End Widget Content -->
        </div>
        <br>
        <!-- End Permission Tabs -->
        <button type="submit" class="btn btn-outline-primary btn-rounded mb-2">{{ trans('general.update') }}</button>
    </form>
    <!--End Create New User Form -->
</div>
@endsection