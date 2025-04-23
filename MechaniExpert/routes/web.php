<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VideoCategoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;

// Guest
Route::get('/', [PageController::class, 'index_home'])->name('index');
Route::get('/home', [PageController::class, 'index_home'])->name('home');

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [PageController::class, 'index_login'])->name('login');
    Route::post('/perform-login', [UserController::class, 'login'])->name('perform_login'); // Login
    Route::prefix('google')->name('google.')->group( function(){
        Route::get('/auth', [UserController::class, 'loginWithGoogle'])->name('login'); // Login with Google
        Route::any('/callback', [UserController::class, 'callbackFromGoogle'])->name('callback'); // Google Callback
    });
    Route::get('/forgot-password', [PageController::class, 'index_forgot_password'])->name('forgot_password');
    Route::get('/register', [PageController::class, 'index_register'])->name('register');
    Route::post('/perform_register', [UserController::class, 'register'])->name('perform_register'); // Register
});

// User
Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/profile', [PageController::class, 'index_profile'])->name('profile');
    Route::get('/edit-profile', [PageController::class, 'index_edit_profile'])->name('edit_profile');
    Route::get('/edit-password', [PageController::class, 'index_edit_password'])->name('edit_password');
    Route::get('/videos', [PageController::class, 'index_videos'])->name('videos');
    Route::get('/video-list', [PageController::class, 'index_video_list'])->name('video_list');
    Route::get('/video', [PageController::class, 'index_video'])->name('video');
    Route::get('/articles', [PageController::class, 'index_articles'])->name('articles');
    Route::get('/article', [PageController::class, 'index_article'])->name('article');

    Route::post('/add-video', [VideoController::class, 'store'])->name('videos.store');
});

Route::group(['middleware' => ['admin']], function() {
    Route::get('/dashboard', [PageController::class, 'index_dashboard'])->name('dashboard');
    Route::get('/user-control', [PageController::class, 'index_user_control'])->name('user_control');
    Route::get('/article-control', [PageController::class, 'index_article_control'])->name('article_control');
    Route::get('/video-control', [PageController::class, 'index_video_control'])->name('video_control');
    Route::get('/video-category-control', [PageController::class, 'index_video_category_control'])->name('video_category_control');
    Route::get('/add-article', [PageController::class, 'index_add_article'])->name('add_article');
    Route::get('/edit-article', [PageController::class, 'index_edit_article'])->name('edit_article');
    Route::get('/add-video', [PageController::class, 'index_add_video'])->name('add_video');
    Route::get('/edit-video', [PageController::class, 'index_edit_video'])->name('edit_video');
    Route::get('/add-video-category', [PageController::class, 'index_add_video_category'])->name('add_video_category');
    Route::get('/edit-video-category', [PageController::class, 'index_edit_video_category'])->name('edit_video_category');
    Route::get('/add-user', [PageController::class, 'index_add_user'])->name('add_user');
    Route::get('/edit-user', [PageController::class, 'index_edit_user'])->name('edit_user');
});
