<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Batdongsan\BatdongsanController;
use App\Http\Controllers\Admin\Batdongsan\BatdongsanDetailController;
use App\Http\Controllers\Admin\Batdongsan\PendingBatdonsanController;
use App\Http\Controllers\Admin\News\AddNewsController;
use App\Http\Controllers\Admin\News\NewsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LoginWithGoogle;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Manage\EditRealStateController;
use App\Http\Controllers\Manage\ManageController;
use App\Http\Controllers\RealState\PostRealStateController;
use App\Http\Controllers\RealState\RealStateController;
use App\Http\Controllers\RealState\SavedPostController;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Http\Middleware\AdminVerifyMiddleware;
use App\Http\Middleware\AuthenticationMiddleware;
use App\Http\Middleware\VerifyMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::middleware([AuthenticationMiddleware::class])->group(function () {
    Route::get('/login', [LoginController::class, 'show'])->name('auth.login');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.post.login');
    Route::get('/register', [RegisterController::class, 'show'])->name('auth.register');
    Route::post('/register', [RegisterController::class, 'register'])->name('auth.post.register');
    Route::get('login/google', [LoginWithGoogle::class, 'redirectToGoogle']);
    Route::get('auth/google/callback', [LoginWithGoogle::class, 'handleGoogleCallback']);
});

Route::middleware([VerifyMiddleware::class])->group(function () {
    Route::get('/account', function () {
        return view('account.index');
    })->name('account');

    Route::get('/manage', [ManageController::class, 'show'])->name('show-manage');
    Route::get('/manage/edit/{id}', [EditRealStateController::class, 'show'])->name('show-edit-manage');
    Route::post('/manage/edit/{id}', [EditRealStateController::class, 'edit'])->name('post-edit-manage');

    Route::get('/post', [PostRealStateController::class, 'show'])->name('real-state-post');
    Route::post('/post', [PostRealStateController::class, 'create'])->name('create-real-state');


    // tan lam
    Route::get('/saved-posts', [SavedPostController::class, 'show'])->name('saved.posts.index');
    Route::post('/save-post/{postId}', [SavedPostController::class, 'save'])->name('save.post');
    Route::delete('/un-saved-post/{id}', [SavedPostController::class, 'destroy'])->name('delete.saved.post');
});

Route::get('logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::get('/category', [CategoryController::class, 'show'])->name('show-category');

Route::get('/real-state/{id}', [RealStateController::class, 'show']);

Route::middleware([AdminAuthMiddleware::class])->group(function () {
    Route::get('/admin/login', [AdminLoginController::class, 'show'])->name('admin.login');
    Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.post.login');
});

Route::middleware([AdminVerifyMiddleware::class])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::get('/admin/real-state', [BatdongsanController::class, 'show'])->name('admin.real-state');
    Route::get('/admin/real-state/{id}', [BatdongsanDetailController::class, 'show'])->name('detail.real-state');
    Route::delete('/admin/delete/real-state/{id}', [BatdongsanController::class, 'destroy'])->name('delete.real-state');

    Route::post('/admin/real-state/pending/{id}', [BatdongsanDetailController::class, 'accept'])->name('pending.real-state');
    Route::get('/admin/pending/real-state', [PendingBatdonsanController::class, 'show'])->name('show-pending');

    Route::get('/admin/news', [NewsController::class, 'show'])->name('admin.news');
    Route::get('/admin/add-news', [AddNewsController::class, 'show'])->name('admin.add-news');
    Route::post('/admin/add-news', [AddNewsController::class, 'create'])->name('admin.add-news.post');

    Route::get('/admin/logout', [AdminLoginController::class, 'logout']);
});
