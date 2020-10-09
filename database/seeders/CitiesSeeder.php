<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Schema;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Schema::hasTable('cities')) {
            $date = date('Y-m-d H:i:s');

            $cities = [
                [
                    'name' => 'Москва',
                    'show_order' => '1',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Санкт-Петербург',
                    'show_order' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Нижний Новгород',
                    'show_order' => '3',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Рязань',
                    'show_order' => '4',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Воронеж',
                    'show_order' => '5',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Казань',
                    'show_order' => '6',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Самара',
                    'show_order' => '7',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Краснодар',
                    'show_order' => '8',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            ];

            foreach($cities as $city) {
                if(! DB::table('cities')->where('name', $city['name'])->first()) {
                    DB::table('cities')->insert($city);
                }
            }
        } else {
            echo "\n\rТаблица городов не найдена\n\r";
        }

    }
}
