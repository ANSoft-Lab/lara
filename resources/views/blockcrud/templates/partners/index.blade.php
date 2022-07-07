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
                <img src="/img/partners/ingos_logo.png" alt="Ингосстрах" class="item_partner">
                <a href="https://ingos.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>РЕСО Гарантия</b>
                <img src="/img/partners/reso_logo.png" alt="РЕСО" class="item_partner">
                <a href="https://reso.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Альфастрахование</b>
                <img src="/img/partners/alfastrah_logo.png" alt="Альфастрахование" class="item_partner">
                <a href="https://alfastrah.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Тинькофф Страхование</b>
                <img src="/img/partners/tinkoff_logo.png" alt="Тинькофф Страхование" class="item_partner">
                <a href="https://acdn.tinkoffinsurance.ru/static/documents/417d017c-904c-4477-a106-e8bf32008054.pdf" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>ЭРГО</b>
                <img src="/img/partners/ergo_logo.png" alt="ЭРГО" class="item_partner">
                <a href="https://ergorussia.ru/" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Ренессанс Страхование</b>
                <img src="/img/partners/renins_logo.png" alt="Ренессанс Страхование" class="item_partner">
                <a href="https://renins.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>ВСК</b>
                <img src="/img/partners/vsk_logo.png" alt="ВСК" class="item_partner">
                <a href="https://vsk.ru" target="_blank">Читать условия страхования</a>
            </div>

            <div class="item_partner_container">
                <b>Совкомбанк Страхование</b>
                <img src="/img/partners/sovcomins_logo.png" alt="Совкомбанк Страхование" class="item_partner">
                <a href="https://sovcomins.ru" target="_blank">Читать условия страхования</a>
            </div>

            </div>
        </section>
    </div>
@endsection
