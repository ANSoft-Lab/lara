<section class="plus_minus">
    <h2 class="about__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
    @if (isset($edit_mode))
        contenteditable="true" id="kis_plus_1"
    @endif
    >
        {!! $kis_plus_1 ?? 'Комплексное ипотечное страхование' !!}
    </h2>
    <div class="plus_minus__line">
        <div class="plus_minus__panel plus">
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
