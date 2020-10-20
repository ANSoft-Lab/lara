<section class="cooperation">
    <div class="cooperation__content">
        <h2 class="cooperation__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
        @if (isset($edit_mode))
            contenteditable="true" id="main_partners_1"
        @endif
        >
            {!! $main_partners_1 ?? 'Партнёрам для&nbsp;сотрудничества' !!}
        </h2>
        <div class="cooperation__btn-wrap">
            <a href="{{ config('app.old_url') }}/korporativnoe_strahovanie" class="cooperation__link{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
            @if (isset($edit_mode))
                contenteditable="true" id="main_partners_2"
            @endif
            >
                {!! $main_partners_2 ?? 'Подробнее' !!}
            </a>
        </div>
    </div>
    <div class="cooperation__decoration"></div>
</section>
