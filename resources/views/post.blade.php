@extends('layouts.default')

@section('title')
	{{ $post->name }}
@endsection


@section('content')
	<article class="post">
		<div class="container">
			<div class="post__inner">
                <a class="post__link" href="{{ route($route) }}"><i class="icon-arrow"></i>Вернуться</a>

				<picture class="post__image">
                    <img src="/img/{{ $directory }}/{{ $post->image }}" alt="{{ $post->name }}" title="{{ $post->name }}">
				</picture>

				<h1 class="post__title">{{ $post->name }}</h1>

				<div class="post__description">
					@foreach ($text as $item)
						<p class="post__text">
							{{ $item }}
						</p>
					@endforeach
				</div>

				<a class="post__link" href="{{ route($route) }}"><i class="icon-arrow"></i>Вернуться</a>
			</div>
		</div>
	</article>
@endsection
