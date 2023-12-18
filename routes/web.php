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

Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::get('/blog', [PostController::class, 'index'])->name('post.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('post.create');
Route::post('/blog', [PostController::class, 'store'])->name('post.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/blog/{post}', [PostController::class, 'update'])->name('post.update');
Route::view('/about', 'about')->name('about');

