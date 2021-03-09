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
#vue route
Route::get('/', 'Ctlvue@Welcome');

Route::get('/admin', 'Ctlvue@Menuprincipal');

Route::get('/produit', 'Ctlvue@Produit');

Route::get('/fornisseur', 'Ctlvue@Fornisseur');

Route::get('/clients', 'Ctlvue@Clients');


#Crud route
Route::post('/addclient', 'ctlcrud@Addclient');
