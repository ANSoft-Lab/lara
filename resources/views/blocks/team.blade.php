<section class="collective">
    <h2 class="about__title about__title_underline{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}">
        Наш коллектив
    </h2>
    <ul class="collective__list" style="display: flex; flex-wrap: wrap">
        <li class="collective__section">
        @foreach($items as $item)
            <li class="collective__item">
                <div class="collective__img-wrap">
                    @if ($item->photo)
                        <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->name }}">
                    @endif
                </div>
                <p class="collective__name">
                    {{ $item->name }}
                </p>
                <p class="collective__status">
                    {{ $item->position }}<br>
                    {{ $item->department->name ?? '' }}
                </p>
            </li>
        @endforeach
    </ul>
    {{--<button class="collective__btn js-show-section" type="button" name="button">Показать всех сотрудников</button>--}}
</section>
