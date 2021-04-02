@extends('base')

@section('content')
    <div class="main">
        <section class="offer-links">
            <a href="" class="offer-links__item">
                <div class="offer-links__wrap">
                    <img src="/img/offers/1.jpg" alt="" class="offer-links__img">
                </div>
                <p class="offer-links__text">Комплексное ипотечное страхование</p>
                <div class="offer-links__arrow"></div>
            </a>
            <a href="" class="offer-links__item">
                <div class="offer-links__wrap">
                    <img src="/img/offers/2.jpg" alt="" class="offer-links__img">
                </div>
                <p class="offer-links__text">Рефинанси&shy;рование и кредитование</p>
                <div class="offer-links__arrow"></div>
            </a>
            <a href="" class="offer-links__item">
                <div class="offer-links__wrap">
                    <img src="/img/offers/3.jpg" alt="" class="offer-links__img">
                </div>
                <p class="offer-links__text">Автострахова&shy;ние</p>
                <div class="offer-links__arrow"></div>
            </a>
            <a href="" class="offer-links__item">
                <div class="offer-links__wrap">
                    <img src="/img/offers/4.jpg" alt="" class="offer-links__img">
                </div>
                <p class="offer-links__text">Страхование имущества</p>
                <div class="offer-links__arrow"></div>
            </a>
        </section>
        <section class="cooperation">
            <div class="cooperation__content">
                <h2 class="cooperation__title">
                    Партнёрам для&nbsp;сотрудничества
                </h2>
                <div class="cooperation__btn-wrap">
                    <a href="{{ config('app.old_url') }}/korporativnoe_strahovanie" class="cooperation__link">Подробнее</a>
                </div>
            </div>
            <div class="cooperation__decoration"></div>
        </section>
        <section class="additional">
            <h2 class="additional__title">Дополнительные виды&nbsp;страхования</h2>
            <ul class="additional__list">
                <li class="additional__item">
                    <div class="additional__content">
                        <p class="additional__subtitle">Страхование туристов</p>
                        <ul class="additional__services">
                            <li class="additional__service-item">
                                ВЗР
                            </li>
                            <li class="additional__service-item">
                                Страхование для визы
                            </li>
                            <li class="additional__service-item">
                                Страхование для шенгенской визы
                            </li>
                        </ul>
                    </div>
                    <a href="{{ config('app.old_url') }}/strahovanie/vzr/calc/" class="additional__arrow"></a>
                </li>
                <li class="additional__item">
                    <div class="additional__content">
                        <p class="additional__subtitle">Медицинское страхование</p>
                        <ul class="additional__services">
                            <li class="additional__service-item">
                                Добровольное медицинское страхование
                            </li>
                            <li class="additional__service-item">
                                Страхование от несчастных случаев
                            </li>
                            <li class="additional__service-item">
                                Личное страхование
                            </li>
                        </ul>
                    </div>
                    <a href="{{ config('app.old_url') }}/strahovanie/dms/" class="additional__arrow"></a>
                </li>
                <li class="additional__item">
                    <div class="additional__content">
                        <p class="additional__subtitle">Зелёная карта</p>
                    </div>
                    <a href="{{ config('app.old_url') }}/strahovanie/osago/" class="additional__arrow"></a>
                </li>
                <li class="additional__item">
                    <div class="additional__content">
                        <p class="additional__subtitle">Строительно-монтажные работы</p>
                    </div>
                    <a href="{{ config('app.old_url') }}/korporativnoe_strahovanie/strahovanie_smr/" class="additional__arrow"></a>
                </li>
                <li class="additional__item">
                    <div class="additional__content">
                        <p class="additional__subtitle">Страхование потребительских кредитов</p>
                    </div>
                    <a href="https://ipoteka-strahovka.ru" class="additional__arrow"></a>
                </li>
            </ul>
        </section>
        <section class="reasons">
            <div class="reasons__text">
                <h2 class="additional__title">Причины работать с нами</h2>
            </div>
            <ul class="reasons__list advan">
                <li class="reasons__list-item">
                    <p class="reasons__list-title">
                        Наши услуги бесплатны
                    </p>
                </li>
                <li class="reasons__list-item">
                    <p class="reasons__list-title">
                        Цены ниже чем в страховой
                    </p>
                </li>
                <li class="reasons__list-item">
                    <p class="reasons__list-title">
                        Бесплатная доставка
                    </p>
                </li>
                <li class="reasons__list-item">
                    <p class="reasons__list-title">
                        Персональный менеджер каждому клиенту
                    </p>
                </li>
                <li class="reasons__list-item">
                    <p class="reasons__list-title">
                        Юридическая поддержка с защитой Ваших интересов
                    </p>
                </li>
            </ul>
            <div class="cooperation__btn-wrap">
                <a href="/about" class="cooperation__link">Детально о компании</a>
            </div>
        </section>
        <section class="all-sorts">
            <h2 class="all-sorts__title">
                Все виды страхования
            </h2>
            <a href="{{ config('app.old_url') }}" class="all-sorts__link">
                Смотреть все
            </a>
        </section>
        <section class="partners">
            <ul class="partners__list">
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/tnkf.png" media="(min-width: 768px)">
                            <img src="/icon/partners/tnkf-m.png" alt="tnkf" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/reso.png" media="(min-width: 768px)">
                            <img src="/icon/partners/reso-m.png" alt="reso" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/ingos.png" media="(min-width: 768px)">
                            <img src="/icon/partners/ingos-m.png" alt="ingosstrakh" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/tnkf.png" media="(min-width: 768px)">
                            <img src="/icon/partners/tnkf-m.png" alt="tnkf" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/reso.png" media="(min-width: 768px)">
                            <img src="/icon/partners/reso-m.png" alt="reso" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="#" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/domrf.png" media="(min-width: 768px)">
                            <img src="/icon/partners/domrf-m.png" alt="reso" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/ingos.png" media="(min-width: 768px)">
                            <img src="/icon/partners/ingos-m.png" alt="ingosstrakh" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/tnkf.png" media="(min-width: 768px)">
                            <img src="/icon/partners/tnkf-m.png" alt="tnkf" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/reso.png" media="(min-width: 768px)">
                            <img src="/icon/partners/reso-m.png" alt="reso" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/ingos.png" media="(min-width: 768px)">
                            <img src="/icon/partners/ingos-m.png" alt="ingosstrakh" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/tnkf.png" media="(min-width: 768px)">
                            <img src="/icon/partners/tnkf-m.png" alt="tnkf" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/reso.png" media="(min-width: 768px)">
                            <img src="/icon/partners/reso-m.png" alt="reso" class="partners__logo">
                        </picture>
                    </a>
                </li>
                <li class="partners__list-item">
                    <a href="" class="partners__link">
                        <picture>
                            <source srcset="/icon/partners/ingos.png" media="(min-width: 768px)">
                            <img src="/icon/partners/ingos-m.png" alt="ingosstrakh" class="partners__logo">
                        </picture>
                    </a>
                </li>
            </ul>
        </section>
        <section class="contacts glide">
            <div class="contacts__scroll-wrap">
                <!-- <ul class="contacts__tablist js-pagination"> -->
                <ul class="contacts__tablist js-tabs glide__bullets" data-glide-el="controls[nav]">
                    <li data-city="msk" class="contacts__tab glide__bullet m-active" data-glide-dir="=0">
                        москва, центральный&nbsp;офис
                    </li>
                    <li data-city="spb" class="contacts__tab glide__bullet" data-glide-dir="=1">
                        санкт-петербург
                    </li>
                    <li data-city="nnv" class="contacts__tab glide__bullet" data-glide-dir="=2">
                        нижний новгород
                    </li>
                    <li data-city="ryz" class="contacts__tab glide__bullet" data-glide-dir="=3">
                        рязань
                    </li>
                    <li data-city="voronezh" class="contacts__tab glide__bullet" data-glide-dir="=4">
                        воронеж
                    </li>
                    <li data-city="kazan" class="contacts__tab glide__bullet" data-glide-dir="=5">
                        казань
                    </li>
                    <li data-city="samara" class="contacts__tab glide__bullet" data-glide-dir="=6">
                        самара
                    </li>
                    <li data-city="krasnodar" class="contacts__tab glide__bullet" data-glide-dir="=7">
                        краснодар
                    </li>
                </ul>
            </div>
            <div class="js-map-slider contacts__slider glide__track" data-glide-el="track">
                <div class="contacts__wrapper glide__slides">
                    <div class="contacts__map js-map glide__slide">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A66dc4eb5441aedcc29dfbd100faf3edc5a73001ca0ca7ed7f2149025acdfaadc&amp;width=100%25&amp;height=445&amp;lang=ru_RU&amp;scroll=false"></script>
                        <div class="contacts__block js-contacts-block">
                            <img src="/icon/cross.svg" alt="" class="contacts__close js-contacts-close">
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Адрес: </span>Москва, Большой
                                Толмачёвский&nbsp;пер., д.5
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Телефон:</span> +7 (495) 62-62-555, +7&nbsp;(495) 626-26-26
                                (отдел страхования доб. 714)
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">График работы:</span>
                                Пн-Пт: 9:00-19:00
                            </p>
                        </div>
                    </div>
                    <div class="contacts__map js-map glide__slide">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A564f97283846ae46b9c2010fdf2f03c6a63d356a9b9fb928a55d6089abd205c4&amp;width=100%25&amp;height=445&amp;lang=ru_RU&amp;scroll=false"></script>
                        <div class="contacts__block js-contacts-block">
                            <img src="/icon/cross.svg" alt="" class="contacts__close js-contacts-close">
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Адрес: </span>Санкт-Петербург, Боровая улица дом 32 , БЦ "Стелс", 7 этаж. 728 кабинет
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Телефон: </span>+7 812 449-43-25
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">График работы: </span>
                                Пн-Пт: 10:00-18:30
                            </p>
                        </div>
                    </div>
                    <div class="contacts__map js-map glide__slide">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2307135fb93f25c4b90bfd27f9acb1bd35de89a736627d8b5efd14fb6876b943&amp;width=100%25&amp;height=445&amp;lang=ru_RU&amp;scroll=false"></script>
                        <div class="contacts__block js-contacts-block">
                            <img src="/icon/cross.svg" alt="" class="contacts__close js-contacts-close">
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Адрес: </span>Нижний Новгород, ул. Костина, д.3
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Телефон: </span>+7 (831) 280-96-97
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">График работы: </span>
                                Пн-Вс: 9:00-19:00
                            </p>
                        </div>
                    </div>
                    <div class="contacts__map js-map glide__slide">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aeb0c6c13d0fd9fe8d7a0b9ff21a31b186c98c4219e10567b0027c706d72ff3b8&amp;width=100%25&amp;height=445&amp;lang=ru_RU&amp;scroll=false"></script>
                        <div class="contacts__block js-contacts-block">
                            <img src="/icon/cross.svg" alt="" class="contacts__close js-contacts-close">
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Адрес: </span>Рязань, ул. Маяковского д. 1а корп. Е БЦ "Капитал-Атрон"
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Телефон:</span>+7 (4912) 392-016
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">График работы:</span>
                                Пн-Пт: 9:00-19:00
                            </p>
                        </div>
                    </div>
                    <div class="contacts__map js-map glide__slide">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A18f8a45551d3e32e77abaed520c711a832d388a7ca8e76e1e836b17c82bbfa27&amp;width=100%25&amp;height=445&amp;lang=ru_RU&amp;scroll=false"></script>
                        <div class="contacts__block js-contacts-block">
                            <img src="/icon/cross.svg" alt="" class="contacts__close js-contacts-close">
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Адрес: Воронеж, ул. Платонова, дом 25</span>
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Телефон: +7 (473) 206-72-97</span>
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">График работы:</span>
                                Пн-Пт: 9:00-19:00
                            </p>
                        </div>
                    </div>
                    <div class="contacts__map js-map glide__slide">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acbf05086f2ae4b63a1fe729e2e4736cb73822b0ad270212db5b481c2a29cb9e2&amp;width=100%25&amp;height=445&amp;lang=ru_RU&amp;scroll=false"></script>
                        <div class="contacts__block js-contacts-block">
                            <img src="/icon/cross.svg" alt="" class="contacts__close js-contacts-close">
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Адрес: Казань, ул. Петербургская 74</span>
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Телефон: +7 (843) 567-19-11</span>
                            </p>
                            <p class="contacts__item">
                                <span class="contacts__subtitle">График работы:</span>
                                Пн-Пт: 9:00-19:00
                            </p>
                        </div>
                    </div>
                    <div class="contacts__map js-map glide__slide">
                        <div class="contacts__block js-contacts-block">
                            <img src="/icon/cross.svg" alt="" class="contacts__close js-contacts-close">
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Телефон: +7 (463) 790-582</span>
                            </p>
                        </div>
                    </div>
                    <div class="contacts__map js-map glide__slide">
                        <div class="contacts__block js-contacts-block">
                            <img src="/icon/cross.svg" alt="" class="contacts__close js-contacts-close">
                            <p class="contacts__item">
                                <span class="contacts__subtitle">Телефон: +7 (612) 982-446</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
