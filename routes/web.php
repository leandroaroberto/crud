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

/*Route::get('/', function () {
    //return view('welcome');
    return view('index');
});*/

Route::get('/','CrudController@index');

//Empresas
Route::get('/empresas','CrudController@listEmpresas')->name('empresas');
Route::get('/empresas/{id}', 'CrudController@getEmpresa')->name('empresa.view');

//uploads
Route::get('/uploads','UploadController@index');
Route::post('/uploads','UploadController@upload')->name('upload.send');

Route::get('/add', 'CrudController@create');
Route::post('/add', 'CrudController@store')->name('add');
Route::post('/update', 'CrudController@update')->name('update');
Route::post('/remover','CrudController@destroy')->name('remover');
Route::get('/{id}', 'CrudController@edit')->name('edit');
