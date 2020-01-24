@extends('base.app')
@section('contents')
<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-header border-0">
				<h3 class="mb-0">Group List</h3>
			</div>
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Group Name</th>
							<th scope="col">Group Desc</th>
							<th scope="col">Default Page</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						@forelse ($rs_group as $item)
						<tr>
							<th scope="row">
								{{$item['id']}}
							</th>
							<td>
								{{$item['name']}}
							</td>
							<td>
								{{$item['description']}}
							</td>
							<td>
								{{$item['default_page']}}
							</td>
							<td class="text-right">
								<div class="dropdown">
									<a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item" href="#">Edit</a>
										<a class="dropdown-item" href="#">Delete</a>
									</div>
								</div>
							</td>
						</tr>
						@empty
						<td colspan="5" class="table-active text-center text-muted">
							<br />
							<i class="ni ni-archive-2" style="font-size: 60px"></i>
							<p><small>Empty</small></p>
						</td>
						@endforelse
					</tbody>
				</table>
			</div>
			<div class="card-footer py-4">
				<nav aria-label="...">
					<ul class="pagination justify-content-end mb-0">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">
								<i class="fas fa-angle-left"></i>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
						</li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">
								<i class="fas fa-angle-right"></i>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

@endsection
