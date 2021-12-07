@section('extra_styles')
	<link rel="stylesheet" href="/vacancies_assets/css/fonts.css" />
    <link rel="stylesheet" href="/vacancies_assets/css/style.min.css" />
	<link rel="stylesheet" href="/team_assets/css/fonts.css" />
    <link rel="stylesheet" href="/team_assets/css/style.min.css" />
@endsection

<section class="sale" id="list">
	<div class="container">
		<div class="sale__filter">
			<div class="sale__filter-top">
				<div class="sale__filter-title">Наш коллектив</div>
				<a class="sale__filter-link" href="#">Очистить фильтры</a>
			</div>

			<div class="sale__filter-inner">
				<input class="sale__filter-input js-search-word-filter" type="text" data-box="team__item" placeholder="Найти сотрудника" />
				<!-- sale__filter-input_error -->
			</div>

			<div class="sale__filter-box">
				<div class="sale__filter-subtitle">
					<!-- sale__filter-subtitle_active -->
					@forelse($cities->where('employees_count', '>', 0) as $city)
						<div class="sale__filter-caption sale__filter-caption_item-1 js-filter-item js-filter-hide filter__active__placeholder" data-city-name="" data-type="city" data-city="city_{{ $city->id }}">
							{{ $city->name }}
						</div>
					@empty
					@endforelse
					<div class="sale__filter-caption sale__filter-caption_item-1">Города</div>
					<ul class="sale__filter-list">
						@forelse($cities->where('employees_count', '>', 0) as $city)

							<li class="sale__filter-item" data-city-name="{{ $city->name }}" data-type="city" id="city_{{ $city->id }}">{{ $city->name }}<span>{{ $city->employees_count }}</span></li>
						@empty

						@endforelse
					</ul>
				</div>
			</div>

			<div class="sale__filter-box">
				<div class="sale__filter-subtitle">
					@forelse($departments->where('employees_count', '>', 0) as $category)
						<div class="sale__filter-caption sale__filter-caption_item-1 js-filter-item js-filter-hide filter__active__placeholder" data-type="category" data-category="category_{{ $category->id }}">
							{{ $category->name }}
						</div>
					@empty
					@endforelse
					<div class="sale__filter-caption sale__filter-caption_item-2">Отделы</div>
					<ul class="sale__filter-list">
						@forelse($departments->where('employees_count', '>', 0) as $department)
							<li class="sale__filter-item" data-type="category" id="category_{{ $department->id }}">{{ $department->name }}<span>{{ $department->employees_count }}</span></li>
						@empty

						@endforelse
					</ul>
				</div>
			</div>
		</div>

		<div class="sale__inner team__team">
			@forelse($departments->where('employees_count', '>', 0) as $department)
				<div class="team__subtitle js-filter-item js-filter-hide team__title" data-type="category" data-category="category_{{ $department->id }}">{{ $department->name }}</div>
			@empty

			@endforelse
			<div class="team__list">
				@forelse ($items->sortBy('show_order') as $item)
					@include('blocks.employee', ['employee' => $item])
				@empty

				@endforelse
			</div>
		</div>

    </div>
</section>

<div class="sale__mobile-bg"></div>


@section('extra_js')
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="/vacancies_assets/js/main.js"></script>
@endsection