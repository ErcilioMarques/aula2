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

Route::get('/','EstudanteController@index');
Route::post('/criar_estudante','EstudanteController@store');
Route::get('/editar_estudante/{id}','EstudanteController@edit');
Route::put('/editar_estudante/{id}','EstudanteController@update');
ROute::delete('/apagar_estudante/{id}', 'EstudanteController@destroy');
Route::get('/supervisores','SupervisorController@index');
Route::post('/criar_supervisor','SupervisorController@store');
Route::get('/editar_supervisor/{id}','SupervisorController@edit');
Route::put('/editar_supervisor/{id}','SupervisorController@update');
ROute::delete('/apagar_supervisor/{id}', 'SupervisorController@destroy');
