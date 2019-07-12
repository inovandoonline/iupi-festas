<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\EventoRequest as StoreRequest;
use App\Http\Requests\EventoRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class EventoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class EventoCrudController extends CrudController
{
    public function setup()
    {


//        'title',
//        'slug',
//        'image',
//        'date',
//        'text',
//        'status'

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Evento');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/evento');
        $this->crud->setEntityNameStrings('evento', 'eventos');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns

        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagem',
            'type' => 'image'
        ]);
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Título'
        ]);
        $this->crud->addColumn([
            'name' => 'date',
            'label' => 'Data do Evento',
            'type' => 'date',
        ]);
        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'enum'
        ]);

        $this->crud->addField([
            'name' => 'title',
            'label' => 'Título'
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => 'Slug',
            'attributes' => [
                'disabled'=>'disabled'
            ]
        ], 'update');
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Imagem',
            'type' => 'browse'
        ]);
        $this->crud->addField([
            'name' => 'date',
            'label' => 'Data do Evento',
            'type' => 'date_picker',
            'date_picker_options' => [
                'language' => 'pt-BR'
            ]
        ]);
        $this->crud->addField([
            'name' => 'text',
            'label' => 'Texto',
            'type' => 'wysiwyg'
        ]);
        $this->crud->addField([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'enum'
        ]);

//        $this->crud->allowAccess('revisions');
//        $this->crud->with('revisionHistory');

        // add asterisk for fields that are required in EventoRequest
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
