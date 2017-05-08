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
Route::get('/', 'MachineTypeController@index');
Route::get('/calculations', 'CalculationsController@index');
Route::get('/calculations/{calculation}', 'CalculationsController@show');

Route::get('/machine_types', 'MachineTypeController@index');
Route::get('/machine_types/create', 'MachineTypeController@create');
Route::post('/machine_types', 'MachineTypeController@store');
Route::get('/machine_types/{machine_type}', 'MachineTypeController@show');


Route::get('/our_machines', 'OurMachineController@index');
Route::post('/our_machines/create', 'OurMachineController@create');

