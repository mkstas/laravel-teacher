@extends('layouts.default')

@section('title')
	Профессиональный портрет
@endsection


@section('content')
	<div class="about">
		<div class="container">
			<div class="about__inner">
				<picture class="about__img">
					<img src="/img/about/avatar.jpg" alt="Фотография Алла Латушка">
				</picture>
				<article class="about__description">
					<div class="about__head">
						<h1 class="about__title">Латушка Алла Леонидовна</h1>
						<span class="about__subtitle">Преподователь истории</span>
					</div>
					<div class="about__content">
						<div class="about__item active">
							<p class="about__text">В 1980-1985 годах училась в Сыктывкарском государственном университете имени 50-летия СССР на историческом	факультете. Это «золотые годы» университета. Его в то время возглавляла  Валентина Александровна Витязева – первый ректор СГУ и в те годы - единственная женщина-ректор университета в СССР.</p>
							<p class="about__text">Мой любимый преподаватель, блестящий и непревзойденный - Виктор Анатольевич Семенов. Восторженные эпитеты	складываются сами, когда вспоминаю своего научного руководителя – Николай Михайлович Теребихин (ныне Доктор философских наук,	профессор Поморского государственного университета имени М. В. Ломоносова,), под его руководством с отличием защитила дипломную работу	«Пространственно-временная организация русских народных обрядов гадания».</p>
						</div>
						<div class="about__item">
							<p class="about__text">Меня учили блестящие педагоги, каждая фамилия звездная: Лариса Павловна Рощевская, Элеонора Анатольевна	Савельева, Вальтер Николаевич Худяев, Татьяна Михайловна Хорунжая, Анатолий Васильевич Ненахов, Людмила Прокопьевна Кучеренко, Ольга	Евтихиевна Бондаренко, Игорь Борисович Иловайский. Наш декан - Владимир Степанович Дегтев.</p>
							<p class="about__text">После университета распределилась в Визингу, шесть лет работала учителем истории в средней школе и благодарна учителям ее - крепким, мастеровитым профессионалам. Именно под их влиянием я сформировалась как учитель. В 1991 году перебралась в Эжву, вот уже тридцать один год преподаю в Сыктывкарском лесопромышленном техникуме (ранее Профессиональное училище №15).</p>
						</div>

						<div class="about__content-buttons">
							<button class="about__content-button about__content-button_prev" type="button" disabled>Назад</button>
							<button class="about__content-button about__content-button_next" type="button">Дальше</button>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>

	<section class="career">
		<div class="container">
			<h2 class="career__title">Профессиональный рост</h2>

			<div class="career__content">
				<div class="career__description">
					<h4 class="career__qoute">«Заслуженный мастер производстенного обучения Российской Федерации»</h4>
					<p class="career__text">Латушке Алле Леонидовне — преподователю государственного профессионального образоовательного учреждения "Сыктывкарский лесопромышленный техникум", Республика Коми</p>
					<a class="career__link" target="_blank" href="/docs/UKAZ_Prezidenta_RF.pdf">Указ Президента РФ</a>
				</div>
				<picture class="career__img">
					<img src="/img/about/career.jpg" alt="Фотография профессиональный рост">
				</picture>
			</div>
		</div>
	</section>

	<section class="diplomas">
		<div class="container">
			<h2 class="diplomas__title">Высокая оценка — тоже награда</h2>

			<div class="diplomas__inner">
				<div class="diplomas__column">
					<div class="diplomas__images">
						<picture class="diplomas__image">
							<img src="/img/about/diplomas/erudit_2020_ot_svetoch.jpg" alt="Диплом Эрудит 2020 от библиотеки Светоч">
						</picture>
						<picture class="diplomas__image">
							<img src="/img/about/diplomas/mezhdunarodniy_istoricheskiy_dikatnt.jpg" alt="">
						</picture>
						<picture class="diplomas__image">
							<img src="/img/about/diplomas/nauka_bez_graniz.jpg" alt="">
						</picture>
						<picture class="diplomas__image">
							<img src="/img/about/diplomas/yazik_v_svichanii.jpg" alt="">
						</picture>
						<picture class="diplomas__image">
							<img src="/img/about/diplomas/start_ap.jpg" alt="">
						</picture>
					</div>
				</div>

				<div class="diplomas__column">
					<div class="files">
						<div class="files__content">
							@foreach ($teacherAchivments as $item)
								<div class="files__item">
									<a class="files__link" target="_blank" href="/docs/about/achivments/{{ $item->file }}">{{ $item->name }}</a>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="documents">
		<div class="container">
			<div class="documents__inner">

				<div class="documents__column">
					<h2 class="documents__title">Повышение квалификации</h2>
					<div class="files">
						<div class="files__content">
							@foreach ($teacherQualification as $item)
								<div class="files__item">
									<a class="files__link" target="_blank" href="/docs/about/qualification/{{ $item->file }}">{{ $item->name }}</a>
								</div>
							@endforeach
						</div>
					</div>
				</div>

				<div class="documents__column">
					<h2 class="documents__title">Методическая копилка</h2>
					<div class="files">
						@foreach ($teacherMethodaical as $item)
							<div class="files__item">
								<a class="files__link" target="_blank" href="/docs/about/qualifiacation/{{ $item->file }}">{{ $item->name }}</a>
							</div>
						@endforeach
					</div>
				</div>

			</div>
		</div>
	</section>
@endsection
