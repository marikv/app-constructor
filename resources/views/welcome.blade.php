<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700&amp;subset=cyrillic"
		  rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<div class="page-wrapper">

	@if (Route::has('login'))
		<div class="top-right__links_opacity">
			<div class="top-right links">
				@auth
					<a href="{{ url('/home') }}">{{ __('auth.Dashboard') }}</a>
				@else
					<a href="{{ route('login') }}">{{ __('auth.Login') }}</a>

					@if (Route::has('register'))
						<a href="{{ route('register') }}">{{ __('auth.Register') }}</a>
					@endif
				@endauth
			</div>
		</div>
	@endif

	<div class="flex-center position-ref full-height">
		<div class="content content__block_opacity">
			<div class="title m-b-md">
				App Constructor
			</div>


			<div id="appDash">
				<app-constructor></app-constructor>
			</div>

		</div>
	</div>

</div>
</body>
</html>
