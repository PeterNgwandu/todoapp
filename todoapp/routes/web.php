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

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function (){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/', 'TodoListController@index');

    Route::post('/todo', 'TodoListController@store');

//Route::get('/todo/{id}', 'TodoListController@show');

//Route::get('/todo/{id}', 'TodoListController@showTodo');

    Route::get('/todo/create', 'TodoListController@create');

    Route::get('/todo/edit/{id}', 'TodoListController@edit');

    Route::post('/todo/update/{id}', 'TodoListController@update');

    Route::get('/todo/delete/{id}', 'TodoListController@destroy');

    Route::get('/todo/upload', 'TodoListController@upload');

    Route::post('upload', 'TodoListController@fileUpload');
});
