<!--

=========================================================
* Argon Dashboard - v1.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
	</title>
	<!-- Favicon -->
	<link href="{{base_url('assets/img/brand/favicon.png')}}" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="{{base_url('assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
	<link href="{{base_url('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="{{base_url('assets/css/argon-dashboard.css?v=1.1.1')}}" rel="stylesheet" />
	@yield('ext_css')
</head>

<body class="bg-default">
	<div class="main-content">
		<!-- Navbar -->
		<!-- Header -->
		{{-- content --}}
		@yield('content')
		{{-- footer --}}
		@include('base.parts.footer')

	</div>
	<!--   Core   -->
	<script src="{{base_url('assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{base_url('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
	<!--   Optional JS   -->
	<!--   Argon JS   -->
	<script src="{{base_url('assets/js/argon-dashboard.min.js?v=1.1.1')}}"></script>

	@yield('ext_js')
</body>

</html>
