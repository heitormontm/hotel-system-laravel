<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'home']);



Route::get('/home', [AdminController::class, 'index'])->name('home');