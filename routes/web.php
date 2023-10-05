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
    return view('home');
});

Route::get('/about-us', function () {
    return view('pages/about-us');
});

Route::get('/our-products-categories', function () {
    return view('pages/our-products-categories');
});

Route::get('/our-products/beef', function () {
    return view('pages/our-products-beef');
});

Route::get('/our-products/lamb', function () {
    return view('pages/our-products-lamb');
});

Route::get('/our-products/mutton', function () {
    return view('pages/our-products-mutton');
});

Route::get('/our-products/veal', function () {
    return view('pages/our-products-veal');
});

Route::get('/single-service', function () {
    return view('pages/single-service');
});

Route::get('/sustainability', function () {
    return view('pages/sustainability');
});

Route::get('/contact-us', function () {
    return view('pages/contact-us');
});

Route::get('/premium-quality', function () {
    return view('pages/premium-quality');
});

Route::get('/transparency-trust', function () {
    return view('pages/transparency-trust');
});

Route::get('/carousel', function () {
    return view('components/carousel');
});

