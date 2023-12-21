<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('planning');
});

Route::get('/login-wisata', function () {
    return view('login-wisata');
});

Route::get('/airport', function () {
    return view('airport');
});

Route::get('/pasar', function () {
    return view('pasar');
});

Route::get('/monumen', function () {
    return view('monumen');
});

Route::get('/museum', function () {
    return view('museum');
});

Route::get('/taman', function () {
    return view('taman');
});

Route::get('/transport', function () {
    return view('transport');
});
