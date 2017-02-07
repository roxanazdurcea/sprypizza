<?php

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
    return view('pages/ltr/index');
});

Route::get('about', function () {
    return view('pages/ltr/about');
});

Route::get('menu', function () {
    return view('pages/ltr/menu');
});

Route::get('specials', function () {
    return view('pages/ltr/specials');
});

Route::get('gallery', function () {
    return view('pages/ltr/gallery');
});

Route::get('blog', function () {
    return view('pages/ltr/blog');
});

Route::get('contact', function () {
    return view('pages/ltr/contact');
});

Route::get('siema', function () {
    return view('pages/ltr/siema');
});







