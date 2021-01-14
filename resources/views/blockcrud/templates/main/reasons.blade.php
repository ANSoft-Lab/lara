<section class="reasons">
    <div class="reasons__text">
        <h2 class="additional__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
            @if (isset($edit_mode))
            contenteditable="true" id="main_reasons_1"
            @endif
        >{!! $main_reasons_1 ?? 'Причины работать с нами' !!}</h2>
    </div>
    <ul class="plus_minus__list" style="padding-left: 65px">
        <li>Наши услуги бесплатны</li>
        <li>Цены ниже чем в страховой</li>
        <li>Бесплатная доставка</li>
        <li>Персональный менеджер каждому клиенту</li>
        <li>Юридическая поддержка с защитой Ваших интересов</li>
    </ul>
    {{--    <div class="cooperation__btn-wrap">--}}
    {{--        <a href="/about" class="cooperation__link{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"--}}
    {{--        @if (isset($edit_mode))--}}
    {{--            contenteditable="true" id="main_reasons_2"--}}
    {{--        @endif--}}
    {{--        >{!! $main_reasons_2 ?? 'Детально о компании' !!}</a>--}}
    {{--    </div>--}}
</section>
