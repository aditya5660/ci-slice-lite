<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{$PAGE_TITLE}}</title>
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
	<link rel="shortcut icon" href="{{base_url('assets/images/favicon.png')}}" />
</head>

<body>
	@yield('content')
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="{{base_url('assets/vendors/js/vendor.bundle.base.js')}}"></script>
	<script src="{{base_url('assets/vendors/js/vendor.bundle.addons.js')}}"></script>
	<!-- endinject -->
	<!-- inject:js -->
	<script src="{{base_url('assets/js/shared/off-canvas.js')}}"></script>
	<script src="{{base_url('assets/js/shared/misc.js')}}"></script>
	<!-- endinject -->
</body>

</html>
