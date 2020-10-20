<section class="principles">
    <h2 class="about__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
    @if (isset($edit_mode))
        contenteditable="true" id="about_principles_1"
    @endif
    >
        {!! $about_principles_1 ?? 'Наши принципы и&nbsp;цели' !!}
    </h2>
    <ul class="principles__list">
        <li class="principles__item{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_principles_2"
        @endif
        >
            {!! $about_principles_2 ?? 'Предоставление клиенту
            максимально полной информации
            и качественного сервиса' !!}
        </li>
        <li class="principles__item{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_principles_3"
        @endif
        >
            {!! $about_principles_3 ?? 'Самые выгодные
            ценовые предложения
            и страховые программы' !!}
        </li>
        <li class="principles__item{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_principles_4"
        @endif
        >
            {!! $about_principles_4 ?? 'Индивидуальный гибкий
            подход к нуждам клиентам' !!}
        </li>
        <li class="principles__item{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_principles_5"
        @endif
        >
            {!! $about_principles_5 ?? 'Обеспечение страховой
            защиты на профессиональном
            уровне' !!}
        </li>
        <li class="principles__item{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_principles_6"
        @endif
        >
            {!! $about_principles_6 ?? 'Сохранение времени,
            нервов и денег
            наших клиентов' !!}
        </li>
        <li class="principles__item{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_principles_7"
        @endif
        >
            {!! $about_principles_7 ?? 'Работа только
            с зарекомендовавшими
            себя надёжными партнёрами' !!}
        </li
        >
        <li class="principles__item{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_principles_8"
        @endif
        >
            {!! $about_principles_8 ?? 'Популяризация страховых
            инструментов в России' !!}
        </li>
        <li class="principles__item{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_principles_9"
        @endif
        >
            {!! $about_principles_9 ?? 'Развитие цивилизованного
            рынка страховых услуг
            по самым высоким стандартам' !!}
        </li>
    </ul>
</section>
