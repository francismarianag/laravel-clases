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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('miPrimeraRuta', function(){
    echo "Hola soy laravel";
});

Route::get('resultado/{numero}/{opcional?}', function($numero, $opcional = null){
    if (isset($opcional)) {
        return $numero * $opcional;
    } 
    return $numero % 2 == 0 ? 'Soy par' : 'Soy impar';
    
});

Route::get('movies', 'MoviesController@index')->name('listado_peliculas');
Route::get('movies/create', 'MoviesController@agregarPelicula');
Route::get('movies/{id}', 'MoviesController@show');
Route::get('/movies/search/{title}', 'MoviesController@searchMovieByTitle');


Route::get('home', 'HomeController@home');
Route::get('productos', 'HomeController@productos');

Route::get('movies/create', 'MoviesController@create' );
Route::post('movies/create', 'MoviesController@store');
