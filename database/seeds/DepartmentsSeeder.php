<?php

use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Schema::hasTable('departments')) {
            $date = date('Y-m-d H:i:s');

            $departments = [
                [
                    'name' => 'Менеджеры по страхованию',
                    'show_order' => '1',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Специалисты отдела пролонгации',
                    'show_order' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Отдел автострахования',
                    'show_order' => '3',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Отдел ипотеки',
                    'show_order' => '4',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Отдел страхования недвижимости',
                    'show_order' => '5',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            ];

            foreach($departments as $department) {
                if(! DB::table('departments')->where('name', $department['name'])->first()) {
                    DB::table('departments')->insert($department);
                }
            }
        } else {
            echo "\n\rТаблица отделов не найдена\n\r";
        }

    }
}
