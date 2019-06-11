<?php


Route::resource('tarefa', 'TarefaController');
Route::resource('usuarios', 'UsuarioController');
Route::resource('tipo', 'TipoTarefaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuario', 'UsuarioController@create')->name('usuario');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/telainicial', function () {
    return view('telainicial');
});

