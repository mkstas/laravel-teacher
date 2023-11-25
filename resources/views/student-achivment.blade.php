@extends('layouts.default')

@section('title')
	Достижения студентов
@endsection


@section('content')
	<div class="achivments">
		<div class="container">
			<h1 class="achivments__title">Достижения студентов</h1>

			<div class="slider">
				<button class="slider__arrow slider__arrow_prev"><i class="icon-arrow"></i></button>

				<div class="slider__wrapper">
					@foreach ($studentAchivmentImage as $item)
						<picture class="slider__image" data-zoom>
							<img src="/docs/student-achivment/image/{{ $item->image }}" alt="{{ $item->name }}" title="{{ $item->name }}">
							<h4 class="slider__image-title">{{ $item->name }}</h4>
						</picture>
					@endforeach
				</div>

				<button class="slider__arrow slider__arrow_next"><i class="icon-arrow"></i></button>
			</div>

			<div class="files">
				@foreach ($studentAchivmentFile as $item)
					<div class="files__item">
						<a class="files__link" target="_blank" href="/docs/student-achivment/file/{{ $item->file }}">{{ $item->name }}</a>
					</div>
				@endforeach
			</div>

		</div>
	</div>
@endsection