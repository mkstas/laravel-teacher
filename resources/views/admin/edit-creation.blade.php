@extends('./layouts.admin')

@section('content')
	<div class="edit">
		<div class="container">
			<form class="edit-form" action="{{ route('admin-creation-update', [$name, $data->id]) }}" method="post" enctype="multipart/form-data">
				<label class="edit-form__label" for="achivment">Название</label>
				<input class="edit-form__input" type="text" id="achivment" name="name" data-role="name" value="{{ $data->name }}">

				<label class="edit-form__label" for="file">{{ $text['new_file'] }}:</label>
				<input class="edit-form__input" type="file" id="file" name="file" data-role="file">

				<div class="edit-form__file">
					<span>{{ $text['old_file'] }}:</span>
					<span>{{ $data->$type }}</span>
				</div>

				<button class="edit-form__button">Сохранить</button>
				@csrf
			</form>
		</div>
	</div>
@endsection
