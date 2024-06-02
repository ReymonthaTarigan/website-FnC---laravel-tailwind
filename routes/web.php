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