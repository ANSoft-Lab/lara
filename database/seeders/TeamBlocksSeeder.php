<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Schema;

class TeamBlocksSeeder extends Seeder
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
                [   'name' => 'Руководство',
                    'slug' => 'bosses',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.team.bosses',
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
