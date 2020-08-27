<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InstitutionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class InstitutionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class InstitutionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Institution::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/institution');
        CRUD::setEntityNameStrings('institution', 'institutions');
	$this->crud->setShowView('institution.show');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns
            //$this->crud->addColumn([
            $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
            'type' => 'number',
            ]);
            $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
            ]);
            $this->crud->addColumn([
            'name' => 'type',
            'label' => 'Type',
            'type' => 'text',
            ]);$this->crud->addColumn([
            'name' => 'relation',
            'label' => 'Relationship',
            'type' => 'text',
            ]);
        $this->crud->filters();
        
        $this->crud->enableExportButtons();
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(InstitutionRequest::class);

        //CRUD::setFromDb(); // fields
       $this->crud->addFields([
        [
            'label'     => "Full Name:",
            'type'      => 'text',
            'name'      => 'name',
            'hint'      => 'Institution Name will be used for reports and identification',
	    //'wrapper' => ['class' => 'form-group col-sm-6'],
            'tab' => 'Basic',

        ],
        [
            'label'     => 'Institution Type:',
            'name' => 'type',
            'type'  => 'enum',
            'hint' => 'used to group and identify type of institution',
	    'wrapper' => ['class' => 'form-group col-sm-6'],
            'tab' => 'Basic',

        ],
        [
            'label'     => 'Relationship Type:',
            'name' => 'relation',
            'type'  => 'enum',
            'hint' => 'relationship with the insitution',
	    'wrapper' => ['class' => 'form-group col-sm-6'],
            'tab' => 'Basic',

        ],
        [
            'name' => 'email', 
            'label' => 'Email Address:',
            'type'  => 'email',
            'tab' => 'Info',

        ],
        [
            'name' => 'website', 
            'label' => 'Website:',
            'type'  => 'url',
            'hint' => 'http://www.domain.com',
            'tab' => 'Info',

        ],
        [
            'name' => 'description', 
            'label' => 'Description of Institution:',
            'type'  => 'textarea',
            'hint' => 'official description as possible, use notes for internal notes',
            'tab' => 'Info',

        ],
        [
            'name' => 'notes', 
            'label' => 'Notes (internal usage):',
            'type'  => 'textarea',
            'hint' => 'only internal notes',
	    'tab' => 'Info',
        ],
        [
        'label'     => "Key Contact:",
        'type'      => 'select',
        'name'      => 'key_contact',
        'tab'             => 'Individuals',
        ],
	[

        'label'     => "Members:",
        'type'      => 'select2_multiple',
        'name'      => 'members',
	'pivot'     => true,
	'tab'             => 'Individuals',
	],

        [
            'name' => 'phone',
            'label' => 'Primary Phone Number:',
            'type' => 'text',
            'hint' => 'local or international format',
            'tab' => 'Communications',
        ],
        [   // repeatable
            'name'  => 'phones',
            'label' => 'Additionl Phone Number:',
            'type'  => 'repeatable',
            //'tab' => 'Phones & Addresses',
            'tab' => 'Communications',
            'fields' => [
                [
                    'name'    => 'pnumber',
                    'type'    => 'number',
                    'label'   => 'Phone Number:',
                    'wrapper' => ['class' => 'form-group col-md-12'],
                ],
                [
                    'name'    => 'pmobile',
                    'type'    => 'checkbox',
                    'label'   => 'Mobile',
                    'wrapper' => ['class' => 'form-group col-md-2'],
                ],
                [
                    'name'    => 'pwork',
                    'type'    => 'checkbox',
                    'label'   => 'Work',
                    'wrapper' => ['class' => 'form-group col-md-2'],
                ],
                [
                    'name'    => 'pwhatsapp',
                    'type'    => 'checkbox',
                    'label'   => 'Whatsapp',
                    'wrapper' => ['class' => 'form-group col-md-2'],
                ],

            ],

            // optional
            'new_item_label'  => 'Add More Phones', 
        ],
        [   // repeatable
            'name'  => 'address',
            'label' => 'Addresses:',
            'type'  => 'repeatable',
            ///'tab' => 'Phones & Addresses',
            'tab' => 'Communications',
            'fields' => [
                [
                    'name'    => 'address1',
                    'type'    => 'text',
                    'label'   => 'Address Line 1:',
                    'wrapper' => ['class' => 'form-group col-md-12'],
                ],
                [
                    'name'    => 'address2',
                    'type'    => 'text',
                    'label'   => 'Address Line 2:',
                    'wrapper' => ['class' => 'form-group col-md-12'],
                ],
                [
                    'name'    => 'neighbourhood',
                    'type'    => 'text',
                    'label'   => 'Neighbourhood:',
                    'wrapper' => ['class' => 'form-group col-md-6'],
                ],
                [
                    'name'    => 'city',
                    'type'    => 'text',
                    'label'   =>  'City:',
                    'wrapper' => ['class' => 'form-group col-md-6'],
                ],
                    [
                        'name'    => 'state',
                        'type'    => 'text',
                        'label'   =>  'State:',
                        'wrapper' => ['class' => 'form-group col-md-6'],
                    ],

                    [
                        'name'    => 'country',
                        'type'    => 'text',
                        'label'   =>  'Country:',
                        'wrapper' => ['class' => 'form-group col-md-6'],
                    ],
                                    [
                                        'name'    => 'hq',
                                        'type'    => 'checkbox',
                                        'label'   => 'Headquarter',
                                        'wrapper' => ['class' => 'form-group col-md-2'],
                                    ],

                                ],

                                // optional
                                'new_item_label'  => 'Add More Addresses', 
                            ],
                        ]);


//    ]);
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
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
