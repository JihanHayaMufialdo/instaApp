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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/home', function () {
    return view('web.home-index');
});

Route::get('/post', function () {
    return view('web.post-create');
});

Route::get('/create', function () {
    return view('web.create-post');
});

Route::get('/comment', function () {
    return view('web.comment-create');
});
