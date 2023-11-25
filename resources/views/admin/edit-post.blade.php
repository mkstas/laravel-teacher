@extends('./layouts.admin')

@section('content')
	<div class="edit">
		<div class="container">
			<form class="edit-form" action="{{ route($route, $data->id) }}" method="post" enctype="multipart/form-data">
				<label class="edit-form__label" for="name">Название</label>
				<input class="edit-form__input" type="text" id="name" name="name" data-role="name" value="{{ $data->name }}">

				<label class="edit-form__label" for="image">Новое изображение:</label>
				<input class="edit-form__input" type="file" id="image" name="image" data-role="file">

				<div class="edit-form__file">
					<span>Старое изображение:</span>
					<span>{{ $data->image }}</span>
				</div>

				<div class="edit-form__text">
					<label class="edit-form__label" for="text">Текст</label>
					<textarea name="text" id="text" rows="8" class="edit-form__textarea">{{ $data->text }}</textarea>
				</div>

				<button class="edit-form__button">Сохранить</button>
				@csrf
			</form>
		</div>
	</div>
@endsection
