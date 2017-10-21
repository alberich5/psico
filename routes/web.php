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
    return view('layout');
});

//APIS DE RECURSOS DE CAPACITACION
Route::get('dependencia',['uses'=>'CapacitacionController@dependencia']);
Route::get('institucion',['uses'=>'CapacitacionController@institucion']);
//APIS DE RECURSOS DE Psicologia
Route::get('sucursal',['uses'=>'PsicologiaController@sucursal']);
Route::get('buscarElemento',['uses'=>'PsicologiaController@buscarElementos']);










//RUTAS DE CAPACITACION
Route::get('capacitacion',['uses'=>'CapacitacionController@home']);
Route::get('capacitacion-agenda',['uses'=>'CapacitacionController@agenda']);
//RUtas de Psicologia
Route::get('psicologia',['uses'=>'PsicologiaController@home']);
Route::get('psicologia-captura',['uses'=>'PsicologiaController@captura']);
Route::get('psicologia-lista',['uses'=>'PsicologiaController@lista']);

Route::get('recursos',['uses'=>'RecursosHumanosController@home']);

Route::resource('tasks', 'TaskController', ['except' => 'show', 'create', 'edit']);




