<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuItem;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class MenuItemCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ReorderOperation;

    protected $menu_type_options = [
        'top' => 'верхнее',
        'bottom' => 'нижнее',
    ];

    public function setup()
    {
        CRUD::setModel(MenuItem::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/menu-item');
        CRUD::setEntityNameStrings('пункт меню', 'пункты меню');

        CRUD::enableReorder('name', 3);
    }

    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'name',
            'label' => 'Название',
        ]);

        CRUD::addColumn([
            'label' => 'Родительский пункт',
            'type' => 'select',
            'name' => 'parent_id',
            'entity' => 'parent',
            'attribute' => 'name',
            'model' => MenuItem::class,
        ]);

        CRUD::addColumn([
            'label' => 'Вид меню',
            'type' => 'select_from_array',
            'name' => 'menu_type',
            'options' => $this->menu_type_options,
        ]);

        CRUD::addColumn([
            'name' => 'publish',
            'label' => trans('backpack::base.documents.publish'),
            'type' => 'boolean',
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::addField([
            'name' => 'name',
            'label' => 'Название',
        ]);

        CRUD::addField([
            'label' => 'Родительский пункт',
            'type' => 'select',
            'name' => 'parent_id',
            'entity' => 'parent',
            'attribute' => 'name',
            'model' => MenuItem::class,
        ]);

        CRUD::addField([
            'name' => ['type', 'link', 'page_id'],
            'label' => 'Тип',
            'type' => 'page_or_link',
            'page_model' => '\Backpack\PageManager\app\Models\Page',
            'template' => 'vendor.backpack.crud.fields.page_or_link',
        ]);

        
        CRUD::addField([
            'label' => 'Вид меню',
            'type' => 'select_from_array',
            'name' => 'menu_type',
            'options' => $this->menu_type_options,
        ]);


        CRUD::addField([
            'name' => 'publish',
            'label' => trans('backpack::base.menu_model.publish'),
            'type' => 'checkbox',
            'default' => 1,
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
