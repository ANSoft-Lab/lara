<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class EmployeeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EmployeeCrudController extends CrudController
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
        CRUD::setModel(Employee::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/employee');
        CRUD::setEntityNameStrings('сотрудник', 'сотрудники');
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
            'label' => trans('backpack::base.employees.name'),
        ]);

        CRUD::addColumn([
            'name' => 'position',
            'label' => trans('backpack::base.employees.position'),
        ]);

        CRUD::addColumn([
            'name' => 'department',
            'label' => trans('backpack::base.employees.department'),
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
        CRUD::setValidation(EmployeeRequest::class);

        CRUD::addField([
            'name' => 'name',
            'label' => trans('backpack::base.employees.name'),
            'allows_null' => false,
        ]);
        CRUD::addField([
            'name' => 'position',
            'label' => trans('backpack::base.employees.position'),
        ]);
        CRUD::addField([
            'name' => 'department_id',
            'label' => trans('backpack::base.employees.department'),
            'type' => 'relationship',
            'model' => 'App\Models\Department',
            'placeholder' => 'Выбрать отдел',
        ]);

        CRUD::addField([
            'name' => 'photo',
            'label' => trans('backpack::base.employees.photo'),
            'type' => 'image',
            'disk' => 'public',
            'crop' => false,
            // 'aspect_ratio' => 1,
            //'upload' => true,
        ]);

        CRUD::addField([
            'label' => trans('backpack::base.employees.show_block'),
            'hint' => 'если не указан фильтр, будут показаны все сотрудники',
            'name' => 'blocks',
            'type' => 'select2_multiple',
            'entity' => 'blocks',
            'pivot' => true,
            'options'   => (function ($query) {
                return $query->where('model', 'App\Models\Employee')->get();
            }),
            'attribute' => 'name',
            'model'     => "Backpack\BlockCRUD\app\Models\BlockItem",
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
