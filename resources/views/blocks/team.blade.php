<section class="collective">
    <h2 class="about__title about__title_underline{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}">
        Коллектив
    </h2>
    <ul class="collective__list">
        @forelse ($items->groupBy(function ($emp, $key) {
                if($emp->department) {
                    return $emp->department->name;
                } else {
                    return 'яяяя'; //Без отдела будут последними в списке
                }
            })->sort() as $dep => $employees)
            <li class="collective__section">
                <ul class="collective__inner-list">
                    @forelse ($employees as $employee)
                        <li class="collective__item">
                            <div class="collective__img-wrap">
                                @if ($employee->photo)
                                    <img src="{{ Storage::url($employee->photo) }}" alt="{{ $employee->name }}">
                                @endif
                            </div>
                            <p class="collective__name">
                                {{ $employee->name }}
                            </p>
                            <p class="collective__status">
                                {{ $employee->position }}<br>
                                {{ $employee->department->name ?? '' }}
                            </p>
                        </li>
                    @empty

                    @endforelse
                </ul>
            </li>
        @empty

        @endforelse
        {{--
        <li class="collective__section js-hidden-section m-hidden">
            <ul class="collective__inner-list">
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
            </ul>
        </li>
        <li class="collective__section js-hidden-section m-hidden">
            <ul class="collective__inner-list">
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Долгова Юлия
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Москва и г. Рязань
                    </p>
                </li>
                <li class="collective__item">
                    <div class="collective__img-wrap">
                        <img src="" alt="">
                    </div>
                    <p class="collective__name">
                        Кожендов Александр
                    </p>
                    <p class="collective__status">
                        Начальник управления
                        по г. Санкт-Петербург
                        и г. Нижний Новгород
                    </p>
                </li>
            </ul>
        </li>
        --}}
    </ul>
    {{--<button class="collective__btn js-show-section" type="button" name="button">Показать всех сотрудников</button>--}}
</section>
