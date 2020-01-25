@extends('base.app')
@section('content')
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row mx-1 mb-3">
					<h4 class="card-title">Edit Group </h4>
					<a href="{{$BASE_URL}}" class="ml-auto btn btn-primary btn-sm">Back</a>
				</div>

				<form class="forms-sample" method="POST" action="{{$BASE_URL.'edit_process'}}">
					<input type="hidden" name="id" value="{{$result['id']}}">
					<div class="form-group">
						<label for="exampleInputName1">Group Name</label>
						<input type="text" class="form-control" placeholder="Group Name" name="name" value="{{$result['name']}}">
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Group Desc</label>
						<input type="text" class="form-control" placeholder="Group Desc" name="description" value="{{$result['description']}}">
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Default Page</label>
						<input type="text" class="form-control" placeholder="Default Page" name="default_page" value="{{$result['default_page']}}">
					</div>
					<button type="submit" class="btn btn-success mr-2">Save</button>
					<button type="reset" class="btn btn-light">Reset</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
