<section class="history-partners">
    <div class="blue-info">
        <h2 class="about__title about__title_dash{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_history_1"
        @endif
        >
            {!! $about_history_1 ?? 'История' !!}
        </h2>
        <div class="about__info{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_history_2"
        @endif
        >
            {!! $about_history_2 ?? 'Финансы и страхование <span class="about__info_strong">&laquo;Финист&raquo;</span>
            с&nbsp;2003 года гарантирует своим клиентам
            высокий уровень качества оказания услуг.
            Многолетний опыт работы
            как с&nbsp;физическими,
            так и&nbsp;с&nbsp;юридическими лицами
            позволяет уверенно утверждать,
            что любую потребность клиентов
            можно удовлетворить и&nbsp;подобрать
            оптимальное страховое покрытие по&nbsp;самой
            выгодной цене.' !!}
        </div>
    </div>
    <div class="blue-info">
        <h2 class="about__title about__title_dash{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_history_3"
        @endif
        >
            {!! $about_history_3 ?? 'Партнёры' !!}
        </h2>
        <div class="about__info{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="about_history_4"
        @endif
        >
            {!! $about_history_4 ?? 'Партнёрами <span class="about__info_strong">&laquo;Финиста&raquo;</span> являются самые надёжные
            и&nbsp;уважаемые страховые компании России. Вместе
            мы&nbsp;ставим во&nbsp;главу угла оптимальное решение вопросов наших клиентов
            и&nbsp;гарантируем им&nbsp;помощь
            и&nbsp;финансовую защиту
            в&nbsp;любой ситуации.' !!}
        </div>
    </div>
</section>
