<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return '<h1>Hola mundo</h1>';
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/prueba/{nombre?}', function ($nombre = null) {
  $texto = "<h2>Texto desde una ruta</h2>";
  $texto2 = "Nombre: ".$nombre;
  $texto .= $texto2;
  return view('pruebas', array(
    'texto' => $texto
  ));
});

Route::get('/animales', 'pruebasController@index');
Route::get('/test-orm', 'pruebasController@testOrm');