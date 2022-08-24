<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="/vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	{{-- <script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script> --}}
    @stack('css')
</head>
<body>
	@include('layouts.header')
	{{-- @include('layouts.rightsidebar') --}}
    @include('layouts.leftsidbar')

	<div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
			
			@yield('main-content')

    <div class="footer-wrap pd-20 mb-20 card-box">
        DeskApp - Bootstrap 4 Admin Template By 
    </div>

    </div>
        </div>
	<!-- js -->
	<script src="/vendors/scripts/core.js"></script>
	<script src="/vendors/scripts/script.min.js"></script>
	<script src="/vendors/scripts/process.js"></script>
	<script src="/vendors/scripts/layout-settings.js"></script>
    @stack('scripts')
</body>
</html>