<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$movies es una coleccion
        $movies = Movie::all();
        return view('movies')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genre::all();
        return view('createmovie')->with('generos', $generos);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request);
        $reglas = [
            'titulo' => 'required|max:100|unique:movies,title',
            'genre_id' => 'required|integer',
            'rating' => 'required',
            'awards'=> 'required',
            'length' => 'required',
            'release_date' => 'date|required'
                      
        ];

        $mensajes = [
            'required' => "El campo :attribute es requerido"
        ];

        $this->validate($request, $reglas, $mensajes);

        $movie = new Movie([
            'title' => $request->input('title'),
            'genre_id'=> $request->input('genre_id'),
            'awards'=> $request->input('awards'),
            'rating'=> $request->input('rating'),
            'length' => $request->input('length'),
            'release_date' => $request->input('release_date')

        ]);

        $movie->save();

        return redirect('/movies');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        $generos = Genre::all();
        return view('movies.edit')->with('movie', $movie)->with('generos', $generos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->title = $request->input('title');
        $movie->genre_id = $request->input('genre_id');
        $movie->awards = $request->input('awards');
        $movie->rating = $request->input('rating');
        $movie->length = $request->input('length');
        $movie->release_date = $request->input('release_date');
        $movie->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
