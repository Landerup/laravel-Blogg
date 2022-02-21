<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::resource('/posts', PostController::class);
    Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('edit');
});

//  Route::middleware('auth')->prefix('/admin')->group(function() {
//      Route::get('/clients');
//  });
