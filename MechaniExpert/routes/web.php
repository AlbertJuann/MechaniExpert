<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VideoCategoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;


// Universe
Route::get('/', [PageController::class, 'index_home'])->name('index');
Route::get('/home', [PageController::class, 'index_home'])->name('home');

// Guest
Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [PageController::class, 'index_login'])->name('login');
    Route::post('/perform-login', [UserController::class, 'login'])->name('perform_login');
    Route::prefix('google')->name('google.')->group( function(){
        Route::get('/auth', [UserController::class, 'loginWithGoogle'])->name('login');
        Route::any('/callback', [UserController::class, 'callbackFromGoogle'])->name('callback');
    });
    Route::get('/forgot-password', [PageController::class, 'index_forgot_password'])->name('forgot_password');
    Route::get('/register', [PageController::class, 'index_register'])->name('register');
    Route::post('/perform_register', [UserController::class, 'register'])->name('perform_register');
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
});

// Admin
Route::group(['middleware' => ['admin']], function() {
    Route::get('/dashboard', [PageController::class, 'index_dashboard'])->name('dashboard');
    Route::get('/user-control', [PageController::class, 'index_user_control'])->name('user_control');
    Route::get('/article-control', [PageController::class, 'index_article_control'])->name('article_control');
    Route::get('/video-control', [PageController::class, 'index_video_control'])->name('video_control');
    Route::get('/video-category-control', [PageController::class, 'index_video_category_control'])->name('video_category_control');
    Route::get('/add-article', [PageController::class, 'index_add_article'])->name('add_article');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/edit-article/{id}', [PageController::class, 'index_edit_article'])->name('edit_article');
    Route::get('/add-video', [PageController::class, 'index_add_video'])->name('add_video');
    Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');
    Route::get('/edit-video/{id}', [PageController::class, 'index_edit_video'])->name('edit_video');
    Route::put('/videos/{id}', [VideoController::class, 'update'])->name('videos.update');
    Route::get('/add-video-category', [PageController::class, 'index_add_video_category'])->name('add_video_category');
    Route::post('/video-categories', [VideoCategoryController::class, 'store'])->name('video_categories.store');
    Route::get('/edit-video-category', [PageController::class, 'index_edit_video_category'])->name('edit_video_category');
    Route::get('/add-user', [PageController::class, 'index_add_user'])->name('add_user');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/edit-user', [PageController::class, 'index_edit_user'])->name('edit_user');
    
    Route::delete('/videos/{id}', [VideoController::class, 'destroy'])->name('videos.destroy');
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::delete('/video-categories/{id}', [VideoCategoryController::class, 'destroy'])->name('video_categories.destroy');
});
