<br><br>
@if(Session::has('success'))
<div class="alert alert-arrow-left alert-icon-left alert-light-success mb-4"
role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg>
        <i data-feather="check"></i></svg>
    </button>
    <strong>{{trans('general.done')}}</strong> {{Session::get('success')}}
</div>
@endif