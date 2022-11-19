<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProvinceRequest;
use App\Models\Commune;
use App\Models\Customer;
use App\Models\District;
use App\Models\Province;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class ProvinceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProvinceCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Province::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/province');
        CRUD::setEntityNameStrings('province', 'provinces');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'label' => 'Name',
            'name' => 'name',

        ]);
        $this->crud->addColumn([
            'label' => 'Description',
            'name' => 'description',

        ]);
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
        CRUD::setValidation(ProvinceRequest::class);

        $this->crud->addField([
            // 'tab'=>'General',
            'label' => 'Name',
            'name' => 'name',
            //'default' => Sale::getSeqRef(),
            // 'type' => 'enum',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
            ]
        ]);
        $this->crud->addField([
            // 'tab'=>'General',
            'label' => 'Description',
            'name' => 'description',
            //'default' => Sale::getSeqRef(),
            // 'type' => 'enum',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
            ]
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
//    public function selectajax(\Illuminate\Http\Request $request)
//    {
//        $search_term = $request->input('q');
//
//        if ($search_term)
//        {
//            $results = District::where('name', 'LIKE', '%'.$search_term.'%')->paginate(10);
//        }
//        else
//        {
//            $results = District::paginate(10);
//        }
//
//        return $results;
//    }

    public function selectprovinceee(Request $request)
    {
        $search_term = $request->input('q');

        if ($search_term)
        {
            $results = Province::where('name', 'LIKE', '%'.$search_term.'%')->paginate(10);
        }
        else
        {
            $results = Province::paginate(10);
        }

        return $results;
    }

    public function selectdistrict(\Illuminate\Http\Request $request)
    {

        $search_term = $request->input('q');
        $provinces_id =$request->provinces_id;
        //dd($provinces_id);
        if ($search_term)
        {
            $results = District::where('name', 'LIKE', '%'.$search_term.'%')
                ->where('provinces_id',$provinces_id)
                ->paginate(10);
        }

        else
        {
            $results = District::where('provinces_id',$provinces_id)
                ->paginate(10);
        }

        return $results;
    }

    public function selectcommune(\Illuminate\Http\Request $request)
    {

        $search_term = $request->input('q');
        $provinces_id =$request->provinces_id;
        $district_id =$request->district_id;

        if ($search_term)
        {
            $results = Commune::where('name', 'LIKE', '%'.$search_term.'%')
                ->where('district_id',$district_id)
                ->where('provinces_id',$provinces_id)
                ->paginate(10);
        }
        else
        {
            $results = Commune::where('provinces_id',$provinces_id)
                ->where('district_id',$district_id)
                ->paginate(10);
        }

        return $results;
    }



}
