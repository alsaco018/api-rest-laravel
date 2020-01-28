<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

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
  
  public function testOrm(){
    
    $posts = Post::all();
    var_dump($posts);
    
    die();
  }
    
}
