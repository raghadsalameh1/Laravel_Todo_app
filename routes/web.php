<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TodosController@index');
Route::get('/details/{todo}', 'TodosController@details');
Route::get('/create', 'TodosController@create');
Route::post('/createPost','TodosController@createPost');
Route::get('/edit/{todo}', 'TodosController@edit');
Route::post('/editPost', 'TodosController@editPost');
Route::get('/delete/{todo}', 'TodosController@delete');
Route::get('/delete/{todo}', 'TodosController@delete');
Route::get('/Completed/{todo}', 'TodosController@Completed');
/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('todos', 'TodosController@index');