<?php

namespace App\Http\Controllers\Admin;

//use App\Http\Requests\VacancyUpdateRequest;
use App\Models\Vacancy;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class VacancyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VacancyCrudController extends CrudController
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
        CRUD::setModel(Vacancy::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/vacancies');
        CRUD::setEntityNameStrings('Вакансия', 'Вакансии');
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
            'label' => trans('backpack::base.vacancies.name'),
        ]);

        CRUD::addColumn([
            'name' => 'slug',
            'label' => trans('backpack::base.vacancies.slug'),
        ]);
        CRUD::addColumn([
            'name' => 'show_order',
            'label' => trans('backpack::base.vacancies.show_order'),
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
        // TO DO: валидация вакансии
        //CRUD::setValidation(VacancyUpdateRequest::class);

        CRUD::addField([
            'name' => 'name',
            'label' => trans('backpack::base.vacancies.name'),
            'allows_null' => false,
        ]);
        CRUD::addField([
            'name' => 'slug',
            'label' => trans('backpack::base.vacancies.slug'),
            'allows_null' => false,
        ]);
        CRUD::addField([
            'name' => 'salary',
            'label' => trans('backpack::base.vacancies.salary'),
        ]);
        CRUD::addField([
            'name' => 'duties',
            'label' => trans('backpack::base.vacancies.duties'),
            'type' => 'wysiwyg',
        ]);
        CRUD::addField([
            'name' => 'requirements',
            'label' => trans('backpack::base.vacancies.requirements'),
            'type' => 'wysiwyg',
        ]);
        CRUD::addField([
            'name' => 'conditions',
            'label' => trans('backpack::base.vacancies.conditions'),
            'type' => 'wysiwyg',
        ]);
        CRUD::addField([
            'name' => 'additional',
            'label' => trans('backpack::base.vacancies.additional'),
            'type' => 'wysiwyg',
        ]);
        CRUD::addField([
            'name' => 'city',
            'label' => trans('backpack::base.vacancies.city'),
            'type' => 'relationship',
        ]);
        CRUD::addField([
            'name' => 'category',
            'label' => trans('backpack::base.vacancies.category'),
            'type' => 'relationship',
        ]);
        CRUD::addField([
            'name' => 'show_order',
            'label' => trans('backpack::base.vacancies.show_order'),
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