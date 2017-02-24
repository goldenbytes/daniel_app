<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('portadajg');
});
Route::get('/jugadores/jugadores', function () {
    return view('jugadoresjg');
});
Route::get('/jugadores/niveles', function () {
    return view('nivelesjg');
});
Route::get('/jugadores/nogamne', function () {
    return view('nogame');
});
Route::get('/admin/portada', function () {
    return view('portadaad');
});
Route::get('/admin/new', function () {
    return view('new');
});
Route::get('/admin/players', function () {
    return view('jugadoresad');
});
