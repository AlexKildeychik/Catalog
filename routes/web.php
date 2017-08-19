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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/catalog', 'CatalogsController@index');
Route::get('/catalog/create', 'CatalogsController@create');
Route::get('/catalog/{category}/{catalog}', 'CatalogsController@show');
Route::post('catalog', 'CatalogsController@store');
Route::get('catalog/{category}', 'CatalogsController@index');
Route::post('catalog/{category}/{catalog}/comments', 'CommentsController@store');
Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');




