@extends('base')

@section('content')
    <div class="about">
        <section class="about-company">
            <h2 class="about__title about__title_underline">Описание Комплексного Ипотечного Страхования (далее КИС)</h2>
            <p class="about__info">
                Если Вы решили воспользоваться ипотечным кредитом для приобретения недвижимости, то одним из обязательных условий получения кредита в банке является заключение договора страхования.
            </p>
            <p class="about__info">
                Мы готовы помочь Вам подобрать оптимальные страховые программы комплексного ипотечного страхования от ведущих страховых компаний, учитывающие стандартные требования большинства банков-кредиторов.
            </p>
            <p class="about__info">
                <strong>Внимание!</strong> Если вы уже застрахованы по ипотеке, но ищете надежную страховую компанию с более низкими тарифами на очередной год страхования - сравните тарифы действующего полиса с тарифами других страховых компаний, наш сервис вам в помощь!
            </p>
        </section>
        <section class="panels mort_ins">
            <h2 class="about__title">
                Страхование ипотечного кредита включает
            </h2>
            <div class="panels__line">
                <div class="panel blue-info">
                    <h2 class="about__title">
                        Имущество
                    </h2>
                    <div class="panel__img">
                        <img src="/img/001.svg" alt="Имущество">
                    </div>
                    <div class="about__info">
                        Риск утраты объекта
                    </div>
                </div>
                <div class="panel blue-info">
                    <h2 class="about__title">
                        Жизнь и здоровье
                    </h2>
                    <div class="panel__img">
                        <img src="/img/002.svg" alt="Имущество">
                    </div>
                    <div class="about__info">
                        Риски смерти и вреда здоровью
                    </div>
                </div>
                <div class="panel blue-info">
                    <h2 class="about__title">
                        Титул
                    </h2>
                    <div class="panel__img">
                        <img src="/img/003.svg" alt="Имущество">
                    </div>
                    <div class="about__info">
                        Риск утраты права собственности
                    </div>
                </div>
            </div>
        </section>
        <section class="plus_minus">
            <h2 class="about__title">
                Причины обратиться к нам:
            </h2>
            <div class="plus_minus__line">
                <div class="plus_minus__panel plus">
                    <h2 class="about__title about__title_tab">
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
                        <a href="#" class="cooperation__link">Оставить заявку</a>
                    </div>
                </div>
                <div class="plus_minus__panel minus">
                    <h2 class="about__title about__title_tab">
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
                        <a href="#" class="cooperation__outline">Бесплатная консультация</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="icon-section">
            <ul class="icon-list">
                <li class="icon-list__item">
                    <img src="/icon/icon-list/test.svg" alt="Выбор">
                    <p class="about__info icon-list__text">
                        Умный выбор программы&nbsp;страхования
                    </p>
                </li>
                <li class="icon-list__item">
                    <img src="/icon/icon-list/discount.svg" alt="Выбор">
                    <p class="about__info icon-list__text">
                        Скидки от страховой компании
                    </p>
                </li>
                <li class="icon-list__item">
                    <img src="/icon/icon-list/truck.svg" alt="Выбор">
                    <p class="about__info icon-list__text">
                        Бесплатная<br/>доставка
                    </p>
                </li>
                <li class="icon-list__item">
                    <img src="/icon/icon-list/law.svg" alt="Выбор">
                    <p class="about__info icon-list__text">
                        Юридическая помощь
                    </p>
                </li>
                <li class="icon-list__item">
                    <img src="/icon/icon-list/trust.svg" alt="Выбор">
                    <p class="about__info icon-list__text">
                        Более 25 компаний&#8209;партнеров
                    </p>
                </li>
                <li class="icon-list__item">
                    <img src="/icon/icon-list/money.svg" alt="Выбор">
                    <p class="about__info icon-list__text">
                        Наши услуги для&nbsp;вас&nbsp;бесплатны
                    </p>
                </li>
            </ul>
        </section>
        {{--
        <section class="location-section">
            <div class="blue-info">
                    <h2 class="about__title">
                        Где нас найти
                    </h2>
                    <p class="about__info">
                        Более 150 сотрудников
                        в&nbsp;Москве, Санкт-Петербурге, Рязани и&nbsp;Нижнем Новгороде ждут Вас. Также Вы&nbsp;в&nbsp;любой момент можете заполнить форму заказа полиса
                        на&nbsp;сайте, позвонить
                        нам или обратиться
                        к&nbsp;консультанту он-лайн.
                    </p>


            </div>
        </section>
        --}}
        <section class="principles">
            <h2 class="about__title">
                Наши принципы и&nbsp;цели
            </h2>
            <ul class="principles__list">
                <li class="principles__item">
                    Предоставление клиенту
                    максимально полной информации
                    и качественного сервиса
                </li>
                <li class="principles__item">
                    Самые выгодные
                    ценовые предложения
                    и страховые программы
                </li>
                <li class="principles__item">
                    Индивидуальный гибкий
                    подход к нуждам клиентам
                </li>
                <li class="principles__item">
                    Обеспечение страховой
                    защиты на профессиональном
                    уровне
                </li>
                <li class="principles__item">
                    Сохранение времени,
                    нервов и денег
                    наших клиентов
                </li>
                <li class="principles__item">
                    Работа только
                    с зарекомендовавшими
                    себя надёжными партнёрами
                </li
                >
                <li class="principles__item">
                    Популяризация страховых
                    инструментов в России
                </li>
                <li class="principles__item">
                    Развитие цивилизованного
                    рынка страховых услуг
                    по самым высоким стандартам
                </li>
            </ul>
        </section>
        <section class="operation">
            <div class="operation__text">
                <h2 class="about__title">
                    Удобство
                    и&nbsp;оперативность
                    работы
                </h2>
                <p class="about__info">
                    Мы постоянно совершенствуем рабочие процессы,
                    чтобы обеспечить максимальную скорость и
                    эффективность. Обслуживание должно быть
                    быстрым, удобным и понятным, чтобы клиенты
                    не теряли время.
                </p>
                <p class="about__info">
                    Системы обмена информацией
                    со страховыми кампаниями обеспечивает
                    поступление информации к страховщикам
                    без проволочек. Клиентские базы
                    и системы связи «Финист»
                    не только ускоряют процесс работы и
                    уменьшают вероятность ошибок и сбоев,
                    но и надёжно охраняют конфиденциальную
                    информацию клиентов.
                </p>
                <a href="" class="about__info operation__link">
                    Презентация о Страховом представительстве "Финист"
                </a>
            </div>
            <div>
                <div class="operation__logo">
                    <img src="/icon/logo.svg" alt="">
                </div>

            </div>
        </section>
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
        {{--
        <section class="collective">
            <h2 class="about__title about__title_underline">
                Коллектив
            </h2>
            <ul class="collective__list">
                <li class="collective__section">
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
            </ul>
            <button class="collective__btn js-show-section" type="button" name="button">Показать всех сотрудников</button>
        </section>
        --}}
    </div>
@endsection
