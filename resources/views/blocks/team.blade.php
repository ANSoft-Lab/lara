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
				<input class="sale__filter-input js-search-word-filter" type="text" data-box="team__item" placeholder="Поиск по ключевым словам" />
				<!-- sale__filter-input_error -->
			</div>

			<div class="sale__filter-box">
				<div class="sale__filter-subtitle">
					<!-- sale__filter-subtitle_active -->
					<div class="sale__filter-caption sale__filter-caption_item-1">Города</div>
					<ul class="sale__filter-list">
						@forelse($cities->where('employees_count', '>', 0) as $city)

							<li class="sale__filter-item{{ $loop->first ? ' js-active_filter' : '' }}" data-type="city" id="city_{{ $city->id }}">{{ $city->name }}<span>{{ $city->employees_count }}</span></li>
						@empty

						@endforelse
					</ul>
				</div>
			</div>

			<div class="sale__filter-box">
				<div class="sale__filter-subtitle">
					<div class="sale__filter-caption sale__filter-caption_item-2">Отделы</div>
					<ul class="sale__filter-list">
						@forelse($departments->where('employees_count', '>', 0) as $department)
							<li class="sale__filter-item{{ $loop->first ? ' js-active_filter' : '' }}" data-type="category" id="category_{{ $department->id }}">{{ $department->name }}<span>{{ $department->employees_count }}</span></li>
						@empty

						@endforelse
					</ul>
				</div>
			</div>
		</div>

		<div class="sale__inner team__team">
			<div class="team__subtitle">Отдел</div>
			@forelse($departments->where('employees_count', '>', 0) as $department)
				<div class="js-filter-item js-filter-hide team__title" data-type="category" data-category="category_{{ $department->id }}">{{ $department->name }}</div>
			@empty

			@endforelse
			<div class="team__list">
				@forelse ($items as $item)
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="/vacancies_assets/js/jquery.inputmask.js"></script>
	<script src="/vacancies_assets/js/main.js"></script>
@endsection