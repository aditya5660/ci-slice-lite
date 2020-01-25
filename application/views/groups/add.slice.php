@extends('base.app')
@section('content')
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row mx-1 mb-3">
					<h4 class="card-title">Add Group </h4>
					<a href="{{$BASE_URL}}" class="ml-auto btn btn-primary btn-sm">Back</a>
				</div>

				<form class="forms-sample" method="POST" action="{{$BASE_URL.'add_process'}}">
					<div class="form-group">
						<label for="exampleInputName1">Group Name</label>
						<input type="text" class="form-control" placeholder="Group Name" name="name">
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Group Desc</label>
						<input type="text" class="form-control" placeholder="Group Desc" name="description">
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Default Page</label>
						<input type="text" class="form-control" placeholder="Default Page" name="default_page">
					</div>
					<button type="submit" class="btn btn-success mr-2">Submit</button>
					<button type="reset" class="btn btn-light">Reset</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
