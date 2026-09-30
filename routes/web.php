<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/berita', function () {
    return view('berita', [
        'title' => 'Berita'
    ]);
});