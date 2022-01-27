@section('extra_styles')
	<link rel="stylesheet" href="/vacancies_assets/css/fonts.css" />
    <link rel="stylesheet" href="/vacancies_assets/css/style.min.css?ver=2.1" />
@endsection

<section class="vacancies-banner">
	<div class="container">
		<div class="vacancies-banner__wrap"></div>
	</div>
</section>

<section class="work">
	<div class="container">
	<div class="work__wrap">
		<div class="work__box">
		<div class="work__descr">Мы в 11 регионах</div>
		<div class="work__title">Присоединяйся к финансовому брокеру № 1 в России</div>

		<div class="work__list">
			<div class="work__item work__item_box-1">
			<div class="work__image"><img src="/vacancies_assets/icons/work-item1.svg" alt="icons" /></div>
			<div class="work__inner">
				<div class="work__caption">Выбирай сколько зарабатывать</div>
				<div class="work__text">Индивидуальная и прозрачная система мотивации</div>
			</div>
			</div>

			<div class="work__item work__item_box-2">
			<div class="work__image"><img src="/vacancies_assets/icons/work-item2.svg" alt="icons" /></div>
			<div class="work__inner">
				<div class="work__caption">Работай с комфортом</div>
				<div class="work__text">Гибкий график, совмещение с учебой и отсутствие формализма</div>
			</div>
			</div>

			<div class="work__item work__item_box-3">
			<div class="work__image"><img src="/vacancies_assets/icons/work-item3.svg" alt="icons" /></div>
			<div class="work__inner">
				<div class="work__caption">Расти и развивайся</div>
				<div class="work__text">Наставничество и обучение в любом направлении</div>
			</div>
			</div>
		</div>

		<a class="work__link" href="#list">Посмотреть вакансии<span></span></a>
		</div>
	</div>
	</div>
	<div class="work__banner"></div>
</section>

<section class="finist">
	<div class="container">
	<div class="finist__wrap">
		<div class="finist__left">
		<div class="finist__title">Почему Finist?</div>
		<div class="finist__item">
			<div class="finist__inner">
			<div class="finist__caption">Лидеры в сегменте страхования имущества и ипотеки</div>
			<div class="finist__text">
				Предлагаем лучшие условия, <br />
				и клиенты это ценят
			</div>
			</div>
		</div>

		<div class="finist__item">
			<div class="finist__inner">
			<div class="finist__caption">Вкладываемся в сотрудников</div>
			<div class="finist__text">
				Тебе доступно обучение финансовой <br />
				грамотности, тренинги по продажам, <br />
				а также база знаний для каждого отдела
			</div>
			</div>
		</div>

		<div class="finist__item">
			<div class="finist__inner">
			<div class="finist__caption">
				Поддерживаем каждого <br />
				члена команды
			</div>
			<div class="finist__text">
				Ты можешь развиваться как внутри <br />
				одной специальности, так и в смежных — <br />
				у тебя всегда будет опытный наставник
			</div>
			</div>
		</div>
		</div>

		<div class="finist__right">
		<div class="finist__box">
			<div class="finist__subtitle">11</div>
			<div class="finist__descr"><span>Регионов</span>с офисами</div>
		</div>
		<div class="finist__box finist__box_item-2">
			<div class="finist__subtitle">18</div>
			<div class="finist__descr"><span>Лет</span>На рынке</div>
		</div>
		<div class="finist__box finist__box_item-3">
			<div class="finist__subtitle">600</div>
			<div class="finist__descr"><span>Сотрудников</span>в штате</div>
		</div>
		</div>
	</div>
	</div>
</section>

<section class="views">
	<div class="container">
	<div class="views__title">Виды вакансий</div>
	<div class="views__list">
		@forelse($vacancy_categories->where('vacancies_count', '>', 0) as $vacancy_category)
			<div class="views__item">
				<div class="views__box">
					<div class="views__subtitle">{{ $vacancy_category->name }}</div>
					<div class="views__text">{!! $vacancy_category->description !!}</div>
					<a class="views__link js-filter-click" data-click="#category_{{ $vacancy_category->id }}" href="#list">Посмотреть вакансии <span></span></a>
				</div>
			</div>
		@empty

		@endforelse
	</div>
	</div>
</section>

