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
    return view('welcome');
});

Route::get('home', 'Clase4Controller@index');
Route::get('movies', 'MovieController@index'); //indexa todas las movies
Route::get('genres/create', 'GenreController@create'); //metodo create devuelve el formulario, no crea en si va al metodo del controlador que esta dedicado a mostrar la vista del controlador

//
Route::post('genres/create', 'GenreController@store');

Route::get('movies/create', 'MovieController@create');
Route::post('movies/create', 'MovieController@store');
