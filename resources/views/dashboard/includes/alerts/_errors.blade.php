@if($errors->any())
    <div class="alert alert-arrow-left alert-icon-left alert-light-danger mb-4" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <svg> ... </svg>
    </button>
    <svg> ... </svg>
    <strong>{{trans('general.sorry')}}</strong> {{trans('general.some_error_happining')}}    
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>
@endif