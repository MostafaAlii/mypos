@if ($errors->any())
<div class="alert alert-arrow-right alert-icon-right alert-light-success mb-4" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <svg> ... </svg>
    </button>
    <svg> ... </svg>
    @foreach ($errors->all as $error)
        <p><strong>Warning! </strong> {{ $error }}</p>
    @endforeach
</div> 
@endif