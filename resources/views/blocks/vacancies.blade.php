<section class="content-text-page">
	<h1>Вакансии</h1>
	<section class="left">
		<h2>Города</h2>
		@forelse($cities->where('vacancies_count', '>', 0) as $city)
			<p class="bold" id="city_{{ $city->id }}">{{ $city->name }} ({{ $city->vacancies_count }})</p>
		@empty

		@endforelse
		<h2>Направления</h2>
		@forelse($vacancy_categories->where('vacancies_count', '>', 0) as $vacancy_category)
			<p class="bold" id="category_{{ $vacancy_category->id }}">{{ $vacancy_category->name }} ({{ $vacancy_category->vacancies_count }})</p>
		@empty

		@endforelse
	</section>
	<section class="right">
		{{--
	        <li><a href="/job/kurer">Курьер</a></li>
	        <li><a href="/job/spetsialist-po-soprovozhdeniyu-biznesa-motornye-vidy">Специалист по сопровождению бизнеса (моторные виды)</a></li>
	        <li><a href="/job/spetsialist-po-soprovozhdeniyu-biznesa-imushchestvo">Специалист по сопровождению бизнеса (имущество)</a></li>
		--}}	
	     <ul>
		 @forelse ($items as $item)
		 	<li><a href="{{ $item->url }}">{{ $item->name }}</a></li>
		 @empty

		 @endforelse
	     </ul>		
	</section>
</section>