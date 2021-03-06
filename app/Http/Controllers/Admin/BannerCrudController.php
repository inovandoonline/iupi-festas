<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\BannerRequest as StoreRequest;
use App\Http\Requests\BannerRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class BannerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class BannerCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Banner');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/banner');
        $this->crud->setEntityNameStrings('banner', 'banners');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
//        $this->crud->setFromDb();


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
            'name' => 'image',
            'label' => 'Imagem',
            'type' => 'browse'
        ]);

        // add asterisk for fields that are required in BannerRequest
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
