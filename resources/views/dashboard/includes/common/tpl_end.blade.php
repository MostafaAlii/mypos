<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js" integrity="sha512-lOrm9FgT1LKOJRUXF3tp6QaMorJftUjowOWiDcG5GFZ/q7ukof19V0HKx/GWzXCdt9zYju3/KhBNdCLzK8b90Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('dashboard/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('dashboard/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('dashboard/assets/js/custom.js')}}"></script>
    <script src="{{asset('dashboard/plugins/highlight/highlight.pack.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('dashboard/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/dashboard/dash_1.js')}}"></script>
    <script src="{{asset('dashboard/plugins/table/datatable/datatables.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{asset('dashboard/plugins/font-icons/feather/feather.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/select2/custom-select2.js')}}"></script>
    <script src="{{asset('dashboard/plugins/editors/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('dashboard/plugins/input-mask/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/input-mask/input-mask.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script>
        // DataTable
        c2 = $('#style-2').DataTable({
            headerCallback:function(e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML='<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
            },
            columnDefs:[ {
                targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                    return'<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
                }
            }],
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "{{__('datatable.showing_page')}} _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "{{__('datatable.search')}}",
               "sLengthMenu": "{{__('datatable.result')}} :  _MENU_",
            },
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5 
        });
        multiCheck(c2);
        // Select Box
        var ss = $(".basic").select2({
            tags: true,
        });
        // Feather Icon 
        feather.replace();
        // Single Upload For Users Image
        var firstUpload = new FileUploadWithPreview('myFirstImage');
        $(".tagging").select2({
            tags: true
        });
        // Purchase & sales Price Input Mask
        $("#purches_price").inputmask({mask:"$999,9999,999.99"});
        $("#sale_price").inputmask({mask:"$999,9999,999.99"});
        $("#stock").inputmask({mask:"$999,9999,999.99"});
    </script>
</body>
</html>