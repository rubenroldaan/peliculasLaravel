<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeliculaController extends Controller
{
    public function index() {
        $peliculas = DB::table('peliculas')->get();

        return view('pelicula.listaPeliculas',['peliculas'=>$peliculas]);
    }
}