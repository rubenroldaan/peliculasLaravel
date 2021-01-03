<h1>Formulario modificacion película</h1>

<form action="{{ route('pelicula.update', ['id'=> $pelicula->id]) }}" method="put" enctype="multipart/form-data">
    Título: <input type="text" name="titulo" value="{{ $pelicula->titulo }}"><br>
    Géneros: <input type="text" name="generos" value="{{ $pelicula->generos }}"><br>
    Reparto: <input type="text" name="reparto" value="{{ $pelicula->reparto }}"><br>
    Dirección: <input type="text" name="direccion" value="{{ $pelicula->direccion }}"><br>
    Año: <input type="text" name="anyo" value="{{ $pelicula->anyo }}"><br>
    País: <input type="text" name="pais" value="{{ $pelicula->pais }}"><br>
    Puntuación: <input type="number" name="generos" min="0" max="10" value="{{ $pelicula->puntuacion }}"><br>
    <input type="submit" value="Actualizar">
</form>