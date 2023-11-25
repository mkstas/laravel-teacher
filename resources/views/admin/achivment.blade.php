@extends('./layouts.admin')

@section('content')
	<div class="admin">
		<div class="container">
			{{-- Блок изображений сертификатов --}}
			<section class="admin__item">
				<h2 class="admin__title">Изображение сертификата</h2>
				@php $name = 'image' @endphp
				<form class="admin-form" action="{{ route('admin-achivment-upload', $name) }}" method="post" enctype="multipart/form-data">
					<label class="admin-form__label" for="image">Название сертификата</label>
					<div class="admin-form__row">
						<input class="admin-form__input" type="text" id="image" name="name">
						<input class="admin-form__input" type="file" name="file">
						<button class="admin-form__button" type="submit">Загрузить</button>
					</div>
					@csrf
				</form>

				<div class="accordion">
					<button class="accordion__title" type="button"><span>Сертификаты</span><i class="accordion__arrow icon-arrow"></i></button>
					<div class="accordion__content">
						@foreach ($achivmentImages as $item)
							@php $id = $item->id @endphp
							<div class="accordion__item">
								<p class="accordion__text">{{ $item->name }}</p>

								<div class="accordion__buttons">
									<a class="accordion__button" data-role="edit" href="{{ route('admin-achivment-edit', [$name, $id]) }}">Редактировать</a>
									<a class="accordion__button" data-role="delete" href="{{ route('admin-achivment-delete', [$name, $id]) }}">Удалить</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>

            {{-- Блок файлов сертификатов --}}
            <section class="admin__item">
				<h2 class="admin__title">Файл сертификата</h2>
				@php $name = 'file' @endphp
				<form class="admin-form" action="{{ route('admin-achivment-upload', $name) }}" method="post" enctype="multipart/form-data">
					<label class="admin-form__label" for="file">Название сертификата</label>
					<div class="admin-form__row">
						<input class="admin-form__input" type="text" id="file" name="name">
						<input class="admin-form__input" type="file" name="file">
						<button class="admin-form__button" type="submit">Загрузить</button>
					</div>
					@csrf
				</form>

				<div class="accordion">
					<button class="accordion__title" type="button"><span>Сертификаты</span><i class="accordion__arrow icon-arrow"></i></button>
					<div class="accordion__content">
						@foreach ($achivmentFiles as $item)
							@php $id = $item->id @endphp
							<div class="accordion__item">
								<p class="accordion__text">{{ $item->name }}</p>

								<div class="accordion__buttons">
									<a class="accordion__button" data-role="edit" href="{{ route('admin-achivment-edit', [$name, $id]) }}">Редактировать</a>
									<a class="accordion__button" data-role="delete" href="{{ route('admin-achivment-delete', [$name, $id]) }}">Удалить</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>
		</div>
	</div>
@endsection
