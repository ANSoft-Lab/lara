<section class="about-company">
    <h2 class="about__title about__title_underline{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
    @if (isset($edit_mode))
        contenteditable="true" id="about_company_1"
    @endif
    >
        {!! $about_company_1 ?? 'О компании' !!}
    </h2>
    <p class="about__info{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
    @if (isset($edit_mode))
        contenteditable="true" id="about_company_2"
    @endif
    >
        {!! $about_company_2 ?? 'Финансы и страхование
        <span class="about__info_strong">Финист (Finist)</span> входит в
        <span class="about__info_strong">ТОП-5</span>
        страховых брокеров России.' !!}
    </p>
    <div class="about__info{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
    @if (isset($edit_mode))
        contenteditable="true" id="about_company_3"
    @endif
    >
        {!! $about_company_3 ?? 'Комплексный подход и&nbsp;гибкость
        в&nbsp;решении поставленных задач гарантируют,
        что&nbsp;каждый клиент получит именно&nbsp;то,
        что ему нужно. На&nbsp;нашем сайте&nbsp;вы не&nbsp;только
        узнаете всё о&nbsp;предлагаемых услугах и&nbsp;сможете
        воспользоваться удобными калькуляторами
        для расчета стоимости полисов,
        но&nbsp;и&nbsp;узнаете много полезной информации
        о&nbsp;видах и&nbsp;возможностях обязательного и
        добровольного страхования.' !!}
    </div>
    <div class="about__info">
        <span class="{{ isset($edit_mode) ? 'blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_company_4"
        @endif
        >
            {!! $about_company_4 ?? 'Если вы&nbsp;не&nbsp;знаете, какую страховую компанию выбрать
        и&nbsp;не&nbsp;можете определиться
        с&nbsp;выбором, просто позвоните
        нам по&nbsp;телефону' !!}

        </span>
        <a href="tel:84956262555" class="about__info_strong">8(495) 62-62-555</a>
        или напишите по&nbsp;адресу <a href="mailto:zayvka@finist.ru" class="about__info_strong">zayvka@finist.ru</a>.
        <span class="about__info about__info_inline{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_company_5"
        @endif
        >
            {!! $about_company_5 ?? 'Наш специалист станет вашим
            персональным менеджером и&nbsp;обеспечит:' !!}
        </span>
    </div>
    <ul class="about__checklist">
        <li class="about__checklist-item{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_company_6"
        @endif
        >
            {!! $about_company_6 ?? 'информацию о существующих ценовых предложениях,' !!}
        </li>
        <li class="about__checklist-item{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_company_7"
        @endif
        >
            {!! $about_company_7 ?? 'помощь с выбором самых выгодных страховых условий,' !!}
        </li>
        <li class="about__checklist-item{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_company_8"
        @endif
        >
            {!! $about_company_8 ?? 'оформление и доставку вашего полиса.' !!}
        </li>
    </ul>
</section>
