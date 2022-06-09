<header class="header">
    <!-- header_active -->
    <div class="header__top">
    <div class="container">
        <div class="header__wrap">
        <div class="header__left">
            <a class="header__logo" href="/">
                <img src="/icon/finist_logo.svg" alt="finist">
            </a>

            <ul class="header__list">
                <li class="header__item header__location">
                    <a class="header__location js-open-modal js-city-show city_moscow" data-modal="choose-city">Москва</a>
                    <a class="header__location js-open-modal js-city-show city_spb hidden" data-modal="choose-city">Санкт-Петербург</a>
                    <a class="header__location js-open-modal js-city-show city_nn hidden" data-modal="choose-city">Нижний Новгород</a>
                    <a class="header__location js-open-modal js-city-show city_ryazan hidden" data-modal="choose-city">Рязань</a>
                    <a class="header__location js-open-modal js-city-show city_voronezh hidden" data-modal="choose-city">Воронеж</a>
                    <a class="header__location js-open-modal js-city-show city_kazan hidden" data-modal="choose-city">Казань</a>
                    <a class="header__location js-open-modal js-city-show city_ekaterinburg hidden" data-modal="choose-city">Екатеринбург</a>
                    <a class="header__location js-open-modal js-city-show city_krasnodar hidden" data-modal="choose-city">Краснодар</a>
                    <a class="header__location js-open-modal js-city-show city_samara hidden" data-modal="choose-city">Самара</a>
                </li>
                <li class="header__item">
                    <a href="https://finist.ru/chto-delat-pri-nastuplenii-strakhovogo-sluchaya"> Страховой случай</a>
                </li>
            </ul>
        </div>

        <div class="header__right header__right_vacancies">
            <a class="header__phone js-city-show city_moscow" href="tel:+74956600098">+7 495 660-00-98</a>
            <a class="header__phone js-city-show city_spb hidden" href="tel:+78124494325">+7 812 449-43-25</a>
            <a class="header__phone js-city-show city_nn hidden" href="tel:+78312003383">+7 831 200-33-83</a>
            <a class="header__phone js-city-show city_ryazan hidden" href="tel:+74912392016">+7 (4912) 392-016</a>
            <a class="header__phone js-city-show city_voronezh hidden" href="tel:+74732067297">+7 (473) 206-72-97</a>
            <a class="header__phone js-city-show city_kazan hidden" href="tel:+78435671911">+7 (843) 567-19-11</a>
            <a class="header__phone js-city-show city_ekaterinburg hidden" href="tel:+73433792092">+7 (343) 379-20-92</a>
            <a class="header__phone js-city-show city_krasnodar hidden" href="tel:+78612982446">+7 (8612) 982-446</a>
            <a class="header__phone js-city-show city_samara hidden" href="tel:+78463790582">+7 (8463) 790-582</a>
            @include('blockcrud.modals.feedback', ['modal_title' => 'Обратный звонок', 'link' => true, 'btn_class' => 'header__backcall callback'])
            <button class="header__sandwich js-burger">
            <span></span>
            <span></span>
            <span></span>
            </button>
        </div>
        </div>
    </div>
    </div>

    <nav class="menu js-mobile-menu mobile-hidden">
        <div class="container">
            <ul class="menu__list">
                @foreach (App\Models\MenuItem::getTree() as $item)
                    <li class="menu__item">
                        <a href="{{ $item->url() }}" class="menu__link{{ $item->children->count() > 0 ? ' menu__link_drop-down js-mobile-show-button' : '' }}" data-show="js_show_menu_{{ $item->id }}">
                            {{ $item->name }}
                        </a>
                        @if ($item->children->count() > 0)
                            <div class="menu__wrap mobile-hidden js_show_menu_{{ $item->id }}">
                                <ul class="menu__sublist">
                                    @foreach ($item->children as $child)
                                        <li class="menu__subitem dropdown-area">
                                            <a href="{{ $child->url() }}" class="menu__subitem-link{{ $child->children->count() > 0 ? ' menu__subitem-link_item-1 js-mobile-show-button' : '' }}" data-show="js_show_menu_{{ $child->id }}">
                                                {{ $child->name }}
                                            </a>

                                            @if ($child->children->count() > 0)
                                                <div class="submenu__wrap mobile-hidden js_show_menu_{{ $child->id }}">
                                                    @foreach ($child->children as $grandchild)
                                                        <a href="{{ $grandchild->url() }}" class="menu__subitem-link">
                                                            {{ $grandchild->name }}
                                                        </a>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </li>
                @endforeach
                    <li class="menu__item">
                        <a href="https://realty.finist.ru/" class="menu__link" target="_blank">
                            Finist.Недвижимость
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="https://promoneyclub.ru/" class="menu__link" target="_blank">
                            ProMoneyClub
                        </a>
                    </li>
            </ul>

            <a class="menu__text" href="/chto-delat-pri-nastuplenii-strakhovogo-sluchaya">Страховой случай</a>
            <div class="js-city-show city_moscow">
                <a class="menu__phone" href="tel:+74956600098">+7 495 660-00-98</a>
                <div class="menu__descr">Москва</div>
            </div>
            <div class="js-city-show city_spb hidden">
                <a class="menu__phone" href="tel:+78124494325">+7 812 449-43-25</a>
                <div class="menu__descr">Санкт-Петербург</div>
            </div>
            <div class="js-city-show city_nn hidden">
                <a class="menu__phone" href="tel:+78312003383">+7 831 200-33-83</a>
                <div class="menu__descr">Нижний Новгород</div>
            </div>
            <div class="js-city-show city_ryazan hidden">
                <a class="menu__phone" href="tel:+74912392016">+7 (4912) 392-016</a>
                <div class="menu__descr">Рязань</div>
            </div>
            <div class="js-city-show city_voronezh hidden">
                <a class="menu__phone" href="tel:+74732067297">+7 (473) 206-72-97</a>
                <div class="menu__descr">Воронеж</div>
            </div>
            <div class="js-city-show city_kazan hidden">
                <a class="menu__phone" href="tel:+78435671911">+7 (843) 567-19-11</a>
                <div class="menu__descr">Казань</div>
            </div>
            <div class="js-city-show city_ekaterinburg hidden">
                <a class="menu__phone" href="tel:+73433792092">+7 (343) 379-20-92</a>
                <div class="menu__descr">Екатеринбург</div>
            </div>
            <div class="js-city-show city_krasnodar hidden">
                <a class="menu__phone" href="tel:+78612982446">+7 (8612) 982-446</a>
                <div class="menu__descr">Краснодар</div>
            </div>
            <div class="js-city-show city_samara hidden">
                <a class="menu__phone" href="tel:+78463790582">+7 (8463) 790-582</a>
                <div class="menu__descr">Самара</div>
            </div>
        </div>
    </nav>
</header>