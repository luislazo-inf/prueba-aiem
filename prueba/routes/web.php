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

Route::get('listaIngresos', 'IngresosController@lista');

Route::get('listaIn', 'IngresosController@listaIngresos');

Route::get('listaEgresos', 'EgresosController@lista');

Route::get('listaEg', 'EgresosController@listaEgresos');

Route::post('/agregarIn', 'IngresosController@agregarIn');

Route::get('agregarIngresos', 'IngresosController@index');

Route::post('/agregarEg', 'EgresosController@agregarEg');

Route::get('agregarEgresos', 'EgresosController@index');