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


Route::any('/', 'IndexController@index');
Route::get('/hotel/lists', 'HotelsController@lists');
Route::get('/hotel/add','HotelsController@add');
Route::post('/hotel/save','HotelsController@save');
Route::delete('/hotel/{id}', 'HotelsController@delete');
Route::get('/hotel/show/{id}', 'HotelsController@show');