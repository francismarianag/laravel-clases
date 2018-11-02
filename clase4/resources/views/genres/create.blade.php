@extends('app')

@section('content')

<form action="" method="POST">
    @csrf
    <label for="name">Nombre del nuevo genero</label>
    <input type="text" name="name" value="">
    <input type="submit" value"Enviar">
</form>

@endsection