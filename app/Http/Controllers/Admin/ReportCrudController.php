<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReportRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ReportCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReportCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Report::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/report');
        CRUD::setEntityNameStrings('report', 'reports');
        $this->crud->setShowView('report.show');

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
            'label' => 'Report ID',
            'type' => 'text',
            ]);

            $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Created',
            'type' => 'datetime',
            ]);

            $this->crud->addColumn([
            'name' => 'updated_at',
            'label' => 'Updated',
            'type' => 'datetime',
            ]);


            $this->crud->addColumn([
            'name' => 'request_id',
            'label' => 'Req. ID',
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
        CRUD::setValidation(ReportRequest::class);

        //CRUD::setFromDb(); // fields


        $this->crud->addFields([

        [
            'label'     => 'Request ID:',
            'type'      => 'select2',
            'name'      => 'request_id',
            'attribute' => 'id',
		'model' => 'App\Models\Visitrequest',
            'tab'       => 'Requested Test',
        ],
        [
            'label'     => 'title:',
            'type'      => 'text',
            'name'      => 'title',
            'tab'       => 'Requested Test',
        ],
        [
            'label'     => 'Report Status:',
            'type'      => 'enum',
            'name'      => 'status',
            'tab'       => 'Requested Test',
        ],
        [
            'name' => 'notes', 
            'label' => 'Notes:',
            'type'  => 'textarea',
            //'hint' => 'Doctor, Hospital or Company referenced the visitor. it will be shown on report',
            'tab'   => 'Requested Test',
        ],

        [   // repeatable
            'name'  => 'results',
            'label' => 'Results:',
            'type'  => 'repeatable',
	    'tab'   => 'Results',
            'fields' => [
                [
                    'name'    => 'rid',
                    'type'    => 'text',
                    'label'   => 'Identifier:',
                    'wrapper' => ['class' => 'form-group col-md-2'],
                ],
                [
                    'name'    => 'rvalues',
                    'type'    => 'text',
                    'label'   => 'Values:',
                    'wrapper' => ['class' => 'form-group col-md-6'],
                ],
                [
                    'name'    => 'runits',
                    'type'    => 'text',
                    'label'   => 'Units:',
                    'wrapper' => ['class' => 'form-group col-md-3'],
                ],
                [
                    'name'    => 'rreference',
                    'type'    => 'text',
                    'label'   => 'Reference Label:',
                    'wrapper' => ['class' => 'form-group col-md-12'],
                ],
                [
                    'name'    => 'rinterpretation',
                    'type'    => 'textarea',
                    'label'   => 'Interpretation:',
                    'wrapper' => ['class' => 'form-group col-md-12'],
                ],
            ],

            // optional
            'new_item_label'  => 'Add More Values', 
        ],
        [
            'label'     => 'report:',
            'type'      => 'textarea',
            'name'      => 'report',
            'tab'       => 'Results',
        ],
        [
            'label'     => 'Physician Signature:',
            'type'      => 'select2',
            'name'      => 'user_id',
            'attribute' => 'name',
            'tab'       => 'Results',
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

