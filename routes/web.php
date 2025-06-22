<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', [
        'nama' => 'axyl',
        'sekolah' => 'SMK NEGERI 7 baleendah',
        'umur' => 17
    ]);
});
Route::get('/posts', function () {
    return view('posts');
});
