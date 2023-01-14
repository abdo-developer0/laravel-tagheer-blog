<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;



LoginController::routes();

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/subscribe', [FrontController::class, 'subscribe'])->name('subscribe');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');

Route::get('/articles/create',  [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles/store',  [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{id}/show',  [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{id}/edit',  [ArticleController::class, 'edit'])->name('articles.edit');
Route::post('/articles/update',  [ArticleController::class, 'update'])->name('articles.update');
Route::post('/articles/{id}/delete',  [ArticleController::class, 'destroy'])->name('articles.delete');
Route::get('articles/{id}/like', [LikeController::class, 'toggle'])->name('like.toggle');

Route::post('/comment/store',  [CommentController::class, 'store'])->name('comment.store');
Route::post('/comment/{id}/delete',  [CommentController::class, 'destory'])->name('comment.destroy');

