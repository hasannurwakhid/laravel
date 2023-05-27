<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => "about",
        "nama" => "Hasan Nur Wakhid",
        "alamat" => "Mangkang"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

//halaman single post
Route::get('/posts/{slug}', [PostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);