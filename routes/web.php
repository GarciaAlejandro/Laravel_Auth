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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bokeh', function(){

    return view('bokeh');
});

Auth::routes();

Route::resource('/notas', 'NotaController');

Route::get('/home', 'HomeController@index')->name('home');

Route::delete('notas/{id}','NotaController@destroy')->name('notas.eliminar');

Route::put('notas/{id}/edit','NotaController@edit')->name('notas.editar');

Route::put('/editar/{id}', 'NotaController@update' )->name('notas.update');