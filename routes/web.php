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

Route::get('/',[App\Http\Controllers\PageController::class, 'posts']);
Route::get('blog/{post}',[App\Http\Controllers\PageController::class, 'post'])->name('post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// El backend es privado y tiene que ir protegido 
Route::resource('/posts',App\Http\Controllers\Backend\PostController::class)
    ->middleware('auth')
    ->except('show'); // El show solo va en la parte pública 


