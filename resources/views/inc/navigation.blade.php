@section('navigation')
	<div class="container">
		<nav class="admin-nav">
			<ul class="admin-nav__list">
				<li class="admin-nav__item">
					<a class="admin-nav__link" href="{{ route('about') }}">Профессиональный портрет</a>
				</li>
				<li class="admin-nav__item">
					<a class="admin-nav__link" href="{{ route('admin-coterie') }}">Кружок</a>
				</li>
				<li class="admin-nav__item">
					<a class="admin-nav__link" href="{{ route('admin-excursion') }}">Уроки-экскурсии</a>
				</li>
				<li class="admin-nav__item">
					<a class="admin-nav__link" href="{{ route('videolessons') }}">Видеоуроки</a>
				</li>
				<li class="admin-nav__item">
					<a class="admin-nav__link" href="{{ route('admin-practice') }}">Практические работы</a>
				</li>
				<li class="admin-nav__item">
					<a class="admin-nav__link" href="{{ route('admin-achivment') }}">Достижения студентов</a>
				</li>
				<li class="admin-nav__item">
					<a class="admin-nav__link" href="{{ route('admin-creation') }}">Творчество студентов</a>
				</li>
			</ul>
		</nav>
	</div>
