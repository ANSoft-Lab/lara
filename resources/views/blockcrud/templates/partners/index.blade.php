@extends('base')

@section('content')
    <style type="text/css">
    .item_partner_container {
      float:left;
      text-align:center;
      margin:auto;
      margin-bottom:40px;
    }
    .item_partner {
      border:solid 1px #ddd;
      border-radius:20px;
      display:block;
      margin:15px 10px;
    }
    .item_partner_container a:link, .item_partner_container a:visited {
      color: #333333;
    }

    @media screen and (max-width: 768px) {
      .item_partner_container {
        float: none;
      }
      .item_partner {
        margin: 15px auto;
      }
    }
    </style>

    <div class="about" style="overflow-y:auto;">
        <section class="about-company">

            <h2 class="about__title about__title_underline">Наши друзья</h2>
            <div style="clear:both;min-height:300px;">

            <div class="item_partner_container">
                <b>AngelClub</b>
                <a href="https://www.angelclub.ru/" target="_blank"><img src="/img/partners/angelclub_logo.jpg" alt="AngelClub" class="item_partner"></a>
            </div>
            <div class="item_partner_container">
                <b>REO Group</b>
                <a href="https://prestig-ocenka.ru/" target="_blank"><img src="/img/partners/reogroup_logo.jpg" alt="REO Group" class="item_partner"></a>
            </div>
            <div class="item_partner_container">
                <b>Pampadu</b>
                <a href="https://pampadu.ru/" target="_blank"><img src="/img/partners/pampadu_logo.jpg" alt="PAMPADU" class="item_partner"></a>
            </div>

            </div>
            <div style="clear:both;min-height:800px;">

            <h2 class="about__title about__title_underline">Партнёры по страхованию</h2>
            <div style="min-height:300px;">

            <div class="item_partner_container">
                <b>Ингосстрах</b>
                <a href="https://ingos.ru" target="_blank"><img src="/img/partners/ingos_logo.png" alt="Ингосстрах" class="item_partner"></a>
                <a href="https://ingos.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>РЕСО Гарантия</b>
                <a href="https://reso.ru" target="_blank"><img src="/img/partners/reso_logo.png" alt="РЕСО" class="item_partner"></a>
                <a href="https://reso.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Альфастрахование</b>
                <a href="https://alfastrah.ru" target="_blank"><img src="/img/partners/alfastrah_logo.png" alt="Альфастрахование" class="item_partner"></a>
                <a href="https://alfastrah.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Тинькофф Страхование</b>
                <a href="https://tinkoffinsurance.ru" target="_blank"><img src="/img/partners/tinkoff_logo.png" alt="Тинькофф Страхование" class="item_partner"></a>
                <a href="https://acdn.tinkoffinsurance.ru/static/documents/417d017c-904c-4477-a106-e8bf32008054.pdf" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>ЭРГО</b>
                <a href="https://ergorussia.ru/" target="_blank"><img src="/img/partners/ergo_logo.png" alt="ЭРГО" class="item_partner"></a>
                <a href="https://ergorussia.ru/" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Ренессанс Страхование</b>
                <a href="https://renins.ru" target="_blank"><img src="/img/partners/renins_logo.png" alt="Ренессанс Страхование" class="item_partner"></a>
                <a href="https://renins.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>ВСК</b>
                <a href="https://vsk.ru" target="_blank"><img src="/img/partners/vsk_logo.png" alt="ВСК" class="item_partner"></a>
                <a href="https://vsk.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Совкомбанк Страхование</b>
                <a href="https://sovcomins.ru" target="_blank"><img src="/img/partners/sovcomins_logo.png" alt="Совкомбанк Страхование" class="item_partner"></a>
                <a href="https://sovcomins.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Югория</b>
                <a href="https://ugsk.ru" target="_blank"><img src="/img/partners/ugsk_logo.png" alt="Югория" class="item_partner"></a>
                <a href="https://ugsk.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>T.I.T</b>
                <a href="https://titins.ru" target="_blank"><img src="/img/partners/titins_logo.png" alt="T.I.T" class="item_partner"></a>
                <a href="https://titins.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Согласие</b>
                <a href="https://soglasie.ru" target="_blank"><img src="/img/partners/soglasie_logo.png" alt="Согласие" class="item_partner"></a>
                <a href="https://soglasie.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>СОГАЗ</b>
                <a href="https://sogaz.ru" target="_blank"><img src="/img/partners/sogaz_logo.png" alt="СОГАЗ" class="item_partner"></a>
                <a href="https://sogaz.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Страховая компания ПАРИ</b>
                <a href="https://skpari.ru" target="_blank"><img src="/img/partners/skpari_logo.png" alt="ПАРИ" class="item_partner"></a>
                <a href="https://skpari.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Росгосстрах</b>
                <a href="https://rgs.ru" target="_blank"><img src="/img/partners/rgs_logo.png" alt="Росгосстрах" class="item_partner"></a>
                <a href="https://rgs.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>ОСК</b>
                <a href="https://osk-ins.ru" target="_blank"><img src="/img/partners/osk-ins_logo.png" alt="ОСК" class="item_partner"></a>
                <a href="https://osk-ins.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>МАКС</b>
                <a href="https://makc.ru" target="_blank"><img src="/img/partners/makc_logo.png" alt="МАКС" class="item_partner"></a>
                <a href="https://makc.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Гайде</b>
                <a href="https://guidehins.ru" target="_blank"><img src="/img/partners/guidehins_logo_2.png" alt="Гайде" class="item_partner"></a>
                <a href="https://guidehins.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Гранта</b>
                <a href="https://grantains.ru" target="_blank"><img src="/img/partners/grantains_logo.png" alt="Гранта" class="item_partner"></a>
                <a href="https://grantains.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Энергогарант</b>
                <a href="https://energogarant.ru" target="_blank"><img src="/img/partners/energogarant_logo.png" alt="Энергогарант" class="item_partner"></a>
                <a href="https://energogarant.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Капитал Полис</b>
                <a href="https://capitalpolis.ru" target="_blank"><img src="/img/partners/capitalpolis_logo.png" alt="Капитал Полис" class="item_partner"></a>
                <a href="https://capitalpolis.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Зетта Страхование</b>
                <a href="https://zettains.ru" target="_blank"><img src="/img/partners/zettains_logo.png" alt="Зетта" class="item_partner"></a>
                <a href="https://zettains.ru" target="_blank">Читать условия страхования</a>
            </div>

            </div>
            </div>

            <div style="clear:both;min-height:800px;">
            <h2 class="about__title about__title_underline">Партнёры по финансовым услугам</h2>
            <div style="min-height:300px;">

            <div class="item_partner_container">
                <b>Сбербанк</b>
                <a href="https://sberbank.ru" target="_blank"><img src="/img/partners/banks/sberbank_logo.png" alt="Сбербанк" class="item_partner"></a>
            </div>

            <div class="item_partner_container">
                <b>Альфабанк</b>
                <a href="https://alfabank.ru" target="_blank"><img src="/img/partners/banks/alfabank_logo.png" alt="Альфабанк" class="item_partner"></a>
            </div>

            <div class="item_partner_container">
                <b>Тинькофф</b>
                <a href="https://tinkoff.ru" target="_blank"><img src="/img/partners/banks/tinkoff_logo.png" alt="Тинькофф" class="item_partner"></a>
            </div>

            <div class="item_partner_container">
                <b>Уралсиб</b>
                <a href="https://uralsib.ru" target="_blank"><img src="/img/partners/banks/uralsib_logo.png" alt="Уралсиб" class="item_partner"></a>
            </div>

            <div class="item_partner_container">
                <b>ЮниКредитБанк</b>
                <a href="https://unicreditbank.ru" target="_blank"><img src="/img/partners/banks/unicreditbank_logo.png" alt="ЮниКредитБанк" class="item_partner"></a>
            </div>

            <div class="item_partner_container">
                <b>ТКБ</b>
                <a href="https://tkbbank.ru" target="_blank"><img src="/img/partners/banks/tkbbank_logo.png" alt="ТКБ" class="item_partner"></a>
            </div>

            <div class="item_partner_container">
                <b>Совкомбанк</b>
                <a href="https://sovcombank.ru" target="_blank"><img src="/img/partners/banks/sovcombank_logo.png" alt="Совкомбанк" class="item_partner"></a>
            </div>

            <div class="item_partner_container">
                <b>Росбанк</b>
                <a href="https://rosbank.ru" target="_blank"><img src="/img/partners/banks/rosbank_logo.png" alt="Росбанк" class="item_partner"></a>
            </div>

            <div class="item_partner_container">
                <b>Райффайзен</b>
                <a href="https://raiffeisen.ru" target="_blank"><img src="/img/partners/banks/raiffeisen_logo.png" alt="Райффайзен" class="item_partner"></a>
            </div>

            <div class="item_partner_container">
                <b>ДОМ.РФ</b>
                <a href="https://domrf.ru" target="_blank"><img src="/img/partners/banks/domrfbank_logo.png" alt="ДОМ.РФ" class="item_partner"></a>
            </div>

            <div class="item_partner_container">
                <b>Абсолют Банк</b>
                <a href="https://absolutbank.ru" target="_blank"><img src="/img/partners/banks/absolutbank_logo.png" alt="Абсолют Банк" class="item_partner"></a>
            </div>

            <div class="item_partner_container">
                <b>Банк Россия</b>
                <a href="https://abr.ru" target="_blank"><img src="/img/partners/banks/abr_logo.png" alt="Банк Россия" class="item_partner"></a>
            </div>

            </div>
            </div>

        </section>
    </div>
@endsection
