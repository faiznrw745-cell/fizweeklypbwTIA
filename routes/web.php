<?php

use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
        'name' => 'Faiz Abdan Nirwana',
        'nim' => '13242520018',
        'prodi' => 'Teknologi Informasi',
        'gambar' => 'images.jpg'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});

Route::get('/berita', [BeritaController::class, 'tampilberita']);

// Routing untuk handling 1 berita tunggal
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);


    
