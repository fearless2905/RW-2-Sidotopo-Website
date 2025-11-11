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

Route::get('/blog/pembukaan-kkn-sdgs', function () {
    return view('blog-pembukaan-kkn');
})->name('blog-pembukaan-kkn');



Route::get('/blog/tangkahan-elephant', function () {
    return view('blog-tangkahan');
})->name('blog-tangkahan');

Route::get('/blog/wakatobi-snorkeling', function () {
    return view('blog-wakatobi');
})->name('blog-wakatobi');

Route::get('/blog/posyandu-rw2', function () {
    return view('blog-posyandu');
})->name('blog-posyandu');

Route::get('/blog/senam-bersama', function () {
    return view('blog-senam');
})->name('blog-senam');

Route::get('/blog/bank-sampah', function () {
    return view('blog-bank-sampah');
})->name('blog-bank-sampah');

Route::get('/blog/kebun-asri', function () {
    return view('blog-kebun-asri');
})->name('blog-kebun-asri');

Route::get('/blog/mural-daun-pohon', function () {
    return view('blog-mural');
})->name('blog-mural');

Route::get('/blog/ecobrick-rw2', function () {
    return view('blog-ecobrick');
})->name('blog-ecobrick');

