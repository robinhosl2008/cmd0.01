<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'LoginController@login')->name('login');
Route::post('/logar', 'LoginController@logar')->name('logar');
Route::post('/sair', 'LoginController@sair')->name('sair');

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/listar-usuario', 'UsuarioController@listar')->name('lista-usuario');
Route::get('/editar-usuario/{id}', 'UsuarioController@editar')->name('editar-usuario');
Route::get('/cadastrar-usuario', 'UsuarioController@cadastrar')->name('cadastrar-usuario');
Route::get('/deletar-usuario/{id}', 'UsuarioController@deletar')->name('cadastrar-deletar');