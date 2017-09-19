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

// Route::get('/user', function (Request $request) {
//     return '123';
// })->middleware('auth:api');

$s = 'public.';
Route::get('/test',  ['as' => $s . 'test',   'uses' => 'testController@gettest'])->middleware('basicauthapi');