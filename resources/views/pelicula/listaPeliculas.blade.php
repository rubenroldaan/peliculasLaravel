@extends('layouts.master')
@section('content')

<h1>Videoteca creada en Laravel 8</h1>

<br>

<form action="{{ route('pelicula.search') }}" method="get">
    <input type="text" name="search" id="search" placeholder="Búsqueda...">
    <input type="submit" value="Buscar">
</form>

<br><br>

<table class="tablaPeliculas">
@php
    $cont = 0;
@endphp
@foreach ($peliculas as $pelicula)
    @if (is_array($peliculas))
        <p>NO se encontraron datos</p>
    @endif
    @if ($cont%2==0)
        <tr>
    @endif
    <td class="peliculaLista">
        <a href="{{ route('pelicula.show', $pelicula->id) }}"><img src="{{ asset('storage/img/'.$pelicula->cartel.'') }}" alt="Imagen de la película de {{ $pelicula->titulo }}" class="carteles"></a>
        <br>
        {{ $pelicula->titulo }}
        <br>
        {{ $pelicula->anyo }} | <b>{{ $pelicula->puntuacion }}/10</b>
        <br>
        <a href="{{ route('pelicula.edit', ['id'=>$pelicula->id]) }}"><button>Editar</button></a>
    </td>
    @php
    $cont++
@endphp
@endforeach
</table>

@endsection