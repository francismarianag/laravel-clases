@extends('layouts.app')

@section('content')

@if(count($errors) > 0)

<ul class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

@endif

<form class="col-6" action="" name="agregarPelicula" method="POST">
    {{ method_field('patch') }}
    {{ csrf_field() }}
        <div class="form-group">
            <label for="titulo">Titulo</label>
        <input class="form-control" class="form-control" type="text" name="title" value="{{ $movie->title }}"/>
        </div>
        <div class="form-control">
            <select name="genre_id" value="{{ $movie->genre_id}}">
                <option value="{{ $movie->genre_id }}" selected>{{ $generos[$movie->genre_id - 1]->name }}</option>
                @foreach($generos as $genero)
                <option value="{{ $genero->id }}">{{ $genero->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input class="form-control" class="form-control" type="text" name="rating" value="{{ $movie->rating }}"/>
        </div>
        <div class="form-group">
            <label for="premios">Premios</label>
            <input class="form-control" class="form-control" type="text" name="awards" value="{{ $movie->awards }}"/>
        </div>
        <div class="form-group">
            <label for="duracion">Duracion</label>
            <input class="form-control" class="form-control" type="text" name="length" value="{{ $movie->length }}"/>
        </div>
        <div class="form-group">
            <label>Fecha de Estreno</label>
            <input class="form-control" type="text" name="release_date" value="{{ $movie->release_date }}">
        </div>
        <input class="form-control" type="submit" value="Agregar Pelicula" name="submit"/>
    </form>

@endsection