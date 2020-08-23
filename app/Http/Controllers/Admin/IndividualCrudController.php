<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IndividualRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class IndividualCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class IndividualCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Individual::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/individual');
        CRUD::setEntityNameStrings('individual', 'individuals');
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

           $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
            'type' => 'number',
            ]);
            $this->crud->addColumn([
            'name' => 'salutation',
            'label' => 'Salut.',
            'type' => 'text',
            ]);
            $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
            'limit'  => 46,
            ]);
            $this->crud->addColumn([
            'name' => 'gender',
            'label' => 'Gender',
            'type' => 'text',
            ]);
            $this->crud->addColumn([
            'name' => 'dob',
            'label' => 'DOB',
            'type' => 'date',
            ]);
            //$this->crud->addColumn([
            //'name' => 'phone',
            //'label' => 'Phone',
            //'type' => 'number',
            //]);
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
        CRUD::setValidation(IndividualRequest::class);

        //CRUD::setFromDb(); // fields



        $this->crud->addFields([
        [
            'label'     => 'salutation:',
            'name' => 'salutation',
            'type'  => 'enum',
            'wrapper' => ['class' => 'form-group col-sm-6'],
            'tab' => 'Basic',
        ],
         [
            'label'     => 'Gender:',
            'name' => 'gender',
            'type'  => 'enum',
            'wrapper' => ['class' => 'form-group col-sm-6'],
            'tab' => 'Basic',
        ],
        [
            'label'     => "Full Name:",
            'type'      => 'text',
            'name'      => 'name',
            'hint'      => 'individual Name will be used for reports and identification',
            'tab' => 'Basic',
        ],
        [
            'name' => 'dob', 
            'label' => 'Date of Birth:',
            'type'  => 'date',
            'tab' => 'Basic',
        ],
        [
            'name' => 'email', 
            'label' => 'Email Address:',
            'type'  => 'email',
	    'tab' => 'Communications',
        ],
        [
            'name' => 'bio', 
            'label' => 'Biography:',
            'type'  => 'textarea',
            'hint' => 'for public figures and officials',
            'tab' => 'Info',
        ],
        [
            'name' => 'notes', 
            'label' => 'Lab Notes:',
            'type'  => 'textarea',
            'hint' => 'for internal usage only',
            'tab' => 'Info',
        ],
        [

        'label'     => "Related Institutions:",
        'type'      => 'select2_multiple',
        'name'      => 'memberof',
        'pivot'     => true,
	'inline_create' => [ 'entity' => 'Institution' ],
	'ajax' => true,
            'tab' => 'Basic',
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
                    'name'    => 'phome',
                    'type'    => 'checkbox',
                    'label'   => 'Home',
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
                    'name'    => 'home',
                    'type'    => 'checkbox',
                    'label'   => 'Home',
                    'wrapper' => ['class' => 'form-group col-md-2'],
                ],
                [
                    'name'    => 'work',
                    'type'    => 'checkbox',
                    'label'   => 'Work',
                    'wrapper' => ['class' => 'form-group col-md-2'],
                ],
                [
                    'name'    => 'school',
                    'type'    => 'checkbox',
                    'label'   => 'School',
                    'wrapper' => ['class' => 'form-group col-md-2'],
                ],
                [
                    'name'    => 'other',
                    'type'    => 'checkbox',
                    'label'   => 'other',
                    'wrapper' => ['class' => 'form-group col-md-2'],
                ],
                [
                    'name'    => 'default',
                    'type'    => 'checkbox',
                    'label'   => 'Default?',
                    'wrapper' => ['class' => 'form-group col-md-2'],
                ],

            ],

            // optional
            'new_item_label'  => 'Add More Addresses', 
        ],
    ]);

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
