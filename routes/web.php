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

// Panel del Usuario
Route::get('/', 'Web\PageController@blog')->name('blog');
//Busqueda
Route::get('/busqueda', 'Web\PageController@buscar')->name('buscar');
Route::get('/vista{slug}' , 'Web\PageController@vista');
Route::get('/AcercadeNosotros' , 'Web\PageController@contacto')->name('acerca');
Route::get('/descarga{id}' , 'Web\PageController@descarga');

Auth::routes();

// Panel de Administracion
Route::resource('entradas' , 'Admin\PostController');
Route::get('/home', 'Admin\PostController@index')->name('home')->middleware('auth');
Route::get('/create', 'Admin\PostController@create')->middleware('auth');
Route::get('/show/{id}', 'Admin\PostController@show')->middleware('auth');
Route::get('/edit/{id}', 'Admin\PostController@edit')->middleware('auth');
Route::get('/delete/{id}', 'Admin\PostController@destroy')->middleware('auth');

//Panel de Correo
Route::resource('/enviar' , 'MailController');
Route::get('/correo', 'MailController@index')->name('correo');
Route::get('/ver/{id}', 'MailController@show');
Route::get('/eliminar/{id}', 'MailController@destroy');

//Crear Usuario
Route::resource('usuarios' , 'UserController');
Route::get('/crearusuario', 'UserController@create')->middleware('auth');

