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

    public function setup()
    {
        CRUD::setModel(MenuItem::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/menu-item');
        CRUD::setEntityNameStrings('menu item', 'menu items');

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
