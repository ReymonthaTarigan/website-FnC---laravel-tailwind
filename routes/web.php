<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/token', function () {
    return csrf_token();
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/form',[FormController::class, 'save_data']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dataPesanan', [FormController::class, 'read_data'])->middleware('auth');

