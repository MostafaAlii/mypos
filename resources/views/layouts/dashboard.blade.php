@include('dashboard.includes.common.tpl_start')
    
    @include('dashboard.includes.common.navbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        @include('dashboard.includes.common.sidebar')
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @include('dashboard.includes.alerts.success')
            @yield('content')
            @include('dashboard.includes.common.footer')
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
@include('dashboard.includes.common.tpl_end')