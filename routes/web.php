<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/detalhes', function () {
    return view('detalhes');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/vendedores', function () {
    return view('vendedores');
});
