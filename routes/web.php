<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home',[
        "title"=> "Home",
    ]);

});

Route::get('/berita', function () {
    return view('Berita', [
        "title"=> "Berita",
    ]);
    
});

Route::get('/contact', function () {
    return view('Contact', [
        "title"=> "Contact",
    ]);

});

Route::get('/profile', function () {
    return view('Profile', [
        "title"=> "Profile",
        "name" => "Ervistia",
        "nim" =>13242520067,
        "prodi" => "Teknologi Informasi",
        "gambar"    => "epii.jpeg",
    ]);
    
});


