<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/world', function () {
    return 'World';
}); 
Route::get('/', function () {
    return 'Selamat Datang';
});
Route::get('/about', function () {
    return '2341720154  Nurwahib Zakki Yahya';
});
Route::get('/user/{name}', function ($name) {
    return 'nama saya: '.$name;
});
Route::get('/posts/{posts}/comments/{comments}', function ($postId,$commentId) {
    return 'Pos ke-'. $postId. " Komentar ke-: ". $commentId;
});
Route::get('/articles/{id}', function ($articlesId,) {
    return 'Halaman Artikel ke-'. $articlesId;
});

Route::get('/user/{name?}', function ($name= 'John') {
    return 'nama saya: '.$name;
});

