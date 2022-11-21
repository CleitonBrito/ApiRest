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

Route::post('auth/login', 'Api\\AuthController@login');

Route::group(['middleware' => ['apiJwt']], function(){
    Route::post('auth/logout', 'Api\\AuthController@logout');
    Route::get('users', 'Api\\UserController@index');
});

Route::fallback(function(){
    return response()->json(['message' => 'Route not found', 'status' => 404]);
});