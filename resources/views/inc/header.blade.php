@section('header')
	<header class="header">
		<div class="container">
			<div class="header__inner">
				<a class="header__logo" href="{{ route('home') }}"><span class="header__logo_green">Al</span>latushka</a>

				<nav class="header__nav">
					<ul class="menu">
						<li class="menu__item">
							<a class="menu__link" href="{{ route('home') }}">Профессиональный портрет</a>
						</li>
						<li class="menu__item">
							<a class="menu__link" href="{{ route('coterie') }}">Кружок</a>
						</li>
						<li class="menu__item">
							<a class="menu__link" data-link="submenu" href="#">Для работ<i class="menu__arrow icon-arrow"></i></a>
							<ul class="menu-sub__list">
								<li class="menu-sub__item">
									<a class="menu-sub__link" href="{{ route('videolesson') }}">Видеоуроки</a>
								</li>
								<li class="menu-sub__item">
									<a class="menu-sub__link" href="{{ route('practice') }}">Практические работы</a>
								</li>
								<li class="menu-sub__item">
									<a class="menu-sub__link" href="{{ route('excursion') }}">Уроки-экскурсии</a>
								</li>
							</ul>
						</li>
						<li class="menu__item">
							<a class="menu__link" data-link="submenu" href="#">Моя гордость<i class="menu__arrow icon-arrow"></i></a>
							<ul class="menu-sub__list">
								<li class="menu-sub__item">
									<a class="menu-sub__link" href="{{ route('student-achivment') }}">Достжения студентов</a>
								</li>
								<li class="menu-sub__item">
									<a class="menu-sub__link" href="{{ route('student-creation') }}">Творчество студентов</a>
								</li>
							</ul>
						</li>
					</ul>

					<button class="burger" tabindex="0" aria-expanded="false">
						<span class="burger__line"></span>
						<span class="burger__line"></span>
						<span class="burger__line"></span>
					</button>
				</nav>
			</div>
		</div>
	</header>