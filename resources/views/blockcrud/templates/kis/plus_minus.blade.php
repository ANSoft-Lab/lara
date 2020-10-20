<section class="plus_minus">
    <h2 class="about__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}">
        Причины обратиться к нам:
    </h2>
    <div class="plus_minus__line">
        <div class="plus_minus__panel plus">
            <h2 class="about__title about__title_tab{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}">
                Оформление полиса ипотечного страхования нашими специалистами:
            </h2>
            <ul class="plus_minus__list">
                <li>Подберём оптимальные предложения от <strong>ТОП-10</strong> страховых компаний в течение рабочего дня;</li>
                <li>Поможем разобраться в условиях кредитного договора и требованиях банка-кредитора;</li>
                <li>Оформим пакет документов для страховой компании;</li>
                <li>Бесплатно доставим договор страхования в пределах МКАД или КАД;</li>
                <li>Окажем содействие в урегулировании вопросов со страховой компанией при наступлении страхового случая;</li>
                <li>Прикрепим персонального специалиста, который будет помогать Вам по всем вопросам страхования.</li>
            </ul>
            <div class="cooperation__btn-wrap">
                @customblock('feedback')
            </div>
        </div>
        <div class="plus_minus__panel minus">
            <h2 class="about__title about__title_tab{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}">
                Самостоятельное оформление полиса ипотечного страхования это:
            </h2>
            <ul class="plus_minus__list">
                <li>Потеря времени и сил на поиск подходящей страховой компании;</li>
                <li>Неправильное оформление документов для страховой компании;</li>
                <li>Переплата страхового взноса по договору страхования;</li>
                <li>Необходимость приезжать в офис страховой компании для заключения договора;</li>
                <li>Самостоятельное решение вопросов со страховой компанией при наступлении страхового случая.</li>
            </ul>
            <div class="cooperation__btn-wrap">
                @customblock('feedback', ['modal_title' => 'Бесплатная консультация', 'btn_class' => 'cooperation__outline'])
            </div>
        </div>
    </div>
</section>
