<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PacoteRequest as StoreRequest;
use App\Http\Requests\PacoteRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class PacoteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PacoteCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Pacote');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/pacote');
        $this->crud->setEntityNameStrings('pacote', 'pacotes');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagem',
            'type' => 'image'
        ]);
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Título'
        ]);

        $this->crud->addField([
            'name' => 'title',
            'label' => 'Título'
        ]);
        $this->crud->addField([
            'name' => 'chamada',
            'label' => 'Chamada',
            'type' => 'textarea'
        ]);
        $this->crud->addField([
            'name' => 'text',
            'label' => 'Descrição',
            'type' => 'summernote'
        ]);
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Imagem',
            'type' => 'browse'
        ]);
        $this->crud->addField([
            'name' => 'arquivo',
            'label' => 'Arquivo PDF',
            'type' => 'browse'
        ]);

        // add asterisk for fields that are required in PacoteRequest
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
