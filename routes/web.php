<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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
Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login_attempt')->name('login-attempt');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'register_attempt')->name('register-attempt');
});

// Route::resources([
//     '/post'        => PostController::class,
// ]);

// Route::get('/post', 'PostController@index')->name('post.index');


// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/home', function () {
    return view('web.home-index');
})->name('home');

Route::get('/post', function () {
    return view('web.post-index');
})->name('post');

Route::get('/post/create', function () {
    return view('web.post-create');
})->name('post-detail');

Route::get('/comment', function () {
    return view('web.comment-create');
});
