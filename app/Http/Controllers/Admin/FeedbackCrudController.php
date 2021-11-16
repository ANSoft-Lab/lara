<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FeedbackCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FeedbackCrudController extends CrudController
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
        CRUD::setModel(Feedback::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/feedback');
        CRUD::setEntityNameStrings('feedback', 'feedback');
        CRUD::denyAccess(['create', 'update']);
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
            'label' => trans('backpack::base.feedback.name'),
        ]);
        CRUD::addColumn([
            'name' => 'phone',
            'label' => trans('backpack::base.feedback.phone'),
        ]);
        CRUD::addColumn([
            'name' => 'message',
            'label' => trans('backpack::base.feedback.message'),
        ]);
        CRUD::addColumn([
            'name' => 'type_pretty',
            'label' => trans('backpack::base.feedback.type'),
        ]);
        CRUD::addColumn([
            'name' => 'created_at',
            'label' => trans('backpack::base.feedback.created_at'),
        ]);
    }

    protected function setupShowOperation()
    {
        CRUD::set('show.setFromDb', false);

        $feedback = $this->crud->getCurrentEntry();
        CRUD::addColumn([
            'name' => 'name',
            'label' => trans('backpack::base.feedback.name'),
        ]);
        CRUD::addColumn([
            'name' => 'phone',
            'label' => trans('backpack::base.feedback.phone'),
        ]);
        CRUD::addColumn([
            'name' => 'message',
            'label' => trans('backpack::base.feedback.message'),
        ]);
        CRUD::addColumn([
            'name' => 'created_at',
            'label' => trans('backpack::base.feedback.created_at'),
        ]);
        CRUD::addColumn([
            'name' => 'status',
            'label' => trans('backpack::base.feedback.status'),
        ]);
        CRUD::addColumn([
            'name' => 'type_pretty',
            'label' => trans('backpack::base.feedback.type'),
        ]);
        if($feedback->feedbackable_type == 'App\Models\Vacancy') {
            CRUD::addColumn([
                'name' => 'file_url',
                'label' => trans('backpack::base.feedback.file_url'),
                'type' => 'closure',
                'function' => function($entry) {
                    return '<a target="_blank" href="' . $entry->file_url . '">' . $entry->file_url . '</a>';
                },
            ]);
        }

        //Temp hide columns
        CRUD::removeColumn('type');
        CRUD::removeColumn('status');
        CRUD::removeColumn('email');
        CRUD::removeColumn('message');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(FeedbackRequest::class);

        CRUD::addField([
            'name' => 'name',
            'label' => trans('backpack::base.feedback.name'),
        ]);
        CRUD::addField([
            'name' => 'phone',
            'label' => trans('backpack::base.feedback.phone'),
        ]);
        CRUD::addField([
            'name' => 'status',
            'label' => trans('backpack::base.feedback.status'),
        ]);
        CRUD::addField([
            'name' => 'type',
            'label' => trans('backpack::base.feedback.type'),
        ]);
        CRUD::addField([
            'name' => 'created_at',
            'label' => trans('backpack::base.feedback.created_at'),
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
