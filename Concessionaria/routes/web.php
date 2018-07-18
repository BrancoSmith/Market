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
Route::get('/', 'HomeController@index');
Route::resource('home', 'HomeController');
Route::resource('vendedor', 'vendedorController');
Route::resource('carro', 'CarroController');
Route::resource('cliente', 'ClienteController');
Route::resource('ano', 'AnoController');
Route::resource('venda', 'VendaController');
