@extends('./layouts.admin')

@section('content')
	<div class="edit">
		<div class="container">
			<form class="edit-form" action="{{ route('videolessons-update', $data->id) }}" enctype="multipart/form-data" method="post">
				<label class="edit-form__label" for="achivment">Название</label>
				<input class="edit-form__input" type="text" id="achivment" name="name" data-role="name" value="{{ $data->name }}">

				<label class="edit-form__label" for="url">URL-адрес</label>
				<input class="edit-form__input" type="text" id="url" name="url" value="{{ $data->link }}">

				<button class="edit-form__button">Сохранить</button>
				@csrf
			</form>
		</div>
	</div>
@endsection