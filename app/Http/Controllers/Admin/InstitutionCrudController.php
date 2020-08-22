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
            'name' => 'isActive',
            'label' => 'Availability',
            'type' => 'radio',
            'options'     => [
                    0 => 'Not Available',
                    1 => 'Available'
                ]
            ]);
            $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
            'type' => 'text',
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

        CRUD::setFromDb(); // fields

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
