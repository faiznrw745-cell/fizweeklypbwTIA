<?php

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

Route::get('/berita', function () {
    
    return view('berita', [
        'title' => 'Berita',
        'beritas' => Berita::ambildata(),
    ]);
});

// Routing untuk handling 1 berita tunggal
Route::get('/berita/{slug}', function ($slug) {
    $data_berita = [
        [
            "judul" => "MBG Mas Burhan Gunawan",
            "slug" => "mbg-mas-burhan-gunawan",
            "penulis" => "Burhan",
            "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat porro expedita quo doloribus, magnam voluptatum dicta eligendi, labore a maiores aperiam blanditiis! Incidunt vel, nobis sunt, provident nam voluptatum quam a itaque possimus quod iusto recusandae dignissimos placeat deleniti in quo inventore vero dicta debitis? Non, id fugit earum eius dolorem pariatur? Doloribus accusantium vitae mollitia laborum, culpa repellendus adipisci maiores a dolores quisquam fugiat voluptates nemo illum at commodi? Mollitia vero nam nulla maxime libero atque eos, iusto harum doloribus, debitis magni necessitatibus animi cumque voluptatem praesentium odit minus in minima deserunt, sequi architecto dolorum? Placeat quos architecto consequatur animi molestiae. Amet molestiae voluptates laborum incidunt porro distinctio iure. Soluta velit voluptatum nulla vel, aliquam officia nisi ipsa numquam doloribus fugiat? Optio nostrum ipsam nihil voluptatibus, mollitia id hic doloribus eum tempore nisi laboriosam rerum autem porro, dicta reprehenderit repudiandae perferendis explicabo perspiciatis ut quia! Numquam repudiandae similique nostrum?"
        ],
        [
            "judul" => "Indonesia Juara Asean",
            "slug" => "indonesia-juara-asean",
            "penulis" => "John Doe",
            "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat porro expedita quo doloribus, magnam voluptatum dicta eligendi, labore a maiores aperiam blanditiis! Incidunt vel, nobis sunt, provident nam voluptatum quam a itaque possimus quod iusto recusandae dignissimos placeat deleniti in quo inventore vero dicta debitis? Non, id fugit earum eius dolorem pariatur? Doloribus accusantium vitae mollitia laborum, culpa repellendus adipisci maiores a dolores quisquam fugiat voluptates nemo illum at commodi? Mollitia vero nam nulla maxime libero atque eos, iusto harum doloribus, debitis magni necessitatibus animi cumque voluptatem praesentium odit minus in minima deserunt, sequi architecto dolorum? Placeat quos architecto consequatur animi molestiae. Amet molestiae voluptates laborum incidunt porro distinctio iure. Soluta velit voluptatum nulla vel, aliquam officia nisi ipsa numquam doloribus fugiat? Optio nostrum ipsam nihil voluptatibus, mollitia id hic doloribus eum tempore nisi laboriosam rerum autem porro, dicta reprehenderit repudiandae perferendis explicabo perspiciatis ut quia! Numquam repudiandae similique nostrum?"
        ]
    ];

    $singlenews = [];

    foreach ($data_berita as $berita) {
        if ($berita['slug'] == $slug) {
            $singlenews = $berita;
        }
    }

    return view('beritatunggal', [
        'title' => 'judul berita tunggal',
        'singlenews' => $singlenews
    ]);
});