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

Route::get('/posts','Api\PostController@index');

Route::get('/where','Api\PostController@where');

Route::get('/first','Api\PostController@first');

Route::get('/limit/{limit}','Api\PostController@limit');

Route::get('/greater-than','Api\PostController@greaterThan');

Route::get('/post/{id}','Api\PostController@getById');

Route::get('/short/{short}','Api\PostController@short');

Route::get('/sort-param','Api\PostController@sortParam');
