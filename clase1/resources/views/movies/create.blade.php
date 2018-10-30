@extends('layout.master')
@section('contenido')

<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Peliculas - Registro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
        
        <div class="headear row">
            <div class="col-lg-3 offset-lg-1 d-flex align-items-center">
                <img src="images/logo.png" alt="logo" class="logo mr-3">
                <a href="index.php"><h3 class="m-0">Peliculas Truchas</h3></a>
            </div>

            <div class="col-lg-1 offset-lg-4 text-center btn-outline-primary py-2 boton-logueo">
                <a href="#" class="nav-link">Loguearse</a>
            </div>
            <div class="col-lg-1 text-center btn-primary py-2 boton-registro">
                <a href="registro.php" class="nav-link">Registrarse</a>
            </div>
        </div> 
        <div class="row mt-5">
            <div class="col-lg-4 offset-lg-4">
                <form action="" method="post" enctype="multipart/formdata">
                    <div class="form-group">
                        <label for="nombrePelicula">Nombre</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="duracionPelicula">Duracion</label>
                        <input type="number" class="form-control" name="length">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="genre_id" id="">
                        <option value="genre_id" selected>Seleccione Genero</option>
                            {{-- 
                                
                             --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="raitingPelicula">Raiting</label>
                        <input type="number" class="form-control" name="rating">
                    </div>
                    <div class="form-group">
                        <label for="awards">Awards</label>
                        <input type="number" class="form-control" name="awards">
                    </div>
                    <div class="form-group">
                        <label for="release-date">Release Date</label>
                        <input type="date" class="form-control" name="release_date">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Pelicula</button>
                </form>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>

@endsection

