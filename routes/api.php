<?php

use Illuminate\Http\Request;

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

Route::get('users', 'Api\\UserController@index');
Route::get('users/{id}', 'Api\\UserController@show');
Route::post('users/store', 'Api\\UserController@store');
Route::post('users/update', 'Api\\UserController@update');
Route::post('users/delete', 'Api\\UserController@destroy');

Route::fallback(function(){
    return response()->json(['message' => 'Route not found', 'status' => 404]);
});