<section class="vc-slider">
	<div class="vc-slider__slider">
	<div class="vc-slider__list">
		<div class="vc-slider__item">
			<img src="/vacancies_assets/images/vc-slider/photo1.jpg" alt="images" />
		</div>

		<div class="vc-slider__item">
			<img src="/vacancies_assets/images/vc-slider/photo2.jpg" alt="images" />
		</div>
		<div class="vc-slider__item">
			<img src="/vacancies_assets/images/vc-slider/photo3.jpg" alt="images" />
		</div>

		<div class="vc-slider__item">
			<img src="/vacancies_assets/images/vc-slider/photo4.jpg" alt="images" />
		</div>
		<div class="vc-slider__item">
			<img src="/vacancies_assets/images/vc-slider/photo5.jpg" alt="images" />
		</div>
		<div class="vc-slider__item">
			<img src="/vacancies_assets/images/vc-slider/photo6.jpg" alt="images" />
		</div>
		<div class="vc-slider__item">
			<img src="/vacancies_assets/images/vc-slider/photo7.jpg" alt="images" />
		</div>
	</div>
	</div>

	<div class="container">
	<div class="vc-slider__dots"></div>

	<div class="vc-slider__nav">
		<button class="vc-slider__btn vc-slider__btn_prev"></button>
		<div class="vc-slider__nav-text">2/8</div>
		<button class="vc-slider__btn vc-slider__btn_next"></button>
	</div>
	</div>
</section>

<section class="sale" id="list">
	<div class="container">
		<div class="sale__filter">
			<div class="sale__filter-top">
				<div class="sale__filter-title">{{ $items->count() }} вакансий</div>
				<a class="sale__filter-link" href="#">Очистить фильтры</a>
			</div>

			<div class="sale__filter-inner">
				<input class="sale__filter-input js-search-word-filter" type="text" data-box="sale__item" placeholder="Поиск по ключевым словам" />
				<!-- sale__filter-input_error -->
			</div>

			<div class="sale__filter-box">
				<div class="sale__filter-subtitle">
					<!-- sale__filter-subtitle_active -->
					@forelse($cities->where('vacancies_count', '>', 0) as $city)
						<div class="sale__filter-caption sale__filter-caption_item-1 js-filter-item js-filter-hide filter__active__placeholder" data-type="city" data-city="city_{{ $city->id }}">
							{{ $city->name }}
						</div>
					@empty
					@endforelse
					<div class="sale__filter-caption sale__filter-caption_item-1">
						Города
					</div>
					<ul class="sale__filter-list">
						@forelse($cities->where('vacancies_count', '>', 0) as $city)

							<li class="sale__filter-item" data-type="city" data-city-name="{{ $city->name }}" id="city_{{ $city->id }}">{{ $city->name }}<span>{{-- $city->vacancies_count --}}</span></li>
						@empty

						@endforelse
					</ul>
				</div>
			</div>

			<div class="sale__filter-box">
				<div class="sale__filter-subtitle">
					@forelse($vacancy_categories->where('vacancies_count', '>', 0) as $category)
						<div class="sale__filter-caption sale__filter-caption_item-1 js-filter-item js-filter-hide filter__active__placeholder" data-type="category" data-category="category_{{ $category->id }}">
							{{ $category->name }}
						</div>
					@empty
					@endforelse
					<div class="sale__filter-caption sale__filter-caption_item-2">Направления</div>
					<ul class="sale__filter-list">
						@forelse($vacancy_categories->where('vacancies_count', '>', 0) as $vacancy_category)
							<li class="sale__filter-item" data-type="category" id="category_{{ $vacancy_category->id }}">{{ $vacancy_category->name }}<span>{{-- $vacancy_category->vacancies_count --}}</span></li>
						@empty

						@endforelse
					</ul>
				</div>
			</div>
		</div>

    	<div class="sale__inner">
			<div class="sale__title ">
				@forelse($vacancy_categories->where('vacancies_count', '>', 0) as $vacancy_category)
					<div class="js-filter-item js-filter-hide sale__title__part" data-type="category" data-category="category_{{ $vacancy_category->id }}">{{ $vacancy_category->name }}</div>
				@empty

				@endforelse
			</div>
			@forelse ($items as $item)
				@include('blocks.vacancy', ['vacancy' => $item])
			@empty

			@endforelse
        </div>
    </div>
</section>

<div class="sale__mobile-bg"></div>


@section('extra_js')
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="/vacancies_assets/js/jquery.sticky-kit.js"></script>
	<script src="/vacancies_assets/js/main.js?ver=2.0"></script>
@endsection