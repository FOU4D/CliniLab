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
        ],
         [
            'label'     => 'Gender:',
            'name' => 'gender',
            'type'  => 'enum',
            'wrapper' => ['class' => 'form-group col-sm-6'],
        ],
        [
            'label'     => "Full Name:",
            'type'      => 'text',
            'name'      => 'name',
            'hint'      => 'individual Name will be used for reports and identification',
        ],
        [
            'name' => 'dob', 
            'label' => 'Date of Birth:',
            'type'  => 'date',
        ],
        [
            'name' => 'email', 
            'label' => 'Email Address:',
            'type'  => 'email',
        ],
        [
            'name' => 'bio', 
            'label' => 'Biography:',
            'type'  => 'textarea',
            'hint' => 'for public figures and officials',
        ],
        [
            'name' => 'notes', 
            'label' => 'Lab Notes:',
            'type'  => 'textarea',
            'hint' => 'for internal usage only',
        ],
        [

        'label'     => "Related Institutions:",
        'type'      => 'select2_multiple',
        'name'      => 'memberof',
        'pivot'     => true,
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
