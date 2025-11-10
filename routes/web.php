<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/struktur-rw', function () {
    return view('struktur-rw');
})->name('struktur-rw');

Route::get('/pengurus-rt', function () {
    return view('pengurus-rt');
})->name('pengurus-rt');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/blog-single', function () {
    return view('blog-single');
})->name('blog-single');

