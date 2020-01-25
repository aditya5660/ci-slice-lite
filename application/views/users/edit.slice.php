@extends('base.app')
@section('content')
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row mx-1 mb-3">
					<h4 class="card-title">Edit Users </h4>
					<a href="{{$BASE_URL}}" class="ml-auto btn btn-primary btn-sm">Back</a>
				</div>

				<form class="forms-sample" method="POST" action="{{$BASE_URL.'edit_process'}}">
					<input type="hidden" name="id" value="{{$result['id']}}">
					<div class="form-group">
						<label for="exampleInputName1">First Name</label>
						<input type="text" class="form-control" placeholder="First Name" name="first_name"
							value="{{$result['first_name']}}">
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Last Name</label>
						<input type="text" class="form-control" placeholder="Last Name" name="last_name"
							value="{{$result['last_name']}}">
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Email</label>
						<input type="email" class="form-control" placeholder="Email" name="email"
							value="{{$result['email']}}" disabled>
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Company</label>
						<input type="text" class="form-control" placeholder="Company" name="company"
							value="{{$result['company']}}">
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Phone</label>
						<input type="text" class="form-control" placeholder="Phone" name="phone"
							value="{{$result['phone']}}">
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="password"
							>
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Password Confirmation</label>
						<input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirm" >
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Group</label>
						<select name="groups" id="" class="form-control">
							@foreach ($rs_groups as $item)
								<option value="{{$item['id']}}" @if ($item['id'] == $current_group['id'])
									selected
								@endif>{{$item['name']}}</option>
							@endforeach
						</select>
					</div>
					<button type="submit" class="btn btn-success mr-2">Submit</button>
					<button type="reset" class="btn btn-light">Reset</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
