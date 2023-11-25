@extends('./layouts.admin')

@section('content')
	<div class="admin">
		<div class="container">
			{{-- Блок изображений сертификатов --}}
			<section class="admin__item">
				<h2 class="admin__title">Изображение</h2>
				@php $name = 'image' @endphp
				<form class="admin-form" action="{{ route('admin-creation-upload', $name) }}" method="post" enctype="multipart/form-data">
					<label class="admin-form__label" for="image">Название изображения</label>
					<div class="admin-form__row">
						<input class="admin-form__input" type="text" id="image" name="name">
						<input class="admin-form__input" type="file" name="file">
						<button class="admin-form__button" type="submit">Загрузить</button>
					</div>
					@csrf
				</form>

				<div class="accordion">
					<button class="accordion__title" type="button"><span>Все изображения</span><i class="accordion__arrow icon-arrow"></i></button>
					<div class="accordion__content">
						@foreach ($creationImages as $item)
							@php $id = $item->id @endphp
							<div class="accordion__item">
								<p class="accordion__text">{{ $item->name }}</p>

								<div class="accordion__buttons">
									<a class="accordion__button" data-role="edit" href="{{ route('admin-creation-edit', [$name, $id]) }}">Редактировать</a>
									<a class="accordion__button" data-role="delete" href="{{ route('admin-creation-delete', [$name, $id]) }}">Удалить</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>

			{{-- Блок видео --}}
			<section class="admin__item">
				<h2 class="admin__title">Видео</h2>
				@php $name = 'video' @endphp
				<form class="admin-form" action="{{ route('admin-creation-upload', $name) }}" method="post" enctype="multipart/form-data">
					<label class="admin-form__label" for="video">Название видео</label>
					<div class="admin-form__row">
						<input class="admin-form__input" type="text" id="video" name="name">
						<input class="admin-form__input" type="file" name="file">
						<button class="admin-form__button" type="submit">Загрузить</button>
					</div>
					@csrf
				</form>

				<div class="accordion">
					<button class="accordion__title" type="button"><span>Сертификаты</span><i class="accordion__arrow icon-arrow"></i></button>
					<div class="accordion__content">
						@foreach ($creationVideos as $item)
							@php $id = $item->id @endphp
							<div class="accordion__item">
								<p class="accordion__text">{{ $item->name }}</p>

								<div class="accordion__buttons">
									<a class="accordion__button" data-role="edit" href="{{ route('admin-creation-edit', [$name, $id]) }}">Редактировать</a>
									<a class="accordion__button" data-role="delete" href="{{ route('admin-creation-delete', [$name, $id]) }}">Удалить</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>
		</div>
	</div>
@endsection
