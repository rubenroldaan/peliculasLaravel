<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function index() {
        $peliculas = Pelicula::all();

        return view('pelicula.listaPeliculas',['peliculas'=>$peliculas]);
    }

    public function show($id) {
        $peliculaDetallada = Pelicula::find($id);

        return view('pelicula.peliculaDetallada',['pelicula'=>$peliculaDetallada]);
    }
}