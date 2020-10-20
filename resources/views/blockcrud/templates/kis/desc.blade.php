<section class="about-company">
    <h2 class="about__title about__title_underline{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
    @if (isset($edit_mode))
        contenteditable="true" id="kis_desc_1"
    @endif
    >
        {!! $kis_desc_1 ?? 'Описание Комплексного Ипотечного Страхования (далее КИС)' !!}
    </h2>
    <div class="about__info{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
    @if (isset($edit_mode))
        contenteditable="true" id="kis_desc_2"
    @endif
    >
        {!! $kis_desc_2 ?? 'Если Вы решили воспользоваться ипотечным кредитом для приобретения недвижимости, то одним из обязательных условий получения кредита в банке является заключение договора страхования.' !!}
    </div>
    <div class="about__info{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
    @if (isset($edit_mode))
        contenteditable="true" id="kis_desc_3"
    @endif
    >
        {!! $kis_desc_3 ?? 'Мы готовы помочь Вам подобрать оптимальные страховые программы комплексного ипотечного страхования от ведущих страховых компаний, учитывающие стандартные требования большинства банков-кредиторов.' !!}
    </div>
    <div class="about__info{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
    @if (isset($edit_mode))
        contenteditable="true" id="kis_desc_4"
    @endif
    >
        {!! $kis_desc_4 ?? '<strong>Внимание!</strong> Если вы уже застрахованы по ипотеке, но ищете надежную страховую компанию с более низкими тарифами на очередной год страхования - сравните тарифы действующего полиса с тарифами других страховых компаний, наш сервис вам в помощь!' !!}
    </div>
</section>
