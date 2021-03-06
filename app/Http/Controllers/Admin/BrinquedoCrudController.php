<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\BrinquedoRequest as StoreRequest;
use App\Http\Requests\BrinquedoRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class BrinquedoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class BrinquedoCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Brinquedo');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/brinquedo');
        $this->crud->setEntityNameStrings('brinquedo', 'brinquedos');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn(['name' => 'image', 'label' => 'Imagem de capa', 'type' => 'image']);
        $this->crud->addColumn(['name' => 'name', 'label' => 'Nome do Brinquedo']);

        $this->crud->addField(['name' => 'name', 'label' => 'Nome do Brinquedo']);
        $this->crud->addField(['name' => 'image', 'label' => 'Imagem de Capa', 'type' => 'browse']);

        // add asterisk for fields that are required in BrinquedoRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
