<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VisitRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class VisitCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VisitCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Visit::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/visit');
        CRUD::setEntityNameStrings('visit', 'visits');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns

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
        CRUD::setValidation(VisitRequest::class);

//        CRUD::setFromDb(); // fields



        //CRUD::setFromDb(); // fields
//        $this->crud->setHeading('Reference Tests Type', 'create');
        $this->crud->addFields([

        [
            'label'     => 'Visitor Name:',
            'type'      => 'select2',
            'name'      => 'individual_id',
            //'attribute' => 'name',
            //'entity'    => 'individual',
            //'model'     => "App\Models\individual",
            'hint'  => 'who requested it, name to be printed on reports',
            'tab'             => 'Visitor',
        ],
        [
            'name' => 'notes', 
            'label' => 'Visitor Requests and Notes:',
            'type'  => 'textarea',
            'tab'             => 'Visitor',
        ],

	[
     	'label'     => "Tests",
     	'type'      => 'select2_multiple',
     	'name'      => 'tests',
 	'pivot'     => true, 
	'tab'       => 'Requested Tests',
	],

        [
        'label'     => "Test Collections:",
        'type'      => 'select2_multiple',
        'name'      => 'collections',
        'pivot'     => true, 
        'tab'       => 'Requested Tests',
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
