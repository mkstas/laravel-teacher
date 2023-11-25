@extends('./layouts.admin')

@section('content')
	<div class="admin">
		<div class="container">
			<section class="admin__item">
				<h2 class="admin__title">Видеоуроки</h2>
				<form class="admin-form" action="{{ route('videolessons-upload') }}" method="post" enctype="multipart/form-data">
					<div class="admin-form__row">
						<div class="admin-form__column">
							<label class="admin-form__label" for="videolesson">Название видеокурса</label>
							<input class="admin-form__input" type="text" id="videolesson" name="name">
						</div>
						<div class="admin-form__column">
							<label class="admin-form__label" for="url">URL-адрес</label>
							<input class="admin-form__input" type="text" id="url" name="url">
						</div>

						<button class="admin-form__button" type="submit">Загрузить</button>
					</div>
					@csrf
				</form>

				<div class="accordion">
					<button class="accordion__title" type="button"><span>Все видеокурсы</span><i class="accordion__arrow icon-arrow"></i></button>
					<div class="accordion__content">
							@foreach ($videolessons as $item)
								<div class="accordion__item">
									<p class="accordion__text">{{ $item->name }}</p>

									<div class="accordion__buttons">
										<a class="accordion__button" data-role="edit" href="{{ route('videolessons-edit', $item->id) }}">Редактировать</a>
										<a class="accordion__button" data-role="delete" href="{{ route('videolessons-delete', $item->id) }}">Удалить</a>
									</div>
								</div>
							@endforeach
					</div>
				</div>
			</section>
		</div>
	</div>
@endsection