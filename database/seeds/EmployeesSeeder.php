<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Schema::hasTable('employees')) {
            $date = date('Y-m-d H:i:s');

            $employees = [
                [
                    'name' => 'Поздышева Мария',
                    'position' => 'Начальник управления',
                    'show_order' => '1',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Радюкова Валерия',
                    'position' => 'Начальник управления',
                    'show_order' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Культин Владислав',
                    'position' => 'Руководитель отдела',
                    'show_order' => '3',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Косорукова Анжела',
                    'position' => 'Ведущий специалист',
                    'show_order' => '4',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Хрусталева Екатерина',
                    'position' => 'Ведущий специалист',
                    'show_order' => '5',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Тимофеева Вера',
                    'position' => 'Ведущий специалист',
                    'show_order' => '6',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Жичина Дарья',
                    'position' => 'Менеджер',
                    'show_order' => '7',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Занозина Екатерина',
                    'position' => 'Менеджер',
                    'show_order' => '8',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Топская Антонина',
                    'position' => 'Менеджер',
                    'show_order' => '9',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Франк Кристина',
                    'position' => 'Менеджер',
                    'show_order' => '10',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            ];

            foreach($employees as $employee) {
                if(! DB::table('employees')->where('name', $employee['name'])->first()) {
                    DB::table('employees')->insert($employee);
                }
            }
        } else {
            echo "\n\rТаблица отделов не найдена\n\r";
        }

    }
}
