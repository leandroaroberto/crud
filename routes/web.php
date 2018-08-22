<?php

use Crud\Jobs\SendEmailJob;
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

//sendMail

Route::get('/sendmail',function(){
    SendEmailJob::dispatch()
        ->delay(now()->addSeconds(5));
    return "E-mail sent successfuly.";
});
//php artisan queue:work

Route::get('/add', 'CrudController@create');
Route::post('/add', 'CrudController@store')->name('add');
Route::post('/update', 'CrudController@update')->name('update');
Route::post('/remover','CrudController@destroy')->name('remover');
Route::get('/graph','CrudController@graph')->name('graph');



Route::get('/{id}', 'CrudController@edit')->name('edit');
