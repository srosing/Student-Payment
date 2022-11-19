<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StudentRequest;
use App\Models\Category;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class StudentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class StudentCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Student::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/student');
        CRUD::setEntityNameStrings('student', 'students');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
        $this->crud->addColumn([
            'label' => 'Student ID',
            'name' => 'student_id',
        ]);
        $this->crud->addColumn([
            'label' => 'First Name',
            'name' => 'firstname',

        ]);
        $this->crud->addColumn([
            'label' => 'Last Name',
            'name' => 'lastname',

        ]);
        $this->crud->addColumn([
            'label' => 'Sex',
            'name' => 'sex',

        ]);
        $this->crud->addColumn([
            'label' => 'Faculty',
            'name' => 'faculty',

        ]);
        $this->crud->addColumn([
            'label' => 'year',
            'name' => 'year',
        ]);

        $this->crud->addColumn([
            'label' => 'Semester',
            'name' => 'semester',

        ]);
        $this->crud->addColumn([
            'label' => 'Pay',
            'name' => 'pay',

        ]);
        $this->crud->addColumn([
            'label' => 'Payment',
            'name' => 'payment',

        ]);
        $this->crud->addColumn([
            'label' => 'Date',
            'name' => 'date',

        ]);
        $this->crud->addColumn([
            'label' => 'Note',
            'name' => 'note',

        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(StudentRequest::class);



        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
        $this->crud->addField([
            'label' => 'Student ID',
            'name' => 'student_id',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
        ]);
        $this->crud->addField([
            'label' => 'First Name',
            'name' => 'firstname',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
        ]);
        $this->crud->addField([
            'label' => 'Last Name',
            'name' => 'lastname',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
        ]);
        $this->crud->addField([
            'label' => 'Sex',
            'name' => 'sex',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
            'type'        => 'select2_from_array',
            'options'     => ['Male' => 'Male', 'Female' => 'Female'],
            'allows_null' => false,
            'default'     => 'male',

        ]);
        $this->crud->addField([
            'label' => 'Faculty',
            'name' => 'faculty',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
            'type'        => 'select2_from_array',
            'options'     => ['IT' => 'IT', 'Law' => 'Law','Economic'=>'Economic','Engineering'=>'Engineering','Architecture'=>'Architecture'],
            'allows_null' => false,
            'default'     => 'IT',
        ]);
        $this->crud->addField([
            'label' => 'year',
            'name' => 'year',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
            'type'        => 'select2_from_array',
            'options'     => ['Year1' => 'Year1', 'Year2' => 'Year2','Year3'=>'Year3','Year4'=>'Year4'],
//            'allows_null' => false,
        ]);

        CRUD::addField([   // select2_from_array
            'name'        => 'semester',
            'label'       => "Semester",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
            'type'        => 'select2_from_array',
            'options'     => ['Semester1' => 'Semester1', 'Semester2' => 'Semester2'],
            'allows_null' => false,
//            'default'     => 'semester1',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        $this->crud->addField([
            'label' => 'Pay',
            'name' => 'pay',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
            'type'        => 'select2_from_array',
            'options'     => ['Full' => 'Full Semester', '1 Semester' => '1 Semester'],
            'allows_null' => false,

        ]);
        $this->crud->addField([
            'label' => 'Payment',
            'name' => 'payment',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ]

        ]);
        $this->crud->addField([
            'label' => 'Date',
            'name' => 'date',
            'type'=>'datetime',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ]
        ]);
        $this->crud->addField([
            'label' => 'Note',
            'name' => 'note',
            'type'=>'text',

        ]);
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
