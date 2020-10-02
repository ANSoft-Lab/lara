<header class="header">
    <div class="header__top">
        <a href="/" class="header__logo">
            <img src="/icon/finist_logo.svg" alt="finist">
        </a>
        <div class="header-mob">
            <div class="header-burger js-burger">
                <span class="header-burger__item"></span>
                <span class="header-burger__item"></span>
            </div>
            <nav class="header__nav header-menu__wrap js-mobile-menu">
                <ul class="header-menu">
                    @foreach (App\Models\MenuItem::getTree(); as $item)
                        <li class="header-menu__item">
                            <a href="{{ $item->url() }}" class="header-menu__link{{ $item->children->count() > 0 ? ' m-dropdown js-dropdown-item' : '' }}">
                                {{ $item->name }}
                            </a>
                            @if ($item->children->count() > 0)
                                <ul class="inner-list js-inner-list m-hidden">
                                    @foreach ($item->children as $child)
                                        <li class="inner-list__item">
                                            <a href="{{ $child->url() }}" class="header-menu__link">
                                                {{ $child->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
                <div class="header__callback">
                    <ul class="header-contacts">
                        <li class="header-contacts__phone js-city-show city_moscow">
                            <a href="tel:+74956262555" class="header-contacts__tel">+7 495 62-62-555</a>
                            <p class="header-contacts__city js-open-modal" data-modal="choose-city">Москва</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_spb hidden">
                            <a href="tel:+78124494325" class="header-contacts__tel">+7 812 449-43-25</a>
                            <p class="header-contacts__city js-open-modal" data-modal="choose-city">Санкт-Петербург</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_nn hidden">
                            <a href="tel:+78312809697" class="header-contacts__tel">+7 831 280-96-97</a>
                            <p class="header-contacts__city js-open-modal" data-modal="choose-city">Нижний Новгород</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_ryazan hidden">
                            <a href="tel:+74912392016" class="header-contacts__tel">+7 (4912) 392-016</a>
                            <p class="header-contacts__city js-open-modal" data-modal="choose-city">Рязань</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_voronezh hidden">
                            <a href="tel:+74732067297" class="header-contacts__tel">+7 (473) 206-72-97</a>
                            <p class="header-contacts__city js-open-modal" data-modal="choose-city">Воронеж</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_kazan hidden">
                            <a href="tel:+78435671911" class="header-contacts__tel">+7 (843) 567-19-11</a>
                            <p class="header-contacts__city js-open-modal" data-modal="choose-city">Казань</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_samara hidden">
                            <a href="tel:+7463790582" class="header-contacts__tel">+7 (463) 790-582</a>
                            <p class="header-contacts__city js-open-modal" data-modal="choose-city">Самара</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_krasnodar hidden">
                            <a href="tel:+7612982446" class="header-contacts__tel">+7 (612) 982-446</a>
                            <p class="header-contacts__city js-open-modal" data-modal="choose-city">Краснодар</p>
                        </li>
                    </ul>
                    <div class="header-callback">
                        <a href="{{ config('app.old_url') }}/kontakty/" class="header-contacts__callback">Обратный звонок</a>
                        <a href="{{ config('app.old_url') }}/job/" class="header-contacts__vacancies">Вакансии</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="header-location">
        <a class="header__location js-open-modal js-city-show city_moscow" data-modal="choose-city">Москва</a>
        <a class="header__location js-open-modal js-city-show city_spb hidden" data-modal="choose-city">Санкт-Петербург</a>
        <a class="header__location js-open-modal js-city-show city_nn hidden" data-modal="choose-city">Нижний Новгород</a>
        <a class="header__location js-open-modal js-city-show city_ryazan hidden" data-modal="choose-city">Рязань</a>
        <a class="header__location js-open-modal js-city-show city_voronezh hidden" data-modal="choose-city">Воронеж</a>
        <a class="header__location js-open-modal js-city-show city_kazan hidden" data-modal="choose-city">Казань</a>
        <a class="header__location js-open-modal js-city-show city_samara hidden" data-modal="choose-city">Самара</a>
        <a class="header__location js-open-modal js-city-show city_krasnodar hidden" data-modal="choose-city">Краснодар</a>
        <a class="header__location__city-option js-open-modal" data-modal="choose-city">Выбрать город</a>
        <div class="header__discount">Экономьте на страховке до 50%</div>
        <a href="{{ config('app.old_url') }}/chto-delat-pri-nastuplenii-strakhovogo-sluchaya/" class="header__insurance">
            Страховой случай
            <div class="offer-links__arrow"></div>
        </a>
    </div>
</header>
