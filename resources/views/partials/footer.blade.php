<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__left">
                <a href="#" class="footer__logo">
                    <img src="/new/images/logo.png" alt="logo" />
                </a>

                <a class="footer__vacancies" href="/job/"><span>Вакансии</span></a>
            </div>

            <div class="footer__middle">
                @foreach (App\Models\MenuItem::getTree('bottom') as $item)
                    <div class="footer__middle-box">
                        <div class="footer__middle-title">{{ $item->name }}</div>
                        @if ($item->children->count() > 0)
                            <ul class="footer__middle-list">
                                @foreach ($item->children as $child)
                                    <li class="footer__middle-item">
                                        <a href="{{ $child->url() }}">
                                            {{ $child->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="footer__right">
                <div class="footer__social">
                    <a class="footer__social-link footer__social-link_facebook" href="https://www.facebook.com/gkfinist"></a>
                    <a class="footer__social-link footer__social-link_vkontakte" href="https://vk.com/gkfinist"></a>
                    <a class="footer__social-link footer__social-link_instagram" href="https://instagram.com/gk__finist?utm_medium=copy_link"></a>
                    <a class="footer__social-link footer__social-link_whatsapp" href="https://wa.me/+79156257342"></a>
                    <a class="footer__social-link footer__social-link_telegram" href="https://t.me/spfinist"></a>
                </div>

                <div class="footer__contacts">
                    <div class="footer__contacts-item">
                        <a class="footer__contacts-link" href="tel:84956602186">+7 495 660-21-86</a>
                        <p class="footer__contacts-text">Для банков (по вопросам ипотечного кредитования)</p>
                    </div>

                    <div class="footer__contacts-item js-city-show city_moscow">
                        <a class="footer__contacts-link footer__tel" href="tel:84956600098">+7 495 660-00-98</a>
                        <p class="footer__contacts-text js-open-modal" data-modal="choose-city">Москва</p>
                    </div>
                    <div class="footer__contacts-item js-city-show city_spb hidden">
                        <a class="footer__contacts-link footer__tel" href="tel:+78124494325">+7 812 449-43-25</a>
                        <p class="footer__contacts-text js-open-modal" data-modal="choose-city">Санкт-Петербург</p>
                    </div>
                    <div class="footer__contacts-item js-city-show city_nn hidden">
                        <a class="footer__contacts-link footer__tel" href="tel:+78312809697">+7 831 280-96-97</a>
                        <p class="footer__contacts-text js-open-modal" data-modal="choose-city">Нижний Новгород</p>
                    </div>
                    <div class="footer__contacts-item js-city-show city_ryazan hidden">
                        <a class="footer__contacts-link footer__tel" href="tel:+74912392016">+7 (4912) 392-016</a>
                        <p class="footer__contacts-text js-open-modal" data-modal="choose-city">Рязань</p>
                    </div>
                    <div class="footer__contacts-item js-city-show city_voronezh hidden">
                        <a class="footer__contacts-link footer__tel" href="tel:+74732067297">+7 (473) 206-72-97</a>
                        <p class="footer__contacts-text js-open-modal" data-modal="choose-city">Воронеж</p>
                    </div>
                    <div class="footer__contacts-item js-city-show city_kazan hidden">
                        <a class="footer__contacts-link footer__tel" href="tel:+78435671911">+7 (843) 567-19-11</a>
                        <p class="footer__contacts-text js-open-modal" data-modal="choose-city">Казань</p>
                    </div>
                    <div class="footer__contacts-item js-city-show city_samara hidden">
                        <a class="footer__contacts-link footer__tel" href="tel:+78463790582">+7 (8463) 790-582</a>
                        <p class="footer__contacts-text js-open-modal" data-modal="choose-city">Самара</p>
                    </div>
                    <div class="footer__contacts-item js-city-show city_krasnodar hidden">
                        <a class="footer__contacts-link footer__tel" href="tel:+78612982446">+7 (8612) 982-446</a>
                        <p class="footer__contacts-text js-open-modal" data-modal="choose-city">Краснодар</p>
                    </div>
                    <div class="footer__contacts-item js-city-show city_lipetsk hidden">
                        <a class="footer__contacts-link footer__tel" href="tel:+74742200745">+7 (4742) 200-745</a>
                        <p class="footer__contacts-text js-open-modal" data-modal="choose-city">Липецк</p>
                    </div>
                </div>

                @include('blockcrud.modals.feedback', ['modal_title' => 'Обратный звонок', 'link' => false, 'btn_class' => 'footer__right-btn callback modal__btn'])
            </div>
        </div>
        <div class="footer__bottom">
            <a class="footer__bottom-link" href="#"></a>
            <div class="footer__bottom-text">(С) 2003 — 2020 «Финист»</div>
            <div class="footer__bottom-text">
                Сайт защищен reCAPTCHA с применением Политики конфиденциальности и Условий использования от Google.
            </div>
            <button class="footer__scroll-top js-scroll-top"></button>
        </div>
    </div>
</footer>
