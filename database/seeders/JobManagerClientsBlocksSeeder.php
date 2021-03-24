<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Schema;

class JobManagerClientsBlocksSeeder extends Seeder
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
                [   'name' => 'Вакансии (менеджер по работе с клиентами)',
                    'slug' => 'job-manager-clients',
                    'type' => 'template',
                    'model_id' => 'blockcrud.templates.job.manager_clients',
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
