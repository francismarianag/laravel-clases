@extends('layouts.master')

@section('content')

<h1>Este es el actor</h1>
{{-- {{dd($actor[0]->first_name)}} --}}

{{$actor->getNombreCompleto()}}

<a href="/actors">Volver</a>


@endsection