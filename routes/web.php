<?php

use Illuminate\Support\Facades\Route;

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
