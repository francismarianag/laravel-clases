@extends('layouts.master')

@section('content')

<h1>Este es el actor buscado</h1>

<h3>{{$actor[0]->first_name}}</h3>

<a href="/actors">Volver</a>


@endsection