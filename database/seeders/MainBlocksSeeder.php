<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Schema;

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
                [   'name' => 'Ссылки на предложения',
                    'slug' => 'offer_links',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.main.offer_links',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Партнёрам для сотрудничества',
                    'slug' => 'cooperation',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.main.partners',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Дополнительные виды страхования',
                    'slug' => 'additional_ins',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.main.additional_ins',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Причины работать с нами',
                    'slug' => 'reasons',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.main.reasons',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Все виды страхования',
                    'slug' => 'all_sorts',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.main.all_sorts',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Слайдер партнёров',
                    'slug' => 'partners_slider',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.main.partners_slider',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Карты с адресами',
                    'slug' => 'contacts_map',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.main.map',
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
                    'type' => 'template',
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
