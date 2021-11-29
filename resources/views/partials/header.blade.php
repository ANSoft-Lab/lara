<header class="header">
    <div class="header__top">
        <a href="/" class="header__logo">
            <img src="/icon/finist_logo.svg" alt="finist">
        </a>
        <div class="header-mob">
@if(request()->path() !== 'affiliate')
            <div class="header-burger js-burger">
                <span class="header-burger__item"></span>
                <span class="header-burger__item"></span>
            </div>
@else
            <div class="js-burger"></div>
@endif
            <nav class="header__nav header-menu__wrap js-mobile-menu">
                <ul class="header-menu">
                    @foreach (App\Models\MenuItem::getTree() as $item)
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
                            <a href="tel:+74956600098" class="header-contacts__tel">+7 495 660-00-98</a>
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
                        <li class="header-contacts__phone js-city-show city_ekaterinburg hidden">
                            <a href="tel:+73433792092" class="header-contacts__tel">+7 (343) 379-20-92</a>
                            <p class="header-contacts__city js-open-modal" data-modal="choose-city">Екатеринбург</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_krasnodar hidden">
                            <a href="tel:+78612982446" class="header-contacts__tel">+7 (8612) 982-446</a>
                            <p class="header-contacts__city js-open-modal" data-modal="choose-city">Краснодар</p>
                        </li>
                    </ul>
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
        <a class="header__location js-open-modal js-city-show city_ekaterinburg hidden" data-modal="choose-city">Екатеринбург</a>
        <a class="header__location js-open-modal js-city-show city_krasnodar hidden" data-modal="choose-city">Краснодар</a>
        <a class="header__location__city-option js-open-modal" data-modal="choose-city">Выбрать город</a>
        <div class="header__discount">
            @include('blockcrud.modals.feedback', ['modal_title' => 'Хочешь сэкономить до 50%? Спроси, как!', 'link' => true])
        </div>
        <a href="/chto-delat-pri-nastuplenii-strakhovogo-sluchaya" class="header__insurance">
            Страховой случай
            <div class="offer-links__arrow"></div>
        </a>
        <div class="header__callback-block">
            <div>
                <a href="/kontakty/" class="header-contacts__callback">
                    @include('blockcrud.modals.feedback', ['modal_title' => 'Обратный звонок', 'link' => true, 'btn_class' => 'modal__btn modal__btn__small'])
                </a>
                <a href="/job/" class="header-contacts__vacancies">Вакансии</a>
            </div>
        </div>

    </div>
</header>
