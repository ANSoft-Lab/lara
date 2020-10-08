<?php

use Illuminate\Database\Seeder;

class MainBlocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Schema::hasTable('block_items')) {
            $date = date('Y-m-d H:i:s');

            $blocks = [
                [
                    'name' => 'Ссылки на предложения',
                    'slug' => 'offer_links-html',
                    'type' => 'html',
                    'content' => '<section class="offer-links">
                                    <a href="" class="offer-links__item">
                                        <div class="offer-links__wrap">
                                            <img src="/img/offers/1.jpg" alt="" class="offer-links__img">
                                        </div>
                                        <p class="offer-links__text">Комплексное ипотечное страхование</p>
                                        <div class="offer-links__arrow"></div>
                                    </a>
                                    <a href="" class="offer-links__item">
                                        <div class="offer-links__wrap">
                                            <img src="/img/offers/2.jpg" alt="" class="offer-links__img">
                                        </div>
                                        <p class="offer-links__text">Рефинанси&shy;рование и кредитование</p>
                                        <div class="offer-links__arrow"></div>
                                    </a>
                                    <a href="" class="offer-links__item">
                                        <div class="offer-links__wrap">
                                            <img src="/img/offers/3.jpg" alt="" class="offer-links__img">
                                        </div>
                                        <p class="offer-links__text">Автострахова&shy;ние</p>
                                        <div class="offer-links__arrow"></div>
                                    </a>
                                    <a href="" class="offer-links__item">
                                        <div class="offer-links__wrap">
                                            <img src="/img/offers/4.jpg" alt="" class="offer-links__img">
                                        </div>
                                        <p class="offer-links__text">Страхование имущества</p>
                                        <div class="offer-links__arrow"></div>
                                    </a>
                                </section>',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Партнёрам для сотрудничества',
                    'slug' => 'cooperation',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.main_partners',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Дополнительные виды страхования',
                    'slug' => 'additional_ins-html',
                    'type' => 'html',
                    'content' => '<section class="additional">
                                    <h2 class="additional__title">Дополнительные виды&nbsp;страхования</h2>
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
                                            <a href="https://finist.ru/strahovanie/vzr/calc/" class="additional__arrow"></a>
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
                                            <a href="https://finist.ru/strahovanie/dms/" class="additional__arrow"></a>
                                        </li>
                                        <li class="additional__item">
                                            <div class="additional__content">
                                                <p class="additional__subtitle">Зелёная карта</p>
                                            </div>
                                            <a href="https://finist.ru/strahovanie/osago/" class="additional__arrow"></a>
                                        </li>
                                        <li class="additional__item">
                                            <div class="additional__content">
                                                <p class="additional__subtitle">Строительно-монтажные работы</p>
                                            </div>
                                            <a href="https://finist.ru/korporativnoe_strahovanie/strahovanie_smr/" class="additional__arrow"></a>
                                        </li>
                                        <li class="additional__item">
                                            <div class="additional__content">
                                                <p class="additional__subtitle">Страхование потребительских кредитов</p>
                                            </div>
                                            <a href="https://ipoteka-strahovka.ru" class="additional__arrow"></a>
                                        </li>
                                    </ul>
                                  </section>',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Причины работать с нами',
                    'slug' => 'reasons-html',
                    'type' => 'html',
                    'content' => '<section class="reasons">
                                    <div class="reasons__text">
                                        <h2 class="additional__title">Причины работать с нами</h2>
                                    </div>
                                    <ul class="reasons__list advan">
                                        <li class="reasons__list-item">
                                            <p class="reasons__list-title">
                                                Наши услуги бесплатны
                                            </p>
                                        </li>
                                        <li class="reasons__list-item">
                                            <p class="reasons__list-title">
                                                Цены ниже чем в страховой
                                            </p>
                                        </li>
                                        <li class="reasons__list-item">
                                            <p class="reasons__list-title">
                                                Бесплатная доставка
                                            </p>
                                        </li>
                                        <li class="reasons__list-item">
                                            <p class="reasons__list-title">
                                                Персональный менеджер каждому клиенту
                                            </p>
                                        </li>
                                        <li class="reasons__list-item">
                                            <p class="reasons__list-title">
                                                Юридическая поддержка с защитой Ваших интересов
                                            </p>
                                        </li>
                                    </ul>
                                    <div class="cooperation__btn-wrap">
                                        <a href="/about" class="cooperation__link">Детально о компании</a>
                                    </div>
                                  </section>',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Все виды страхования',
                    'slug' => 'all_sorts-html',
                    'type' => 'html',
                    'content' => '<section class="all-sorts">
                                    <h2 class="all-sorts__title">
                                        Все виды страхования
                                    </h2>
                                    <a href="https://finist.ru" class="all-sorts__link">
                                        Смотреть все
                                    </a>
                                  </section>',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Слайдер партнёров',
                    'slug' => 'partners_slider',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.main_partners_slider',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Карты с адресами',
                    'slug' => 'contacts_map',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.main_map',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            ];

            foreach($blocks as $block) {
                if(! DB::table('block_items')->where('slug', $block['slug'])->first()) {
                    DB::table('block_items')->insert($block);
                }
            }

            /*
                [
                    'name' => '',
                    'slug' => '',
                    'type' => 'html',
                    'content' => '',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            */

        } else {
            echo "\n\rТаблица блоков не найдена\n\r";
        }
    }
}
