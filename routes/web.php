<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
$pred = 'App\Http\Controllers';
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

Route::get('/posts', $pred . '\PostController@index')->name('post.index');
Route::get('/posts/create', $pred . '\PostController@create')->name('post.create');

Route::post('/posts',$pred . '\PostController@store')->name('post.store');
Route::get('/posts/{post}', $pred . '\PostController@show')->name('post.show');
Route::get('/posts/{post}/edit', $pred . '\PostController@edit')->name('post.edit');
Route::patch('/posts/{post}', $pred . '\PostController@update')->name('post.update');
Route::delete('/posts/{post}', $pred . '\PostController@destroy')->name('post.delete');

Route::get('/posts/update', $pred . '\PostController@update');
Route::get('/posts/delete', $pred . '\PostController@delete');
Route::get('/posts/first_or_create', $pred . '\PostController@firstOrCreate');

Route::get('/about', $pred . '\AboutController@index')->name('about.index');
Route::get('/contact', $pred . '\ContactController@index')->name('contact.index');
Route::get('/', $pred . '\MainController@index')->name('main.index');
