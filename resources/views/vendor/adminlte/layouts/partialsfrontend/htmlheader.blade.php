<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title> @yield('htmlheader_title', 'Your title here') </title>
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{!! asset('img/logo$.png') !!}"/>
	<meta name="description" content="Crystal Boutique">
	<meta name="author" content="CB">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Font -->

	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,600,700,800' rel='stylesheet' type='text/css'> -->

    <!-- CSS
    	================================================== -->
    	<!-- Fontawesome Icon font -->
    	<link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free-5.3.1-web/css/all.min.css') }}">
    	<!-- Twitter Bootstrap css -->
    	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    	<!-- jquery.fancybox  -->
    	<link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}">
    	<!-- animate -->
    	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- Frontend Store Stylesheet -->
        @if(url('/thoitrangcongso'))
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontendstore.css') }}">
        @endif
    	<!-- Main Stylesheet -->
    	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    	<!-- media-queries -->
    	<link rel="stylesheet" href="{{ asset('css/media-queries.css') }}">

    	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    	<script src="{{ asset('js/simpleCart.min.js') }}"></script>

    	<script>
			window.Laravel = {!! json_encode([
				'csrfToken' => csrf_token(),
			]) !!};
		</script>

</head>