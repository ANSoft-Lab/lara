<section class="operation">
    <div class="operation__text">
        <h2 class="about__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_operation_1"
        @endif
        >
            {!! $about_operation_1 ?? 'Удобство
            и&nbsp;оперативность
            работы' !!}
        </h2>
        <div class="about__info{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_operation_2"
        @endif
        >
            {!! $about_operation_2 ?? 'Мы постоянно совершенствуем рабочие процессы,
            чтобы обеспечить максимальную скорость и
            эффективность. Обслуживание должно быть
            быстрым, удобным и понятным, чтобы клиенты
            не теряли время.' !!}
        </div>
        <div class="about__info{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_operation_3"
        @endif
        >
            {!! $about_operation_3 ?? 'Системы обмена информацией
            со страховыми кампаниями обеспечивает
            поступление информации к страховщикам
            без проволочек. Клиентские базы
            и системы связи «Финист»
            не только ускоряют процесс работы и
            уменьшают вероятность ошибок и сбоев,
            но и надёжно охраняют конфиденциальную
            информацию клиентов.' !!}
        </div>
        <a href="{{ url('/misc/FINIST_WM_08.pdf') }}" target="_blank" class="about__info operation__link{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_operation_4"
        @endif
        >
            {!! $about_operation_4 ?? 'Презентация о Страховом представительстве "Финист"' !!}
        </a>
    </div>
    <div>
        <div class="operation__logo">
            <img src="/icon/logo.svg" alt="">
        </div>

    </div>
</section>
