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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('Menuprincipal');
});

Route::get('/produit', function () {
    return view('produit.index');
});

Route::get('/fornisseur', function () {
    return view('fornisseur.index');
});

Route::get('/clients', function () {
    return view('clients.index');
});