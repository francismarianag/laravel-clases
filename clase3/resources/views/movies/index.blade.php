@extends('layouts.master')  

@section('content')

<h2>Estas son nuestras peliculas</h2>
<ul>
    @foreach($peliculas as $pelicula)
<li>{{$pelicula->title}}</li> {{-- --}}
    @endforeach
</ul>

@endsection