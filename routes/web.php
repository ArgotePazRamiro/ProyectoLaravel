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
Route::view('/datosPaciente','datosPaciente')->name('datosPaciente');
Route::post('datosPaciente','messageController1@store')->name('messages.store');

Route::get('/historiaClinica','ListaPacienteController@index')->name('listaPacientes.index');
Route::get('/historiaClinica/crear','ListaPacienteController@create')->name('listaPacientes.create');
Route::post('/historiaClinica','ListaPacienteController@store')->name('listaPacientes.store');

Route::get('/historiaClinica/{listaPacientes}','ListaPacienteController@show')->name('listaPacientes.show');




Route::view('/nuevoEmpleado','nuevoEmpleado')->name('nuevoEmpleado');
