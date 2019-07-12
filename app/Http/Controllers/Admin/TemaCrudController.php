<?php

namespace App\Http\Controllers\Admin;

use App\Models\Foto;
use App\Models\Tema;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TemaRequest as StoreRequest;
use App\Http\Requests\TemaRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use File;
use Illuminate\Http\Request;

/**
 * Class TemaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TemaCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Tema');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/tema');
        $this->crud->setEntityNameStrings('tema', 'temas');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->removeColumn('text');

        $this->crud->addButtonFromView('line', 'addFotos', 'add_fotos', 'beginning');

        $this->crud->enableDetailsRow();
        $this->crud->allowAccess('details_row');

        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagem de Capa',
            'type' => 'image'
        ]);
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Título'
        ]);
        $this->crud->addColumn([
            'name' => 'file',
            'label' => 'PDF com Descrição do Tema',
            'type' => 'browse'
        ]);

        $this->crud->addField([
            'name' => 'title',
            'label' => 'Título'
        ]);
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Imagem de Capa',
            'type' => 'browse'
        ]);
        $this->crud->addField([
            'name' => 'file',
            'label' => 'PDF com Descrição do Tema',
            'type' => 'browse'
        ]);
        $this->crud->addField([
            'name' => 'text',
            'label' => 'Texto',
            'type' => 'wysiwyg'
        ]);

        // add asterisk for fields that are required in TemaRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function showDetailsRow($id)
    {
        $all = Tema::all()->find($id)->fotos;
        return view('admin.tema.detailsRow', compact('all'));
    }

    public function addImg($id)
    {
        return view('admin.tema.add', compact('id'));
    }

    public function saveFotos(Request $request, $id)
    {
        $tema = Tema::all()->find($id)->title;
        $dir = "uploads/temas/".$tema.'/';
        $file = $request->file('imagens')->getClientOriginalName();
        $dest = $dir.$file;
        $move = move_uploaded_file($request->file('imagens'), $dest);

        if ($move) {
            Foto::create([
                'tema_id' => $id,
                'imagem' => $dest
            ]);
        } else {
            return response()->json([
                'response' => 'error'
            ], 300);
        }

        return response()->json([
            'response' => 'success'
        ], 200);
    }

    public function store(StoreRequest $request)
    {
        $title = $request->title;
        if (!File::exists(public_path('uploads/temas/').$title)) {
            File::makeDirectory(public_path('uploads/temas/').$title, 0775);
        }

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
