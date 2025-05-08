<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;


Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');




Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

Route::post('/register', [AuthController::class, 'register']);



// Форма входа
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Обработка формы входа
Route::post('/login', [AuthController::class, 'login']);



Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/', function () {
    return view('index');
});
Route::get('catalog', function () {
    return view('catalog');
});
Route::get('category', function () {
    return view('category');
});
Route::get('basket', function () {
    return view('basket');
});
Route::get('register', function () {
    return view('register');
});
Route::get('login', function () {
    return view('login');
});
