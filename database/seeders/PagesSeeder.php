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
                        <section class=\"about\">
                            <h2 class=\"about__title about__title_underline\">Документация</h2>
                        </section>

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
                        <div class=\"about\">
                            <section class=\"qna mb-40\">
                                <div class=\"qna__text\">
                                    <h2 class=\"qna__title\">Вопросы и ответы</h2>
                                    <p class=\"qna__info\">
                                        В данном разделе сайта
                                        вы найдете ответы на
                                        наиболее часто встречающиеся
                                        вопросы относительно страхования
                                    </p>
                                </div>
                            </section>
                            @customblock('faq-main', 'block(\"faq-main\")')
                        </div>
                    ",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            ];

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
