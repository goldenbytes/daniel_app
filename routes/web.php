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
Route::get('/players', function () {
    return view('jugadoresjg');
});
Route::get('/players/levels', function () {
    return view('nivelesjg');
});
Route::get('/players/pronunciation', function () {
    return view('pronunciacion');
});


Route::get('/nogame', function () {
    return view('nogame');
});


Route::get('/admin', function () {
    return view('portadaad');
});
Route::get('/admin/new', function () {
    return view('new');
});
Route::get('/admin/players', function () {
    return view('jugadoresad');
});
