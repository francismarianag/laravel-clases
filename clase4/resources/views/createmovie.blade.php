@extends('app')

@section('content')

<form action="" method="POST">
    @if(count($errors)>0)
        <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
        </div>
    @endif
            @csrf
   
    <div>
            <label for="titulo">Titulo</label>
    <input type="text" name="title" value="{{old('title')}}"/>
        </div>
        <div>
                <label for="genre_id">Genero</label>
                <select name="genre_id" id="">
                    @foreach ($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
                    @eendforeach
                </select>
            </div>
        <div>
            <label for="rating">Rating</label>
            <input type="text" name="rating" value="{{old('rating')}}"/>
        </div>
        <div>
            <label for="premios">Premios</label>
            <input type="text" name="awards" value="{{old('awards')}}"/>
        </div>
        <div>
            <label for="duracion">Duracion</label>
            <input type="text" name="length" value="{{old('length')}}"/>
        </div>
        <div>
                <label>Fecha de Estreno</label>
                <input type="date" name="release_date">
                {{-- <select name="dia">
                    <option value="">Dia</option>
                    @for ($i=1; $i < 32; $i++)
                        @if($i == old('dia'))
                            <option value="{{$i}}" selected>{{$i}}</option>
                        @else
                            <option value="{{$i}}">{{$i}}</option>
                        @endif
                    @endfor
                </select>
                <select name="mes">
                    <option value="">Mes</option>
                    @for ($i=1; $i < 13; $i++)
                        @if($i == old('mes'))
                            <option value="{{$i}}" selected>{{$i}}</option>
                        @else
                            <option value="{{$i}}">{{$i}}</option>
                        @endif
                    @endfor
                </select>
                <select name="anio">
                    <option value="">Anio</option>
                    @for ($i=1900; $i < 2017; $i++)
                        @if($i == old('anio'))
                            <option value="{{$i}}" selected>{{$i}}</option>
                        @else
                            <option value="{{$i}}">{{$i}}</option>
                        @endif
                    @endfor
                </select> --}}
            </div>
        <input type="submit" value="Agregar Pelicula" name="submit"/>
</form>

@endsection