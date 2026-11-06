<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

//home profile singkat ttg tokoh, apa yg perlu orng tau, apa yg istimewa
//about ttg kita, anggota. Apa yang kita bikin dsni
//blog detail ttg tokoh
// harus tampilkan dgn slot, navbar, header, footer. hrus pke yg slash layout