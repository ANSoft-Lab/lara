<?php

use Illuminate\Database\Seeder;

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
                    'content' => "@customblock('offer_links-html')
                                @customblock('cooperation')
                                @customblock('additional_ins-html')
                                @customblock('reasons-html')
                                @customblock('all_sorts-html')
                                @customblock('partners_slider-html')
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
                        @customblock('kis-faq')
                        <section class=\"about\">
                            <h2 class=\"about__title about__title_underline\">Документация</h2>
                        </section>

                        @customblock('documents')

                        <br><br><br><br>
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
