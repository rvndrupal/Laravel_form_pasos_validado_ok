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


Route::get('/index', 'ProductsController@index')->name('index');

Route::get('/products/step1', 'ProductsController@step1')->name('step1.form');
Route::post('/products/create-step1', 'ProductsController@CreateStep1')->name('crear.step1');

Route::get('/products/create-step2', 'ProductsController@Step2')->name('step2.form');
Route::post('/products/create-step2', 'ProductsController@CreateStep2')->name('crear.step2');

Route::get('/products/create-step3', 'ProductsController@Step3')->name('step3.form');
Route::post('/products/create-step3', 'ProductsController@CreateStep3')->name('crear.step3');

Route::get('/products/create-step4', 'ProductsController@createStep4')->name('previa');
Route::post('/products/store', 'ProductsController@store')->name('crear_general');


//editar
Route::get('/editar/{id}', 'ProductsController@edit1')->name('editar');
