@extends('./layouts.admin')

@section('content')
	<div class="admin">
		<div class="container">

			{{-- Блок достижений --}}
			<section class="admin__item">
				<h2 class="admin__title">Достижения</h2>
				@php $name = 'teacher_achivment' @endphp
				<form class="admin-form" action="{{ route('about-upload-file', $name) }}" method="post" enctype="multipart/form-data">
					<label class="admin-form__label" for="achivment">Название сертификата</label>
					<div class="admin-form__row">
						<input class="admin-form__input" type="text" id="achivment" name="name">
						<input class="admin-form__input" type="file" name="file">
						<button class="admin-form__button" type="submit">Загрузить</button>
					</div>
					@csrf
				</form>

				<div class="accordion">
					<button class="accordion__title" type="button"><span>Сертификаты</span><i class="accordion__arrow icon-arrow"></i></button>
					<div class="accordion__content">
						@foreach ($teacherAchivments as $item)
							@php $id = $item->id @endphp
							<div class="accordion__item">
								<p class="accordion__text">{{ $item->name }}</p>

								<div class="accordion__buttons">
									<a class="accordion__button" data-role="edit" href="{{ route('about-edit-file', [$name, $id]) }}">Редактировать</a>
									<a class="accordion__button" data-role="delete" href="{{ route('about-delete-file', [$name, $id]) }}">Удалить</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>

			{{-- Блок квалификации --}}
			<section class="admin__item">
				<h2 class="admin__title">Повышение квалификации</h2>
				@php $name = 'teacher_qualification' @endphp
				<form class="admin-form" action="{{ route('about-upload-file', $name) }}" method="post" enctype="multipart/form-data">
					<label class="admin-form__label" for="achivment">Название сертификата</label>
					<div class="admin-form__row">
						<input class="admin-form__input" type="text" id="achivment" name="name">
						<input class="admin-form__input" type="file" name="file">
						<button class="admin-form__button" type="submit">Загрузить</button>
					</div>
					@csrf
				</form>

				<div class="accordion">
					<button class="accordion__title" type="button"><span>Сертификаты</span><i class="accordion__arrow icon-arrow"></i></button>
					<div class="accordion__content">
						@foreach ($teacherQualification as $item)
							@php $id = $item->id @endphp
							<div class="accordion__item">
								<p class="accordion__text">{{ $item->name }}</p>

								<div class="accordion__buttons">
									<a class="accordion__button" data-role="edit" href="{{ route('about-edit-file', [$name, $id]) }}">Редактировать</a>
									<a class="accordion__button" data-role="delete" href="{{ route('about-delete-file', [$name, $id]) }}">Удалить</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>

			{{-- Блок методических работ --}}
			<section class="admin__item">
				<h2 class="admin__title">Методические работы</h2>
				@php $name = 'teacher_methodical';  @endphp
				<form class="admin-form" action="{{ route('about-upload-file', $name) }}" method="post" enctype="multipart/form-data">
					<label class="admin-form__label" for="achivment">Название сертификата</label>
					<div class="admin-form__row">
						<input class="admin-form__input" type="text" id="achivment" name="name">
						<input class="admin-form__input" type="file" name="file">
						<button class="admin-form__button" type="submit">Загрузить</button>
					</div>
					@csrf
				</form>

				<div class="accordion">
					<button class="accordion__title" type="button"><span>Сертификаты</span><i class="accordion__arrow icon-arrow"></i></button>
					<div class="accordion__content">
						@foreach ($teacherMethodical as $item)
							@php $id = $item->id @endphp
							<div class="accordion__item">
								<p class="accordion__text">{{ $item->name }}</p>

								<div class="accordion__buttons">
									<a class="accordion__button" data-role="edit" href="{{ route('about-edit-file', [$name, $id]) }}">Редактировать</a>
									<a class="accordion__button" data-role="delete" href="{{ route('about-delete-file', [$name, $id]) }}">Удалить</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>

		</div>
	</div>
@endsection
