<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', '')</title>
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	<script type="text/javascript" src="{{ mix('js/app.js') }}" defer></script>
	<style>
		.active a {
			color: red;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div id = "app" class="d-flex flex-column h-screen justify-content-between flex-column">
		@include('plantillas.navPrincipal')
		@yield('menu')
		<main class="py-4 ">
			@yield('content')
		</main>
		<footer class="bg-while text-center text-black-50 py-3 shadow">
			{{ config ('app.name') }}| Copyright @ {{ date ('Y')}}
		</footer>
		
	</div>

	
</body>
</html>