<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CollectRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CollectCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CollectCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Collect::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/collect');
        CRUD::setEntityNameStrings('collect', 'collects');
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
            'name'      => 'id',
            'type'      => 'number',
            'label'     => 'Visit ID',
        ]);
	$this->crud->addColumn([
            'name'      => 'individual',
            'type'      => 'relationship',
            'label'     => 'Owner',
        ]);
       $this->crud->addColumn([
            'name'      => 'created_at',
            'type'      => 'date',
            'label'     => 'Collected At',
        ]);

	$this->crud->filters();

$this->crud->addFilter([
  'name'  => 'individual_id',
  'type'  => 'select2_multiple',
  'label' => 'Owner'
], function() {
    return \App\Models\Individual::all()->pluck('name', 'id')->toArray();
}, function($value) { 
	$this->crud->addClause('where', 'individual_id', $value);
});













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
        CRUD::setValidation(CollectRequest::class);

        //CRUD::setFromDb(); // fields
        $this->crud->addFields([
        [
            'name' => 'individual_id', 
            'label' => 'Visitor Name:',
            'type'  => 'select',
            'hint' => 'if you need to leave a note on the final report',
        ],
        [
            'name' => 'notes', 
            'label' => 'Visitor Requests and Notes:',
            'type'  => 'textarea',

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
