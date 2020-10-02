<?php

use Illuminate\Database\Seeder;

class KisBlocksSeeder extends Seeder
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
                    'name' => 'Отправить заявку',
                    'slug' => 'feedback',
                    'type' => 'template',
                    'model_id' => 'blockcrud.modals.feedback',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Причины обратиться к нам',
                    'slug' => 'plus-minus',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.plus_minus',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Описание КИС',
                    'slug' => 'kis-desc',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.kis_desc',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Страхование ипотечного кредита включает',
                    'slug' => 'kis-insurance',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.kis_insurance',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Лучшая цена на полис КИС',
                    'slug' => 'kis-best-price',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.kis_best_price',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Вопросы и ответы',
                    'slug' => 'kis-faq',
                    'type' => 'template',
                    'model_id' => 'blockcrud.html.kis_faq',
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
