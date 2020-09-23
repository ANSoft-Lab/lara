<section class="leaders">
    <div class="leaders__content">
        <h2 class="about__title about__title_underline">
            Руководство компании
        </h2>
        <ul class="leaders__list">
            <li class="leaders__item">
                <div class="leaders__img-wrap">
                    <img src="/img/leaders/tyurin.jpg" alt="" class="leaders__img">
                </div>
                <div class="leaders__text">
                    <h3 class="leaders__name">Тюрин Михаил Викторович</h3>
                    <p class="about__info">
                        <span class="about__info_strong">Должность:</span> управляющий партнёр
                    </p>
                    <p class="about__info">
                        <span class="about__info_strong">Карьера:</span> С 2003 г.
                        по н.в. «Финансы и страхование «Финист».
                        Управляющий партнёр.
                    </p>
                    <p class="about__info">
                        Создал с нуля один
                        из крупнейших брокеров России.
                    </p>
                    <p class="about__info">
                        Построил собственную
                        сеть офисов продаж
                        в Московском регионе
                        и с филиалом в г.Рязань.
                    </p>
                    <p class="about__info">
                        Сформировал каналы продаж
                        страховых продуктов: дилерский,
                        офисный (4 офиса), агентский
                        (более 150 агентов), корпоративный.
                    </p>
                    <p class="about__info">
                        Разрабатывает и внедряет
                        эксклюзивные продукты,
                        созданные специально
                        для Компании, в розничный
                        и агентский каналы.
                    </p>
                    <p class="about__info">
                        Закончил Российскую
                        Экономическую Академию
                        им. Г.В.Плеханова (МЭО).
                    </p>
                </div>
            </li>
            <li class="leaders__item">
                <div class="leaders__img-wrap">
                    <img src="/img/leaders/holin.jpg" alt="" class="leaders__img">
                </div>
                <div class="leaders__text">
                    <h3 class="leaders__name">Холин Владимир Евгеньевич</h3>
                    <p class="about__info">
                        <span class="about__info_strong">Должность:</span>
                            Председатель правления ГК Финист
                    </p>
                    <p class="about__info">
                        «В 2005 году мне хотелось создать своё предприятие,
                        и когда мы встретились
                        с Михаилом, и оказалось,
                        что он развивает страхового брокера, мы договорились сделать это вместе.
                    </p>
                    <p class="about__info">
                        Уже через месяц мы нашли офис в Марьино.
                        Именно тогда зарождался FINIST,
                        который стал обновлённым до неузнаваемости
                        ПрофГарантом. В 2007 году
                        мы создали корпоративный отдел,
                        список партнёров- страховых компаний
                        расширился до двадцати. Начали работу
                        с юридическими лицами, заслугой чего
                        стало комплексное обслуживание всего
                        автопарка Ространснадзора, нашего
                        первого федерального клиента.
                    </p>
                    <p class="about__info">
                        В 2008 году состоялось
                        открытие первого офиса
                        в Рязани, на тот момент
                        в виде агентского офиса.
                    </p>
                    <p class="about__info">
                        В 2009 году мы завершили
                        создание агентского подразделения
                        и построили сеть из 50 агентов,
                        некоторые из которых до сих
                        пор отлично работают
                        в нашей компании.»
                    </p>
                </div>
            </li>
        </ul>

    </div>
</section>
<section class="collective">
    <h2 class="about__title about__title_underline">
        Коллектив
    </h2>
    <ul class="collective__list">
        <li class="collective__section">
            <ul class="collective__inner-list">
                @forelse ($items as $item)
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
                @empty

                @endforelse
            </ul>
        </li>
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
