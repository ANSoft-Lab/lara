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
                    'model_id' => 'blockcrud.templates.main.offer_links',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Партнёрам для сотрудничества',
                    'slug' => 'cooperation',
                    'type' => 'template',
                    'model_id' => 'blockcrud.templates.main.partners',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Дополнительные виды страхования',
                    'slug' => 'additional_ins',
                    'type' => 'template',
                    'model_id' => 'blockcrud.templates.main.additional_ins',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Причины работать с нами',
                    'slug' => 'reasons',
                    'type' => 'template',
                    'model_id' => 'blockcrud.templates.main.reasons',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Все виды страхования',
                    'slug' => 'all_sorts',
                    'type' => 'template',
                    'model_id' => 'blockcrud.templates.main.all_sorts',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Слайдер партнёров',
                    'slug' => 'partners_slider',
                    'type' => 'template',
                    'model_id' => 'blockcrud.templates.main.partners_slider',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   'name' => 'Карты с адресами',
                    'slug' => 'contacts_map',
                    'type' => 'template',
                    'model_id' => 'blockcrud.templates.main.map',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            ];

            foreach($blocks as $block) {
                if(! DB::table('block_items')->where('slug', $block['slug'])->first()) {
                    DB::table('block_items')->insert($block);
                }
            }

            $old_html = DB::table('block_items')->where('model_id', 'like', '%blockcrud.html%')->get();
            if($old_html) {
                foreach($old_html as $oh) {
                    $oh->model_id = str_replace('blockcrud.html.', 'blockcrud.templates.', $oh->model_id);
                    DB::table('block_items')->where('id', $oh->id)->update(['model_id' => $oh->model_id]);
                }
            }

        } else {
            echo "\n\rТаблица блоков не найдена\n\r";
        }
    }
}
