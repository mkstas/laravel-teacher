@extends('layouts.default')

@section('title')
	Практические работы
@endsection


@section('content')
	<div class="practic">
		<div class="container">
			<h1 class="practic__title">Практические работы</h1>

			<ul class="practic__list">
				@foreach ($practice as $item)
					<li class="practic__item">
						<a class="practic__link" href="/docs/practice/{{ $item->file }}">{{ $item->name }}</a>
					</li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection