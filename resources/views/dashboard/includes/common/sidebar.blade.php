<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">
                <div class="profile-info">
                    <figure class="user-cover-image"></figure>
                    <div class="user-info">
                        <img src="{{auth()->user()->image_path}}" alt="avatar">
                        <h6 class="">{{ strtoupper(auth()->user()->first_name . ' ' . auth()->user()->last_name) }}</h6>
                        <p class="">{{-- strtoupper(auth()->user()->first_name . ' ' . $user->last_name) --}} </p>
                    </div>
                </div>
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <!-- Start Dashboard Head Title & Tab -->
                    <li class="menu active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>{{trans('dashboard.dashboard_page_title')}}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                            <li class="active">
                                <a href="{{route('dashboard.index')}}">{{trans('dashboard.dashboard_page_title')}}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Dashboard Head Title & Tab -->
                    <!-- Start Users Head Title -->
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>{{trans('users.users_in_sidebar')}}</span></div>
                    </li>
                    <!-- End Users Head Title -->
                    <!-- Start Users Tab -->
                    <li class="menu">
                        <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>{{trans('users.members_and_users')}}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                            <li>
                                <a href="{{route('user.create')}}">{{trans('users.add_member')}}</a>
                            </li>
                            <li>
                                <a href="{{route('user.index')}}">{{trans('users.show_all')}}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Users Tab -->
                    <!-- Start Category Head Title -->
                    <li class="menu menu-heading">
                        <div class="heading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            <span>{{trans('category.category_in_sidebar')}}</span>
                        </div>
                    </li>
                    <!-- End Category Head Title -->
                    <!-- Start Category Tab -->
                    <li class="menu">
                        <a href="#categories" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="box"></i>
                                <span>{{trans('category.categories')}}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="categories" data-parent="#accordionExample">
                            <li>
                                <a href="{{route('category.create')}}">{{trans('category.add_category')}}</a>
                            </li>
                            @if(auth()->user()->hasPermission('categories_read'))
                            <li>
                                <a href="{{route('category.index')}}">{{trans('category.show_all')}}</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    <!-- End Category Tab -->
                    <!-- Start Product Head Title -->
                    <li class="menu menu-heading">
                        <div class="heading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            <span>{{trans('product.product_in_sidebar')}}</span>
                        </div>
                    </li>
                    <!-- End Product Head Title -->
                    <!-- Start Product Tab -->
                    <li class="menu">
                        <a href="#products" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="shopping-bag"></i>
                                <span>{{trans('product.products')}}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="products" data-parent="#accordionExample">
                            <li>
                                <a href="{{route('product.create')}}">{{trans('product.add_products')}}</a>
                            </li>
                            @if(auth()->user()->hasPermission('products_read'))
                            <li>
                                <a href="{{route('product.index')}}">{{trans('product.show_all')}}</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    <!-- End Product Tab -->
                    <!-- Start Stock Head Title -->
                    <li class="menu menu-heading">
                        <div class="heading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            <span>{{trans('stock.stock_in_sidebar')}}</span>
                        </div>
                    </li>
                    <!-- End Stock Head Title -->
                    <!-- Start Product Tab -->
                    <li class="menu">
                        <a href="#stocks" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="layers"></i>
                                <span>{{trans('stock.stocks')}}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="stocks" data-parent="#accordionExample">
                            @if(auth()->user()->hasPermission('stocks_read'))
                            <li>
                                <a href="{{route('stock.index')}}">{{trans('stock.show_all')}}</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    <!-- End Product Tab -->
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->