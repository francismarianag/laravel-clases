@extends('layout.master')
@section('contenido')
@if(isset($movies))
<h5>{{$movies}}</h5>
<a href="{{route('listado_peliculas')}}">Volver</a>
@else
<h2>NOOOOOO hay resultado para esa busqueda</h2>
@endif
@endsection
