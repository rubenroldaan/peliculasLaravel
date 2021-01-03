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

Route::get('/peliculas','PeliculaController@index')->name('pelicula.index');
Route::get('/peliculas/search','PeliculaController@search')->name('pelicula.search');
Route::get('/peliculas/{id}','PeliculaController@show')->name('pelicula.show');
Route::get('peliculas/{id}/edit/','PeliculaController@edit')->name('pelicula.edit');
Route::put('/peliculas/{id}','PeliculaController@update')->name('pelicula.update');