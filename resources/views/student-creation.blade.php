@extends('layouts.default')

@section('title')
	Творчество студентов
@endsection


@section('content')
	<div class="creation">
		<div class="container">
			<h1 class="creation__title">Творчество студентов</h1>

			<div class="slider">
				<button class="slider__arrow slider__arrow_prev"><i class="icon-arrow"></i></button>

				<div class="slider__wrapper">
					@foreach ($studentCreationImage as $item)
						<picture class="slider__image" data-zoom>
							<img src="/docs/student-creation/image/{{ $item->image }}" alt="{{ $item->name }}" title="{{ $item->name }}">
							<h4 class="slider__image-title">{{ $item->name }}</h4>
						</picture>
					@endforeach
				</div>

				<button class="slider__arrow slider__arrow_next"><i class="icon-arrow"></i></button>
			</div>

			<div class="creation-videos">
				@foreach ($studentCreationVideo as $item)
					<div class="creation-videos__item">
						<div class="creation-videos__video">
							<video src="/docs/student-creation/video/{{ $item->video }}" preload="metadata" controls></video>
						</div>
						<h4 class="creation-videos__title">{{ $item->name }}</h4>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection