</div>
<!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('dashboard/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('dashboard/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('dashboard/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('dashboard/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('dashboard/plugins/apex/apexcharts.min.js')}}"></script>
    {{--@if (app()->getLocale() == 'ar')--}}
        <script src="{{asset('dashboard/js/dashboard/dash_2.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>