<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Backpack\PageManager\app\Models\Page;
use DB;
use Illuminate\Database\Seeder;
use Schema;


class LevelledTopMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Schema::hasTable('menu_items')) {
            DB::table('menu_items')->where('menu_type', 'top')->delete();

            $kis_page = Page::where('slug', 'kis')->first();
            $ins_page = Page::where('slug', 'strahovanie/strahovanie_imuchestva')->first();
            $ref_page = Page::where('slug', 'refinansirovanie')->first();
            $sto_page = Page::where('slug', 'group')->first();
            $about_page = Page::where('slug', 'about')->first();
            $team_page = Page::where('slug', 'team')->first();
            $job_page = Page::where('slug', 'job')->first();
            $aff_page = Page::where('slug', 'affiliate')->first();

            $menu_items = [
                [
                    'name' => 'Главная',
                    'type' => 'internal_link',
                    'menu_type' => 'top',
                    'link' => '/',
                    'depth' => '1',
                ],
                [
                    'name' => 'Наши услуги',
                    'type' => 'page_link',
                    'menu_type' => 'top',
                    'link' => 'kis',
                    'page_id' => $kis_page->id ?? null,
                    'depth' => '1',
                    'children' => [
                        [
                            'name' => 'Страхование',
                            'type' => 'page_link',
                            'menu_type' => 'top',
                            'link' => 'strahovanie/strahovanie_imuchestva',
                            'page_id' => $ins_page->id ?? null,
                            'depth' => '2',
                            'children' => [
                                [
                                    'name' => 'КИС',
                                    'type' => 'internal_link',
                                    'menu_type' => 'top',
                                    'link' => 'hypothec-insurance',
                                    'depth' => '3',
                                ],
                                [
                                    'name' => 'Автострахование',
                                    'type' => 'internal_link',
                                    'menu_type' => 'top',
                                    'link' => '/autoinsurance',
                                    'depth' => '3',
                                ],
                                [
                                    'name' => 'Страхование имущества',
                                    'type' => 'page_link',
                                    'menu_type' => 'top',
                                    'link' => 'strahovanie/strahovanie_imuchestva',
                                    'page_id' => $ins_page->id ?? null,
                                    'depth' => '3',
                                ],
                            ],
                        ],
                        [
                            'name' => 'Рефинансирование и кредитование',
                            'type' => 'page_link',
                            'menu_type' => 'top',
                            'link' => 'refinansirovanie',
                            'page_id' => $ref_page->id ?? null,
                            'depth' => '2',
                        ],
                        [
                            'name' => 'Оценка недвижимости',
                            'type' => 'internal_link',
                            'menu_type' => 'top',
                            'link' => '',
                            'depth' => '2',
                        ],
                        [
                            'name' => 'СТО',
                            'type' => 'page_link',
                            'menu_type' => 'top',
                            'link' => 'group',
                            'page_id' => $sto_page->id ?? null,
                            'depth' => '2',
                        ],
                    ],
                ],
                [
                    'name' => 'О компании',
                    'type' => 'page_link',
                    'menu_type' => 'top',
                    'link' => 'about',
                    'page_id' => $about_page->id ?? null,
                    'depth' => '1',
                    'children' => [
                        [
                            'name' => 'О нас',
                            'type' => 'page_link',
                            'menu_type' => 'top',
                            'link' => 'about',
                            'page_id' => $about_page->id ?? null,
                            'depth' => '2',
                        ],
                        [
                            'name' => 'Сотрудники',
                            'type' => 'page_link',
                            'menu_type' => 'top',
                            'link' => 'team',
                            'page_id' => $team_page->id ?? null,
                            'depth' => '2',
                        ],
                    ],
                ],
                [
                    'name' => 'Вакансии',
                    'type' => 'page_link',
                    'menu_type' => 'top',
                    'link' => 'job',
                    'page_id' => $job_page->id ?? null,
                    'depth' => '1',
                ],
                [
                    'name' => 'Партнёрам',
                    'type' => 'page_link',
                    'menu_type' => 'top',
                    'link' => 'affiliate',
                    'page_id' => $aff_page->id ?? null,
                    'depth' => '1',
                ],
            ];

            foreach($menu_items as $menu_item) {
                $this->saveMenuItem($menu_item);
            }
        }
    }

    private function saveMenuItem(array $item, ?int $parent_id = null)
    {
        $item['parent_id'] = $parent_id;
        $children = $item['children'] ?? null;
        unset($item['children']);
        
        if(! DB::table('menu_items')->where([
            'name' => $item['name'],
            'menu_type' => $item['menu_type'],
            'publish' => 1,
        ])->first()) {

            $new_item = MenuItem::create($item);

            if($children) {
                foreach($children as $child) {
                    $this->saveMenuItem($child, $new_item->id);
                }
            }
        }
    }
}
