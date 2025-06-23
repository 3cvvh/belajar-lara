<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\galerController;


Route::get('/', function () {
    return view('home',[
        'judul' => 'home | page'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'nama' => 'axyl',
        'sekolah' => 'SMK NEGERI 7 baleendah',
        'umur' => 17,
        'judul' => 'about | page'
    ]);
});
Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'singles']);
Route::get('/galer', [galerController::class, 'index']);