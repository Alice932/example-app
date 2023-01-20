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

Route::get('/', function () {
    return view('home');
});

Route::get('/categories', 'App\Http\Controllers\CategoriesController@index')->name('categories.index');

Route::get('/articles', 'App\Http\Controllers\ArticlesController@index')->name('articles.index');
Route::get('/articles/create', 'App\Http\Controllers\ArticlesController@create');
Route::get('/articles/update', 'App\Http\Controllers\ArticlesController@update');
Route::get('/articles/delete', 'App\Http\Controllers\ArticlesController@delete');
// Route::get('/articles/restore', 'App\Http\Controllers\ArticlesController@restore');
Route::get('/articles/firstOrCreate', 'App\Http\Controllers\ArticlesController@firstOrCreate');
Route::get('/articles/updateOrCreate', 'App\Http\Controllers\ArticlesController@updateOrCreate');

Route::get('/contacts', 'App\Http\Controllers\ContactsController@index')->name('contacts.index');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
