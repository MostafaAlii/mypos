@if (session('success'))
    <script>
        new Noty({
            theme: 'bootstrap-v4',
            type: 'success',
            layout: 'topLeft',
            text: "{{ session('success') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>
@endif