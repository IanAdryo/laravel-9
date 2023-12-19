<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Post;

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
Route::view('/about', 'about')->name('about');

// Route::get('/blog', [PostController::class, 'index'])->name('post.index');
// Route::get('/blog/create', [PostController::class, 'create'])->name('post.create');
// Route::post('/blog', [PostController::class, 'store'])->name('post.store');
// Route::get('/blog/{post}', [PostController::class, 'show'])->name('post.show');
// Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
// Route::patch('/blog/{post}', [PostController::class, 'update'])->name('post.update');
// Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('post.destroy');

Route::resource('blog', PostController::class, [
    'names' => 'post',
    'parameters' => ['blog' => 'post'],
]);

Route::view('/login', 'auth.register')->name('login');


Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
