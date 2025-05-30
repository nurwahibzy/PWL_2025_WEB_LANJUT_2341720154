<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);


Route::get('/world', function () {
    return 'World';
});
Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/user/{name}', function ($name) {
    return 'nama saya: ' . $name;
});
Route::get('/posts/{posts}/comments/{comments}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});
Route::get('/user/{name?}', function ($name = 'John') {
    return 'nama saya: ' . $name;
});

Route::resource('photos',PhotoController::class)->only([
    'index',
    'show'
]);

Route::resource('photos',PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy',
]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);