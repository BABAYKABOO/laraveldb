<?php

use Illuminate\Support\Facades\Route;




    Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
    Route::get('shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');
    Route::get('/shop/{id}', [App\Http\Controllers\ProductController::class, 'index'])->name('product');


    Route::middleware("auth")->group(function (){
        Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    });

    Route::middleware("guest")->group(function(){
        Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
        Route::get('/login_process', [App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
        Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
        Route::get('/register_process', [App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

    });



