<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebasController extends Controller
{
  public function index(){
    $animales = ['Perro', 'Gato', 'Tigreton'];
    $titulo = 'Animales';
    return view('pruebas.index', array(
      'animales' => $animales,
      'titulo' => $titulo
    ));
  }
    //
}
