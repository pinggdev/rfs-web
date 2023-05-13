<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/layanan', function () {
    return view('pages.layanan');
});

Route::get('/nft', function () {
    return view('pages.nft');
});

Route::get('/spk', function () {
    return view('pages.spk');
});

Route::get('/kontak', function () {
    return view('pages.kontak');
});

Route::get('/galeri', function () {
    return view('pages.galeri');
});
