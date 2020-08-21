<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SpecimenRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SpecimenCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SpecimenCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Specimen::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/specimen');
        CRUD::setEntityNameStrings('specimen', 'specimens');
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
        CRUD::addColumn(
            [
            'name'      => 'row_number',
            'type'      => 'row_number',
            'label'     => '#',
            'orderable' => false,
            'searchLogic'    => false,
            'visibleInModal' => false,
            ]);
	CRUD::addColumn(
            [
            'name'      => 'code',
            'label'     => 'CODE',
            ]);
        CRUD::addColumn(
            [
            'name'      => 'name',
            'label'     => 'Name',
            'limit'  => 46,
        ]);
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
        CRUD::setValidation(SpecimenRequest::class);

        //CRUD::setFromDb(); // fields

        CRUD::addField(
            [
                'name' => 'name', 
                'label' => 'Specimen Full Name:',
                'type'  => 'text',
                'hint'  => 'Specimen name here, min: 12, max: 255 characters',
            ]);
        CRUD::addField(
            [
                'name' => 'code', 
                'label' => 'Standard Code:',
                'type'  => 'text',
                'hint'  => 'Specimen internationsl or standard code, min: 3, max: 32 characters',

            ]);
        CRUD::addField(
            [
                'name' => 'description', 
                'label' => 'Description / Notes:',
                'type'  => 'textarea',
                'hint'  => 'max: 255 characters, can be left empty if you descripe in the name field',
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
