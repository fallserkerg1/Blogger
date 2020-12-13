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

Route::redirect('/', 'blog');

Auth::routes();

//Blog

//web
Route::get('blog', 'Web\PageController@blog')->name('blog');
Route::get('blog/{slug}','Web\PageController@post')->name('post');
Route::get('category/{slug}','Web\PageController@category')->name('category');
Route::get('tag/{slug}','Web\PageController@tag')->name('tag');
//admin
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');


// Plantilla

/*
//web
Route::get('/inicio','Blog\BlogController@index')->name('index');
Route::get('inicio/{slug}','Blog\BlogController@post')->name('post');
Route::get('category/{slug}','Blog\BlogController@category')->name('category');
Route::get('tag/{slug}','Blog\BlogController@tag')->name('tag');
//admin
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
*/