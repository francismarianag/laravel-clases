@extends('layouts.master')

@section('content')

<h2>Estos son los actores</h2>
<ul>
    @foreach($actors as $actor)
<li><a href="/actors/{{$actor->id}}">{{$actor->getNombreCompleto()}}</a></li> {{-- --}}
    @endforeach
</ul>
<form action="">
    <label for="">Autor:</label>
    <input type="text">
</form>
@endsection