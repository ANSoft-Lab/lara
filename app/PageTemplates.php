<?php

namespace App;

use Backpack\BlockCRUD\app\Models\BlockItem;
trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    // private function services()
    // {
    //     $this->crud->addField([   // CustomHTML
    //                     'name' => 'metas_separator',
    //                     'type' => 'custom_html',
    //                     'value' => '<br><h2>' . trans('backpack::pagemanager.metas') . '</h2><hr>',
    //                 ]);
    //     $this->crud->addField([
    //                     'name' => 'meta_title',
    //                     'label' => trans('backpack::pagemanager.meta_title'),
    //                     'fake' => true,
    //                     'store_in' => 'extras',
    //                 ]);
    //     $this->crud->addField([
    //                     'name' => 'meta_description',
    //                     'label' => trans('backpack::pagemanager.meta_description'),
    //                     'fake' => true,
    //                     'store_in' => 'extras',
    //                 ]);
    //     $this->crud->addField([
    //                     'name' => 'meta_keywords',
    //                     'type' => 'textarea',
    //                     'label' => trans('backpack::pagemanager.meta_keywords'),
    //                     'fake' => true,
    //                     'store_in' => 'extras',
    //                 ]);
    //     $this->crud->addField([   // CustomHTML
    //                     'name' => 'content_separator',
    //                     'type' => 'custom_html',
    //                     'value' => '<br><h2>' . trans('backpack::pagemanager.content') . '</h2><hr>',
    //                 ]);
    //     $this->crud->addField([
    //                     'name' => 'content',
    //                     'label' => trans('backpack::pagemanager.content'),
    //                     'type' => 'wysiwyg',
    //                     'placeholder' => trans('backpack::pagemanager.content_placeholder'),
    //                 ]);
    // }

    private function about()
    {
        // $this->crud->addField([
        //     'name' => 'content',
        //     'label' => trans('backpack::pagemanager.content'),
        //     'type' => 'wysiwyg',
        //     'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        // ]);
    }

    private function default()
    {        
        $this->crud->addField([
            'name' => 'content',
            'label' => trans('backpack::pagemanager.content'),
            'type' => 'ckeditor',
            'template' => 'vendor.backpack.crud.fields.ckeditor',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);
    }

    private function simple()
    {        
        $blocks = BlockItem::active()->get();

        foreach($blocks as $block) {
            $blocks_buttons[] = [
                'name' => $block->name,
                'html' => "<div>@customblock('" . $block->slug . "')</div>",
                'title' => $block->name,
            ];
        }

        // $this->crud->addField([
        //     'name' => 'content',
        //     'label' => trans('backpack::pagemanager.content_blocks'),
        //     'type' => 'sortable_blocks',
        //     'view_namespace' => 'blockcrud::templates',
        //     // 'extra_plugins' => ['htmlbuttons'],
        //     // 'options'       => [
        //     //     'enterMode' => 3, //div instead of p
        //     //     'extraAllowedContent' => 'blockcrud',
        //     //     'entities' => false,
        //     //     'htmlbuttons' => [
        //     //         [
        //     //             'name' => 'button1',
        //     //             'icon' => 'puzzle.png',
        //     //             'title' => 'Вставить блок',
        //     //             'items' => $blocks_buttons,
        //     //         ],
        //     //     ],
                
        //     // ],
        //     'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        // ]);
        
        $this->crud->addField([
            'name' => 'content',
            'label' => trans('backpack::pagemanager.content_blocks'),
            'label_preview' => trans('backpack::pagemanager.preview'),
            'type' => 'edit_page',
            'preview_for' => 'content',
            'fake' => true,
            'view_namespace' => 'blockcrud::templates',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);
    }
}
