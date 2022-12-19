<?php

use App\Http\Livewire\Posts;
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

Route::view('/', 'home');
//
Route::get('post/create', \App\Http\Livewire\PostCreate::class);
Route::get('post/{slug}', \App\Http\Livewire\PostShow::class);
Route::get('posts', \App\Http\Livewire\Posts::class)->name('posts');
