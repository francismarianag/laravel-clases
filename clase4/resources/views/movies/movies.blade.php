@extends('layouts.app')

@section('content')

<ul>
@foreach($movies as $movie)
    <li>
        <h2>{{ $movie->title }}</h2>
        <h5>Rating: {{ $movie->rating }}</h5>
        <h5>Premios: {{ $movie->awards }}</h5>
    <a href="/movies/{{ $movie->id }}">Ver mas...</a><br>
        <a href="#">Editar datos de la pelicula</a>
    </li>

@endforeach
</ul>

@endsection