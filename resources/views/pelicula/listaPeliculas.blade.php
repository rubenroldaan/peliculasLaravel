@extends('layouts.master')
@section('title','Chupame el orto')
@section('content')

<table border="1px solid black">
@foreach ($peliculas as $pelicula)
    <tr>
        <td>{{$pelicula->titulo}}</td>
        <td>{{$pelicula->generos}}</td>
        <td>{{$pelicula->reparto}}</td>
    </tr>
@endforeach
</table>

@endsection