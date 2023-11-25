@section('footer')
	<footer class="footer">
		<div class="container">
			<div class="footer__inner">
				<div class="footer__column">
					<h3 class="footer__title">Преподователь</h3>
					<ul class="footer__list">
						<li class="footer__item">
							<a class="footer__link" href="{{ route('home') }}">Профессиональный портрет</a>
						</li>
						<li class="footer__item">
							<a class="footer__link" href="{{ route('coterie') }}">Историко-литературная гостиная</a>
						</li>
					</ul>
				</div>

				<div class="footer__column">
					<h3 class="footer__title">Для уроков</h3>
					<ul class="footer__list">
						<li class="footer__item">
							<a class="footer__link" href="{{ route('videolesson') }}">Видеоуроки</a>
						</li>
						<li class="footer__item">
							<a class="footer__link" href="{{ route('practice') }}">Практические работы</a>
						</li>
						<li class="footer__item">
							<a class="footer__link" href="{{ route('excursion') }}">Уроки-экскурсии</a>
						</li>
					</ul>
				</div>

				<div class="footer__column">
					<h3 class="footer__title">Моя гордость</h3>

					<ul class="footer__list">
						<li class="footer__item">
							<a class="footer__link" href="{{ route('student-achivment') }}">Достижения студентов</a>
						</li>
						<li class="footer__item">
							<a class="footer__link" href="{{ route('student-creation') }}">Творчество студентов</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>