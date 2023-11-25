@extends('layouts.default')

@section('title')
	{{ $name }}
@endsection

@section('content')
	<div class="event">
		<div class="container">
			<h1 class="event__title">{{ $name }}</h1>

			<div class="event__inner">

				@foreach ($data as $item)
					<div class="event__column">
						<article class="event-post">
							<picture class="event-post__image">
								<img src="/img/{{ $directory }}/{{ $item->image }}" alt="{{ $item->name }}" title="{{ $item->name }}">
							</picture>
							<div class="event-post__description">
								<h3 class="event-post__title">{{ $item->name }}</h3>
								<a class="event-post__link" href="{{ route($route, $item->id) }}">Читать статью</a>
							</div>
						</article>
					</div>
				@endforeach

			</div>
		</div>
	</div>
@endsection
