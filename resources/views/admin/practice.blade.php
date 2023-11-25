@extends('./layouts.admin')

@section('content')
	<div class="admin">
		<div class="container">
			<section class="admin__item">
				<h2 class="admin__title">Практические работы</h2>
				<form class="admin-form" action="{{ route('admin-practice-upload') }}" method="post" enctype="multipart/form-data">
					<label class="admin-form__label" for="practical">Название</label>
					<div class="admin-form__row">
						<input class="admin-form__input" type="text" id="practical" name="name">
						<input class="admin-form__input" type="file" name="file">
						<button class="admin-form__button" type="submit">Загрузить</button>
					</div>
					@csrf
				</form>

				<div class="accordion">
					<button class="accordion__title" type="button"><span>Работы</span><i class="accordion__arrow icon-arrow"></i></button>
					<div class="accordion__content">
						@foreach ($practices as $item)
							<div class="accordion__item">
								<p class="accordion__text">{{ $item->name }}</p>

								<div class="accordion__buttons">
									<a class="accordion__button" data-role="edit" href="{{ route('admin-practice-edit', $item->id) }}">Редактировать</a>
									<a class="accordion__button" data-role="delete" href="{{ route('admin-practice-delete', $item->id) }}">Удалить</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>
		</div>
	</div>
@endsection
