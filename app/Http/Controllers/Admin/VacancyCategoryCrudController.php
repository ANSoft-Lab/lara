<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VacancyCategoryUpdateRequest;
use App\Models\VacancyCategory;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class VacancyCategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VacancyCategoryCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(VacancyCategory::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/vacancy_categories');
        CRUD::setEntityNameStrings('направление', 'направления');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'name',
            'label' => trans('backpack::base.vacancy_categories.name'),
        ]);

        CRUD::addColumn([
            'name' => 'slug',
            'label' => trans('backpack::base.vacancy_categories.slug'),
        ]);
        CRUD::addColumn([
            'name' => 'show_order',
            'label' => trans('backpack::base.vacancy_categories.show_order'),
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(VacancyCategoryUpdateRequest::class);

        CRUD::addField([
            'name' => 'name',
            'label' => trans('backpack::base.vacancy_categories.name'),
            'allows_null' => false,
        ]);
        CRUD::addField([
            'name' => 'slug',
            'label' => trans('backpack::base.vacancy_categories.slug'),
            'allows_null' => false,
        ]);
        CRUD::addField([
            'name' => 'description',
            'label' => trans('backpack::base.vacancy_categories.description'),
            'type' => 'wysiwyg',
        ]);
        CRUD::addField([
            'name' => 'show_order',
            'label' => trans('backpack::base.vacancy_categories.show_order'),
            'type' => 'number',
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
