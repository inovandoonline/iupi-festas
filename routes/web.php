<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Rotas Públicas do Site */
Route::get('/', 'SiteController@index')->name('inicio');
Route::get('temas', 'SiteController@temasPage')->name('temas');
Route::get('temas/{slug}', 'SiteController@temasViewPage')->name('view-tema');
Route::get('pacotes', 'SiteController@pacotesPage')->name('pacotes');
Route::get('pacotes/{slug}', 'SiteController@pacotesViewPage')->name('view-pacote');
Route::get('fale-conosco', 'SiteController@faleConoscoPage')->name('fale-conosco');
Route::post('realizar-contato', 'SiteController@realizarContato')->name('realizar-contato');


/* Rotas da Newsletter */
Route::post('/assinar-newsletter', 'SiteController@newsletter')->name('newsletter-sign');
Route::post('/cancelar-newsletter', 'SiteController@newsletter')->name('newsletter-signout');


/* Rotas Administrativas */
Route::group(['prefix' => 'admin'], function() {
    Route::get('{id}/addimg', 'Admin\TemaCrudController@addImg')->name('addImg');
    Route::post('{id}/addimg', 'Admin\TemaCrudController@saveFotos')->name('saveFoto');
});
