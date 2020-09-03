@extends('base')

@section('content')
    <div class="about">
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
                    <div class="panel__img d-flex mb-20">
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
                    <div class="panel__img d-flex mb-20">
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
                    <div class="panel__img d-flex mb-20">
                        <img src="/img/003.svg" alt="Имущество">
                    </div>
                    <div class="about__info">
                        Риск утраты права собственности
                    </div>
                </div>
            </div>
        </section>
        <section class="best-price">
            <h2 class="about__title mb-20">
                Мы гарантируем лучшую цену на полис ипотечного страхования
            </h2>
            <div class="gray-bg b-radius-20 p-40 mb-40">
                <h2 class="about__title mb-40">
                    Мы сотрудничаем только с аккредитованными компаниями
                </h2>
                <div class="partners-logos d-flex flex-wrap justify-content-space-around align-content-center mb-40">
                    <a href="">
                        <picture>
                            <source srcset="/icon/partners/ingos.svg" media="(min-width: 768px)">
                            <img src="/icon/partners/ingos.svg" alt="Ингосстрах" class="p-logo">
                        </picture>
                    </a>
                    <a href="">
                        <picture>
                            <source srcset="/icon/partners/ergo.jpg" media="(min-width: 768px)">
                            <img src="/icon/partners/ergo.jpg" alt="Ergo" class="p-logo">
                        </picture>
                    </a>
                    <a href="">
                        <picture>
                            <source srcset="/icon/partners/reso-logo.png" media="(min-width: 768px)">
                            <img src="/icon/partners/reso-logo.png" alt="Ресо" class="p-logo">
                        </picture>
                    </a>
                    <a href="">
                        <picture>
                            <source srcset="/icon/partners/alfastrahovanie.jpg" media="(min-width: 768px)">
                            <img src="/icon/partners/alfastrahovanie.jpg" alt="Альфа Страхование" class="p-logo">
                        </picture>
                    </a>
                    <a href="">
                        <picture>
                            <source srcset="/icon/partners/liberty.png" media="(min-width: 768px)">
                            <img src="/icon/partners/liberty.png" alt="Liberty" class="p-logo">
                        </picture>
                    </a>
                    <a href="">
                        <picture>
                            <source srcset="/icon/partners/vsk.jpg" media="(min-width: 768px)">
                            <img src="/icon/partners/vsk.jpg" alt="ВСК" class="p-logo">
                        </picture>
                    </a>
                </div>
                <h3 class="fs-26 text-center mb-20">Наши услуги бесплатны!</h3>
                <div class="d-flex flex-wrap justify-content-between align-content-center">
                    <div class="w-50">
                        <h3 class="fs-26 mb-10">Мы сотрудничаем с основными банками&nbsp;&mdash; ипотечными кредиторами</h3>
                        <div class="text">
                            Знаем специфику их работы, требования и правила оформления документации. Благодаря этому опыту, мы заранее можем предостеречь наших клиентов и предложить им выгодные и правильные решения.
                        </div>
                    </div>
                    <div class="d-flex flex-wrap shadow-blocks w-50">
                        <div class="shadow-block b-radius mr-10 mb-10">
                            <a href="#">Сбербанк</a>
                        </div>
                        <div class="shadow-block b-radius mr-10 mb-10">
                            <a href="#">АльфаБанк</a>
                        </div>
                        <div class="shadow-block b-radius mr-10 mb-10">
                            <a href="#">ВТБ</a>
                        </div>
                        <div class="shadow-block b-radius mr-10 mb-10">
                            <a href="#">Газпромбанк</a>
                        </div>
                        <div class="shadow-block b-radius mr-10 mb-10">
                            <a href="#">МеталлИнвестБанк</a>
                        </div>
                        <div class="shadow-block b-radius mr-10 mb-10">
                            <a href="#">Открытие</a>
                        </div>
                        <div class="shadow-block b-radius mr-10 mb-10">
                            <a href="#">Уралсиб</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="qna mb-40">
            <div class="qna__text">
                <h2 class="qna__title">Вопросы и ответы</h2>
                <p class="qna__info">
                    В данном разделе сайта
                    вы найдете ответы на
                    наиболее часто встречающиеся
                    вопросы относительно страхования
                </p>
            </div>
            <ul class="qna__list">
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        Где можно узнать перечень аккредитованных страховых компаний?
                    </p>
                    <p class="qna__dropdown">
                        Перечень страховых компаний, которые соответствуют требованиям банка-кредитора, можно узнать на сайте банка или уточнить по телефону в самом отделении банка.
                    </p>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        В каких случаях требуется прохождение медицинского обследования при страховании жизни и здоровья заемщика?
                    </p>
                    <p class="qna__dropdown">
                        Необходимость проведения медицинского обследования устанавливается по каждому клиенту индивидуально, и зависит от размера страховой суммы и возраста заемщика, а также от информации о состоянии здоровья, указанной в заявлении-анкете. Лица, достигшие 65 лет и выше, на момент заключения договора страхования, не могут заключить договор страхования, вне зависимости от вышеперечисленных факторов.
                    </p>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        Где и каким образом проходят мед. обследование?
                    </p>
                    <p class="qna__dropdown">
                        Мед. обследование проводят в частной клинике у высококвалифицированных специалистов, которая принадлежит страховой компании. Обследование проводят абсолютно бесплатно. Вас заранее запишут на обговоренное дату и время и по итогам Вам скажут результаты обследование и анализов.
                    </p>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        Какой срок действия договора ипотечного страхования?
                    </p>
                    <p class="qna__dropdown">
                        Договор ипотечного страхования заключается на один год либо на весь срок действия кредитного договора с ежегодной пролонгацией. Срок действия полиса определяется требованиями банка. Так например, срок действия договора страхования ипотеки для клиентов ПАО «Сбербанк» составляет 1 год, а срок действия договора для клиентов ПАО «ВТБ» - можно выбрать на усмотрение клиента, либо на 1 год, либо на весь срок кредита.
                    </p>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        Как уплачивается страховая премия?
                    </p>
                    <p class="qna__dropdown">
                        При заключении договора страхования сроком на 1 год страховой взнос уплачивается единовременно или в рассрочку (по согласованию с банком). Если договор заключается на срок более одного года, то страховой взнос уплачивается ежегодно в течение срока действия договора страхования.
                    </p>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        Какие способы оплаты возможны?
                    </p>
                    <div class="qna__dropdown">
                        <ul>
                            <li>Наличными</li>
                            <li>Банковской картой</li>
                            <li>Денежным переводом по выставленному счету</li>
                            <li>Оплатой счета через любой банк</li>
                            <li>Оплата на сайте страховой компании</li>
                        </ul>
                    </div>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        При наступлении страхового случая кто получит страховое возмещение?
                    </p>
                    <p class="qna__dropdown">
                        Банк в размере непогашенной части задолженности по кредитному договору. Собственники застрахованного имущества или их наследники – в оставшейся части страховой выплаты. Поэтому мы рекомендуем дополнительно застраховать ваше имущество на случай утраты или повреждения, в т.ч. внутреннюю отделку квартиры или дома, движимое имущество. Также можно обезопасить себя на случай причинения вреда соседям и заключить договор страхования гражданской ответственности.
                    </p>
                </li>
            </ul>
        </section>
    </div>
@endsection
