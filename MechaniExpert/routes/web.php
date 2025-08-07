<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VideoCategoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Admin\QuizAdminController;

Route::post('/videos/{id}/comments', [VideoController::class, 'storeComment'])->name('videos.comments.store');
Route::post('/articles/{id}/comments', [ArticleController::class, 'storeComment'])->name('articles.comments.store');


// Universe
Route::get('/', [PageController::class, 'index_home'])->name('index');
Route::get('/home', [PageController::class, 'index_home'])->name('home');

// GUEST
Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [PageController::class, 'index_login'])->name('login');
    Route::post('/perform-login', [UserController::class, 'login'])->name('perform_login');
    Route::prefix('google')->name('google.')->group( function(){
        Route::get('/auth', [UserController::class, 'loginWithGoogle'])->name('login');
        Route::any('/callback', [UserController::class, 'callbackFromGoogle'])->name('callback');
    });
    Route::get('/forgot-password', [PageController::class, 'index_forgot_password'])->name('forgot_password');
    Route::post('/forgot-password', [UserController::class, 'sendResetLinkEmail'])->name('forgot_password.post');
    Route::get('/register', [PageController::class, 'index_register'])->name('register');
    Route::post('/perform_register', [UserController::class, 'register'])->name('perform_register');
});

// USER
Route::group(['middleware' => ['auth']], function() {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/profile', [PageController::class, 'index_profile'])->name('profile');
    Route::get('/edit-profile', [PageController::class, 'index_edit_profile'])->name('edit_profile');
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile_update');
    Route::get('/edit-password', [PageController::class, 'index_edit_password'])->name('edit_password');
    Route::get('/videos', [PageController::class, 'index_videos'])->name('videos');
    Route::get('/video-list/{id}', [PageController::class, 'index_video_list'])->name('video_list');
    Route::get('/video/{id}', [PageController::class, 'index_video'])->name('video');
    Route::get('/articles', [PageController::class, 'index_articles'])->name('articles');
    Route::get('/article/{slug}', [PageController::class, 'index_article'])->name('article');
    Route::get('/video/{id}/quiz', [QuizController::class, 'show'])->name('quiz.show');
    Route::post('/video/{id}/quiz', [QuizController::class, 'submit'])->name('quiz.submit');
});

Route::get('/password/reset/{token}', [UserController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [UserController::class, 'resetPassword'])->name('password.update');

// ADMIN
Route::group(['middleware' => ['admin']], function() {
    // Index Dashboard
    Route::get('/dashboard', [PageController::class, 'index_dashboard'])->name('dashboard');
    Route::get('/user-control', [PageController::class, 'index_user_control'])->name('user_control');
    Route::get('/article-control', [PageController::class, 'index_article_control'])->name('article_control');
    Route::get('/video-control', [PageController::class, 'index_video_control'])->name('video_control');
    Route::get('/video-category-control', [PageController::class, 'index_video_category_control'])->name('video_category_control');
    
    // Index Add
    Route::get('/add-article', [PageController::class, 'index_add_article'])->name('add_article');
    Route::get('/add-video', [PageController::class, 'index_add_video'])->name('add_video');
    Route::get('/add-video-category', [PageController::class, 'index_add_video_category'])->name('add_video_category');
    Route::get('/add-user', [PageController::class, 'index_add_user'])->name('add_user');
    
    // Index Edit
    Route::get('/edit-article/{id}', [PageController::class, 'index_edit_article'])->name('edit_article');
    Route::get('/edit-video/{id}', [PageController::class, 'index_edit_video'])->name('edit_video');
    Route::get('/video-categories/{id}/edit', [VideoCategoryController::class, 'edit'])->name('edit_video_category');
    Route::get('/edit-user/{id}', [PageController::class, 'index_edit_user'])->name('edit_user');
    
    // Update
    Route::put('/videos/{id}', [VideoController::class, 'update'])->name('videos.update');
    Route::patch('/video-categories/{id}', [VideoCategoryController::class, 'update'])->name('video_category_update');
    Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    
    // Storing Data
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::post('/video-categories/store', [VideoCategoryController::class, 'store'])->name('video_categories.store');
    Route::post('/videos/store', [VideoController::class, 'store'])->name('videos.store');

    // Deleting Data
    Route::delete('/videos/{id}', [VideoController::class, 'destroy'])->name('videos.destroy');
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::delete('/video-categories/{id}', [VideoCategoryController::class, 'destroy'])->name('video_categories.destroy');

    // Quiz Management
    Route::get('/quiz-control', [QuizAdminController::class, 'index'])->name('admin.quiz.index');
    Route::get('/quiz-control/{video}', [QuizAdminController::class, 'show'])->name('admin.quiz.show');
    Route::get('/quiz-control/{video}/create', [QuizAdminController::class, 'create'])->name('admin.quiz.create');
    Route::post('/quiz-control/{video}', [QuizAdminController::class, 'store'])->name('admin.quiz.store');
    Route::get('/quiz-control/quiz/{quiz}/edit', [QuizAdminController::class, 'edit'])->name('admin.quiz.edit');
    Route::put('/quiz-control/quiz/{quiz}', [QuizAdminController::class, 'update'])->name('admin.quiz.update');
    Route::delete('/quiz-control/quiz/{quiz}', [QuizAdminController::class, 'destroy'])->name('admin.quiz.destroy');
});
