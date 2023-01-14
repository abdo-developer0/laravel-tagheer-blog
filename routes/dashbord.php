<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashbord','auth'], function() {

    Route::get('/', [DashbordController::class, 'index'])->name('dashbord');
    
        Route::get('/users',  [UserController::class, 'index'])->name('dashbord.users');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/users/{id}/update', [UserController::class, 'update'])->name('users.update');
        Route::post('/users/{id}/delete', [UserController::class, 'delete'])->name('users.delete');
        
        Route::get('/articles',  [ArticleController::class, 'index'])->name('dashbord.articles');
        
            Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');
            Route::get('/settings/update', [SettingsController::class, 'update'])->name('settings.update');
});
