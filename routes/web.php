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
Route::get('/catalog', 'CatalogsController@index');
Route::get('/catalog/create', 'CatalogsController@create');
Route::get('/catalog/{catalog}', 'CatalogsController@show');
Route::post('/catalog/{catalog}/comments', 'CommentsController@store');
Route::post('/catalog', 'CatalogsController@store');


Route::get('/home', 'HomeController@index')->name('home');
