<?php

namespace Database\Seeders\Faq;

use DB;
use Illuminate\Database\Seeder;
use Schema;

class FaqBlocksSeeder extends Seeder
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
                [   'name' => 'Вопросы и ответы (инфо)',
                    'slug' => 'faq-intro',
                    'type' => 'template',
                    'model_id' => 'blockcrud.templates.faq.intro',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Вопросы и ответы',
                    'slug' => 'faq-main',
                    'type' => 'model',
                    'model' => 'App\Models\Faq',
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
