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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/project/new', 'ProjectsController@create');
Route::post('/project/new', 'ProjectsController@store');
Route::get('/project/{id}', 'ProjectsController@show');
Route::get('/project/{id}/edit', 'ProjectsController@edit');

Route::post('/project/{id}', 'TasksController@store');
Route::get('/experiment', 'ExperimentsController@index');

Route::get('/{id}/complete', 'TasksController@update');