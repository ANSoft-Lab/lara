<?php

namespace Database\Seeders\Articles;

use DB;
use Illuminate\Database\Seeder;
use Schema;

class ArticlePagesSeeder extends Seeder
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
                    'name' => 'Добровольное страхование имущества граждан',
                    'title' => 'Добровольное страхование имущества граждан',
                    'slug' => 'articles/dobrovolnoe_strahovanie_imushestva_grajdan',
                    'content' => "@customblock('insurance-voluntary')",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Стоимость страхования',
                    'title' => 'Стоимость страхования',
                    'slug' => 'articles/stoimost_strahovaniya',
                    'content' => "@customblock('insurance-price')",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование домашнего имущества',
                    'title' => 'Страхование домашнего имущества',
                    'slug' => 'articles/strahovanie_domashnego_imushestva',
                    'content' => "@customblock('insurance-home-property')",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование имущества от огня',
                    'title' => 'Страхование имущества от огня',
                    'slug' => 'articles/strahovanie_imushestva_ot_ognya',
                    'content' => "@customblock('insurance-property-fire')",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование квартиры',
                    'title' => 'Страхование квартиры',
                    'slug' => 'articles/strahovanie_kvartiry',
                    'content' => "@customblock('insurance-flat')",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование загородного дома',
                    'title' => 'Страхование загородного дома',
                    'slug' => 'articles/strahovanie_zagorodnogo_doma',
                    'content' => "@customblock('insurance-house')",
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'template' => 'simple',
                    'name' => 'Страхование ипотечного кредита',
                    'title' => 'Страхование ипотечного кредита',
                    'slug' => 'articles/strahovanie_ipotechnogo_kredita',
                    'content' => "@customblock('insurance-mortgage')",
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
