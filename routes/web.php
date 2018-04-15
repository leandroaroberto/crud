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

Route::get('/add', 'CrudController@create');
Route::post('/add', 'CrudController@store')->name('add');

Route::get('/{id}', 'CrudController@edit')->name('edit');
Route::post('/update', 'CrudController@update')->name('update');

Route::post('/remover','CrudController@destroy')->name('remover');
