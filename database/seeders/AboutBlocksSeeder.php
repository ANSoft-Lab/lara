<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Schema;

class AboutBlocksSeeder extends Seeder
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
                    'name' => 'О компании',
                    'slug' => 'about-company',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.about.company',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'Умный выбор программы страхования',
                    'slug' => 'about-icons',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.about.icons',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'История',
                    'slug' => 'about-history',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.about.history_partners',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'Наши клиенты',
                    'slug' => 'about-clients',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.about.clients',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'Наши принципы и цели',
                    'slug' => 'about-principles',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.about.principles',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'Удобство и оперативность работы',
                    'slug' => 'about-operation',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.about.operation',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            ];

            foreach($blocks as $block) {
                if(! DB::table('block_items')->where('slug', $block['slug'])->first()) {
                    DB::table('block_items')->insert($block);
                }
            }

        } else {
            echo "\n\rТаблица блоков не найдена\n\r";
        }
    }
}
