@extends('./layouts.admin')

@section('content')
	<div class="admin">
		<div class="container">
			<section class="admin__item">
				<h2 class="admin__title">{{ $name }}</h2>
				<form class="admin-form" action="{{ route($routes['route_uplade']) }}" method="post" enctype="multipart/form-data">
					<div class="admin-form__row">
						<div class="admin-form__column">
							<label class="admin-form__label" for="post">Название поста</label>
							<input class="admin-form__input" type="text" id="post" name="name">
						</div>
						<div class="admin-form__column">
							<label class="admin-form__label" for="image">Изображение</label>
							<input class="admin-form__input" type="file" name="image">
						</div>

					</div>

					<div class="admin-form__text">
						<label class="admin-form__label" for="text">Текст</label>
						<textarea class="admin-form__textarea" name="text" id="text" rows="10"></textarea>
						<button class="admin-form__button" type="submit">Загрузить</button>
					</div>
					@csrf
				</form>

				<div class="accordion">
					<button class="accordion__title" type="button"><span>Все посты</span><i class="accordion__arrow icon-arrow"></i></button>
					<div class="accordion__content">
						@foreach ($data as $item)
							<div class="accordion__item">
								<p class="accordion__text">{{ $item->name }}</p>

								<div class="accordion__buttons">
									<a class="accordion__button" data-role="edit" href="{{ route($routes['route_edit'], $item->id) }}">Редактировать</a>
									<a class="accordion__button" data-role="delete" href="{{ route($routes['route_delete'], $item->id) }}">Удалить</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>
		</div>
	</div>
@endsection
