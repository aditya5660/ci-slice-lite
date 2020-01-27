@extends('base.app')
@section('content')

<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row mx-1 mb-3">
					<h4 class="card-title">User List</h4>
					<a href="{{$BASE_URL.'add'}}" class="ml-auto btn btn-primary btn-sm">Add User</a>
				</div>

				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>FIRST NAME</th>
							<th>LAST NAME</th>
							<th>EMAIL</th>
							<th>STATUS</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@forelse ($rs_users as $item)	
						<tr>
							<td>{{$item['id']}}</td>
							<td>{{$item['first_name']}}</td>
							<td>{{$item['last_name']}}</td>
							<td>{{$item['email']}}</td>
							<td>
								@if ($item['active']==1)
									<button disabled="disabled" class="btn btn-xs btn-success"> Active</button>
								@else
									<button disabled="disabled" class="btn btn-xs btn-warning"> Locked</button>
								@endif
							</td>
							<td>
								<div class="float-right">
									@if ($item['active']==1)
										<a href="{{$BASE_URL.'deactivate/'.$item['id']}}" class="btn btn-sm btn-warning">
											<i class="mdi mdi-lock"></i>
										</a>
									@else
										<a href="{{$BASE_URL.'activate/'.$item['id']}}" class="btn btn-sm btn-success">
											<i class="mdi mdi-lock-open"></i>
										</a>
									@endif
									<a href="{{$BASE_URL.'edit/'.$item['id']}}" class="btn btn-sm btn-info">
										<i class="mdi mdi-pencil"></i>
									</a>
									<a href="{{$BASE_URL.'delete/'.$item['id']}}" class="btn btn-sm btn-danger">
										<i class="mdi mdi-delete"></i>
									</a>
								</div>
							</td>
						</tr>						
						@empty
						<tr>
							<td colspan="5" class="table-active text-center text-muted">
								<br />
								<i class="mdi mdi-archive" style="font-size: 60px"></i>
								<p><small>Group Empty</small></p>
							</td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

@endsection
