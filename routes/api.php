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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', 'Api\AuthController@register');

Route::post('/login', 'Api\AuthController@login');

Route::middleware('auth:api')->get('/test/{id}', 'Api\AuthController@test');

Route::middleware('auth:api')->post('/insert_roles', 'Api\AuthController@insert_roles');

Route::middleware('auth:api')->post('/logout', 'Api\AuthController@logout');