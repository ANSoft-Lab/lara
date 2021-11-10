@extends('base')

@section('content')
	<section class="content-text-page" data-city="{{ $vacancy->city_id }}" data-category="{{ $vacancy->category_id }}">
		<h1>{{ $vacancy->name }}</h1>
		@if(! empty($vacancy->additional))
			<div>{!! $vacancy->additional !!}</div>
		@endif
		<p>Обязанности:</p>
		@if(! empty($vacancy->duties))
			<div>{!! $vacancy->duties !!}</div>
		@endif
		<p>Требования к кандидату:</p>
		@if(! empty($vacancy->requirements))
			<div>{!! $vacancy->requirements !!}</div>
		@endif
		<p>Условия:</p>
		@if(! empty($vacancy->conditions))
			<div>{!! $vacancy->conditions !!}</div>
		@endif
	</section>
@endsection