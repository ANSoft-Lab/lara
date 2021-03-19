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
