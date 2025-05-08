<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;

/*Регистрация, авторизация, восстановление пароля, выход из аккаунта, профиль*/

Route::get('/register', [RegisterController::class, 'index'])->name('registerForm');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    /*Здесь должны храниться те маршруты, где пользователь должен быть авторизирован, например: профиль, выход из аккаунта, переход к оплате и т.д*/
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
});
