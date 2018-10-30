@extends('layout.master')
@section('contenido')
<ul>
    @foreach ($movies as $id => $movie)
    <li><a href="/movies/{{$id}}">{{$movie}}</a></li>
    @endforeach
</ul>
@endsection
