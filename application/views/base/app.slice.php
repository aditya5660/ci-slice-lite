<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="{{base_url('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{base_url('assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
	<link rel="stylesheet" href="{{base_url('assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
	<link rel="stylesheet" href="{{base_url('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
	<link rel="stylesheet" href="{{base_url('assets/vendors/css/vendor.bundle.base.css')}}">
	<link rel="stylesheet" href="{{base_url('assets/vendors/css/vendor.bundle.addons.css')}}">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{base_url('assets/css/shared/style.css')}}">
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="{{base_url('assets/css/demo_1/style.css')}}">
	<!-- End Layout styles -->
	<link rel="shortcut icon" href="{{base_url('assets/images/favicon.png')}}"/>
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
        @include('base.parts.navbar')
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_sidebar.html -->
			@include('base.parts.sidebar')
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
                    {{--  --}}
                    @yield('content')
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				@include('base.parts.footer')
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="{{base_url('assets/vendors/js/vendor.bundle.base.js')}}"></script>
	<script src="{{base_url('assets/vendors/js/vendor.bundle.addons.js')}}"></script>
	<!-- endinject -->
	<!-- Plugin js for this page-->
	<!-- End plugin js for this page-->
	<!-- inject:js -->
	<script src="{{base_url('assets/js/shared/off-canvas.js')}}"></script>
	<script src="{{base_url('assets/js/shared/misc.js')}}"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="{{base_url('assets/js/demo_1/dashboard.js')}}"></script>
	<!-- End custom js for this page-->
</body>

</html>
