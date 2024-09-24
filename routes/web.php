<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\RealState\PostRealStateController;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Http\Middleware\AdminVerifyMiddleware;
use App\Http\Middleware\AuthenticationMiddleware;
use App\Http\Middleware\VerifyMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::middleware([AuthenticationMiddleware::class])->group(function () {
    Route::get('login', [LoginController::class, 'show'])->name('auth.login');
    Route::post('login', [LoginController::class, 'login'])->name('auth.post.login');
    Route::get('register', [RegisterController::class, 'show'])->name('auth.register');
    Route::post('register', [RegisterController::class, 'register'])->name('auth.post.register');
});

Route::middleware([VerifyMiddleware::class])->group((function () {
    Route::get('/account', function () {
        return view('account.index')->name('account');
    });

    Route::get('/manage', function () {
        return view('manage.index')->name('manage');
    });

    Route::get('/post', [PostRealStateController::class, 'show'])->name('real-state-post');
    Route::post('/post', [PostRealStateController::class, 'create'])->name('create-real-state');
}));

Route::get('logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::get('/category', function () {
    return view('category.index');
});

Route::get('/detail', function () {
    return view('batdongsan.index');
});

Route::middleware([AdminAuthMiddleware::class])->group(function (){
    Route::get('/admin/login', [AdminLoginController::class, 'show'])->name('admin.login');
    Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.post.login');
});

Route::middleware([AdminVerifyMiddleware::class])->group(function (){
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::get('/admin/logout', [AdminLoginController::class, 'logout']);
});
