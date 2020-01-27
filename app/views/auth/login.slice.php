@extends('base.auth')
@section('content')
<div class="container-scroller">
	<div class="container-fluid page-body-wrapper full-page-wrapper">
		<div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
			<div class="row w-100">
				<div class="col-lg-4 mx-auto">
					<h2 class="text-center mb-4">{{$PAGE_TITLE}}</h2>
					@include('base.parts.notification')
					<div class="auto-form-wrapper">
						<form action="{{base_url('auth/login_process')}}" method="POST">
							<div class="form-group">
								<div class="input-group">
									<input type="email" class="form-control" placeholder="Username" name="identity">
									<div class="input-group-append">
										<span class="input-group-text">
											<i class="mdi mdi-check-circle-outline"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<input type="password" class="form-control" placeholder="Password" name="password">
									<div class="input-group-append">
										<span class="input-group-text">
											<i class="mdi mdi-check-circle-outline"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group d-flex justify-content-between">
								<div class="form-check form-check-flat mt-0">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-check-input"> Keep me signed
										in
									</label>
								</div>
								<a href="{{base_url('auth/forgot_password')}}" class="text-small forgot-password text-black">Forgot Password</a>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
							</div>
							{{-- <div class="text-block text-center my-3"> --}}
								{{-- <span class="text-small font-weight-semibold">Not a member ?</span> --}}
								{{-- <a href="register.html" class="text-black text-small">Create new account</a> --}}
							{{-- </div> --}}
						</form>
					</div>
					<ul class="auth-footer ">
						<li>
							<a href="https://codeinaja.net" class="text-dark">Conditions</a>
						</li>
						<li>
							<a href="https://codeinaja.net" class="text-dark">Help</a>
						</li>
						<li>
							<a href="https://codeinaja.net" class="text-dark">Terms</a>
						</li>
					</ul>
					<p class="footer-text text-center text-dark">Copyright © {{date('Y')}} Codeinaja. All rights
						reserved.</p>
				</div>
			</div>
		</div>
		<!-- content-wrapper ends -->
	</div>
	<!-- page-body-wrapper ends -->
</div>

@endsection
