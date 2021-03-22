<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Schema;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Schema::hasTable('pages')) {
            $date = date('Y-m-d H:i:s');

            $pages = [
                [
                    'template' => 'simple',
                    'name' => 'Главная',
                    'title' => 'Главная',
                    'slug' => '/',
                    'content' => "@customblock('offer_links')
                                @customblock('cooperation')
                                @customblock('additional_ins')
                                @customblock('reasons')
                                @customblock('all_sorts')
                                @customblock('partners_slider')
                                @customblock('contacts_map')",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Комплексное ипотечное страхование',
                    'title' => 'Комплексное ипотечное страхование',
                    'slug' => 'kis',
                    'content' => "
                        @customblock('plus-minus')
                        @customblock('kis-desc')
                        @customblock('kis-insurance')
                        @customblock('kis-best-price')
                        @customblock('kis-faq', 'block(\"kis-faq\")')
                        <br><br>
                        @customblock('documents')
                        <br><br>
                        @customblock('kis-team', 'block(\"kis-team\")')
                        <br><br>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Коллектив',
                    'title' => 'Коллектив',
                    'slug' => 'team',
                    'content' => "
                        @customblock('bosses')
                        @customblock('employees')
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Вопросы и ответы',
                    'title' => 'Вопросы и ответы',
                    'slug' => 'faq',
                    'content' => "
                        @customblock('faq-intro')
                        @customblock('faq-main', 'block(\"faq-main\")')
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'О компании',
                    'title' => 'О компании',
                    'slug' => 'about',
                    'content' => "
                        <div class=\"about\">
                            @customblock('about-company')
                            @customblock('about-icons')
                            @customblock('about-history')
                            @customblock('about-clients')
                            @customblock('about-principles')
                            @customblock('about-operation')
                            @customblock('bosses')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Тех. центры Finist',
                    'title' => 'Тех. центры Finist',
                    'slug' => 'group',
                    'content' => "
                        <div class=\"group\">
                            @customblock('group-content')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Контакты',
                    'title' => 'Контакты',
                    'slug' => 'kontakty',
                    'content' => "
                        <div class=\"contacts\">
                            @customblock('contacts-content')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Рефинансирование',
                    'title' => 'Рефинансирование',
                    'slug' => 'refinansirovanie',
                    'content' => "
                        <div class=\"refinancing\">
                            @customblock('refinancing-content')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование имущества физических лиц',
                    'title' => 'Страхование имущества физических лиц',
                    'slug' => 'strahovanie/strahovanie_imuchestva',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('insurance-fiz')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование КАСКО',
                    'title' => 'Страхование КАСКО',
                    'slug' => 'strahovanie/kasko',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('insurance-kasko')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование ОСАГО',
                    'title' => 'Страхование ОСАГО',
                    'slug' => 'strahovanie/osago',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('insurance-osago')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование туристов',
                    'title' => 'Страхование туристов',
                    'slug' => 'strahovanie/vzr',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('insurance-vzr')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование туристов (калькулятор)',
                    'title' => 'Страхование туристов на отдыхе и в поездке',
                    'slug' => 'strahovanie/vzr/calc',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('insurance-calc')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Добровольное медицинское страхование',
                    'title' => 'Добровольное медицинское страхование',
                    'slug' => 'strahovanie/dms',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('insurance-dms')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Наши преимущества',
                    'title' => 'Наши преимущества',
                    'slug' => 'nashi-preimushhestva',
                    'content' => "
                        <div class=\"advantages\">
                            @customblock('advantages-content')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Корпоративное страхование',
                    'title' => 'Корпоративное страхование',
                    'slug' => 'korporativnoe_strahovanie',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('corpinsurance-index')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование застройщиков',
                    'title' => 'Страхование застройщиков',
                    'slug' => 'korporativnoe_strahovanie/strahovanie_zastroyshikov',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('corpinsurance-developer')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование бизнеса',
                    'title' => 'Страхование бизнеса и финансовых рисков',
                    'slug' => 'korporativnoe_strahovanie/strahovanie_bisnessa',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('corpinsurance-developer')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование ответственности',
                    'title' => 'Страхование ответственности юридических лиц',
                    'slug' => 'korporativnoe_strahovanie/strahovanie_otvetstvennosti',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('corpinsurance-responsibility')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование имущества юридических лиц',
                    'title' => 'Страхование имущества юридических лиц',
                    'slug' => 'korporativnoe_strahovanie/strahovanie_imuchestva',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('corpinsurance-yur')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование грузов при перевозке',
                    'title' => 'Страхование грузов при перевозке',
                    'slug' => 'korporativnoe_strahovanie/strahovanie_gryzov',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('corpinsurance-cargo')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование строительства',
                    'title' => 'Страхование СМР. Страхование строительства.',
                    'slug' => 'korporativnoe_strahovanie/strahovanie_smr',
                    'content' => "
                        <div class=\"strahovanie\">
                            @customblock('corpinsurance-building')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Что делать при наступлении страхового случая?',
                    'title' => 'Что делать при наступлении страхового случая?',
                    'slug' => 'chto-delat-pri-nastuplenii-strakhovogo-sluchaya',
                    'content' => "
                        <div class=\"instruction\">
                            @customblock('instruction-index')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Наступление страхового случая (Авто)',
                    'title' => 'Автострахование',
                    'slug' => 'chto-delat-pri-nastuplenii-strakhovogo-sluchaya/auto',
                    'content' => "
                        <div class=\"instruction\">
                            @customblock('instruction-auto')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Наступление страхового случая (ВЗР)',
                    'title' => 'Страховой случай при путешествиях',
                    'slug' => 'chto-delat-pri-nastuplenii-strakhovogo-sluchaya/vzr',
                    'content' => "
                        <div class=\"instruction\">
                            @customblock('instruction-vzr')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Наступление страхового случая (Имущество)',
                    'title' => 'Повреждение застрахованного имущества',
                    'slug' => 'chto-delat-pri-nastuplenii-strakhovogo-sluchaya/imu',
                    'content' => "
                        <div class=\"instruction\">
                            @customblock('instruction-imu')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Наступление страхового случая (ДМС)',
                    'title' => 'Медицинская помощь по ДМС',
                    'slug' => 'chto-delat-pri-nastuplenii-strakhovogo-sluchaya/dms',
                    'content' => "
                        <div class=\"instruction\">
                            @customblock('instruction-dms')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Наступление страхового случая (НС)',
                    'title' => 'Произошёл несчастный случай',
                    'slug' => 'chto-delat-pri-nastuplenii-strakhovogo-sluchaya/ns',
                    'content' => "
                        <div class=\"instruction\">
                            @customblock('instruction-ns')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            ];

            if(DB::table('pages')->where('slug', 'about')->where('template', 'about')->first()) {
                DB::table('pages')->where('slug', 'about')->where('template', 'about')->delete();
            }

            foreach($pages as $page) {
                if(! DB::table('pages')->where('slug', $page['slug'])->first()) {
                    DB::table('pages')->insert($page);
                }
            }
        } else {
            echo "\n\rТаблица страниц не найдена\n\r";
        }

    }
}
