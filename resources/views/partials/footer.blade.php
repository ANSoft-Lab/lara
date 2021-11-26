<footer class="gray-bg">
    <div class="footer">
                <a href="/" class="footer__logo">
                    <img src="/icon/logo.svg" alt="finist">
                </a>
        <div class="footer__sections">
            <div class="footer__top">
                <div class="footer__logo">&nbsp;</div>
                @foreach (App\Models\MenuItem::getTree('bottom') as $item)
                    <div class="footer__list-wrap">
                        @if($item->name === 'Дополнительно')
                            <p class="footer__subtitle" hidden>
                                {{ $item->name }}
                            </p>
                        @else
                            <p class="footer__subtitle">
                                <a href="{{ $item->url() }}">{{ $item->name }}</a>
                            </p>
                        @endif
                        @if ($item->children->count() > 0)
                            <ul class="footer__list">
                                @foreach ($item->children as $child)
                                    <li class="footer__list-item">
                                        <a href="{{ $child->url() }}" class="footer__link">
                                            {{ $child->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endforeach
            </div>
            <div class="footer__mid">
                <ul class="footer__phone-list">
                    <li class="footer__phone-item js-city-show city_moscow">
                        <a href="tel:+74956262555" class="footer__tel">+7 495 62-62-555</a><br>
                        <a href="tel:+74956600098" class="footer__tel">+7 495 660-00-98</a>
                        <p class="footer__city js-open-modal" data-modal="choose-city">
                            Москва
                        </p>
                    </li>
                    <li class="footer__phone-item js-city-show city_spb hidden">
                        <a href="tel:+78124494325" class="footer__tel">+7 812 449-43-25</a>
                        <p class="footer__city js-open-modal" data-modal="choose-city">
                            Санкт-Петербург
                        </p>
                    </li>
                    <li class="footer__phone-item js-city-show city_nn hidden">
                        <a href="tel:+78312809697" class="footer__tel">+7 831 280-96-97</a>
                        <p class="footer__city js-open-modal" data-modal="choose-city">
                            Нижний Новгород
                        </p>
                    </li>
                    <li class="footer__phone-item js-city-show city_ryazan hidden">
                        <a href="tel:+74912392016" class="footer__tel">+7 (4912) 392-016</a>
                        <p class="footer__city js-open-modal" data-modal="choose-city">
                            Рязань
                        </p>
                    </li>
                    <li class="footer__phone-item js-city-show city_voronezh hidden">
                        <a href="tel:+74732067297" class="footer__tel">+7 (473) 206-72-97</a>
                        <p class="footer__city js-open-modal" data-modal="choose-city">Воронеж</p>
                    </li>
                    <li class="footer__phone-item js-city-show city_kazan hidden">
                        <a href="tel:+78435671911" class="footer__tel">+7 (843) 567-19-11</a>
                        <p class="footer__city js-open-modal" data-modal="choose-city">Казань</p>
                    </li>
                    <li class="footer__phone-item js-city-show city_samara hidden">
                        <a href="tel:+78463790582" class="footer__tel">+7 (8463) 790-582</a>
                        <p class="footer__city js-open-modal" data-modal="choose-city">Самара</p>
                    </li>
                    <li class="footer__phone-item js-city-show city_krasnodar hidden">
                        <a href="tel:+78612982446" class="footer__tel">+7 (8612) 982-446</a>
                        <p class="footer__city js-open-modal" data-modal="choose-city">Краснодар</p>
                    </li>
                    <li class="footer__phone-item">
                        <a href="tel:+74956602186" class="footer__tel">+7 495 660-21-86</a>
                        <p class="footer__city">
                            для банков (по вопросам ипотечного&nbsp;кредитования)
                        </p>
                    </li>
                </ul>
                {{--<a href="{{ config('app.old_url') }}/kontakty" class="footer__callback">Обратный звонок</a>--}}
{{--                @include('blockcrud.modals.feedback', ['modal_title' => 'Обратный звонок', 'btn_class' => 'footer__callback', 'link' => false])--}}
                <a href="/job/" class="footer__vacancies">Вакансии</a>
            </div>
        </div>
        <div style="display: flex; justify-content: center">
            <div style="width: 350px">
                @include('blockcrud.modals.feedback', ['modal_title' => 'Заказать обратный звонок', 'link' => false, 'btn_class' => 'modal__btn'])
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__btn-wrap">
            </div>
            <ul class="footer__socials">
                <li class="footer__social-icon">
                    <a href="https://www.facebook.com/finist.ru" class="footer__social-link">
                        <img src="/icon/socials/fb.svg" alt="facebook">
                    </a>
                </li>
                <li class="footer__social-icon">
                    <a href="https://vk.com/gkfinist" class="footer__social-link">
                        <img src="/icon/socials/vk.svg" alt="vkontakte">
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer__copyright">
            <p class="footer__disclaimer">
                Сайт защищён reCAPTCHA с применением Политики конфиденциальности и Условий использования от Google.
            </p>
            <p class="footer__dates">
                © 2003 – {{now()->year}} «Финист»
            </p>
            <button class="footer__scroll-top js-scroll-top"></button>
        </div>
    </div>
</footer>
