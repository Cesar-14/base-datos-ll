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

#Ejemplos
Route::get('ntas', function(){
    return 'Aqui estara nuestro listado de notas';
});

Route::get('notas/actualizar', function(){
    return 'Aqui sera la vista para actualizar notas';
});

Route::get('api/notas', function(){
    return [
        'Notas' => [
            'Nombre',
            'Fecha',
            'Autor',
             ]
        ];
});

#Ejercicio tarea
#1
Route::get('JavaScript', function(){
    return 'JavaScript es un lenguaje de programación interpretado';
});
#2
Route::get('Pelicula-favorita', function(){
    return 'La pelicula favorita de César es: Whiplash (2014), dirigida por Damien Chazelle';
});
#3
Route::get('Edad', function(){
    return 'La edad de César es 21 años';
});
#4
Route::get('Spoiler', function(){
    return 'Al final todo era un sueño';
});
#5
Route::get('Nada', function(){
    return 'Aqui no hay nada';
});



#Clase-2 ----------------------------------------------------------------

// Route::get('notas', function() {
//     return view('Estas son mis notas');
// });

// Route::get('notas/crear', function() {
//     return view('Aqui se van a crear las nuevas notas');
// });

// Route::get('notas/{id}/editar', function($id) {
//     return view('Aqui se van a editar las notas: ' .$id);
// });

#Clase-3 ----------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

Route::get('notas', function () {
    $notas = DB::table('notas')->get();

    return view('notas', ['notas' => $notas]);
}) ->name('listar');

Route::get('notas/agregar', function () {
    return view('agregar');
}) ->name('nueva.nota');

Route::get('notas/{id}/editar', function ($id) {
    $notas = DB::table('notas')
    ->where('id', $id)
    ->first();

    return view('editar', ['notas' => $notas]);
    // return 'Aqui se van a editar las notas'.$id;
})->name('notas.edit');