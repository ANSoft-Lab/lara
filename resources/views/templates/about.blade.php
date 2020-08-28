@extends('base')

@section('content')
    <div class="about">
        <section class="about-company">
            <h2 class="about__title about__title_underline">О компании</h2>
            <p class="about__info">
                Финансы и страхование
                <span class="about__info_strong">Финист (Finist)</span> входит в
                <span class="about__info_strong">ТОП-5</span>
                страховых брокеров России.
            </p>
            <p class="about__info">
                Комплексный подход и&nbsp;гибкость
                в&nbsp;решении поставленных задач гарантируют,
                что&nbsp;каждый клиент получит именно&nbsp;то,
                что ему нужно. На&nbsp;нашем сайте&nbsp;Вы не&nbsp;только
                узнаете всё о&nbsp;предлагаемых услугах и&nbsp;сможете
                воспользоваться удобными калькуляторами
                для расчета стоимости полисов,
                но&nbsp;и&nbsp;узнаете много полезной информации
                о&nbsp;видах и&nbsp;возможностях обязательного и
                добровольного страхования.
            </p>
            <p class="about__info">
                Если вы&nbsp;не&nbsp;знаете, какую страховую компанию выбрать
                и&nbsp;не&nbsp;можете определиться
                с&nbsp;выбором, просто позвоните
                нам по&nbsp;телефону
                <a href="tel:84956262555" class="about__info_strong">8(495) 62-62-555</a>
                или напишите по&nbsp;адресу <a href="mailto:zayvka@finist.ru" class="about__info_strong">zayvka@finist.ru</a>.
                <span class=" about__info about__info_inline">
                    Наш специалист станет вашим
                    персональным менеджером и&nbsp;обеспечит:
            </p>
            <ul class="about__checklist">
                <li class="about__checklist-item">
                    информацию о существующих ценовых предложениях,
                </li>
                <li class="about__checklist-item">
                    помощь с выбором самых выгодных страховых условий,
                </li>
                <li class="about__checklist-item">
                    оформление и доставку вашего полиса.
                </li>
            </ul>
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
        <section class="history-partners">
            <div class="blue-info">
                <h2 class="about__title about__title_dash">
                    История
                </h2>
                <p class="about__info">
                    Финансы и страхование <span class="about__info_strong">&laquo;Финист&raquo;</span>
                    с&nbsp;2003 года гарантирует своим клиентам
                    высокий уровень качества оказания услуг.
                    Многолетний опыт работы
                    как с&nbsp;физическими,
                    так и&nbsp;с&nbsp;юридическими лицами
                    позволяет уверенно утверждать,
                    что любую потребность клиентов
                    можно удовлетворить и&nbsp;подобрать
                    оптимальное страховое покрытие по&nbsp;самой
                    выгодной цене.
                </p>
            </div>
            <div class="blue-info">
                <h2 class="about__title about__title_dash">
                    Партнёры
                </h2>
                <p class="about__info">
                    Партнёрами <span class="about__info_strong">&laquo;Финиста&raquo;</span> являются самые надёжные
                    и&nbsp;уважаемые страховые компании России. Вместе
                    мы&nbsp;ставим во&nbsp;главу угла оптимальное решение вопросов наших клиентов
                    и&nbsp;гарантируем им&nbsp;помощь
                    и&nbsp;финансовую защиту
                    в&nbsp;любой ситуации.
                </p>
            </div>
        </section>
        <section class="clients">
            <h2 class="about__title">
                Наши клиенты
            </h2>
            <ul class="clients__list">
                <li class="clients__list-item">
                    <span class="clients__decorated">60</span> <p class="clients__info">тыс.<br/>человек</p>
                </li>
                <li class="clients__list-item">
                    <span class="clients__decorated">80</span> <p class="clients__info">компаний</p>
                </li>
                <li class="clients__list-item">
                    <span class="clients__decorated">20</span> <p class="clients__info">государ&shy;ственных<br/>заказчиков</p>
                </li>
            </ul>
        </section>
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
    </div>
@endsection
