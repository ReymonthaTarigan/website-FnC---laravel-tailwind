<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/form', function () {
    return view('form');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dataPesanan', function () {
    return view('dataPesanan');
});