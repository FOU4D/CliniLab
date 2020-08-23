<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TestRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TestCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TestCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Test::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/test');
        CRUD::setEntityNameStrings('test', 'tests');
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
            'label'     => 'ID',
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
        CRUD::setValidation(TestRequest::class);

        //CRUD::setFromDb(); // fields


        $this->crud->setHeading('Reference Tests Type', 'create');
        $this->crud->addFields([
        [
            'name' => 'name', 
            'label' => 'Test Name:',
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
            'label' => 'Test Description:',
            'type'  => 'textarea',
            'hint' => 'if you need to leave a note on the final report',
        ],
        [
            'name' => 'preparation', 
            'label' => 'Patient Preparation and Notes:',
            'type'  => 'textarea',

        ],
        [
            'name' => 'turnaround_time', 
            'label' => 'Expected Turnaround Units:',
            'type'  => 'number',
	    'wrapper' => ['class' => 'form-group col-sm-6'],
            'hint' => 'Ex: if results expected in 3 days type 3',
        ],
        [
            'name' => 'turnaround_interval',
            'type'  => 'enum',
	    'wrapper' => ['class' => 'form-group col-sm-6'],
            'hint' => 'Ex: if results expected in 3 days, choose days',
        ],
        
        [     // repeatable
            'name'  => 'normal_values',
            'label' => 'Normal values:',
            'type'  => 'repeatable',
            'fields' => [
                [
                    'name'    => 'tidentifier',
                    'type'    => 'text',
                    'label'   => 'Identifier:',
                    'wrapper' => ['class' => 'form-group col-md-4'],
		    'hint'    => 'Age 37 - 48',
                ],
                [
                    'name'    => 'tvalues',
                    'type'    => 'text',
                    'label'   => 'Values:',
                    'wrapper' => ['class' => 'form-group col-md-6'],
		    'hint'    => '400000:50000',
                ],
                [
                    'name'    => 'tunits',
                    'type'    => 'text',
                    'label'   => 'Units:',
                    'wrapper' => ['class' => 'form-group col-md-2'],
		    'hint'    => 'Ui/L',
                ],
                [
                    'name'    => 'tinterpretation',
                    'type'    => 'textarea',
                    'label'   => 'Interpretation and Report:',
                    'wrapper' => ['class' => 'form-group col-md-12'],
                ],
            ],

            // optional
            'new_item_label'  => 'Add More Values', 
        ],
        [
            'label'     => "Specimen Type:",
            'type'      => 'select2',
            'name'      => 'specimen_id',
            'attribute' => 'name',
            'entity'    => 'specimen',
            'model'     => "App\Models\Specimen",
            'hint'  => 'what type of specimen required',
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
        [
        'label'     => "Test Collection:",
        'type'      => 'select2_multiple',
        'name'      => 'collections',
        'model'     => "App\Models\Collection",
        'pivot'     => true,
        'hint'      => 'included in those test collections',
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
