<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&family=Prata&display=swap">
	<link rel="stylesheet" href="/css/main.min.css">
	<title>@yield('title')</title>
</head>
<body>
	<div class="wrapper">

        @include('inc.header')

		<main class="main">
        	@yield('content')
		</main>

        @include('inc.footer')

	</div>

	<script src="/js/jquery-3.6.0.min.js"></script>
	<script src="/js/submenu.js"></script>
	<script src="/js/burger.js"></script>
	@if(Request::is('/'))
		<script src="/js/tabs.js"></script>
	@endif
	@if(Request::is('student-achivment') or Request::is('student-creation'))
		<script src="/js/slick.min.js"></script>
		<script src="/js/slider.js"></script>
		<script src="/js/image-zoom.js"></script>
	@endif
</body>
</html>