<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Salon</title>

	    {{-- TITLE ICON --}}
		<link rel="shortcut icon" type="image/x-icon" href="img/salon.ico">

		{{-- BOOTSTRAP CSS --}}
		<link href="/css/bootstrap.min.css" rel="stylesheet">

		{{-- CUSTOM CSS --}}
		<link rel="stylesheet" type="text/css" href="/css/main.css">

		{{-- CUSTOM FONT --}}
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    	<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

		{{-- FONT AWESOME --}}
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
		@yield('top-script')
	</head>
	<body>

		<div class="brand">Business Casual</div>
		
		<div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

		@include('partials.navbar')
        
		@if (Session::has('successMessage'))
		    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif

		@yield('content')

		{{-- @include('partials.footer') --}}

		<!-- JQUERY -->
		<script src="/js/jquery-2.1.4.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="/js/bootstrap.min.js"></script>

		<!-- CUSTOM JS BELOW -->
		<script src="/js/main.js"></script>

		@yield('bottom-script')

	</body>