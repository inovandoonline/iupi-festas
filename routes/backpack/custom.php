<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('banner', 'BannerCrudController');
    CRUD::resource('contato', 'ContatoCrudController');
    CRUD::resource('evento', 'EventoCrudController');
    CRUD::resource('newsletter', 'NewsletterCrudController');
    CRUD::resource('pacote', 'PacoteCrudController');
    CRUD::resource('brinquedo', 'BrinquedoCrudController');
    CRUD::resource('tema', 'TemaCrudController');
    CRUD::resource('foto', 'FotoCrudController');
}); // this should be the absolute last line of this file
