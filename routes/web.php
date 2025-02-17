<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/hello', function () {
    return 'Selamat Datang';
});

Route::get('/world', function () {
    return 'World';
});


Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'NIM : 2341760027  ||  Nama : Ahmad Franklyn Bima Aquilla';
});



Route::get('/article/{id}', function ($id) {
    return 'Halaman Artikel dengan' . $id;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticlesController::class, 'articles']);

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Route::get('/greeting', function () {
// 	return view('hello', ['name' => 'Ahmad Franklyn Bima Aquilla']);
// });

// Route::get('/greeting', function () {
// 	return view('blog.hello', ['name' => 'Andi']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);