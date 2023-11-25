@extends('layouts.default')

@section('title')
	Видеоуроки
@endsection


@section('content')
	<div class="videolesson">
		<div class="container">
			<h1 class="videolesson__title">Видеоуроки</h1>

			<div class="videolesson__inner">
				@foreach ($videolesson as $item)
					<div class="videolesson-item">
						<h3 class="videolesson-item__title">Видеокурс «{{ $item->name }}»</h3>
						<a class="videolesson-item__link" target="_blank" href="{{ $item->link }}">Перейти в источник</a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection