<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Schema;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Schema::hasTable('menu_items')) {
            $date = date('Y-m-d H:i:s');

            $menu_items = [
                [
                    'name' => 'Все виды страхования',
                    'type' => 'internal_link',
                    'menu_type' => 'top',
                    'link' => '/',
                    'lft' => '2',
                    'rgt' => '9',
                    'depth' => '1',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Частным клиентам',
                    'type' => 'internal_link',
                    'menu_type' => 'top',
                    'link' => '/',
                    'lft' => '10',
                    'rgt' => '19',
                    'depth' => '1',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Партнерам',
                    'type' => 'old_link',
                    'menu_type' => 'top',
                    'link' => 'korporativnoe_strahovanie',
                    'lft' => '20',
                    'rgt' => '21',
                    'depth' => '1',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Офисы',
                    'type' => 'old_link',
                    'menu_type' => 'top',
                    'link' => 'kontakty',
                    'lft' => '22',
                    'rgt' => '23',
                    'depth' => '1',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Тех. центры ГК Finist',
                    'type' => 'old_link',
                    'menu_type' => 'top',
                    'link' => 'group',
                    'lft' => '24',
                    'rgt' => '25',
                    'depth' => '1',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Комплексное ипотечное страхование',
                    'type' => 'internal_link',
                    'menu_type' => 'top',
                    'link' => 'kis',
                    'parent' => [
                        'name' => 'Все виды страхования',
                        'menu_type' => 'top',
                        'parent_id' => null,
                    ],
                    'lft' => '3',
                    'rgt' => '4',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Рефинансирование и кредитование',
                    'type' => 'old_link',
                    'menu_type' => 'top',
                    'link' => 'refinansirovanie',
                    'parent' => [
                        'name' => 'Все виды страхования',
                        'menu_type' => 'top',
                        'parent_id' => null,
                    ],
                    'lft' => '5',
                    'rgt' => '6',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Автострахование',
                    'type' => 'old_link',
                    'menu_type' => 'top',
                    'link' => 'strahovanie/kasko',
                    'parent' => [
                        'name' => 'Все виды страхования',
                        'menu_type' => 'top',
                        'parent_id' => null,
                    ],
                    'lft' => '7',
                    'rgt' => '8',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Страхование имущества',
                    'type' => 'old_link',
                    'menu_type' => 'top',
                    'link' => 'strahovanie/strahovanie_imuchestva',
                    'parent' => [
                        'name' => 'Все виды страхования',
                        'menu_type' => 'top',
                        'parent_id' => null,
                    ],
                    'lft' => '9',
                    'rgt' => '10',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'КАСКО',
                    'type' => 'old_link',
                    'menu_type' => 'top',
                    'link' => 'strahovanie/kasko',
                    'parent' => [
                        'name' => 'Частным клиентам',
                        'menu_type' => 'top',
                        'parent_id' => null,
                    ],
                    'lft' => '11',
                    'rgt' => '12',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'ОСАГО',
                    'type' => 'old_link',
                    'menu_type' => 'top',
                    'link' => 'strahovanie/osago',
                    'parent' => [
                        'name' => 'Частным клиентам',
                        'menu_type' => 'top',
                        'parent_id' => null,
                    ],
                    'lft' => '13',
                    'rgt' => '14',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Страхование туристов',
                    'type' => 'old_link',
                    'menu_type' => 'top',
                    'link' => 'strahovanie/vzr/calc',
                    'parent' => [
                        'name' => 'Частным клиентам',
                        'menu_type' => 'top',
                        'parent_id' => null,
                    ],
                    'lft' => '15',
                    'rgt' => '16',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Страхование имущества',
                    'type' => 'old_link',
                    'menu_type' => 'top',
                    'link' => 'strahovanie/strahovanie_imuchestva',
                    'parent' => [
                        'name' => 'Частным клиентам',
                        'menu_type' => 'top',
                        'parent_id' => null,
                    ],
                    'lft' => '13',
                    'rgt' => '14',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'О нас',
                    'type' => 'page_link',
                    'menu_type' => 'bottom',
                    'page' => 'О нас',
                    'lft' => '26',
                    'rgt' => '29',
                    'depth' => '1',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Группа компаний Финист',
                    'type' => 'old_link',
                    'menu_type' => 'bottom',
                    'link' => 'group',
                    'parent' => [
                        'name' => 'О нас',
                        'menu_type' => 'bottom',
                        'parent_id' => null,
                    ],
                    'lft' => '27',
                    'rgt' => '28',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Руководство компании',
                    'type' => 'old_link',
                    'menu_type' => 'bottom',
                    'link' => 'rukovodstvo-kompanii',
                    'parent' => [
                        'name' => 'О нас',
                        'menu_type' => 'bottom',
                        'parent_id' => null,
                    ],
                    'lft' => '41',
                    'rgt' => '42',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Коллектив',
                    'type' => 'page_link',
                    'menu_type' => 'bottom',
                    'page' => '',
                    'parent' => [
                        'name' => 'О нас',
                        'menu_type' => 'bottom',
                        'parent_id' => null,
                    ],
                    'lft' => '45',
                    'rgt' => '46',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Сотрудничество',
                    'type' => 'old_link',
                    'menu_type' => 'bottom',
                    'link' => 'cooperation',
                    'parent' => [
                        'name' => 'О нас',
                        'menu_type' => 'bottom',
                        'parent_id' => null,
                    ],
                    'lft' => '39',
                    'rgt' => '40',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Партнеры',
                    'type' => 'old_link',
                    'menu_type' => 'bottom',
                    'link' => 'strahovie_kompanii_vibor_kasko',
                    'parent' => [
                        'name' => 'О нас',
                        'menu_type' => 'bottom',
                        'parent_id' => null,
                    ],
                    'lft' => '43',
                    'rgt' => '44',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Дополнительно',
                    'type' => 'internal_link',
                    'menu_type' => 'bottom',
                    'lft' => '2',
                    'rgt' => '11',
                    'depth' => '1',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Отзывы',
                    'type' => 'old_link',
                    'menu_type' => 'bottom',
                    'link' => 'kontakty/otzyvy',
                    'parent' => [
                        'name' => 'Дополнительно',
                        'menu_type' => 'bottom',
                        'parent_id' => null,
                    ],
                    'lft' => '7',
                    'rgt' => '8',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Вопросы и ответы',
                    'type' => 'internal_link',
                    'menu_type' => 'bottom',
                    'link' => 'faq',
                    'parent' => [
                        'name' => 'Дополнительно',
                        'menu_type' => 'bottom',
                        'parent_id' => null,
                    ],
                    'lft' => '5',
                    'rgt' => '6',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Страховой случай',
                    'type' => 'old_link',
                    'menu_type' => 'bottom',
                    'link' => 'chto-delat-pri-nastuplenii-strakhovogo-sluchaya',
                    'parent' => [
                        'name' => 'Дополнительно',
                        'menu_type' => 'bottom',
                        'parent_id' => null,
                    ],
                    'lft' => '9',
                    'rgt' => '10',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [
                    'name' => 'Реквизиты',
                    'type' => 'old_link',
                    'menu_type' => 'bottom',
                    'link' => 'rekvizity',
                    'parent' => [
                        'name' => 'Дополнительно',
                        'menu_type' => 'bottom',
                        'parent_id' => null,
                    ],
                    'lft' => '3',
                    'rgt' => '4',
                    'depth' => '2',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            ];

            foreach($menu_items as $item) {
                $item['parent_id'] = null;

                if(isset($item['parent'])) {
                    $parent = DB::table('menu_items')->where([
                        'name' => $item['parent']['name'],
                        'menu_type' => $item['parent']['menu_type'],
                        'parent_id' => $item['parent']['parent_id'],
                    ])->first();

                    if($parent) {
                        $item['parent_id'] = $parent->id;
                    }

                    unset($item['parent']);
                }

                if(isset($item['page'])) {
                    $page = DB::table('menu_items')->where('name', $item['page'])->first();

                    if($page) {
                        $item['page_id'] = $page->id;
                    }

                    unset($item['page']);
                }

                if(! DB::table('menu_items')->where([
                        'name' => $item['name'],
                        'menu_type' => $item['menu_type'],
                        'parent_id' => $item['parent_id'],
                    ])->first()) {

                    DB::table('menu_items')->insert($item);
                }
            }
        } else {
            echo "\n\rТаблица меню не найдена\n\r";
        }
    }
}
