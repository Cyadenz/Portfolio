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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/mesProjets', function () {
    return view('MesProjets.index');
});

Route::get('/solitaire', function () {
    return view('MesProjets.TP.solitaire');
});

Route::get('/boutique', function () {
    return view('MesProjets.TP.boutique');
});

Route::get('/annuaire', function () {
    return view('MesProjets.TP.annuaire');
});

Route::get('/parking', function () {
    return view('MesProjets.PPE.parking');
});

