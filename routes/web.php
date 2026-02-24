<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return 'selamat datang';
});

//praktikum 1
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'Muhammad Zuhdi Yudadharma <br>
        NIM : 244107020017';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/article/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

Route::get('/user/{name?}', function ($name = 'Zuhdi') {
    return 'Nama saya ' . $name;
});

//praktikum 2
Route::get('/Hello', [WelcomeController::class, 'hello']);
Route::get('/welcome', [HomeController::class, 'welcome']);
Route::get('/aboutCTRL', [AboutController::class, 'about']);
Route::get('/articleCTRL/{id}', [ArticleController::class, 'articles']);

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

//praktikum 3
// Route::get('/greeting', function () {
// return view('blog.hello', ['name' => 'zuhdi']);
// });

Route::get('/greeting', [WelcomeController::class,'greeting']);