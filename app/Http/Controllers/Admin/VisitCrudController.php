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

    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;

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
        $this->crud->setShowView('visit.show');

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
]);

$this->crud->addColumn([
'type' => 'relationship',
'name' => 'individual',
'label' => 'Name',
'limit' => 32,
    'searchLogic' => true,

]);

$this->crud->addColumn([
'type' => 'text',
'name' => 'individual_id',
'label' => 'Visitor',
    'searchLogic' => true,

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
        CRUD::setValidation(VisitRequest::class);

        CRUD::setFromDb(); // fields



        //CRUD::setFromDb(); // fields
        //$this->crud->setHeading('Visits & Collections', 'create');
        $this->crud->addFields([

        [
            'label'     => 'Visitor Name:',
            'type'      => 'select2',
            'name'      => 'individual_id',
            //'tab'       => 'Visitor',
        ],
        [
            'name' => 'referenced_by', 
            'label' => 'Referenced by:',
            'type'  => 'text',
	    'hint' => 'Doctor, Hospital or Company referenced the visitor. it will be shown on report',
            //'tab'   => 'Visitor',
        ],
        [
            'name' => 'notes', 
            'label' => 'Visitor Requests and Notes:',
            'type'  => 'textarea',
            //'tab'   => 'Visitor',
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
