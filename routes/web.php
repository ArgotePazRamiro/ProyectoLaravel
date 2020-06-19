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



Route::view('/','home') ->name ('home');
Route::view('/about','about') ->name('about');


##Route::get('/ingresoPaciente','ingrePacienteController')->name('ingresoPaciente');



Route::resource('historiaClinica','ListaPacienteController')->names('listaPacientes')->parameters(['historiaClinica'=>'listaPacientes']);
/*
Route::get('/historiaClinica','ListaPacienteController@index')->name('listaPacientes.index');
Route::get('/historiaClinica/crear','ListaPacienteController@create')->name('listaPacientes.create');
Route::get('/historiaClinica/{listaPacientes}/editar','ListaPacienteController@edit')->name('listaPacientes.edit');
Route::patch('/historiaClinica/{listaPacientes}','ListaPacienteController@update')->name('listaPacientes.update');
Route::post('/historiaClinica/crear','ListaPacienteController@update')->name('listaPacientes.update');
Route::post('/historiaClinica','ListaPacienteController@store')->name('listaPacientes.store');
Route::get('/historiaClinica/{listaPacientes}','ListaPacienteController@show')->name('listaPacientes.show');
Route::delete('/historiaClinica/{listaPacientes}','ListaPacienteController@destroy')->name('listaPacientes.destroy');

*/
Route::resource('/listaEmpleados','ListaEmpleadoController')->names('listaEmpleados')->parameters(['nuevoEmpleado'=>'listaPacientes']);


Auth::routes();

