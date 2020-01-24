@if(session("error") !== NULL )
    @if (session("error") !== NULL)
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <i class="fa fa-exclamation-triangle fa-sm"></i> <strong> Error,</strong> {{ session("error") }}
    </div>
    @else
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <i class="fa fa-exclamation-triangle fa-sm"></i> <strong> Error,</strong> {{ session("form_error") }}
    </div>
    @endif
@elseif (session("success")!== NULL)
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<i class="fa fa-check fa-sm"></i> <strong> Success,</strong> {{ session("success")}}
</div>
@endif
