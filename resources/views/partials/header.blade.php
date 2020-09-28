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
                    <li class="header-menu__item">
                        <a href="/" class="header-menu__link m-dropdown js-dropdown-item">
                            Все виды страхования
                        </a>
                        <ul class="inner-list js-inner-list m-hidden">
                            <li class="inner-list__item">
                                <a href="/kis" class="header-menu__link">
                                    Комплексное ипотечное страхование
                                </a>
                            </li>
                            <li class="inner-list__item">
                                <a href="{{ config('app.old_url') }}/refinansirovanie" class="header-menu__link">
                                    Рефинансирование и кредитование
                                </a>
                            </li>
                            <li class="inner-list__item">
                                <a href="{{ config('app.old_url') }}/strahovanie/kasko/" class="header-menu__link">
                                    Автострахование
                                </a>
                            </li>
                            <li class="inner-list__item">
                                <a href="{{ config('app.old_url') }}/strahovanie/strahovanie_imuchestva/" class="header-menu__link">Страхование имущества</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header-menu__item">
                        <a href="/" class="header-menu__link m-dropdown js-dropdown-item">
                            Частным клиентам
                        </a>
                        <ul class="inner-list js-inner-list m-hidden">
                            <li class="inner-list__item">
                                <a href="{{ config('app.old_url') }}/strahovanie/kasko/" class="header-menu__link">
                                    КАСКО
                                </a>
                            </li>
                            <li class="inner-list__item">
                                <a href="{{ config('app.old_url') }}/strahovanie/osago/" class="header-menu__link">
                                    ОСАГО
                                </a>
                            </li>
                            <li class="inner-list__item">
                                <a href="{{ config('app.old_url') }}/strahovanie/vzr/calc/" class="header-menu__link">
                                    Страхование туристов
                                </a>
                            </li>
                            <li class="inner-list__item">
                                <a href="{{ config('app.old_url') }}/strahovanie/strahovanie_imuchestva/" class="header-menu__link">Страхование имущества</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header-menu__item">
                        <a href="{{ config('app.old_url') }}/korporativnoe_strahovanie/" class="header-menu__link">
                            Партнерам
                        </a>
                    </li>
                    <li class="header-menu__item">
                        <a href="{{ config('app.old_url') }}/kontakty/" class="header-menu__link">
                            Офисы
                        </a>
                    </li>
                    <li class="header-menu__item">
                        <a href="{{ config('app.old_url') }}/group/" class="header-menu__link">
                            Тех. центры ГК Finist
                        </a>
                    </li>
                </ul>
                <div class="header__callback">
                    <ul class="header-contacts">
                        <li class="header-contacts__phone js-city-show city_moscow">
                            <a href="tel:+74956262555" class="header-contacts__tel">+7 495 62-62-555</a>
                            <p class="header-contacts__city js-choose-city">Москва</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_spb hidden">
                            <a href="tel:+78124494325" class="header-contacts__tel">+7 812 449-43-25</a>
                            <p class="header-contacts__city js-choose-city">Санкт-Петербург</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_nn hidden">
                            <a href="tel:+78312809697" class="header-contacts__tel">+7 831 280-96-97</a>
                            <p class="header-contacts__city js-choose-city">Нижний Новгород</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_ryazan hidden">
                            <a href="tel:+74912392016" class="header-contacts__tel">+7 (4912) 392-016</a>
                            <p class="header-contacts__city js-choose-city">Рязань</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_voronezh hidden">
                            <a href="tel:+74732067297" class="header-contacts__tel">+7 (473) 206-72-97</a>
                            <p class="header-contacts__city js-choose-city">Воронеж</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_kazan hidden">
                            <a href="tel:+78435671911" class="header-contacts__tel">+7 (843) 567-19-11</a>
                            <p class="header-contacts__city js-choose-city">Казань</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_samara hidden">
                            <a href="tel:+7463790582" class="header-contacts__tel">+7 (463) 790-582</a>
                            <p class="header-contacts__city js-choose-city">Самара</p>
                        </li>
                        <li class="header-contacts__phone js-city-show city_krasnodar hidden">
                            <a href="tel:+7612982446" class="header-contacts__tel">+7 (612) 982-446</a>
                            <p class="header-contacts__city js-choose-city">Краснодар</p>
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
        <a class="header__location js-choose-city js-city-show city_moscow">Москва</a>
        <a class="header__location js-choose-city js-city-show city_spb hidden">Санкт-Петербург</a>
        <a class="header__location js-choose-city js-city-show city_nn hidden">Нижний Новгород</a>
        <a class="header__location js-choose-city js-city-show city_ryazan hidden">Рязань</a>
        <a class="header__location js-choose-city js-city-show city_voronezh hidden">Воронеж</a>
        <a class="header__location js-choose-city js-city-show city_kazan hidden">Казань</a>
        <a class="header__location js-choose-city js-city-show city_samara hidden">Самара</a>
        <a class="header__location js-choose-city js-city-show city_krasnodar hidden">Краснодар</a>
        <a class="header__location__city-option js-choose-city">Выбрать город</a>
        <div class="header__discount">Экономьте на страховке до 50%</div>
        <a href="{{ config('app.old_url') }}/chto-delat-pri-nastuplenii-strakhovogo-sluchaya/" class="header__insurance">
            Страховой случай
            <div class="offer-links__arrow"></div>
        </a>
    </div>
</header>
