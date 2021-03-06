<?php

use Illuminate\Support\Facades\Route;

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

Route::redirect('/', 'inicio');

Auth::routes();

//Blog

/*
//web
Route::get('blog', 'Web\PageController@blog')->name('blog');
Route::get('blog/{slug}','Web\PageController@post')->name('post');
Route::get('category/{slug}','Web\PageController@category')->name('category');
Route::get('tag/{slug}','Web\PageController@tag')->name('tag');
//admin
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
*/

// Plantilla
//navegación
Route::get('/quienes_somos','VistasController@Qsomos')->name('somos');
Route::get('/contactame','VistasController@index')->name('contacto');
Route::get('/dona_algo','VistasController@Dalgo')->name('donacion');

//web
Route::get('/inicio','Blog\BlogController@index')->name('index');
Route::get('inicio/{slug}','Blog\BlogController@post')->name('post');
Route::get('category/{slug}','Blog\BlogController@category')->name('category');
Route::get('tag/{slug}','Blog\BlogController@tag')->name('tag');
//tag
Route::resource('tags', 'Admin\TagController');
Route::post('/crear','Admin\TagController@store')->name('registroII');
Route::patch('/create/{fila}','Admin\TagController@update')->name('actualizar');
//category
Route::resource('categories', 'Admin\CategoryController');
Route::post('/crear','Admin\CategoryController@store')->name('registro');
Route::patch('/crear/{fila}','Admin\CategoryController@update')->name('update');
//post
Route::resource('posts', 'Admin\PostController');
Route::post('/posts','Admin\PostController@store')->name('guardar');
Route::patch('/posts/{posts}','Admin\PostController@update')->name('updatePost');
//usuarios
Route::get('usuarios','UsuariosController@index')->name('usuarios');
Route::get('/usuarios/{usuarios}/editar','UsuariosController@edit')->name('editarUser');
Route::patch('/usuarios/{usuarios}','UsuariosController@update')->name('updateUser');
Route::delete('usuarios/{usuarios}','UsuariosController@destroy')->name('destroy');