<section class="best-price">
    <h2 class="about__title mb-20{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
    @if (isset($edit_mode))
        contenteditable="true" id="kis_best_1"
    @endif
    >
        {!! $kis_best_1 ?? 'Мы гарантируем лучшую цену на полис ипотечного страхования. Для вас наши услуги бесплатны!' !!}
    </h2>
    <div class="gray-bg b-radius-20 p-40 mb-40">
        <h2 class="about__title mb-40{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="kis_best_2"
        @endif
        >
            {!! $kis_best_2 ?? 'Мы сотрудничаем только с аккредитованными компаниями' !!}
        </h2>
        <div class="partners-logos d-flex flex-wrap justify-content-space-around align-content-center mb-40">
            <a href="https://www.ingos.ru/" target="_blank">
                <picture>
                    <source srcset="/icon/partners/ingos.svg" media="(min-width: 768px)">
                    <img src="/icon/partners/ingos.svg" alt="Ингосстрах" class="p-logo">
                </picture>
            </a>
            {{--
            <a href="https://www.ergo.ee/ru" target="_blank">
                <picture>
                    <source srcset="/icon/partners/ergo.jpg" media="(min-width: 768px)">
                    <img src="/icon/partners/ergo.jpg" alt="Ergo" class="p-logo">
                </picture>
            </a>
            --}}
            <a href="https://www.reso.ru/" target="_blank">
                <picture>
                    <source srcset="/icon/partners/reso-logo.png" media="(min-width: 768px)">
                    <img src="/icon/partners/reso-logo.png" alt="Ресо" class="p-logo">
                </picture>
            </a>
            <a href="https://www.alfastrah.ru/" target="_blank">
                <picture>
                    <source srcset="/icon/partners/alfastrahovanie.jpg" media="(min-width: 768px)">
                    <img src="/icon/partners/alfastrahovanie.jpg" alt="Альфа Страхование" class="p-logo">
                </picture>
            </a>
            <a href="https://renins.com/" target="_blank">
                <picture>
                    <source srcset="/icon/partners/renes.jpg" media="(min-width: 768px)">
                    <img src="/icon/partners/renes.jpg" alt="Ренессанс" class="p-logo">
                </picture>
            </a>
            {{--
            <a href="https://sovcomins.ru/" target="_blank">
                <picture>
                    <source srcset="/icon/partners/liberty.png" media="(min-width: 768px)">
                    <img src="/icon/partners/liberty.png" alt="Liberty" class="p-logo">
                </picture>
            </a>
            --}}
            <a href="https://www.vsk.ru/" target="_blank">
                <picture>
                    <source srcset="/icon/partners/vsk.jpg" media="(min-width: 768px)">
                    <img src="/icon/partners/vsk.jpg" alt="ВСК" class="p-logo">
                </picture>
            </a>
        </div>
        <h3 class="fs-26 text-center mb-20{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="kis_best_3"
        @endif
        >
            {!! $kis_best_3 ?? 'Наши услуги бесплатны!' !!}
        </h3>
        <div class="d-md-flex flex-wrap justify-content-between align-content-center">
            <div class="w-md-50 mb-sm-20">
                <h3 class="fs-26 mb-10{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
                @if (isset($edit_mode))
                    contenteditable="true" id="kis_best_4"
                @endif
                >
                    {!! $kis_best_4 ?? 'Мы сотрудничаем с основными банками&nbsp;&mdash; ипотечными кредиторами' !!}
                </h3>
                <div class="text{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
                @if (isset($edit_mode))
                    contenteditable="true" id="kis_best_5"
                @endif
                >
                    {!! $kis_best_5 ?? 'знаем специфику их работы, требования и правила оформления документации. Благодаря этому опыту, мы заранее можем предостеречь наших клиентов и предложить им выгодные и правильные решения.' !!}
                </div>
            </div>
            <div class="d-flex flex-wrap shadow-blocks w-md-50">
                <div class="shadow-block b-radius cm-5">
                    <img class="bank-logo" src="/img/sber.png">
                </div>
                <div class="shadow-block b-radius cm-5">
                    <img class="bank-logo" src="/img/alfa.jpg">
                </div>
                <div class="shadow-block b-radius cm-5">
                    <img class="bank-logo" src="/img/vtb.png">
                </div>
                <div class="shadow-block b-radius cm-5">
                    <img class="bank-logo" src="/img/gazprombank.jpg">
                </div>
                <div class="shadow-block b-radius cm-5">
                    <img class="bank-logo" src="/img/metallinvestbank.png">
                </div>
                <div class="shadow-block b-radius cm-5">
                    <img class="bank-logo" src="/img/otkrytie.png">
                </div>
                <div class="shadow-block b-radius cm-5">
                    <img class="bank-logo" src="/img/uralsib.gif">
                </div>
            </div>
        </div>
    </div>
</section>
