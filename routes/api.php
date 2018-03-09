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

// " /api/.....


Route::get('/vendor', 'VendorController@index');

Route::get('/vendor/{vendor}', 'VendorController@show');

Route::post('/vendor', 'VendorController@store');

Route::put('/vendor/{vendor}', 'VendorController@update');

Route::delete('/vendor/{vendor}', 'VendorController@destroy');