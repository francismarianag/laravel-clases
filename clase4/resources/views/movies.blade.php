@extends('app')

@section('content')

<ul>
    @foreach($movies as $movie)
        <li>
            <h3>{{$movie->title}}</h3>
            <h5>Rating: {{$movie->rating}}</h5>
            <h5>Premios: {{$movie->award}}</h5>


        </li>
    @endforeach
</ul>

@endsection