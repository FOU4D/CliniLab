<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VisitrequestRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class VisitrequestCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VisitrequestCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Visitrequest::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/visitrequest');
        CRUD::setEntityNameStrings('visit request', 'visit requests');
        $this->crud->setShowView('trequest.show');
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
'type' => 'text',
'name' => 'id',
'label' => 'ID',
    'searchLogic' => true,

]);


$this->crud->addColumn([
'type' => 'text',
'name' => 'visit_id',
'label' => 'Visit ID',
    'searchLogic' => true,

]);


$this->crud->addColumn([
'type' => 'text',
'name' => 'test_id',
'label' => 'Test ID',
]);

$this->crud->addColumn([
'type' => 'datetime',
'name' => 'created_at',
'label' => 'requested at',
]);




$this->crud->enableExportButtons();

$this->crud->enableBulkActions();

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
        CRUD::setValidation(VisitrequestRequest::class);

        //CRUD::setFromDb(); // fields


        $this->crud->addFields([

        [
            'label'     => 'Test Name:',
            'type'      => 'select2',
            'name'      => 'test_id',
            'tab'       => 'Requested Test',
        ],
        [
            'label'     => 'Visit ID:',
            'type'      => 'select2',
            'name'      => 'visit_id',
            'tab'       => 'Requested Test',
        ],
        [
            'name' => 'notes', 
            'label' => 'Notes:',
            'type'  => 'textarea',
            //'hint' => 'Doctor, Hospital or Company referenced the visitor. it will be shown on report',
            'tab'   => 'Requested Test',
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
