<section class="qna mb-40">
    <div class="qna__text">
        <h2 class="qna__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
            @if (isset($edit_mode))
                contenteditable="true" id="faq_intro_1"
            @endif
        >{!! $faq_intro_1 ?? 'Вопросы и ответы' !!}</h2>
        <div class="qna__info{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
            @if (isset($edit_mode))
            contenteditable="true" id="faq_intro_2"
            @endif
        >
            {!! $faq_intro_2 ?? 'В данном разделе сайта вы найдете ответы на наиболее часто встречающиеся вопросы относительно страхования' !!}
        </div>
    </div>
</section>
