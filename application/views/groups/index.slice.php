@extends('base.app')
@section('content')

<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row mx-1 mb-3">
					<h4 class="card-title">Group List</h4>
					<a href="{{$BASE_URL.'add'}}" class="ml-auto btn btn-primary btn-sm">Add Group</a>
				</div>

				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>GROUP NAME</th>
							<th>GROUP DESC</th>
							<th>DEFAULT PAGE</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@forelse ($rs_group as $item)	
						<tr>
							<td>{{$item['id']}}</td>
							<td>{{$item['name']}}</td>
							<td>{{$item['description']}}</td>
							<td>{{$item['default_page']}}</td>
							<td>
								<div class="float-right">
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
							
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

@endsection
