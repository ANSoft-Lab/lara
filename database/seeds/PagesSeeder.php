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
                                @customblock('cooperation-html')
                                @customblock('additional_ins-html')
                                @customblock('reasons-html')
                                @customblock('all_sorts-html')
                                @customblock('partners_slider-html')
                                @customblock('contacts_map-html')",
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
            echo "\n\rТаблица блоков не найдена\n\r";
        }

    }
}
