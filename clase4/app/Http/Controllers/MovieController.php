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
        return view('createmovie');        
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
            'genre_id'=> $request->input('genre_id'),


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
        //
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
        //
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
