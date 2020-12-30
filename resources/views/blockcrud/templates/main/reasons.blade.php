<section class="reasons">
    <div class="reasons__text">
        <h2 class="additional__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="main_reasons_1"
        @endif
        >{!! $main_reasons_1 ?? 'Причины работать с нами' !!}</h2>
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
{{--    <div class="cooperation__btn-wrap">--}}
{{--        <a href="/about" class="cooperation__link{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"--}}
{{--        @if (isset($edit_mode))--}}
{{--            contenteditable="true" id="main_reasons_2"--}}
{{--        @endif--}}
{{--        >{!! $main_reasons_2 ?? 'Детально о компании' !!}</a>--}}
{{--    </div>--}}
    </section>
