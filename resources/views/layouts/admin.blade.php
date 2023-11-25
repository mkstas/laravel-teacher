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
	<title>Админ-панель</title>
</head>
<body>

	<div class="wrapper">
		<header class="header">
			<div class="container">
				<div class="header__inner">
					<a class="header__logo" href="{{ route('admin') }}"><span class="header__logo_green">Al</span>latushka<span class="header__sign">Админ-панель</span></a>

					<div class="header__exit">
						<a href="{{ route('logout') }}"><span>Выход</span> <img src="/img/icons/signout.svg" alt="Выход"></a>
					</div>
				</div>
			</div>
		</header>

		<main class="main">
			@include('inc.navigation')

			@yield('content')
		</main>
	</div>

	<script src="/js/jquery-3.6.0.min.js"></script>
	<script src="/js/accordion.js"></script>
</body>
</html>
