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

Route::resource('juegos','juegosController',['only'=>['index','store','show','update']]);
Route::resource('jugadores','jugadoresController',['only'=>['index','store','show','update']]);
Route::get('pronunciacion/{idioma}/{palabra}','API_oxfor@pronunciar');