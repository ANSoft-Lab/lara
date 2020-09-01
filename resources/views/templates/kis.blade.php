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
        <section class="best-price">
            <h2 class="about__title mb-20">
                Мы гарантируем лучшую цену на полис ипотечного страхования
            </h2>
            <div class="gray-bg b-radius-20 p-40 mb-40">
                <h2 class="about__title mb-20">
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
                        <h3 class="fs-26">Мы сотрудничаем с основными банками&nbsp;&mdash; ипотечными кредиторами</h3>
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
    </div>
@endsection
