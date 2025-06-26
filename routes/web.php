<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\galerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\userController;
use App\Models\Kategori;

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
Route::get('/cate/{kategori:slug}',[KategoriController::class, 'index']);
Route::get('/kategoris', [KategoriController::class, 'kategoris']);
Route::get('/userpost/{user:email}',[userController::class, 'postbyuser']);