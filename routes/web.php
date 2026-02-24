<?php

use Illuminate\Support\Facades\Route;

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
