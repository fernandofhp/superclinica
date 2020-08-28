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

//Auth::routes();
//Route::get('/', 'HomeController@index')->name('home');

// ROTAS DE PACIENTE
Route::get('/pacientes', 'controle_paciente@index');
Route::get('/pacientes/create', 'controle_paciente@create');
Route::post('/pacientes', 'controle_paciente@store');
Route::get('/paciente/{id}', 'controle_paciente@show');
Route::get('/paciente/{id}/edit', 'controle_paciente@edit');
Route::put('/paciente/{id}/update', 'controle_paciente@update');
Route::get('/paciente/{id}/del', 'controle_paciente@del');
// ROTAS DE PACIENTE
Route::get('/medicos', 'controle_medico@index');
Route::get('/medicos/create', 'controle_medico@create');
Route::post('/medicos', 'controle_medico@store');
Route::get('/medicos/{id}', 'controle_medico@show');
Route::get('/medicos/{id}/edit', 'controle_medico@edit');
Route::put('/medicos/{id}/update', 'controle_medico@update');
Route::get('/medicos/{id}/del', 'controle_medico@del');

// ROTA DE TESTE
Route::get('modelo', 'Homecontroller@modelo');

// ROTAS DE USUARIOS
Route::get('/usuarios', 'controle_usuario@index');
Route::get('/', 'controle_usuario@acessar');
// ROTAS DE AGENDA
Route::get('/agenda', 'controle_agenda@index');
Route::get('/vagenda', 'controle_agenda@vagenda');
Route::post('/testagenda', 'controle_agenda@testagenda');
Route::get('/cadagenda', 'controle_agenda@cadagenda');
