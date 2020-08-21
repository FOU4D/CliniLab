<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CollectionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CollectionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CollectionCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Collection::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/collection');
        CRUD::setEntityNameStrings('collection', 'collections');
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
            'name'      => 'row_number',
            'type'      => 'row_number',
            'label'     => '#',
            'orderable' => false,
            'searchLogic'    => false,
            'visibleInModal' => false,
        ])->makeFirstColumn();
        $this->crud->addColumn([
            'name'      => 'code',
            'label'     => 'Code',
        ]);
        $this->crud->addColumn([
            'name'      => 'name',
            'label'     => 'Name',
            'limit'  => 46,
        ]);
        $this->crud->addColumn([
            'name' => 'isActive',
            'label' => 'Availability',
            'type' => 'radio',
            'options'     => [
                    0 => 'Not Available',
                    1 => 'Available'
            ]
        ]);
        $this->crud->filters();
        $this->crud->addFilter([ 
                'type'  => 'simple',
                'name'  => 'isActive',
                'label' => 'Availability'
                ],
                false, 
                function() {
                        $this->crud->addClause('where', 'isActive', '1'); 
                } );
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
        CRUD::setValidation(CollectionRequest::class);

        //CRUD::setFromDb(); // fields
       $this->crud->setHeading('Reference Tests Collection', 'create');
        $this->crud->addFields([
        [
            'name' => 'name', 
            'label' => 'Collection Name:',
            'type'  => 'text',
            'hint' => 'be precise as possible',
        ],
        [
            'name' => 'code', 
            'label' => 'Standard Code (Short Name):',
            'type'  => 'text',
            'hint' => 'international or lab codes for fast access', 
        ],
        [
            'name' => 'description', 
            'label' => 'Test Collection Description:',
            'type'  => 'textarea',
            'hint' => 'if you need to leave a note on the final report',
        ],
        [
        'label'     => "Tests included:",
        'type'      => 'select2_multiple',
        'name'      => 'tests',
        'model'     => "App\Models\Test",
        'pivot'     => true,
        'hint'      => 'included in those tests included in this collection',
        ],
        [
            'name' => 'preparation', 
            'label' => 'Patient Preparation and Notes:',
            'type'  => 'textarea',
            'hint' => 'what to be told to the patient before or during sample collection',

        ],
        [
            'name' => 'turnaround_time', 
            'label' => 'Expected Turnaround Units:',
            'type'  => 'number',
            'hint' => 'Ex: if results expected in 3 days type 3',
	    'wrapper' => ['class' => 'form-group col-sm-6'],
        ],
        [
            'name' => 'turnaround_interval',
            'type'  => 'enum',
            'hint' => 'Ex: if results expected in 3 days, choose days',
	    'wrapper' => ['class' => 'form-group col-sm-6'],
        ],
        [
            'name' => 'normal_values',
            'label' => 'Normal Values:',
            'type'  => 'textarea',
            'hint' => 'leave empty if it will depends on values from collected tests',
        ],
        [
            'name' => 'isActive',
            'label' => 'Availability:',
            'type'  => 'radio',
            'options'     => [
                0 => 'Not Avilable',
                1 => 'Available'],
            'default' => '0',
            'inline' => true,
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
