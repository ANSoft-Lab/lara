{{--<section class="reasons">--}}
{{--    <div class="reasons__text">--}}
{{--        <h2 class="additional__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"--}}
{{--        @if (isset($edit_mode))--}}
{{--            contenteditable="true" id="main_reasons_1"--}}
{{--        @endif--}}
{{--        >{!! $main_reasons_1 ?? 'Причины работать с нами' !!}</h2>--}}
{{--    </div>--}}
{{--    <ul class="reasons__list advan">--}}
{{--        <li class="reasons__list-item">--}}
{{--            <p class="reasons__list-title">--}}
{{--                Наши услуги бесплатны--}}
{{--            </p>--}}
{{--        </li>--}}
{{--        <li class="reasons__list-item">--}}
{{--            <p class="reasons__list-title">--}}
{{--                Цены ниже чем в страховой--}}
{{--            </p>--}}
{{--        </li>--}}
{{--        <li class="reasons__list-item">--}}
{{--            <p class="reasons__list-title">--}}
{{--                Бесплатная доставка--}}
{{--            </p>--}}
{{--        </li>--}}
{{--        <li class="reasons__list-item">--}}
{{--            <p class="reasons__list-title">--}}
{{--                Персональный менеджер каждому клиенту--}}
{{--            </p>--}}
{{--        </li>--}}
{{--        <li class="reasons__list-item">--}}
{{--            <p class="reasons__list-title">--}}
{{--                Юридическая поддержка с защитой Ваших интересов--}}
{{--            </p>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--    <div class="cooperation__btn-wrap">--}}
{{--        <a href="/about" class="cooperation__link{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"--}}
{{--        @if (isset($edit_mode))--}}
{{--            contenteditable="true" id="main_reasons_2"--}}
{{--        @endif--}}
{{--        >{!! $main_reasons_2 ?? 'Детально о компании' !!}</a>--}}
{{--    </div>--}}
{{--    </section>--}}
<section class="plus_minus">
    <h2 class="about__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
        contenteditable="true" id="kis_plus_1"
        @endif
    >
        {!! $kis_plus_1 ?? 'Причины обратиться к нам:' !!}
    </h2>
    <div class="plus_minus__line">
        <div class="plus_minus__panel plus" style="width: 100%">
            <h2 class="about__title about__title_tab{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
                @if (isset($edit_mode))
                contenteditable="true" id="kis_plus_2"
                @endif
            >
                {!! $kis_plus_2 ?? 'При оформлении полиса ипотечного страхования нашими специалистами мы:' !!}
            </h2>
            <ul class="plus_minus__list">
                <li>Подберём оптимальные предложения от <strong>ТОП-10</strong> страховых компаний в течение рабочего дня;</li>
                <li>Поможем разобраться в условиях кредитного договора и требованиях банка-кредитора;</li>
                <li>Оформим пакет документов для страховой компании;</li>
                <li>Бесплатно доставим договор страхования в пределах МКАД или КАД;</li>
                <li>Окажем содействие в урегулировании вопросов со страховой компанией при наступлении страхового случая;</li>
                <li>Прикрепим персонального специалиста, который будет помогать Вам по всем вопросам страхования.</li>
            </ul>
            <div class="footer__btn-wrap">
                @include('blockcrud.modals.feedback', ['modal_title' => 'Оставить заявку на бесплатную консультацию', 'link' => false, 'btn_class' => 'modal__btn modal__btn__small'])
            </div>
        </div>
    </div>
</section>

