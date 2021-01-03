<div id="container">
    <h2>{{ $pelicula->titulo }}</h2>
    <img src="{{ asset('storage/img/1.png') }}" alt="Imagen de la película {{ $pelicula->titulo }}" style="width: 200px; height:300px"><br><br>

    <p><b>Géneros: </b>{{ $pelicula->generos }}</p>
    <p><b>Reparto: </b>{{ $pelicula->reparto }}</p>
    <p><b>Dirección: </b>{{ $pelicula->direccion }}</p>
    <p><b>Año: </b>{{ $pelicula->anyo }}</p>
    <p><b>País: </b>{{ $pelicula->pais }}</p>
    <p><b>Puntuación: </b>{{ $pelicula->puntuacion }}</p>
</div>

