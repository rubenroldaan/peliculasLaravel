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

    public function search(Request $r) {
        $peliculas = Pelicula::where('generos','LIKE','%'.$r.'%');

        return view('pelicula.listaPeliculas',['peliculas'=>$peliculas]);
    }

    public function edit($id) {
        $pelicula = Pelicula::find($id);
        return view('pelicula.formModificarPelicula',['pelicula'=>$pelicula]);
    }

    public function update(Request $r) {
        $pelicula = Pelicula::find($r->id);
        $pelicula->titulo = $r->titulo;
        $pelicula->generos = $r->generos;
        $pelicula->reparto = $r->reparto;
        $pelicula->direccion = $r->direccion;
        $pelicula->anyo = $r->anyo;
        $pelicula->pais = $r->pais;
        $pelicula->puntuacion = $r->puntuacion;
        $pelicula->save();
        return redirect()->route('pelicula.index');
    }
}