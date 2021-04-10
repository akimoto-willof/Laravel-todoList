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

// Route::get('/', function () {
//     return view('todosController@index');
// });

Route::get('/','todoController@index');

Route::get('/todos/index','todoController@index');
Route::get('/todos/create','todoController@create');
Route::post('/todos/index','todoController@store');
Route::get('/todos/{id}','todoController@show');
Route::get('/todos/{id}/edit','todoController@edit');
Route::put('/todos/{id}','todoController@update');
Route::delete('/todos/{id}','todoController@destroy');
