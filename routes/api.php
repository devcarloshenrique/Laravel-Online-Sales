<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'API'], function(){

    Route::get('listar-pais', 'ContriesController@index');
    Route::post('insert-pais', 'ContriesController@store');
    Route::put('update-pais/{id}', 'ContriesController@update');
    Route::delete('delete-pais/{id}', 'ContriesController@destroy');

    Route::get('listar-relations', 'ContriesSubContriesController@index');
    Route::post('insert-relations', 'ContriesSubContriesController@store');
    Route::put('update-relations/{id}', 'ContriesSubContriesController@update');
    Route::delete('delete-relations/{id}', 'ContriesSubContriesController@destroy');


});
