<?php

namespace Database\Seeders\Vacancies;

use DB;
use Illuminate\Database\Seeder;
use Schema;

class VacancyCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Schema::hasTable('vacancy_categories')) {
            $date = date('Y-m-d H:i:s');

            $vacancy_categories = [
                [
                    'name' => 'Продажи',
                    'slug' => 'sales',
                    'show_order' => '1',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            ];

            foreach($vacancy_categories as $vacancy_category) {
                if(! DB::table('vacancy_categories')->where('slug', $vacancy_category['slug'])->first()) {
                    DB::table('vacancy_categories')->insert($vacancy_category);
                }
            }
        } else {
            echo "\n\rТаблица направлений не найдена\n\r";
        }

    }
}
