<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contato;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ContatoRequest as StoreRequest;
use App\Http\Requests\ContatoRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class ContatoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ContatoCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Contato');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/contato');
        $this->crud->setEntityNameStrings('contato', 'contatos');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns

        $this->crud->addColumn([
           'name' => 'name',
           'label' => 'Nome',
        ]);
        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'E-mail',
            'type' => 'email'
        ]);
        $this->crud->addColumn([
            'name' => 'phone',
            'label' => 'Telefone',
        ]);
        $this->crud->addColumn([
            'name' => 'lida',
            'label' => 'Lida',
            'type' => 'closure',
            'function' => function($query) {
            if ($query->lida == 0) {
                return "<i class='fa fa-ban' style='color: red'></i>";
            } else {
                return "<i class='fa fa-check-circle-o' style='color: green'></i>";
            }
            }
        ]);

        $this->crud->allowAccess('show');
        $this->crud->denyAccess(['create', 'update']);

        // add asterisk for fields that are required in ContatoRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function show($id)
    {
        $contato = Contato::find($id);
        $contato->update(['lida' => 1]);

        return parent::show($id);
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
