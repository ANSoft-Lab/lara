<section class="additional">
    <h2 class="additional__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}">Дополнительные виды&nbsp;страхования</h2>
    <ul class="additional__list">
        <li class="additional__item">
            <div class="additional__content">
                <p class="additional__subtitle">Страхование туристов</p>
                <ul class="additional__services">
                    <li class="additional__service-item">
                        ВЗР
                    </li>
                    <li class="additional__service-item">
                        Страхование для визы
                    </li>
                    <li class="additional__service-item">
                        Страхование для шенгенской визы
                    </li>
                </ul>
            </div>
            <a href="{{ config('app.old_url') }}/strahovanie/vzr/calc/" class="additional__arrow"></a>
        </li>
        <li class="additional__item">
            <div class="additional__content">
                <p class="additional__subtitle">Медицинское страхование</p>
                <ul class="additional__services">
                    <li class="additional__service-item">
                        Добровольное медицинское страхование
                    </li>
                    <li class="additional__service-item">
                        Страхование от несчастных случаев
                    </li>
                    <li class="additional__service-item">
                        Личное страхование
                    </li>
                </ul>
            </div>
            <a href="{{ config('app.old_url') }}/strahovanie/dms/" class="additional__arrow"></a>
        </li>
        <li class="additional__item">
            <div class="additional__content">
                <p class="additional__subtitle">Зелёная карта</p>
            </div>
            <a href="{{ config('app.old_url') }}/strahovanie/osago/" class="additional__arrow"></a>
        </li>
        <li class="additional__item">
            <div class="additional__content">
                <p class="additional__subtitle">Строительно-монтажные работы</p>
            </div>
            <a href="{{ config('app.old_url') }}/korporativnoe_strahovanie/strahovanie_smr/" class="additional__arrow"></a>
        </li>
        <li class="additional__item">
            <div class="additional__content">
                <p class="additional__subtitle">Страхование потребительских кредитов</p>
            </div>
            <a href="https://ipoteka-strahovka.ru" class="additional__arrow"></a>
        </li>
    </ul>
    </section>
