<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ListsController@index');
Route::resource('lists', 'ListsController');

Route::get('/lists/{id}/items/create', 'ItemsController@create');
Route::post('/lists/{id}/items', 'ItemsController@store');
Route::get('/lists/{list_id}/items/{item_id}', 'ItemsController@show');
Route::get('/lists/{list_id}/items/{item_id}/edit', 'ItemsController@edit');
Route::put('/lists/{list_id}/items/{item_id}', 'ItemsController@update');
