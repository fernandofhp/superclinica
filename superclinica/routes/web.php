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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

// ROTAS DE PACIENTE
Route::get('/pacientes', 'controle_paciente@index');
Route::get('/pacientes/create', 'controle_paciente@create');
Route::post('/pacientes', 'controle_paciente@store');
Route::get('/paciente/{id}', 'controle_paciente@show');
Route::get('/paciente/{id}/edit', 'controle_paciente@edit');
Route::put('/paciente/{id}/update', 'controle_paciente@update');
Route::get('/paciente/{id}/del', 'controle_paciente@del');
