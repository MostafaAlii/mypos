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

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>{{trans('users.users_in_sidebar')}}</span></div>
                    </li>

                    <!-- Start Users -->
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
                    <!-- End Users -->

                    <!-- Start Elements -->
                    <li class="menu">
                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                <span>Elements</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                            <li>
                                <a href="element_alerts.html"> Alerts </a>
                            </li>
                            <li>
                                <a href="element_avatar.html"> Avatar </a>
                            </li>
                            <li>
                                <a href="element_badges.html"> Badges </a>
                            </li>
                            <li>
                                <a href="element_breadcrumbs.html"> Breadcrumbs </a>
                            </li>                            
                            <li>
                                <a href="element_buttons.html"> Buttons </a>
                            </li>
                            <li>
                                <a href="element_buttons_group.html"> Button Groups </a>
                            </li>
                            <li>
                                <a href="element_color_library.html"> Color Library </a>
                            </li>
                            <li>
                                <a href="element_dropdown.html"> Dropdown </a>
                            </li>
                            <li>
                                <a href="element_infobox.html"> Infobox </a>
                            </li>
                            <li>
                                <a href="element_jumbotron.html"> Jumbotron </a>
                            </li>
                            <li>
                                <a href="element_loader.html"> Loader </a>
                            </li>
                            <li>
                                <a href="element_pagination.html"> Pagination </a>
                            </li>
                            <li>
                                <a href="element_popovers.html"> Popovers </a>
                            </li>
                            <li>
                                <a href="element_progress_bar.html"> Progress Bar </a>
                            </li>
                            <li>
                                <a href="element_search.html"> Search </a>
                            </li>
                            <li>
                                <a href="element_tooltips.html"> Tooltips </a>
                            </li>
                            <li>
                                <a href="element_treeview.html"> Treeview </a>
                            </li>
                            <li>
                                <a href="element_typography.html"> Typography </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Elements -->
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->