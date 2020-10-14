<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FaqCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FaqCrudController extends CrudController
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
        CRUD::setModel(Faq::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/faq');
        CRUD::setEntityNameStrings('faq', 'Вопросы/Ответы');

        CRUD::denyAccess(['show']);
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
            'name' => 'question',
            'label' => trans('backpack::base.faq.question'),
        ]);
        CRUD::addColumn([
            'name' => 'blocks',
            'label' => trans('backpack::base.faq.blocks'),
            'type' => 'relationship',
        ]);
        CRUD::addColumn([
            'name' => 'publish',
            'label' => trans('backpack::base.faq.publish'),
            'type' => 'boolean',
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
        CRUD::setValidation(FaqRequest::class);

        CRUD::addField([
            'name' => 'question',
            'label' => trans('backpack::base.faq.question'),
            'allows_null' => false,
        ]);
        CRUD::addField([
            'name' => 'answer',
            'label' => trans('backpack::base.faq.answer'),
            'type' => 'wysiwyg',
        ]);
        CRUD::addField([
            'name' => 'publish',
            'label' => trans('backpack::base.faq.publish'),
            'type' => 'checkbox',
            'default' => 1,
        ]);
        CRUD::addField([
            'label' => trans('backpack::base.faq.show_block'),
            'hint' => 'если не указан фильтр, будут показаны все вопросы',
            'name' => 'blocks',
            'type' => 'select2_multiple',
            'entity' => 'blocks',
            'pivot' => true,
            'options'   => (function ($query) {
                return $query->where('model', 'App\Models\Faq')->get();
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
