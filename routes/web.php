<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Middleware\AuthenticationMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::middleware([AuthenticationMiddleware::class])->group(function () {
    Route::get('login', [LoginController::class, 'show'])->name('auth.login');
    Route::post('login', [LoginController::class, 'login'])->name('auth.post.login');
    Route::get('register', [RegisterController::class, 'show'])->name('auth.register');
    Route::post('register', [RegisterController::class, 'register'])->name('auth.post.register');
});

Route::get('logout', [LoginController::class, 'logout'])->name('auth.logout');


Route::get('/category', function () {
    return view('category.index');
});

Route::get('/account', function () {
    return view('account.index');
});

Route::get('/post', function () {
    return view('batdongsan.post');
});

Route::get('/detail', function () {
    return view('batdongsan.index');
});
