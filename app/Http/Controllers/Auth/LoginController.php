<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Route;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public static function routes()
    {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');

        Route::post('/authenticate', [LoginController::class, 'login'])->name('authenticate')->middleware('guest');

        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    }

    protected function redirectTo()
    {
        return '/';
    }
}
