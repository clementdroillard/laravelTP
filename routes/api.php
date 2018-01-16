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

Route::get('/test', function () {

    return 'hello world';

});

Route::get('/1', function() { return 'Je suis la page 1 !'; });




Route::get('/todo/{id}', function ($id) {
	$array = array("Ce que je vais faire", "peut etre", "demain", "ou pas");
    return $array[$id];
});